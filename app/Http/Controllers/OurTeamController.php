<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurTeam;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportOurTeam;
use App\Exports\ExportOurTeam;


class OurTeamController extends Controller
{
    public function index()
    {
        return view('admin.our_teams.index');
    }

    /* Process ajax request */
    public function getOurTeamList(Request $request)
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
        // $inactiveRecords = OurTeam::select('count(*) as allcount')->where('status','0')->whereNull('our_teams.deleted_at')->count();
        // $activeRecords = OurTeam::select('count(*) as allcount')->where('status','1')->whereNull('our_teams.deleted_at')->count();
        // $deletedRecords = OurTeam::select('count(*) as allcount')->whereNotNull('our_teams.deleted_at')->count();

        $totalRecords = OurTeam::select('count(*) as allcount')->count();

        $totalRecordswithFilter = OurTeam::select('count(*) as allcount')
        ->where('our_teams.name', 'like', '%' . $searchValue . '%')
        ->orWhere('our_teams.designation', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = OurTeam::orderBy($columnName, $columnSortOrder)
            ->where('our_teams.name', 'like', '%' . $searchValue . '%')
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('our_teams.designation', 'like', '%' . $searchValue . '%');
                      
            })

            ->select('our_teams.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            if($record->status == 1){
                $status = '<a onchange="updateStatus(\''.url('our-team/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            }else{
                $status = '<a onchange="updateStatus(\''.url('our-team/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            }

            $_image = asset('images/our_teams/'.$record->image);

            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "name" => $record->name,
                "designation" => $record->designation,
                "image" => '<img  src="'.$_image.'" style="height: 100px; width:100px;" />' ,
               

                "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

                "action" =>'<div style="display: flex;"><a class="btn btn-primary text-light" href="javascript:;" onclick="view_item(\''.$record->id.'\')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>&nbsp;

                 <a class="btn btn-primary text-light" href="javascript:;" onclick="edit_item(\''.$record->id.'\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>&nbsp;

                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'our-teams\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
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
        $our_teams = OurTeam::find(base64_decode($id));

        if($our_teams){
            $our_teams->status = $our_teams->status == '1' ? '0' : '1';
            $our_teams->save();
            echo json_encode(['status'=>true,'message'=>'Our Team status changed successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Something went wrong!!']);   
        }
    }

    public function destroy(Request $request){
        // $our_teams = OurTeam::where('id',base64_decode($request->id))->first();
        // $our_teams->deleted_at = time();

        $our_teams = OurTeam::destroy(base64_decode($request->id));
        if($our_teams){
            echo json_encode(['status'=>true,'message'=>'Our Team deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Our Team not deleted successfully']);
        }
    }


    public function saveOurTeam(Request $request){
        $request->validate([
            "name" => 'required',
            "designation" => 'required',
        ]);
        
        if(!empty($request->id)){

            $our_teams = OurTeam::firstwhere('id',$request->id);
            if ($request->hasFile('image')) {
                $path = public_path('images/our_teams');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $our_teams->image;
            }

            $our_teams->name = $request->name;
            $our_teams->designation = $request->designation;
            $our_teams->image = $image;
            if($our_teams->save()){                
                return back()->with('message','Our Team updated successfully');
            }else{
                return back()->with('message','Our Team not updated successfully');
            }
            
        }else{
           
            $our_teams = new OurTeam();
            if ($request->hasFile('image')) {
                $path = public_path('images/our_teams');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $our_teams->image;
            }

            $our_teams->name = $request->name;
            $our_teams->designation = $request->designation;
            $our_teams->image = $image;
            $our_teams->status = 1;
            if($our_teams->save()){
                return back()->with('message','Our Team added successfully');
            }else{
                return back()->with('message','Our Team not added successfully');
            }
        }
        
    }


    public function getOurTeamDetails(Request $request){
        $our_teamsDetails = OurTeam::firstwhere('id',$request->id);
        if($our_teamsDetails){
            print_r(json_encode(array("status"=>true ,"data"=>$our_teamsDetails ,"message"=>"Our Team Details!")));
            exit;
        }else{
            print_r(json_encode(array("status"=>false , "data"=>[],  "message"=>"Something went wrong.")));
            exit;
        }
        
    }



    public function importOurTeamSave(Request $request){
            $imported  = Excel::import(new ImportOurTeam, $request->file('csv_file')->store('import'));
            if($imported){
                return back()->with('message','OurTeam added successfully');
            }else{
                return back()->with('error','Something went wrong.');
            }
    }

    public function exportOurTeam(Request $request){
        return Excel::download(new ExportOurTeam, 'our_teams.xlsx');
    }


    public function sampleFileDownload()
    {
        $filePath = public_path("csv_sample_files/our_teams_csv_sample.csv");
        $headers = ['Content-Type: application/csv'];
        $fileName = 'our_teams_csv_sample.csv';
        // $fileName = time().'.csv';
        return response()->download($filePath, $fileName, $headers);
    }


    /*multiple action start*/
    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        OurTeam::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Team deleted successfully")));
        exit;   
    }

    public function multipleActive(Request $request)
    {   
        $ids_arr = $request->ids;
        OurTeam::whereIn('id', $ids_arr)
        ->update([
            'status'=> 1
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Team active successfully")));
        exit;   
    }

    public function multipleDeactive(Request $request)
    {
        $ids_arr = $request->ids;
        OurTeam::whereIn('id', $ids_arr)
        ->update([
            'status'=> 0
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Our Team de-active successfully")));
        exit;   
    }
    /*multiple action end*/

}
