<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\OurClientController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TechnologyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';


Route::get('/admin', function () {
   return redirect('/login');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return view('admin.index-theme');
})->middleware(['auth', 'verified'])->name('index-theme');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');



/*OurTeamController start*/
Route::get('/our-teams', [OurTeamController::class, 'index'])->middleware(['auth', 'verified'])->name('our-teams');
Route::get('/getOurTeamList', [OurTeamController::class, 'getOurTeamList'])->middleware(['auth', 'verified'])->name('getOurTeamList');
Route::post('/saveOurTeam', [OurTeamController::class,'saveOurTeam'])->middleware(['auth', 'verified'])->name('saveOurTeam');
Route::post('/our-team/destroy', [OurTeamController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyOurTeam');
Route::get('/our-team/update-status/{id}', [OurTeamController::class,'updateStatus'])->middleware(['auth', 'verified'])->name('our-team.update-status');
Route::post('getOurTeamDetails', [OurTeamController::class,'getOurTeamDetails'])->middleware(['auth', 'verified'])->name('getOurTeamDetails');
Route::get('/export-our-team',[OurTeamController::class,'exportOurTeam'])->name('export-our-team');
Route::post('/importOurTeam',[OurTeamController::class,'importOurTeamSave'])->name('importOurTeam');
Route::get('/sample-file-download-our-team', [OurTeamController::class, 'sampleFileDownload'])->name('sample-file-download-our-team');
Route::post('our-team-multipleDel', [OurTeamController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('our-team-multipleDel');
Route::post('our-team-multipleActive', [OurTeamController::class,'multipleActive'])->middleware(['auth', 'verified'])->name('our-team-multipleActive');
Route::post('our-team-multipleDeactive', [OurTeamController::class,'multipleDeactive'])->middleware(['auth', 'verified'])->name('our-team-multipleDeactive');
/*OurTeam end*/


/*OUR CLIENTS start*/
Route::get('/our-clients', [OurClientController::class, 'index'])->middleware(['auth', 'verified'])->name('our-clients');
Route::get('/getOurClientList', [OurClientController::class, 'getOurClientList'])->middleware(['auth', 'verified'])->name('getOurClientList');
Route::post('/saveOurClient', [OurClientController::class,'saveOurClient'])->middleware(['auth', 'verified'])->name('saveOurClient');
Route::post('/our-client/destroy', [OurClientController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyOurClient');
Route::get('/our-client/update-status/{id}', [OurClientController::class,'updateStatus'])->middleware(['auth', 'verified'])->name('our-client.update-status');
Route::post('getOurClientDetails', [OurClientController::class,'getOurClientDetails'])->middleware(['auth', 'verified'])->name('getOurClientDetails');
Route::post('our-client-multipleDel', [OurClientController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('our-client-multipleDel');
Route::post('our-client-multipleActive', [OurClientController::class,'multipleActive'])->middleware(['auth', 'verified'])->name('our-client-multipleActive');
Route::post('our-client-multipleDeactive', [OurClientController::class,'multipleDeactive'])->middleware(['auth', 'verified'])->name('our-client-multipleDeactive');
Route::get('/export-our-client',[OurClientController::class,'exportOurClient'])->name('export-our-client');
Route::post('/importOurClient',[OurClientController::class,'importOurClientSave'])->name('importOurClient');
Route::get('/sample-file-download-our-client', [OurClientController::class, 'sampleFileDownload'])->name('sample-file-download-our-client');
/*OUR CLIENTS end*/


/*Gallery start*/
Route::get('/gallery', [GalleryController::class, 'index'])->middleware(['auth', 'verified'])->name('gallery');
Route::get('/getGalleryList', [GalleryController::class, 'getGalleryList'])->middleware(['auth', 'verified'])->name('getGalleryList');
Route::post('/saveGallery', [GalleryController::class,'saveGallery'])->middleware(['auth', 'verified'])->name('saveGallery');
Route::post('/gallery/destroy', [GalleryController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyGallery');
Route::get('/gallery/update-status/{id}', [GalleryController::class,'updateStatus'])->middleware(['auth', 'verified'])->name('gallery.update-status');
Route::post('getGalleryDetails', [GalleryController::class,'getGalleryDetails'])->middleware(['auth', 'verified'])->name('getGalleryDetails');
Route::get('/export-gallery',[GalleryController::class,'exportGallery'])->name('export-gallery');
Route::post('/importGallery',[GalleryController::class,'importGallerySave'])->name('importGallery');
Route::get('/sample-file-download-gallery', [GalleryController::class, 'sampleFileDownload'])->name('sample-file-download-gallery');
Route::post('gallery-multipleDel', [GalleryController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('gallery-multipleDel');
Route::post('gallery-multipleActive', [GalleryController::class,'multipleActive'])->middleware(['auth', 'verified'])->name('gallery-multipleActive');
Route::post('gallery-multipleDeactive', [GalleryController::class,'multipleDeactive'])->middleware(['auth', 'verified'])->name('gallery-multipleDeactive');
/*Gallery end*/

/*Our Services start*/
Route::get('/our-services', [OurServiceController::class, 'index'])->middleware(['auth', 'verified'])->name('our-services');
Route::get('/getOurServiceList', [OurServiceController::class, 'getOurServiceList'])->middleware(['auth', 'verified'])->name('getOurServiceList');
Route::post('/saveOurService', [OurServiceController::class,'saveOurService'])->middleware(['auth', 'verified'])->name('saveOurService');
Route::post('/our-service/destroy', [OurServiceController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyOurService');
Route::get('/our-service/update-status/{id}', [OurServiceController::class,'updateStatus'])->middleware(['auth', 'verified'])->name('our-service.update-status');
Route::post('getOurServiceDetails', [OurServiceController::class,'getOurServiceDetails'])->middleware(['auth', 'verified'])->name('getOurServiceDetails');
Route::get('/export-our-service',[OurServiceController::class,'exportOurService'])->name('export-our-service');
Route::post('/importOurService',[OurServiceController::class,'importOurServiceSave'])->name('importOurService');
Route::get('/sample-file-download-our-service', [OurServiceController::class, 'sampleFileDownload'])->name('sample-file-download-our-service');
Route::post('our-service-multipleDel', [OurServiceController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('our-service-multipleDel');
Route::post('our-service-multipleActive', [OurServiceController::class,'multipleActive'])->middleware(['auth', 'verified'])->name('our-service-multipleActive');
Route::post('our-service-multipleDeactive', [OurServiceController::class,'multipleDeactive'])->middleware(['auth', 'verified'])->name('our-service-multipleDeactive');
/*Our Services end*/


/*Project start*/
Route::get('/project', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('project');
Route::get('/getProjectList', [ProjectController::class, 'getProjectList'])->middleware(['auth', 'verified'])->name('getProjectList');
Route::post('/saveProject', [ProjectController::class,'saveProject'])->middleware(['auth', 'verified'])->name('saveProject');
Route::post('/project/destroy', [ProjectController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyProject');
Route::get('/project/update-status/{id}', [ProjectController::class,'updateStatus'])->middleware(['auth', 'verified'])->name('project.update-status');
Route::post('getProjectDetails', [ProjectController::class,'getProjectDetails'])->middleware(['auth', 'verified'])->name('getProjectDetails');
Route::get('/export-project',[ProjectController::class,'exportProject'])->name('export-project');
Route::post('/importProject',[ProjectController::class,'importProjectSave'])->name('importProject');
Route::get('/sample-file-download-project', [ProjectController::class, 'sampleFileDownload'])->name('sample-file-download-project');
Route::post('project-multipleDel', [ProjectController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('project-multipleDel');
Route::post('project-multipleActive', [ProjectController::class,'multipleActive'])->middleware(['auth', 'verified'])->name('project-multipleActive');
Route::post('project-multipleDeactive', [ProjectController::class,'multipleDeactive'])->middleware(['auth', 'verified'])->name('project-multipleDeactive');
/*Project end*/

/* Technology start  */
Route::get('/technology',[TechnologyController::class,'index'])->middleware(['auth', 'verified'])->name('technology');
Route::get('/getTechnologyList', [TechnologyController::class, 'getTechnologyList'])->middleware(['auth', 'verified'])->name('getTechnologyList');
Route::post('/saveTechnology',[TechnologyController::class, 'saveTechnology'])->middleware(['auth', 'verified'])->name('saveTechnology');
Route::post('getTechnologyDetails', [TechnologyController::class,'getTechnologyDetails'])->middleware(['auth', 'verified'])->name('getTechnologyDetails');
Route::post('/technology/destroy', [TechnologyController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyTechnology');
Route::post('technology-multipleDel', [TechnologyController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('technology-multipleDel');

/* Technology end */

/*contact/ Inqury list start*/
Route::get('/inquiryList', [ContactController::class, 'inquiryList'])->middleware(['auth', 'verified'])->name('inquiryList');
Route::get('/getInquiryList', [ContactController::class, 'getInquiryList'])->middleware(['auth', 'verified'])->name('getInquiryList');
Route::post('/inquiry/destroy', [ContactController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyInquiry');
Route::post('inquiry-multipleDel', [ContactController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('inquiry-multipleDel');
/*contact/ Inqury end*/

/*News letters start*/
Route::get('/newsletters', [ContactController::class, 'newsletters'])->middleware(['auth', 'verified'])->name('newsletters');
Route::get('/getNewslettersList', [ContactController::class, 'getNewslettersList'])->middleware(['auth', 'verified'])->name('getNewslettersList');
Route::post('/newsletter/destroy', [ContactController::class,'destroy_news_letters'])->middleware(['auth', 'verified'])->name('destroyInquiry');
Route::post('newsletter-multipleDel', [ContactController::class,'multipleDel_news_letters'])->middleware(['auth', 'verified'])->name('newsletter-multipleDel');
/*News letters end*/


/*settings start*/
Route::get('/settings', [SettingController::class, 'settings'])->middleware(['auth', 'verified'])->name('settings');
Route::post('/updateSettings', [SettingController::class,'updateSettings'])->middleware(['auth', 'verified'])->name('updateSettings');
/*settings end*/





/*blogs start*/
Route::get('/blogs', [BlogController::class, 'index'])->middleware(['auth', 'verified'])->name('blogs');
Route::get('/getBlogList', [BlogController::class, 'getBlogList'])->middleware(['auth', 'verified'])->name('getBlogList');
Route::post('/saveBlog', [BlogController::class,'saveBlog'])->middleware(['auth', 'verified'])->name('saveBlog');
Route::post('/blog/destroy', [BlogController::class,'destroy'])->middleware(['auth', 'verified'])->name('destroyBlog');
Route::get('/blog/update-status/{id}', [BlogController::class,'updateStatus'])->middleware(['auth', 'verified'])->name('blog.update-status');
Route::post('getBlogDetails', [BlogController::class,'getBlogDetails'])->middleware(['auth', 'verified'])->name('getBlogDetails');
Route::get('/export-blog',[BlogController::class,'exportBlog'])->name('export-blog');
Route::post('/importBlog',[BlogController::class,'importBlogSave'])->name('importBlog');
Route::get('/sample-file-download-blog', [BlogController::class, 'sampleFileDownload'])->name('sample-file-download-blog');
Route::post('blog-multipleDel', [BlogController::class,'multipleDel'])->middleware(['auth', 'verified'])->name('blog-multipleDel');
Route::post('blog-multipleActive', [BlogController::class,'multipleActive'])->middleware(['auth', 'verified'])->name('blog-multipleActive');
Route::post('blog-multipleDeactive', [BlogController::class,'multipleDeactive'])->middleware(['auth', 'verified'])->name('blog-multipleDeactive');
/*blogs end*/





/*frontend*/


Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('/about-us',[FrontendController::class,'about_us'])->name('about-us');
Route::get('/services',[FrontendController::class,'services'])->name('services');
Route::get('/service/{id}',[FrontendController::class,'service_detail'])->name('service.details');
// Route::get('/projects',[FrontendController::class,'projects'])->name('projects');
Route::get('/contact-us',[FrontendController::class, 'contact_us'])->name('contact-us');

// Route::get('/contact-us',[ContactController::class, 'index'])->name('contact-us');

Route::post('/contact-us-save',[ContactController::class, 'saveForm'])->name('contact-us-save');
Route::post('/news-letter-save',[ContactController::class, 'saveNewsLetterForm'])->name('news-letter-save');

Route::get('/blog',[FrontendController::class,'blog'])->name('blog');

Route::get('/blog-details', [FrontendController::class,'blog_details'])->name('blog-details');

Route::get('/blog_dt/{id}', [FrontendController::class,'blog_dt'])->name('blog_dt');
Route::post('/search_data',[FrontendController::class,'Search_blogs'])->name('search_data');

Route::get('/projects',[FrontendController::class,'projects'])->name('projects');
Route::get('/project-detail/{id}',[FrontendController::class,'project_detail'])->name('/project-detail');
Route::get('/client-detail/{id}',[FrontendController::class,'client_detail'])->name('/client-detail');

Route::get('/settings',[FrontendController::class,'settings'])->name('settings');

