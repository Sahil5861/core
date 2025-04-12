@extends('layouts.admin_default')
@section('title', 'Our Teams')
@section('page', 'Our Teams / List')
@section('content')

<style type="text/css">
   label#image-error {
       margin-top: 15px;
   }
</style>
<div class="layout-px-spacing">
   <div class="row layout-top-spacing">
      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
         <div class="widget-content widget-content-area br-6">
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
            <div class="col-md-12 text-right">
               <!-- <a class="btn btn-success mb-2" href="javascript:void();" onclick="csvAddModal();">Import Our Team</a>
               <a class="btn btn-success mb-2" href="{{ route('export-our-team') }}">Export Our Team</a> -->
               <a href="javascript:void();" onclick="addModal();" class="btn btn-primary mb-2">Add +</a>
            </div>
            <div class="col-md-12 text-left">
               <div class="" id="#error"></div>
               <div class="multiple-action">
                  <button type="button" onclick="multiple_del()" class="btn btn-danger del">Delete</button>
                  <button type="button" onclick="multiple_active()" class="btn btn-success active-status">Active</button>
                  <button type="button"  onclick="multiple_deactive()" class="btn btn-danger inactive-status">Inactive</button>
               </div>
               <small>Apply action on checked record.</small>
            </div>
            <div class="table-responsive mb-4 mt-4">
               <table id="multi-column-ordering" class="table table-hover">
                  <thead>
                     <tr>
                        <th><input type="checkbox" class="new-control-input" id="contact-check-all"></th>
                        <th>S.No #</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody id="tableItem">
                  </tbody>
                  <tfoot>
                     <tr>
                        <th></th>
                        <th>S.No #</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!--end of listing -->
