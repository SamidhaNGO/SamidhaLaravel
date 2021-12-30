@extends('layouts.admin')

@push('stylesheets')
    <link href="{{ asset('css/lib/dataTables.bootstrap.min.css') }}"  rel="stylesheet">
     <!-- bootstrap-toggle -->
     <link href="{{asset('bootstrap-toggle-master/css/bootstrap-toggle.min.css')}}" rel="stylesheet">
@endpush

@section('main_container')
<?php
// echo "<pre>";
// print_r($department);
// echo "</pre>";
// die();
?>
<table id="departmentList" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
          <tr>
              <th>SI NO</th>
              <th>Department Name</th>
              <th>Action</th>
              <!-- <th>Actions</th> -->
          </tr>
      </thead>
      <tfoot>
          <tr>
              <th>SI NO</th>
              <th>Department Name</th>
              <th>Action</th>
            <!-- <th></th> -->
          </tr>
      </tfoot>
      <tbody>
        @push('stylesheets')
          <style>
            .actionnavbar a {
              padding: 7px 0 3px;
              text-align: center;
              width: 25%;
              font-size: 17px;
              display: block;
              float: left;
              cursor: pointer;
              background-color: #EDEDED;
            }
            .actionnavbar a:hover {
              border: 1px solid #374A5E;
            }
          </style>
        @endpush
        <?php $a=1; ?>
         @foreach($department as $list)
          <tr>
              <td>{{$a++}}</td>
              <td>{{$list->department_name}}</td>
              <td>
              <input data-id="{{$list->id}}" class="toggle-class " type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $list->status ? 'checked' : ''}}>

              <a href="{{url('admin/department/edit/'.$list->id)}}"><button class="btn btn-success">Edit</button></a>
              <a href="{{url('admin/department/delete/'.$list->id)}}"><button class="btn btn-danger">Delete</button></a>

              </td>
              
              
          </tr>
           @endforeach
      </tbody>
  </table>
@endsection
@include('partials/dialog/confirmation')
@push('scripts')
 <!-- bootstrap-toggle -->
 <script src="{{asset('bootstrap-toggle-master/js/bootstrap-toggle.min.js')}}"></script>
<script src="{{ asset('js/lib/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">
$(function(){
$('.toggle-class').change(function(){
  var status=$(this).prop('checked')==true ? 1:0;
  var id=$(this).data('id');
  console.log(status);
  
  $.ajax({
    type:"get",
    dataType: "json",
    url:"{{url('admin/department/status')}}",
    data: {  'status':status, 'id':id },
    success:function(data)  {
       consoloe.log(data.success)


    }
  });

});
});
</script>

@endpush
