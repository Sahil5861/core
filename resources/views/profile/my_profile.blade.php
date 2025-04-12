@extends('layouts.admin_default')
@section('mytitle', 'My Profile')
@section('page', 'My Profile')
@section('content')
<div class="container">
   <div class="container">
      <div id="navSection" data-spy="affix" class="nav sidenav">
         <div class="sidenav-content">
             <a href="#updateDetails" class="active nav-link">Profile Details</a>
             <a href="#updatePassword" class="nav-link">Password</a>
         </div>
      </div>
      <div class="row">
         <div id="updateDetails" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
               <div class="widget-header">
                  <div class="row">
                     <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="tile user-settings">
                           <h4>Update User Name and Email</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-content widget-content-area">
                  @if (session('status') === 'profile-updated')
                      <div class="alert alert-success fade in alert-dismissible show" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="font-size:20px">×</span>
                        </button>
                        Profile updated successfully.
                     </div>
                  @endif
                  <div class="card component-updateDetails">
                     <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="post">
                           @csrf
                           @method('patch')
                           <div class="row mb-4">
                              <div class="col-md-12 mb-3">
                                 <label>User Name</label>
                                 <input class="form-control" name="name" value="{{old('name', $user->name)}}" type="text" required>
                              </div>
                              <div class="col-md-12">
                                 <label>Email</label>
                                 <input class="form-control" name="email" value="{{old('email', $user->email)}}" type="email" required>
                              </div>
                           </div>
                           <div class="row mb-10">
                              <div class="col-md-12">
                                 <button class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="updatePassword" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
               <div class="widget-header">
                  <div class="row">
                     <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="tile user-settings">
                           <h4 class="line-head">Update Password</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget-content widget-content-area">
                  @if (session('status') === 'password-updated')
                      <div class="alert alert-success fade in alert-dismissible show" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" style="font-size:20px">×</span>
                        </button>
                        Password updated successfully.
                     </div>
                  @endif
                  <div class="card component-updatePassword">
                     <div class="card-body">
                        <form method="post" action="{{ route('password.update') }}">
                           @csrf
                           @method('put')
                           <div class="row mb-4">
                              <div class="col-md-12 mb-3">
                                 <label>Current Password</label>
                                 <input class="form-control" name="current_password" type="password" required>
                                 @if(Session::has('current_password'))
                                 <p class="text-danger">{{Session::get('current_password')}}</p>
                                 @endif
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label>New Password</label>
                                 <input class="form-control" name="password" type="password" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label>Confirm New Password</label>
                                 <input class="form-control" name="password_confirmation" type="password" required>
                                 @if($errors->has('new_password'))
                                 <p class="text-danger">{{$errors->first('new_password')}}</p>
                                 @endif
                              </div>
                           </div>
                           <div class="row mb-10">
                              <div class="col-md-12">
                                 <button class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection