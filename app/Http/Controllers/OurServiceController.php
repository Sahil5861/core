<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurService;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportOurService;
use App\Exports\ExportOurService;


class OurServiceController extends Controller
{
    public function index()
    {
        return view('admin.our_services.index');
    }

    /* Process ajax request */
    public function getOurServiceList(Request $request)
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
       
        $totalRecords = OurService::select('count(*) as allcount')->count();

        $totalRecordswithFilter = OurService::select('count(*) as allcount')
        ->where('our_services.title', 'like', '%' . $searchValue . '%')
        ->orWhere('our_services.description', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = OurService::orderBy($columnName, $columnSortOrder)
            ->where('our_services.title', 'like', '%' . $searchValue . '%')
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('our_services.description', 'like', '%' . $searchValue . '%');
                      
            })

            ->select('our_services.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            if($record->status == 1){
                $status = '<a onchange="updateStatus(\''.url('our-service/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            }else{
                $status = '<a onchange="updateStatus(\''.url('our-service/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            }

            $_image = asset('images/our_services/'.$record->image);

            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "title" => $record->title,
                "description" => $record->description,
                "icon" => $record->icon_class,
                // "icon" => '<i class="'.$record->icon_class.' service-three__list__icon"></i>' ,
               

                "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

                // <a class="btn btn-primary text-light" href="javascript:;" onclick="view_item(\''.$record->id.'\')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>&nbsp;

                "action" =>'<div style="display: flex;">
                 <a class="btn btn-primary text-light" href="javascript:;" onclick="edit_item(\''.$record->id.'\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>&nbsp;

                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'our-services\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
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
        $our_services = OurService::find(base64_decode($id));

        if($our_services){
            $our_services->status = $our_services->status == '1' ? '0' : '1';
            $our_services->save();
            echo json_encode(['status'=>true,'message'=>'Our Service status changed successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Something went wrong!!']);   
        }
    }

    public function destroy(Request $request){
        // $our_services = OurService::where('id',base64_decode($request->id))->first();
        // $our_services->deleted_at = time();

        $our_services = OurService::destroy(base64_decode($request->id));
        if($our_services){
            echo json_encode(['status'=>true,'message'=>'Our Service deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Our Service not deleted successfully']);
        }
    }


    public function saveOurService(Request $request){
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            'technology'=>'required',
            "icon_class" => 'required',
        ]);
        
        if(!empty($request->id)){

            $our_services = OurService::firstwhere('id',$request->id);
            // if ($request->hasFile('image')) {
            //     $path = public_path('images/our_services');
            //     if ( ! file_exists($path) ) {
            //         mkdir($path, 0777, true);
            //     }
            //     $file = $request->file('image');
            //     $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
            //     $this->image = $fileName;
            //     $file->move($path, $fileName);
            //     $image = $this->image;
            // }else{
            //     $image = $our_services->image;
            // }
            // $our_services->image = $image;
            // $our_services->technology = implode(', ', $request->input('technology'));
            $our_services->technology = $request->technology;
            $our_services->title = $request->title;
            $our_services->description = $request->description;
            $our_services->icon_class = $request->icon_class;
            if($our_services->save()){                
                return back()->with('message','Our Service updated successfully');
            }else{
                return back()->with('message','Our Service not updated successfully');
            }
            
        }else{
           
            $our_services = new OurService();
            // if ($request->hasFile('image')) {
            //     $path = public_path('images/our_services');
            //     if ( ! file_exists($path) ) {
            //         mkdir($path, 0777, true);
            //     }
            //     $file = $request->file('image');
            //     $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
            //     $this->image = $fileName;
            //     $file->move($path, $fileName);
            //     $image = $this->image;
            // }else{
            //     $image = $our_services->image;
            // }
            // $our_services->image = $image;


            $our_services->title = $request->title;
            // $our_services->technology = implode(', ', $request->input('technology'));
            $our_services->technology = $request->technology;
            $our_services->description = $request->description;
            $our_services->icon_class = $request->icon_class;
            $our_services->status = 1;
            if($our_services->save()){
                return back()->with('message','Our Service added successfully');
            }else{
                return back()->with('message','Our Service not added successfully');
            }
        }
        
    }


    public function getOurServiceDetails(Request $request){
        $our_servicesDetails = OurService::firstwhere('id',$request->id);
        if($our_servicesDetails){
            print_r(json_encode(array("status"=>true ,"data"=>$our_servicesDetails ,"message"=>"Our Service Details!")));
            exit;
        }else{
            print_r(json_encode(array("status"=>false , "data"=>[],  "message"=>"Something went wrong.")));
            exit;
        }
        
    }



    public function importOurServiceSave(Request $request){
            $imported  = Excel::import(new ImportOurService, $request->file('csv_file')->store('import'));
            if($imported){
                return back()->with('message','Our Service added successfully');
            }else{
                return back()->with('error','Something went wrong.');
            }
    }

    public function exportOurService(Request $request){
        return Excel::download(new ExportOurService, 'our_services.xlsx');
    }


    public function sampleFileDownload()
    {
        $filePath = public_path("csv_sample_files/our_services_csv_sample.csv");
        $headers = ['Content-Type: application/csv'];
        $fileName = 'our_services_csv_sample.csv';
        // $fileName = time().'.csv';
        return response()->download($filePath, $fileName, $headers);
    }


    /*multiple action start*/
    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        OurService::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Service deleted successfully")));
        exit;   
    }

    public function multipleActive(Request $request)
    {   
        $ids_arr = $request->ids;
        OurService::whereIn('id', $ids_arr)
        ->update([
            'status'=> 1
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Service active successfully")));
        exit;   
    }

    public function multipleDeactive(Request $request)
    {
        $ids_arr = $request->ids;
        OurService::whereIn('id', $ids_arr)
        ->update([
            'status'=> 0
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Service de-active successfully")));
        exit;   
    }
    /*multiple action end*/

}