<!-- add modal start -->
<div class="modal fade" id="add_blog_modal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <form id="our_teamsForm" method="post" action="{{route('saveOurTeam')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="modal-header">
               <h5 class="modal-title">Add Our Team</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6 ">
                     <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" name="name" required id="name">
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 ">
                     <div class="form-group">
                        <label for="designation">Designation*</label>
                        <input type="text" class="form-control" name="designation" required id="designation">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12 ">
                     <div class="form-group mb-4">
                        <div class="custom-file text-left">
                           <input type="file" name="image" required class="custom-file-input" id="image">
                           <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                     </div>
                  </div>                  
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
         </form>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- add modal end -->
<!-- edit modal start -->
<div class="modal fade" id="edit_blog_modal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <form id="our_teamsEditForm" method="post" action="{{route('saveOurTeam')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="modal-header">
               <h5 class="modal-title">Edit Our Team</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6 ">
                     <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" name="name" required id="name1">
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 ">
                     <div class="form-group">
                        <label for="designation">Designation*</label>
                        <input type="text" class="form-control" name="designation" required id="designation1">
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12 ">
                     <div class="form-group mb-4">
                        <div class="custom-file text-left">
                           <input type="file" name="image"  class="custom-file-input" id="image1">
                           <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                     </div>
                     <img id="image_old" src="" style="height: 100px; width:100px;" />
                  </div>                  
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
         </form>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- edit modal end -->
<!-- view modal start -->
<div class="modal fade" id="view_blog_modal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <form method="post">
            <div class="modal-header">
               <h5 class="modal-title">Our Team Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body" id="detailContent">
            </div>
            <div class="modal-footer justify-content-between">
               <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                  <button type="button" class="btn btn-danger" onclick="ajax_delete_item();" >Yes, Delete</button> -->
            </div>
         </form>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- view modal end -->
<!-- import csv file to add our_teams start -->
<div class="modal fade" id="csv_add_blog_modal">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <form id="addCsvForm" method="post" action="{{route('importOurTeam')}}" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="modal-header">
               <h5 class="modal-title">Import Csv - Our Team</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6 ">
                     <div class="form-group mb-4">
                        <div class="custom-file text-left">
                           <input type="file" name="csv_file" class="custom-file-input" id="csv_file">
                           <label class="custom-file-label" for="csv_file">Choose file</label>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 ">
                     <a class="btn btn-success csvSample" href="{{route('sample-file-download-our-team')}}">Download Sample</a>
                  </div>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
               <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
         </form>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- import csv file to add our_teams end -->
@endsection
@section('footer')

<script type="text/javascript">
   $(document).ready(function(){
     $('#multi-column-ordering').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: "{{route('getOurTeamList')}}",
        columns: [
            { data: 'checkall', orderable: false, searchable: false },
            { data: 'serial_no', orderable: false, searchable: false },
            { data: 'name' },
            { data: 'image' },
            { data: 'designation' },
            { data: 'status' },
            { data: 'created_at' },
            { data: 'action', orderable: false, searchable: false },
        ],
        order: [[2, 'asc']],
        drawCallback: function (settings) { 
           
           var response = settings.json;
           // $('#totalRecords').text(response.totalRecords);
           // $('#activeRecords').text(response.activeRecords);
           // $('#inactiveRecords').text(response.inactiveRecords);
           // $('#deletedRecords').text(response.deletedRecords);
           console.log(response);
           // updateIcon()
           
       },
     });
   
   
       /*ajax header setup*/
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
   });
   
   
   
   
   
   function addModal(){
        $("#add_blog_modal").modal('show');
   }
   
   function view_item(id){
       let _url = "{{route('getOurTeamDetails')}}";
       let _token = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
           url: _url,
           type: 'POST',
           data: {
               id: id,
               _token: _token
           },
           success: function(response) {
               console.log(response);
               let result = JSON.parse(response);
               if(result.status){
                   var itemDetails = result.data;
                   if(itemDetails.status == 1){
                       var status = 'Active';
                   }else{
                       var status = 'In-active';
                   }
   
                   var d = new Date(itemDetails.created_at);
                   var created_at = d.toDateString() + ', '+d.getUTCHours() +':'+ d.getUTCMinutes()+':'+ d.getUTCSeconds();
                   // var created_at = d.toUTCString();
                   var image_url = "{{asset('images/our_teams')}}";

                   $('#detailContent').html('');
                   $('#detailContent').append('<div class="table-responsive"><table class="table table-bordered"><tr><th>Name</th><td>'+itemDetails.name+'</td><th>Designation</th><td>'+itemDetails.designation+'</td></tr><tr><th>Image</th><td><img src="'+image_url+'/'+itemDetails.image+'" style="height: 100px; width:100px;" /></td><th>Status</th><td>'+status+'</td></tr><tr><th>Created Date</th><td>'+created_at+'</td></tr></table></div>');
                   $("#view_blog_modal").modal('show');
               }else{
                   myFaildToast('Something went wrong.');
               }
           }
       });
       
       
   }
   
   function edit_item(id){
       let _url = "{{route('getOurTeamDetails')}}";
       let _token = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
           url: _url,
           type: 'POST',
           data: {
               id: id,
               _token: _token
           },
           success: function(response) {
               console.log(response);
               let result = JSON.parse(response);
               if(result.status){
                   // var itemDetails = result.data;
                  var _image = "{{asset('images/our_teams/')}}"+"/"+result.data.image;

                   console.log(result.data.sign_name);
                   $('#id').val(result.data.id);
                   $('#name1').val(result.data.name);
                   $('#designation1').val(result.data.designation);
               
                  $("#image_old").attr('src', _image);
                                  
                   $("#edit_blog_modal").modal('show');
               }else{
                   myFaildToast('Something went wrong.');
               }
           }
       });
   }
   
</script>
<!-- form validation start -->
<script>
   $( "#our_teamsForm" ).validate({
     // rules: {
     //   field: {
     //     required: true,
     //   }
     // }
   });
   
   
   $( "#our_teamsEditForm" ).validate({
     // rules: {
     //   field: {
     //     required: true,
     //   }
     // }
   });
   
   
   $( "#addCsvForm" ).validate({ });
   
   
   
