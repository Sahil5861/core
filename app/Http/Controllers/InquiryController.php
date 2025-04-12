<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportGallery;
use App\Exports\ExportGallery;


class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index');
    }

    /* Process ajax request */
    public function getGalleryList(Request $request)
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
        $totalRecords = Gallery::select('count(*) as allcount')->count();

        $totalRecordswithFilter = Gallery::select('count(*) as allcount')
        ->where('gallery.title', 'like', '%' . $searchValue . '%')
        // ->orWhere('gallery.designation', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = Gallery::orderBy($columnName, $columnSortOrder)
            ->where('gallery.title', 'like', '%' . $searchValue . '%')
            // ->orWhere(function($query) use ($searchValue)
            // {
            //     $query->where('gallery.designation', 'like', '%' . $searchValue . '%');
                      
            // })

            ->select('gallery.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            if($record->status == 1){
                $status = '<a onchange="updateStatus(\''.url('gallery/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            }else{
                $status = '<a onchange="updateStatus(\''.url('gallery/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            }

            $_image = asset('images/gallery/'.$record->image);

            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "title" => $record->title,
                // "designation" => $record->designation,
                "image" => '<img  src="'.$_image.'" style="height: 100px; width:100px;" />' ,
               

                "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

                // <a class="btn btn-primary text-light" href="javascript:;" onclick="view_item(\''.$record->id.'\')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>&nbsp;

                "action" =>'<div style="display: flex;">
                 <a class="btn btn-primary text-light" href="javascript:;" onclick="edit_item(\''.$record->id.'\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>&nbsp;

                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'gallery\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
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
        $gallery = Gallery::find(base64_decode($id));

        if($gallery){
            $gallery->status = $gallery->status == '1' ? '0' : '1';
            $gallery->save();
            echo json_encode(['status'=>true,'message'=>'Gallery status changed successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Something went wrong!!']);   
        }
    }

    public function destroy(Request $request){
        // $gallery = Gallery::where('id',base64_decode($request->id))->first();
        // $gallery->deleted_at = time();

        $gallery = Gallery::destroy(base64_decode($request->id));
        if($gallery){
            echo json_encode(['status'=>true,'message'=>'Gallery deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Gallery not deleted successfully']);
        }
    }


    public function saveGallery(Request $request){
        $request->validate([
            "title" => 'required',
            // "designation" => 'required',
        ]);
        
        if(!empty($request->id)){

            $gallery = Gallery::firstwhere('id',$request->id);
            if ($request->hasFile('image')) {
                $path = public_path('images/gallery');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $gallery->image;
            }

            $gallery->title = $request->title;
            // $gallery->designation = $request->designation;
            $gallery->image = $image;
            if($gallery->save()){                
                return back()->with('message','Gallery updated successfully');
            }else{
                return back()->with('message','Gallery not updated successfully');
            }
            
        }else{
           
            $gallery = new Gallery();
            if ($request->hasFile('image')) {
                $path = public_path('images/gallery');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $gallery->image;
            }

            $gallery->title = $request->title;
            // $gallery->designation = $request->designation;
            $gallery->image = $image;
            $gallery->status = 1;
            if($gallery->save()){
                return back()->with('message','Gallery added successfully');
            }else{
                return back()->with('message','Gallery not added successfully');
            }
        }
        
    }


    public function getGalleryDetails(Request $request){
        $galleryDetails = Gallery::firstwhere('id',$request->id);
        if($galleryDetails){
            print_r(json_encode(array("status"=>true ,"data"=>$galleryDetails ,"message"=>"Gallery Details!")));
            exit;
        }else{
            print_r(json_encode(array("status"=>false , "data"=>[],  "message"=>"Something went wrong.")));
            exit;
        }
        
    }



    public function importGallerySave(Request $request){
            $imported  = Excel::import(new ImportGallery, $request->file('csv_file')->store('import'));
            if($imported){
                return back()->with('message','Gallery added successfully');
            }else{
                return back()->with('error','Something went wrong.');
            }
    }

    public function exportGallery(Request $request){
        return Excel::download(new ExportGallery, 'gallery.xlsx');
    }


    public function sampleFileDownload()
    {
        $filePath = public_path("csv_sample_files/gallery_csv_sample.csv");
        $headers = ['Content-Type: application/csv'];
        $fileName = 'gallery_csv_sample.csv';
        // $fileName = time().'.csv';
        return response()->download($filePath, $fileName, $headers);
    }


    /*multiple action start*/
    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        Gallery::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Gallery deleted successfully")));
        exit;   
    }

    public function multipleActive(Request $request)
    {   
        $ids_arr = $request->ids;
        Gallery::whereIn('id', $ids_arr)
        ->update([
            'status'=> 1
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Gallery active successfully")));
        exit;   
    }

    public function multipleDeactive(Request $request)
    {
        $ids_arr = $request->ids;
        Gallery::whereIn('id', $ids_arr)
        ->update([
            'status'=> 0
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Gallery de-active successfully")));
        exit;   
    }
    /*multiple action end*/

}
