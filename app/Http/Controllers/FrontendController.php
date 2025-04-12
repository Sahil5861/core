<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact_Us;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\OurClient;
use App\Models\OurTeam;
use App\Models\OurService;
use App\Models\Blog;
use App\Models\Project;
use App\Models\ProjectTechnology;
use App\Models\Technology;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public $data;
    public function __construct()
    {
        $this->data['setting'] = Setting::firstwhere('id',1);
        $this->data['clients'] = OurClient::all();
        $this->data['team'] = OurTeam::where('status', 1)->get();
        $this->data['services']=OurService::all();  
        $this->data['blogData'] = Blog::latest()->take(3)->get();
        $this->data['blog_data']=Blog::all();
        $this->data['project']=Project::all();
    }
   
    public function home(){
        return view('frontend.home',$this->data);
    }

    public function about_us(){
        return view('frontend.about_us',$this->data);
    }

    public function services()
    {
        return view('frontend.service',$this->data);
    }

    public function projects(){
        return view('projects',$this->data);
    }
    // public function project(){
    //     return view('project',$this->data);
    // }

    public function contact_us(){
        return view('contact_us',$this->data);
    }
    
    public function blog()
    {   
        return view('blog',$this->data);
    }
    public function blog_dt($id)
    {
        $blog=Blog::where('id',$id)->get();
        return view('blog_details',compact('blog'),$this->data);
    }
    public function blog_details()
    {
        return view('blog_details',$this->data);
    }
    public function Search_blogs(Request $request)
    {
        $search_key=$request->input('search');    
        $blogs = DB::table('blogs')
        ->where('tags', 'LIKE', '%' . $search_key . '%')
        ->get();
        // dd($blogs);
        // return view('search_results', ['blogs' => $blogs]);        
        if ($blogs->isEmpty()) {
            return redirect()->back()->with('message', 'No results found for the search key.');
        } else {
            // return view('blog', ['blogs' => $blogs]);
            return redirect()->route('blog')->with('blogs', $blogs);
        }

    }
    public function project_detail($id)
    {
        $this->data['details']=DB::table('projects')->where('id',$id)->first();
            
        $technologyIds = ProjectTechnology::where('projectid', $id)->pluck('technologyid');

        // // Fetch technology details based on the technology IDs from the technologies table
        $this->data['technologies'] = Technology::whereIn('id', $technologyIds)->get();
        // dd($technologyIds);
        
        return view('project_detail',$this->data);
        // return view('project_detail', [
        //     'details' => $details,
        //     'technologies' => $technologies,
        // ]);
       
    }

    public function client_detail($id)
    {
        $this->data['details']=DB::table('our_clients')->where('id',$id)->first();
            
        $technologyIds = ProjectTechnology::where('projectid', $id)->pluck('technologyid');

        // // Fetch technology details based on the technology IDs from the technologies table
        $this->data['technologies'] = Technology::whereIn('id', $technologyIds)->get();
        // dd($technologyIds);
        
        return view('client_detail',$this->data);
        // return view('project_detail', [
        //     'details' => $details,
        //     'technologies' => $technologies,
        // ]);
       
    }
    public function settings()
    {
        return view('settings');
    }
}