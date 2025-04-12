<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact_Us;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    /*frontend start*/
    // public function index(){
    //     return view('contact_us');
    // }


    public function saveForm(Request $request){
        $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]
        );

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;                                                
            if($contact->save()){
                $details = ['name' =>$request->name,'email' =>$request->email, 'subject' => $request->subject, 'message' => $request->message];
                // $sent = Mail::to('contact@coretechinfo.com')->send(new Contact_Us($details));
                $sent = false;                
                return redirect('/contact-us')->with('success', 'Your inquiry submitted successfully!');                
            }else{
                return redirect('/contact-us')->with('error', 'Your inquiry submission failed!');
            }            
        }
    }

    /*saveNewsLetterForm*/
    public function saveNewsLetterForm(Request $request){ //die('hi');
        //return $request->all(); die;
        if (isset($request->news_email) && !empty($request->news_email)){

            $news_letters_id = DB::table('news_letters')
            ->insertGetId([
                'email' => $request->news_email,
                'status' => 1,
                // 'created_at' => date('Y-m-d H:i:s'),
                // 'updated_at' => date('Y-m-d H:i:s'),
            ]);

            if($news_letters_id){
                echo json_encode(['status'=>true,'message'=>'Your email registered successfully!']);
                exit;
            }else{
                echo json_encode(['status'=>false,'message'=>'Your email not registered!']);
                exit;
            }
        }else{
            echo json_encode(['status'=>false,'message'=>'Email is required field']);
            exit;
        }
    }
    /*frontend end*/

    /*backend start*/
    //inquriy
    public function inquiryList(){
        return view('admin.inquiry.index');
    }

    /* Process ajax request */
    public function getInquiryList(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // total number of rows per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = Contact::select('count(*) as allcount')->count();

        $totalRecordswithFilter = Contact::select('count(*) as allcount')
        ->where('contacts.name', 'like', '%' . $searchValue . '%')
        ->orWhere('contacts.email', 'like', '%' . $searchValue . '%')
        ->orWhere('contacts.subject', 'like', '%' . $searchValue . '%')
        ->orWhere('contacts.message', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = Contact::orderBy($columnName, $columnSortOrder)
            ->where('contacts.name', 'like', '%' . $searchValue . '%')
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('contacts.email', 'like', '%' . $searchValue . '%');
                      
            })

            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('contacts.subject', 'like', '%' . $searchValue . '%');
                      
            })

            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('contacts.message', 'like', '%' . $searchValue . '%');
                      
            })

            ->select('contacts.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            if($record->status == 1){
                $status = '<a onchange="updateStatus(\''.url('contacts/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            }else{
                $status = '<a onchange="updateStatus(\''.url('contacts/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            }


            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "name" => $record->name,
                "email" => $record->email,
                "subject" => $record->subject,
                "message" => $record->message,
                
                // "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

            
                "action" =>'<div style="display: flex;">
                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'inquiry\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
            );


            
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr,
            "totalRecords" => number_format($totalRecords),
            // "activeRecords" => number_format($activeRecords),
            // "inactiveRecords" => number_format($inactiveRecords),
            // "deletedRecords" => number_format($deletedRecords),
        );

        echo json_encode($response);
    }

    public function destroy(Request $request){
        $inquiry = Contact::destroy(base64_decode($request->id));
        if($inquiry){
            echo json_encode(['status'=>true,'message'=>'Inquiry deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Inquiry not deleted successfully']);
        }
    }

    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        Contact::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Inquiry deleted successfully")));
        exit;   
    }


    /*newsletter start*/
    public function newsletters(){
        return view('admin.inquiry.newsletter');
    }

    /* Process ajax request */
    public function getNewslettersList(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // total number of rows per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = DB::table('news_letters')->select('count(*) as allcount')->count();

        $totalRecordswithFilter = DB::table('news_letters')->select('count(*) as allcount')
        ->where('news_letters.email', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = DB::table('news_letters')->orderBy($columnName, $columnSortOrder)
            ->where('news_letters.email', 'like', '%' . $searchValue . '%')
            ->select('news_letters.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            // if($record->status == 1){
            //     $status = '<a onchange="updateStatus(\''.url('contacts/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            // }else{
            //     $status = '<a onchange="updateStatus(\''.url('contacts/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            // }


            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "email" => $record->email,
                // "name" => $record->name,
                // "subject" => $record->subject,
                // "message" => $record->message,
                
                // "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

            
                "action" =>'<div style="display: flex;">
                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'newsletter\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
            );


            
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr,
            "totalRecords" => number_format($totalRecords),
            // "activeRecords" => number_format($activeRecords),
            // "inactiveRecords" => number_format($inactiveRecords),
            // "deletedRecords" => number_format($deletedRecords),
        );

        echo json_encode($response);
    }

    public function destroy_news_letters(Request $request){
        // $inquiry = DB::table('news_letters')->destroy(base64_decode($request->id));
        $news_letters_del = DB::table('news_letters')
                            ->where('id', base64_decode($request->id))
                            ->delete();

        if($news_letters_del){
            echo json_encode(['status'=>true,'message'=>'News letters deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'News letters not deleted successfully']);
        }
    }

    public function multipleDel_news_letters(Request $request)
    {
        $ids_arr = $request->ids;
        DB::table('news_letters')->whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"News letters deleted successfully")));
        exit;   
    }
    /*newsletter end*/


}
