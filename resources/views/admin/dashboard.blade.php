@extends('layouts.admin_default')
@section('title', 'Dashboard')
@section('content')
<div class="layout-px-spacing">
   <div class="row layout-top-spacing">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
         <div class="widget-two">
            <div class="widget-content">
               <div class="w-numeric-value">
                  <div class="w-content">
                     <span class="w-value">4</span>
                     <span class="w-numeric-title">{{__('messages.total_banners')}}</span>
                  </div>
                  <div class="w-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
         <div class="widget-two">
            <div class="widget-content">
               <div class="w-numeric-value">
                  <div class="w-content">
                     <span class="w-value">4</span>
                     <span class="w-numeric-title">Total Banners</span>
                  </div>
                  <div class="w-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
         <div class="widget-two">
            <div class="widget-content">
               <div class="w-numeric-value">
                  <div class="w-content">
                     <span class="w-value">4</span>
                     <span class="w-numeric-title">Total Banners</span>
                  </div>
                  <div class="w-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 layout-spacing">
         <div class="widget-two">
            <div class="widget-content">
               <div class="w-numeric-value">
                  <div class="w-content">
                     <span class="w-value">4</span>
                     <span class="w-numeric-title">Total Banners</span>
                  </div>
                  <div class="w-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                     </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('footer')
<!-- footer js script -->
@endsection