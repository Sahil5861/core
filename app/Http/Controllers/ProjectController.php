<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\OurService;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportProject;
use App\Exports\ExportProject;
use App\Models\ProjectTechnology;
use App\Models\Technology;



class ProjectController extends Controller
{
    public function index()
    {
        $this->data['services'] = OurService::where('status',1)->get();
        return view('admin.project.index',$this->data);
    }

    /* Process ajax request */
    public function getProjectList(Request $request)
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
        $totalRecords = Project::select('count(*) as allcount')->count();

        $totalRecordswithFilter = Project::select('count(*) as allcount')
        ->where('projects.title', 'like', '%' . $searchValue . '%')
        ->orWhere('projects.description', 'like', '%' . $searchValue . '%')
        ->orWhere('projects.technology', 'like', '%' . $searchValue . '%')
        ->orWhere('projects.app_type', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = Project::orderBy($columnName, $columnSortOrder)
            ->where('projects.title', 'like', '%' . $searchValue . '%')
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('projects.description', 'like', '%' . $searchValue . '%');
                      
            })
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('projects.technology', 'like', '%' . $searchValue . '%');
                      
            })
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('projects.app_type', 'like', '%' . $searchValue . '%');
                      
            })

            ->select('projects.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            if($record->status == 1){
                $status = '<a onchange="updateStatus(\''.url('project/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            }else{
                $status = '<a onchange="updateStatus(\''.url('project/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            }

            $_image = asset('images/project/'.$record->image);
            $short_desc = Str::words($record->description, 10, '....');

            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "title" => $record->title,
                "description" => $short_desc,
                "image" => '<img  src="'.$_image.'" style="height: 100px; width:100px;" />' ,
                "technology" => $record->technology,
                "app_type" => $record->app_type,

                "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

                // <a class="btn btn-primary text-light" href="javascript:;" onclick="view_item(\''.$record->id.'\')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>&nbsp;

                "action" =>'<div style="display: flex;">
                 <a class="btn btn-primary text-light" href="javascript:;" onclick="edit_item(\''.$record->id.'\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>&nbsp;

                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'project\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
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
        $project = Project::find(base64_decode($id));

        if($project){
            $project->status = $project->status == '1' ? '0' : '1';
            $project->save();
            echo json_encode(['status'=>true,'message'=>'Project status changed successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Something went wrong!!']);   
        }
    }

    public function destroy(Request $request){
        // $project = Project::where('id',base64_decode($request->id))->first();
        // $project->deleted_at = time();

        $project = Project::destroy(base64_decode($request->id));
        if($project){
            echo json_encode(['status'=>true,'message'=>'Project deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Project not deleted successfully']);
        }
    }


    public function saveProject(Request $request){
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "technology" => 'required',
            "app_type" => 'required',
            "technologyproject"=>'required',
        ]);
        
        if(!empty($request->id)){

            $project = Project::firstwhere('id',$request->id);
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
                $image = $project->image;
            }

            $project->title = $request->title;
            $project->description = $request->description;
            $project->image = $image;
            $project->technology = implode(',', $request->technology);
            $project->app_type = implode(',', $request->app_type);
            $project->projectTechnology=implode(',',$request->technologyproject);
            if($project->save()){                
                $projectId = $project->id;
                ProjectTechnology::where('projectid', $projectId)->delete();
                $technologyNames = explode(',', $project->projectTechnology);
            // dd($technologyNames);
            $technologyIds = Technology::whereIn('name', $technologyNames)->pluck('id');
            $projectTechnologyRecords = [];
            foreach ($technologyIds as $technologyId) {
                $projectTechnologyRecords[] = [
                    'projectid' => $projectId,
                    'technologyid' => $technologyId,
                ];
            }
            ProjectTechnology::insert($projectTechnologyRecords);



                return back()->with('message','Project updated successfully');
            }else{
                return back()->with('message','Project not updated successfully');
            }
            
        }else{
           
            $project = new Project();
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
                $image = $project->image;
            }

            $project->title = $request->title;
            $project->description = $request->description;
            $project->image = $image;
            $project->technology = implode(',', $request->technology);
            $project->app_type = implode(',', $request->app_type);
            $project->projectTechnology=implode(',',$request->technologyproject);
            $project->status = 1;
            if($project->save()){
                $projectId = $project->id;
                $technologyNames = explode(',', $project->projectTechnology);
                // dd($technologyNames);
                $technologyIds = Technology::whereIn('name', $technologyNames)->pluck('id');
                $projectTechnologyRecords = [];
                foreach ($technologyIds as $technologyId) {
                    $projectTechnologyRecords[] = [
                        'projectid' => $projectId,
                        'technologyid' => $technologyId,
                    ];
                }
                ProjectTechnology::insert($projectTechnologyRecords);
                return back()->with('message','Project added successfully');
            }else{
                return back()->with('message','Project not added successfully');
            }
        }
        
    }


    public function getProjectDetails(Request $request){
        $projectDetails = Project::firstwhere('id',$request->id);
        if($projectDetails){
            
            $projectDetails->technology = explode(',', $projectDetails->technology);
            $projectDetails->app_type = explode(',', $projectDetails->app_type);
            $projectDetails->projectTechnology=explode(',',$projectDetails->projectTechnology);
            print_r(json_encode(array("status"=>true ,"data"=>$projectDetails ,"message"=>"Project Details!")));
            exit;
        }else{
            print_r(json_encode(array("status"=>false , "data"=>[],  "message"=>"Something went wrong.")));
            exit;
        }
        
    }



    public function importProjectSave(Request $request){
            $imported  = Excel::import(new ImportProject, $request->file('csv_file')->store('import'));
            if($imported){
                return back()->with('message','Project added successfully');
            }else{
                return back()->with('error','Something went wrong.');
            }
    }

    public function exportProject(Request $request){
        return Excel::download(new ExportProject, 'project.xlsx');
    }


    public function sampleFileDownload()
    {
        $filePath = public_path("csv_sample_files/project_csv_sample.csv");
        $headers = ['Content-Type: application/csv'];
        $fileName = 'project_csv_sample.csv';
        // $fileName = time().'.csv';
        return response()->download($filePath, $fileName, $headers);
    }


    /*multiple action start*/
    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        Project::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Project deleted successfully")));
        exit;   
    }

    public function multipleActive(Request $request)
    {   
        $ids_arr = $request->ids;
        Project::whereIn('id', $ids_arr)
        ->update([
            'status'=> 1
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Project active successfully")));
        exit;   
    }

    public function multipleDeactive(Request $request)
    {
        $ids_arr = $request->ids;
        Project::whereIn('id', $ids_arr)
        ->update([
            'status'=> 0
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Project de-active successfully")));
        exit;   
    }
    /*multiple action end*/

}
