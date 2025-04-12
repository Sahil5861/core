<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>CoreTechInfo - @yield('title') </title>
      <link rel="icon" type="image/x-icon" href="{{asset('admin-light/assets/img/favicon.ico')}}"/>
      <link href="{{asset('admin-light/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
      <script src="{{asset('admin-light/assets/js/loader.js')}}"></script>
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
      <link href="{{asset('admin-light/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('admin-light/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
      <link href="{{asset('admin-light/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('admin-light/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

      <!-- new link 20-4-2023 -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin-light/plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('admin-light/plugins/table/datatable/dt-global_style.css')}}">

      <link rel="stylesheet" type="text/css" href="{{asset('admin-light/assets/css/forms/switches.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css" />

      <!-- custom css added by me -->
      <link rel="stylesheet" href="{{asset('admin-light/my-custom-style.css')}}" />
      
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

      <link href="{{asset('admin-light/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- BEGIN LOADER -->
      <div id="load_screen">
         <div class="loader">
            <div class="loader-content">
               <div class="spinner-grow align-self-center"></div>
            </div>
         </div>
      </div>
      <!--  END LOADER -->
      <!--  BEGIN NAVBAR  -->
      <div class="header-container fixed-top">
         <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row  text-center">
               <li class="nav-item theme-logo">
                  <a href="index.html">
                  <img src="{{asset('admin-light/assets/img/90x90.jpg')}}" class="navbar-logo" alt="logo">
                  </a>
               </li>
               <li class="nav-item theme-text">
                  <a href="index.html" class="nav-link"> Coretech Info </a>
               </li>
            </ul>
            <!-- <ul class="navbar-item flex-row ml-md-0 ml-auto">
               <li class="nav-item align-self-center search-animated">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                     <circle cx="11" cy="11" r="8"></circle>
                     <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                  <form class="form-inline search-full form-inline search" role="search">
                     <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                     </div>
                  </form>
               </li>
            </ul> -->
            <ul class="navbar-item flex-row ml-md-auto">
               <!-- <li class="nav-item dropdown language-dropdown">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="{{asset('admin-light/assets/img/ca.png')}}" class="flag-width" alt="flag">
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                     <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{asset('admin-light/assets/img/de.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                     <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{asset('admin-light/assets/img/jp.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Japanese</span></a>
                     <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{asset('admin-light/assets/img/fr.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;French</span></a>
                     <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{asset('admin-light/assets/img/ca.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                  </div>
               </li> -->
               <!-- <li class="nav-item dropdown message-dropdown">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                     </svg>
                  </a>
                  <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                     <div class="">
                        <a class="dropdown-item">
                           <div class="">
                              <div class="media">
                                 <div class="user-img">
                                    <img class="usr-img rounded-circle" src="{{asset('admin-light/assets/img/90x90.jpg')}}" alt="profile">
                                 </div>
                                 <div class="media-body">
                                    <div class="">
                                       <h5 class="usr-name">Kara Young</h5>
                                       <p class="msg-title">ACCOUNT UPDATE</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item">
                           <div class="">
                              <div class="media">
                                 <div class="user-img">
                                    <img class="usr-img rounded-circle" src="{{asset('admin-light/assets/img/90x90.jpg')}}" alt="profile">
                                 </div>
                                 <div class="media-body">
                                    <div class="">
                                       <h5 class="usr-name">Daisy Anderson</h5>
                                       <p class="msg-title">ACCOUNT UPDATE</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a class="dropdown-item">
                           <div class="">
                              <div class="media">
                                 <div class="user-img">
                                    <img class="usr-img rounded-circle" src="{{asset('admin-light/assets/img/90x90.jpg')}}" alt="profile">
                                 </div>
                                 <div class="media-body">
                                    <div class="">
                                       <h5 class="usr-name">Oscar Garner</h5>
                                       <p class="msg-title">ACCOUNT UPDATE</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </li>
               <li class="nav-item dropdown notification-dropdown">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                     </svg>
                     <span class="badge badge-success"></span>
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                     <div class="notification-scroll">
                        <div class="dropdown-item">
                           <div class="media">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                 <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                              </svg>
                              <div class="media-body">
                                 <div class="notification-para"><span class="user-name">Shaun Park</span> likes your photo.</div>
                              </div>
                           </div>
                        </div>
                        <div class="dropdown-item">
                           <div class="media">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                 <circle cx="18" cy="5" r="3"></circle>
                                 <circle cx="6" cy="12" r="3"></circle>
                                 <circle cx="18" cy="19" r="3"></circle>
                                 <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                 <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                              </svg>
                              <div class="media-body">
                                 <div class="notification-para"><span class="user-name">Kelly Young</span> shared your post</div>
                              </div>
                           </div>
                        </div>
                        <div class="dropdown-item">
                           <div class="media">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                 <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                 <line x1="7" y1="7" x2="7" y2="7"></line>
                              </svg>
                              <div class="media-body">
                                 <div class="notification-para"><span class="user-name">Kelly Young</span> mentioned you in comment.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </li> -->
               <li class="nav-item dropdown user-profile-dropdown">
                  <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <img src="{{asset('admin-light/assets/img/90x90.jpg')}}" alt="avatar">
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                     <div class="">
                        <div class="dropdown-item">
                           <a href="{{route('profile.edit')}}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                 <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="12" cy="7" r="4"></circle>
                              </svg>
                              My Profile
                           </a>
                        </div>
                        <!-- <div class="dropdown-item">
                           <a href="apps_mailbox.html">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                 <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                 <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                              </svg>
                              Inbox
                           </a>
                        </div> -->
                        <!-- <div class="dropdown-item">
                           <a href="auth_lockscreen.html">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                 <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                 <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                              </svg>
                              Lock Screen
                           </a>
                        </div> -->
                        <div class="dropdown-item">
                           <form method="POST" action="{{ route('logout') }}">
                            @csrf
                           <a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                 <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                 <polyline points="16 17 21 12 16 7"></polyline>
                                 <line x1="21" y1="12" x2="9" y2="12"></line>
                              </svg>
                              Sign Out
                           </a>
                           </form>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </header>
      </div>
      <!--  END NAVBAR  -->
      <!--  BEGIN NAVBAR  -->
      <div class="sub-header-container">
         <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
               </svg>
            </a>
            <ul class="navbar-nav flex-row">
               <li>
                  <div class="page-header">
                     <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page"><span>@yield('page')</span></li>
                        </ol>
                     </nav>
                  </div>
               </li>
            </ul>
            <!-- <ul class="navbar-nav flex-row ml-auto ">
               <li class="nav-item more-dropdown">
                  <div class="dropdown  custom-dropdown-icon">
                     <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Settings</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                           <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                        <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Settings</a>
                        <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>
                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                        <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                     </div>
                  </div>
               </li>
            </ul> -->
         </header>
      </div>
      <!--  END NAVBAR  -->
      <!--  BEGIN MAIN CONTAINER  -->
      <div class="main-container" id="container">
         <div class="overlay"></div>
         <div class="search-overlay"></div>
         <!--  BEGIN SIDEBAR  -->
         <div class="sidebar-wrapper sidebar-theme">
            @include('includes.admin_sidebar')
         </div>
         <!--  END SIDEBAR  -->
         <!--  BEGIN CONTENT AREA  -->
         <div id="content" class="main-content">
                
            <!-- page content start -->
            @yield('content')
            <!-- page content end -->


            <!-- footer area start -->
            <div class="footer-wrapper">
               <div class="footer-section f-section-1">
                  <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
               </div>
               <div class="footer-section f-section-2">
                  <p class="">
                     Coded with 
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                     </svg>
                  </p>
               </div>
            </div>
         </div>
         <!--  END CONTENT AREA  -->
      </div>
      <!-- END MAIN CONTAINER -->


      <div class="modal fade" id="delete_blog_modal">
        <div class="modal-dialog action-modal">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="d_title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="delete_user_deletemsg">Do you want to delete this <span id="d_body"></span>?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-danger" onclick="ajax_delete_item();" >Yes, Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

      <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
      <script src="{{asset('admin-light/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
      <script src="{{asset('admin-light/bootstrap/js/popper.min.js')}}"></script>
      <script src="{{asset('admin-light/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('admin-light/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
      <script src="{{asset('admin-light/assets/js/app.js')}}"></script>
      <script>
         $(document).ready(function() {
             App.init();
         });
      </script>
      <script src="{{asset('admin-light/assets/js/custom.js')}}"></script>
      <script src="{{asset('admin-light/assets/js/scrollspyNav.js')}}"></script>
      <!-- END GLOBAL MANDATORY SCRIPTS -->
      <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
      <script src="{{asset('admin-light/plugins/apex/apexcharts.min.js')}}"></script>
      <script src="{{asset('admin-light/assets/js/dashboard/dash_1.js')}}"></script>
      <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
      <script src="{{asset('admin-light/plugins/table/datatable/datatables.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>

      <!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

      <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

      <script type="text/javascript">
        //  function updateIcon() {
        //     // alert('')
        //     $('li.previous > a').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>')

        //     $('li.next > a').html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>')
        // }

 
        function updateStatus(url) {
            // body...
            // alert(url)
            var request = $.ajax({
                            url: url,
                            method: "GET"
                          });
             
            request.done(function( val ) {
                console.log(val);
                var data = jQuery.parseJSON(val);
                if(data.status){
                     mySuccessToast(data.message);
                }else{
                     myFaildToast(data.message);
                }

                $('#multi-column-ordering').DataTable().ajax.reload();
                // setTimeout(function(){location.reload(true);}, 2000);

            });
        }

         function mySuccessToast(message=''){
            $.toast({
                      heading: 'Success',
                      text: message,
                      showHideTransition: 'slide',
                      icon: 'success',
                      position: 'top-right',
            })
         }

         function myFaildToast(message=''){
            $.toast({
                heading: 'Error',
                text: message,
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
            })
         }


        /*delete item*/
        var allPages = {
            "our-teams" : ['Our team','our-team','our-team'],
            "our-clients" : ['Our client','our-client','our-client'],
            "our-services" : ['Our service','our-service','our-service'],
            "gallery" : ['Gallery','gallery','gallery'],
            "project" : ['Project','project','project'],
            "technology":['Technology','technology','technology'],
            "inquiry" : ['Inquiry','inquiry','inquiry'],
            "newsletter" : ['News Letter','news letter','newsletter'],
            "blog" : ['Blog','blog','blog'],
        }
        //Delete building using ajax
        window.bd_id = 0;
        window.url_enpoint = '';
        function delete_item(id,page){ 
            bd_id = id;
            url_enpoint = allPages[page][2];
            // alert(url_enpoint);
            $('#d_title').text(allPages[page][0]);
            $('#d_body').text(allPages[page][1]);
            $("#delete_blog_modal").modal('show');
        }

        function ajax_delete_item(){
            var request = $.ajax({
                            url: "/"+url_enpoint+"/destroy",
                            method: "POST",
                            data: { "_token": "{{ csrf_token() }}", id : bd_id }
                          });
             
            request.done(function( val ) {
               console.log(val);
               var data = jQuery.parseJSON(val);
               if(data.status){
                     mySuccessToast(data.message);
               }else{
                     myFaildToast(data.message);
               }
               $("#delete_blog_modal").modal('hide');
               // $( "#delete_bd_ms" ).html(data.message);
               $('#multi-column-ordering').DataTable().ajax.reload();

            });
        }
     </script>

      <!-- change language start -->
      <!-- <script type="text/javascript">
         var url = "{{ route('changeLang') }}";
         function changeLanguage(language){
            var currentLanguage = "{{session()->get('locale')}}";
            if(currentLanguage != language){
                window.location.href = url + "?lang="+ language;
            }
          }
      </script> -->
       <!-- change language end -->

      @yield('footer')
   </body>
</html>