<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurClient;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportOurClient;
use App\Exports\ExportOurClient;


class OurClientController extends Controller
{
    public function index()
    {
        return view('admin.our_clients.index');
    }

    /* Process ajax request */
    public function getOurClientList(Request $request)
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
        // $inactiveRecords = OurClient::select('count(*) as allcount')->where('status','0')->whereNull('our_clients.deleted_at')->count();
        // $activeRecords = OurClient::select('count(*) as allcount')->where('status','1')->whereNull('our_clients.deleted_at')->count();
        // $deletedRecords = OurClient::select('count(*) as allcount')->whereNotNull('our_clients.deleted_at')->count();

        $totalRecords = OurClient::select('count(*) as allcount')->count();

        $totalRecordswithFilter = OurClient::select('count(*) as allcount')
        ->where('our_clients.name', 'like', '%' . $searchValue . '%')
        ->orWhere('our_clients.description', 'like', '%' . $searchValue . '%')
        ->orWhere('our_clients.designation', 'like', '%' . $searchValue . '%')
        ->orWhere('our_clients.company_name', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = OurClient::orderBy($columnName, $columnSortOrder)
            ->where('our_clients.name', 'like', '%' . $searchValue . '%')
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('our_clients.description', 'like', '%' . $searchValue . '%');
                      
            })

            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('our_clients.designation', 'like', '%' . $searchValue . '%');
                      
            })

            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('our_clients.company_name', 'like', '%' . $searchValue . '%');
                      
            })

            ->select('our_clients.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            if($record->status == 1){
                $status = '<a onchange="updateStatus(\''.url('our-client/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            }else{
                $status = '<a onchange="updateStatus(\''.url('our-client/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            }

            $_image = asset('images/our_clients/'.$record->image);
            $_logo = asset('images/our_clients/logo/'.$record->logo);

            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "name" => $record->name,
                "image" => '<img  src="'.$_image.'" style="height: 100px; width:100px;" />' ,
                "description" => $record->description,
                "designation" => $record->designation,
                "company_name" => $record->company_name,
                "logo" => '<img  src="'.$_logo.'" style="height: 100px; width:100px;" />' ,

                "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

                "action" =>'<div style="display: flex;"><a class="btn btn-primary text-light" href="javascript:;" onclick="view_item(\''.$record->id.'\')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>&nbsp;

                 <a class="btn btn-primary text-light" href="javascript:;" onclick="edit_item(\''.$record->id.'\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>&nbsp;

                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'our-clients\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
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

    public function updateStatus($id){ 
        $our_clients = OurClient::find(base64_decode($id));

        if($our_clients){
            $our_clients->status = $our_clients->status == '1' ? '0' : '1';
            $our_clients->save();
            echo json_encode(['status'=>true,'message'=>'Our Client status changed successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Something went wrong!!']);   
        }
    }

    public function destroy(Request $request){
        // $our_clients = OurClient::where('id',base64_decode($request->id))->first();
        // $our_clients->deleted_at = time();

        $our_clients = OurClient::destroy(base64_decode($request->id));
        if($our_clients){
            echo json_encode(['status'=>true,'message'=>'Our Client deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Our Client not deleted successfully']);
        }
    }


    public function saveOurClient(Request $request){
        $request->validate([
            "name" => 'required',
            "designation" => 'required',
            "company_name" => 'required',
            "description" => 'required',
        ]);
        
        if(!empty($request->id)){

            $our_clients = OurClient::firstwhere('id',$request->id);
            if ($request->hasFile('image')) {
                $path = public_path('images/our_clients');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $our_clients->image;
            }

            if ($request->hasFile('company_logo')) {
                $path = public_path('images/our_clients/logo');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('company_logo');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $company_logo = $this->image;
            }else{
                $company_logo = $our_clients->logo;
            }

            $our_clients->name = $request->name;
            $our_clients->designation = $request->designation;
            $our_clients->company_name = $request->company_name;
            $our_clients->description = $request->description;
            $our_clients->image = $image;
            $our_clients->logo = $company_logo;
            if($our_clients->save()){                
                return back()->with('message','Our Client updated successfully');
            }else{
                return back()->with('message','Our Client not updated successfully');
            }
            
        }else{
           
            $our_clients = new OurClient();
            if ($request->hasFile('image')) {
                $path = public_path('images/our_clients');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = '';
            }

            if ($request->hasFile('company_logo')) {
                $path = public_path('images/our_clients/logo');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('company_logo');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $company_logo = $this->image;
            }else{
                $company_logo = '';
            }

            $our_clients->name = $request->name;
            $our_clients->designation = $request->designation;
            $our_clients->company_name = $request->company_name;
            $our_clients->description = $request->description;
            $our_clients->image = $image;
            $our_clients->logo = $company_logo;
            $our_clients->status = 1;
            if($our_clients->save()){
                return back()->with('message','Our Client added successfully');
            }else{
                return back()->with('message','Our Client not added successfully');
            }
        }
        
    }


    public function getOurClientDetails(Request $request){
        $our_clientsDetails = OurClient::firstwhere('id',$request->id);
        if($our_clientsDetails){
            print_r(json_encode(array("status"=>true ,"data"=>$our_clientsDetails ,"message"=>"Our Client Details!")));
            exit;
        }else{
            print_r(json_encode(array("status"=>false , "data"=>[],  "message"=>"Something went wrong.")));
            exit;
        }
        
    }



    public function importOurClientSave(Request $request){
            $imported  = Excel::import(new ImportOurClient, $request->file('csv_file')->store('import'));
            if($imported){
                return back()->with('message','OurClient added successfully');
            }else{
                return back()->with('error','Something went wrong.');
            }
    }

    public function exportOurClient(Request $request){
        return Excel::download(new ExportOurClient, 'our_clients.xlsx');
    }


    public function sampleFileDownload()
    {
        $filePath = public_path("csv_sample_files/our_clients_csv_sample.csv");
        $headers = ['Content-Type: application/csv'];
        $fileName = 'our_clients_csv_sample.csv';
        // $fileName = time().'.csv';
        return response()->download($filePath, $fileName, $headers);
    }


    /*multiple action start*/
    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        OurClient::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Client deleted successfully")));
        exit;   
    }

    public function multipleActive(Request $request)
    {   
        $ids_arr = $request->ids;
        OurClient::whereIn('id', $ids_arr)
        ->update([
            'status'=> 1
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Client active successfully")));
        exit;   
    }

    public function multipleDeactive(Request $request)
    {
        $ids_arr = $request->ids;
        OurClient::whereIn('id', $ids_arr)
        ->update([
            'status'=> 0
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Client de-active successfully")));
        exit;   
    }
    /*multiple action end*/

}
