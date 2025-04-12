<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportBlog;
use App\Exports\ExportBlog;


class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index');
    }

    /* Process ajax request */
    public function getBlogList(Request $request)
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
        $totalRecords = Blog::select('count(*) as allcount')->count();

        $totalRecordswithFilter = Blog::select('count(*) as allcount')
        ->where('blogs.title', 'like', '%' . $searchValue . '%')
        ->orWhere('blogs.description', 'like', '%' . $searchValue . '%')
        ->orWhere('blogs.type', 'like', '%' . $searchValue . '%')
        ->count();

        // Get records, also we have included search filter as well
        $records = Blog::orderBy($columnName, $columnSortOrder)
            ->where('blogs.title', 'like', '%' . $searchValue . '%')
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('blogs.description', 'like', '%' . $searchValue . '%');
                      
            })
            ->orWhere(function($query) use ($searchValue)
            {
                $query->where('blogs.type', 'like', '%' . $searchValue . '%');
                      
            })

            ->select('blogs.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();
        // $serial_no = 1;
        $serial_no = $_GET['start'];
        foreach ($records as $record) {
            $serial_no++;
            if($record->status == 1){
                $status = '<a onchange="updateStatus(\''.url('blog/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary mr-2"><input type="checkbox" value="1" checked id="accountSwitch{{$record->id}}"><span class="slider round"></span></label> </a>';
            }else{
                $status = '<a onchange="updateStatus(\''.url('blog/update-status',base64_encode($record->id)).'\')" href="javascript:void(0);"><label class="switch s-primary   mr-2"><input type="checkbox" value="0" id="accountSwitch{{$record->id}}"><span class="slider round"></span></label></a>';
            }

            $_image = asset('images/blogs/'.$record->image);

            $data_arr[] = array(
                "checkall" => '<input type="checkbox" class="new-control-input contact-chkbox" name="multicheck[]" value="'.$record->id.'" >',
                "serial_no" => $serial_no,

                "title" => $record->title,
                "description" => $record->description,
                "image" => '<img  src="'.$_image.'" style="height: 100px; width:100px;" />' ,
                "type" => $record->type,
                "status" => $status,
                "created_at" => date('j M Y h:i a',strtotime($record->created_at)),

                "action" =>'<div style="display: flex;"><a class="btn btn-primary text-light" href="javascript:;" onclick="view_item(\''.$record->id.'\')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>&nbsp;

                 <a class="btn btn-primary text-light" href="javascript:;" onclick="edit_item(\''.$record->id.'\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>&nbsp;

                 <a href="javascript:;" class="btn btn-danger text-light" onclick="delete_item(\''.base64_encode($record->id).'\',\'blog\')"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></div>',
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
        $blogs = Blog::find(base64_decode($id));

        if($blogs){
            $blogs->status = $blogs->status == '1' ? '0' : '1';
            $blogs->save();
            echo json_encode(['status'=>true,'message'=>'Blog status changed successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Something went wrong!!']);   
        }
    }

    public function destroy(Request $request){
        // $blogs = Blog::where('id',base64_decode($request->id))->first();
        // $blogs->deleted_at = time();

        $blogs = Blog::destroy(base64_decode($request->id));
        if($blogs){
            echo json_encode(['status'=>true,'message'=>'Blog deleted successfully']);
        }else{
            echo json_encode(['status'=>false,'message'=>'Blog not deleted successfully']);
        }
    }


    public function saveBlog(Request $request){
        $request->validate([
            "title" => 'required',
            "description" => 'required',
            "type" => 'required',
            "name"=>'required',
            "author_content"=>'required',
            "tags"=>'required',
        ]);
        
        if(!empty($request->id)){

            $blogs = Blog::firstwhere('id',$request->id);
            if ($request->hasFile('image')) {
                $path = public_path('images/blogs');
                if (!file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $file = $request->file('image');
                $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->image = $fileName;
                $file->move($path, $fileName);
                $image = $this->image;
            }else{
                $image = $blogs->image;
            }
            // start
            if ($request->hasFile('author_image')) {
                $path = public_path('images/blogs');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $files = $request->file('author_image');
                $fileNames = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->author_image = $fileNames;
                $files->move($path, $fileNames);
                $author_image = $this->author_image;
            }else{
                $author_image = $blogs->author_img;
            }
            // end

            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-',strtolower(trim($request->title)));
            $cleanTags = trim($request->tags);
            $tagsArray = explode(',', $cleanTags);            
            $serializedTags = implode(',', $tagsArray);
            
            $blogs->title = $request->title;
            $blogs->description = $request->description;
            $blogs->image = $image;
            $blogs->type = $request->type;
            $blogs->slug = $slug;
            $blogs->name=$request->name;
            $blogs->author_img=$author_image;
            $blogs->content=$request->author_content;
            $blogs->tags = $serializedTags;            
            
            if($blogs->save()){                
                return back()->with('message','Blog updated successfully');
            }else{
                return back()->with('message','Blog not updated successfully');
            }
        }else{
            $blogs = new Blog();
            if ($request->hasFile('image')) {
                $path = public_path('images/blogs');
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
            // start
            if ($request->hasFile('author_image')) {
                $path = public_path('images/blogs');
                if ( ! file_exists($path) ) {
                    mkdir($path, 0777, true);
                }
                $files = $request->file('author_image');
                $fileNames = uniqid() . '_' . trim($file->getClientOriginalName());
                $this->author_image = $fileNames;
                $files->move($path, $fileNames);
                $author_image = $this->author_image;
            }else{
                $author_image = '';
            }

            $slug = preg_replace('/[^A-Za-z0-9-]+/', '-',strtolower(trim($request->title)));
            $cleanTags = trim($request->tags);
            $tagsArray = explode(',', $cleanTags);            
            $serializedTags = implode(',', $tagsArray);
            
            $blogs->title = $request->title;
            $blogs->description = $request->description;
            $blogs->image = $image;
            $blogs->type = $request->type;
            $blogs->slug = $slug;
            $blogs->status = 1;
            $blogs->name=$request->name;
            $blogs->author_img=$author_image;
            $blogs->content=$request->author_content;
            $blogs->tags = $serializedTags;            
            
            if($blogs->save()){
                return back()->with('message','Blog added successfully');
            }else{
                return back()->with('message','Blog not added successfully');
            }
        }
        
    }


    public function getBlogDetails(Request $request){
        $blogsDetails = Blog::firstwhere('id',$request->id);
        if($blogsDetails){
            print_r(json_encode(array("status"=>true ,"data"=>$blogsDetails ,"message"=>"Blog Details!")));
            exit;
        }else{
            print_r(json_encode(array("status"=>false , "data"=>[],  "message"=>"Something went wrong.")));
            exit;
        }
        
    }



    public function importBlogSave(Request $request){
            $imported  = Excel::import(new ImportBlog, $request->file('csv_file')->store('import'));
            if($imported){
                return back()->with('message','Blog added successfully');
            }else{
                return back()->with('error','Something went wrong.');
            }
    }

    public function exportBlog(Request $request){
        return Excel::download(new ExportBlog, 'blogs.xlsx');
    }


    public function sampleFileDownload()
    {
        $filePath = public_path("csv_sample_files/blogs_csv_sample.csv");
        $headers = ['Content-Type: application/csv'];
        $fileName = 'blogs_csv_sample.csv';
        // $fileName = time().'.csv';
        return response()->download($filePath, $fileName, $headers);
    }


    /*multiple action start*/
    public function multipleDel(Request $request)
    {
        $ids_arr = $request->ids;
        Blog::whereIn('id', $ids_arr)->delete();
        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Blog deleted successfully")));
        exit;   
    }

    public function multipleActive(Request $request)
    {   
        $ids_arr = $request->ids;
        Blog::whereIn('id', $ids_arr)
        ->update([
            'status'=> 1
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Blog active successfully")));
        exit;   
    }

    public function multipleDeactive(Request $request)
    {
        $ids_arr = $request->ids;
        Blog::whereIn('id', $ids_arr)
        ->update([
            'status'=> 0
        ]);

        

        print_r(json_encode(array("status"=>true, 'data'=> '',"message"=>"Blog de-active successfully")));
        exit;   
    }
    /*multiple action end*/

}
