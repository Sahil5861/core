@extends('layouts.admin_default')
@section('title', 'Settings')
@section('page', 'Settings')
@section('content')

<div class="layout-px-spacing">
   <div class="row layout-top-spacing">
      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
         <div class="widget-content widget-content-area br-6">
            <h4 class="modal-title">Settings</h4>

            <div id="delete_bd_ms"></div>
            @if(isset($errors) && $errors->any())
            <div class="alert alert-danger fade in alert-dismissible show" style="margin-bottom: 5px;">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size:20px">×</span>
               </button>
               @foreach($errors->all() as $error )
               {{$error}} <br/>
               @endforeach
            </div>
            
            @endif

            @if(session()->has('message'))
            <div class="alert alert-success fade in alert-dismissible show" style="margin-bottom: 5px;">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size:20px">×</span>
               </button>
               {{ session()->get('message') }}
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-danger fade in alert-dismissible show" style="margin-bottom: 5px;">                
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size:20px">×</span>
               </button>
               {{ session()->get('error') }}
            </div>
            @endif
            
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 mt-4">
               <form id="settingForm" method="post" action="{{route('updateSettings')}}" enctype="multipart/form-data" novalidate>
                  @csrf
                  <input type="hidden" value="{{$settings->id}}" name="id" id="id">

                  <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <div class="form-group">
                              <label for="email">Email*</label>
                              <input type="email" class="form-control" value="{{$settings->email}}" name="email" required id="email">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <div class="form-group">
                              <label for="mobile">Mobile*</label>
                              <input type="text" class="form-control" value="{{$settings->mobile}}" name="mobile" required id="mobile">
                           </div>
                        </div>

                        

                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <div class="form-group">
                              <label for="address">Address*</label>
                              <textarea class="form-control"  name="address" required id="address" rows="3">{{$settings->address}}</textarea>
                           </div>
                        </div>         

                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <label>Logo</label>
                           <div class="form-group mb-4">
                              <div class="custom-file text-left">
                                 <input type="file"  name="logo_image" required class="custom-file-input" id="logo_image">
                                 <label class="custom-file-label" for="logo_image">Choose Logo</label>
                              </div>
                           </div>

                           <img src="{{asset('images/settings/'.$settings->logo_image)}}" class="old-image" style="width:150px; height: auto;" id="old_logo">

                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <div class="form-group">
                              <label for="twitter">Twitter*</label>
                              <input type="text" class="form-control" value="{{$settings->twitter}}" name="twitter" required id="twitter">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <div class="form-group">
                              <label for="facebook">Facebook*</label>
                              <input type="text" class="form-control" value="{{$settings->facebook}}" name="facebook" required id="facebook">
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <div class="form-group">
                              <label for="linkedin">Linked In*</label>
                              <input type="text" class="form-control" value="{{$settings->linkedin}}" name="linkedin" required id="linkedin">
                           </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 ">
                           <div class="form-group">
                              <label for="instagram">Instagram*</label>
                              <input type="text" class="form-control" value="{{$settings->instagram}}" name="instagram" required id="instagram">
                           </div>
                        </div>

                     </div>
                  
                     <button type="submit" class="btn btn-primary" >Update</button>
                  
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection