<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
class TechnologyController extends Controller
{
    //
    public function index(){
        return view('admin/technology.index');
    }
    public function getTechnologyList(Request $request)
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
        $totalRecords = Technology::select('count(*) as allcount')->count();

        $totalRecordswithFilter = Technology::select('count(*) as allcount')
        ->where('technologys.name', 'like', '%' . $searchValue . '%')
         ->count();

        // Get records, also we have included search filter as well
        $records = Technology::orderBy($columnName, $columnSortOrder)
            ->where('technologys.name', 'like', '%' . $searchValue . '%') 
            ->select('technologys.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            // if($record->status == 1){
            //     $status = '<a onchange="updateStatus(\''.url('project/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            // }else{
            //     $status = '<a onchange="updateStatus(\''.url('project/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            // }

            $_image = asset('images/project/'.$record->image);

            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,
                "name" => $record->name,
                "image" => '<img  src="'.$_image.'" style="height: 100px; width:100px;" />' ,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),
                // <a class="btn btn-primary text-light" href="javascript:;" onclick="view_item(\''.$record->id.'\')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>&nbsp;
                "action" =>'<div style="display: flex;">
                 <a class="btn btn-primary text-light" href="javascript:;" onclick="edit_item(\''.$record->id.'\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>&nbsp;
                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'technology\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
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
    public function saveTechnology(Request $request){
        $request->validate([
            "name" => 'required',
        ]);
        
        if(!empty($request->id)){

            $technology = Technology::firstwhere('id',$request->id);
            if ($request->hasFile('image')) {
                $path = public_path('images/project');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $technology->image;
            }

            $technology->name = $request->name;
            $technology->image = $image;

            if($technology->save()){                
                return back()->with('message','Technology updated successfully');
            }else{
                return back()->with('message','Technology not updated successfully');
            }
            
        }else{
           
            $technology = new Technology();
            if ($request->hasFile('image')) {
                $path = public_path('images/project');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $technology->image;
            }
            $technology->name = $request->name;
            $technology->image = $image;
   
            if($technology->save()){
                return back()->with('message','Technology added successfully');
            }else{
                return back()->with('message','Technology not added successfully');
            }
        }
        
    }

    public function getTechnologyDetails(Request $request){
        $technologyDetails = Technology::firstwhere('id',$request->id);
        if($technologyDetails){
            // $technologyDetails->technology = explode(',', $projectDetails->technology);
            // $technologyDetails->app_type = explode(',', $projectDetails->app_type);
            print_r(json_encode(array("status"=>true ,"data"=>$technologyDetails ,"message"=>"Technology Details!")));
            exit;
        }else{
            print_r(json_encode(array("status"=>false , "data"=>[],  "message"=>"Something went wrong.")));
            exit;
        }
        
    }
    public function destroy(Request $request){
        // $project = Project::where('id',base64_decode($request->id))->first();
        // $project->deleted_at = time();

        $technology = Technology::destroy(base64_decode($request->id));
        if($technology){
            echo json_encode(['status'=>true,'message'=>'Technology deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Technology not deleted successfully']);
        }
    }
    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        Technology::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Technology deleted successfully")));
        exit;   
    }

}