</script>
<!-- form validation end -->

<!-- add csv modal start -->
<script type="text/javascript">
   function csvAddModal(){
        $("#csv_add_blog_modal").modal('show');
   }
</script>
<!-- add csv modal end -->
<script>
   // Add the following code if you want the name of the file appear on select
   $(".custom-file-input").on("change", function() {
     var fileName = $(this).val().split("\\").pop();
     $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
   });
</script>


<!-- check all record start -->
<script type="text/javascript">
   $("#contact-check-all").click(function(){
       $('input:checkbox[name="multicheck[]"]').not(this).prop('checked', this.checked);
   });
   

   function multiple_del(){
      var multicheck = []
      $("input[name='multicheck[]']:checked").each(function ()
      {
          multicheck.push(parseInt($(this).val()));
      });
      if(multicheck.length > 0){
         Swal.fire({
           title: 'Are you sure?',
           text: "Do you want to delete selected our_teams!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes'
           }).then((result) => {
           if (result.isConfirmed) { 
                   $.ajax({
                       url: "{{route('our-team-multipleDel')}}",
                       method: 'post',
                       data: {ids: multicheck},
                   })
                   .done(function(obj) {
                       console.log(obj);
                       let result = JSON.parse(obj);
                       if(result.status){
                            mySuccessToast(result.message);
                            setTimeout(() => {
                              $('#contact-check-all').prop('checked', false);
                            }, 500);
                       }else{
                            myFaildToast('Something went wrong.');
                       }
                        $('#multi-column-ordering').DataTable().ajax.reload();
                   });
           }else{
               // alert('false');
           }
       })
      }else{
         myFaildToast('Please select a record.');
      }

       
   }
   
   function multiple_active(){
      var multicheck = []
      $("input[name='multicheck[]']:checked").each(function ()
      {
          multicheck.push(parseInt($(this).val()));
      });
      if(multicheck.length > 0){
         Swal.fire({
           title: 'Are you sure?',
           text: "Do you want to make active selected our_teams!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes'
           }).then((result) => {
           if (result.isConfirmed) {
                $.ajax({
                    url: "{{route('our-team-multipleActive')}}",
                    method: 'post',
                    data: {ids: multicheck},
                })
                .done(function(obj) {
                    console.log(obj);
                    let result = JSON.parse(obj);
                    if(result.status){
                         mySuccessToast(result.message);
                         setTimeout(() => {
                           $('#contact-check-all').prop('checked', false);
                         }, 500);
                        
                     }else{
                        myFaildToast('Something went wrong.');
                     }
                     $('#multi-column-ordering').DataTable().ajax.reload();
                });
               
           }
       }) 
      }else{
         myFaildToast('Please select a record.');
      }

              
   }
   
   function multiple_deactive(){
      var multicheck = []
      $("input[name='multicheck[]']:checked").each(function ()
      {
          multicheck.push(parseInt($(this).val()));
      });
      if(multicheck.length > 0){
         Swal.fire({
           title: 'Are you sure?',
           text: "Do you want to make deactive selected records!",
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes'
           }).then((result) => {
           if (result.isConfirmed) {
              $.ajax({
                 url: "{{route('our-team-multipleDeactive')}}",
                 method: 'post',
                 data: {ids: multicheck},
              })
              .done(function(obj) {
                  console.log(obj);
                  let result = JSON.parse(obj);
                  if(result.status){
                      mySuccessToast(result.message);
                      setTimeout(() => {
                        $('#contact-check-all').prop('checked', false);
                      }, 500);
                  }else{
                       myFaildToast('Something went wrong.');
                  }
                  $('#multi-column-ordering').DataTable().ajax.reload();
              });
               
           }
       })
      }else{
         myFaildToast('Please select a record.');
      }

       
   }
      
</script> 
<!-- footer script if required -->
@endsection