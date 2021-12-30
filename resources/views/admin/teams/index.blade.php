@extends('layouts.admin')

@push('stylesheets')
    <link href="{{ asset("css/lib/dataTables.bootstrap.min.css") }}"  rel="stylesheet">
@endpush

@section('main_container')
<table id="volunteersList" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
          <tr>
              <th>Team Name</th>
              <th>Description</th>
              <th>Created By</th>
              <th>Status</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tfoot>
          <tr>
            <th>Team Name</th>
            <th>Description</th>
            <th>Created By</th>
            <th>Status</th>
            <th></th>
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
         @foreach($teams as $team)
          <tr>
              <td>{{$team->name}}</td>
              <td>{{$team->description}}</td>
              <td>{{$team->createdBy}}</td>
              <td>
                @if ($team->is_active == 'Y')
                <span class="label label-success pull-right">Active</span>
                @else
                <span class="label label-danger pull-right">In Active</span>
                @endif
              </td>
              <td>
               <div class="actionnavbar hidden-small">
                 <a href="/admin/team/edit/{{$team->id}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Edit">
                   <span class="glyphicon glyphicon-pencil"></span>
                 </a>
               </div>
             </td>
          </tr>
           @endforeach
      </tbody>
  </table>
@endsection
@push('scripts')
<script src="{{ asset("js/lib/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("js/lib/dataTables.bootstrap.min.js") }}"></script>
<script>
  $(document).ready(function() {
      $('#volunteersList').DataTable({
          "scrollY"       : "400px",
          "scrollCollapse": true,
          "paging"        : false
      });
  });
</script>
@endpush
