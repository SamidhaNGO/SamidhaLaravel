@extends('layouts.admin')

@push('stylesheets')
    <link href="{{ asset('css/lib/dataTables.bootstrap.min.css') }}"  rel="stylesheet">
@endpush

@section('main_container')
<table id="volunteersList" class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
          <tr>
              <th>Name</th>
              <th>Date Of Birth</th>
              <th>Contact Number</th>
              <th>Email</th>
              <th>City</th>
              <!-- <th>Actions</th> -->
          </tr>
      </thead>
      <tfoot>
          <tr>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>City</th>
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
         @foreach($volunteers as $volunteer)
          <tr>
              <td>{{$volunteer->first_name}} {{$volunteer->last_name}}</td>
              <td>{{$volunteer->dob}}</td>
              <td>{{$volunteer->contact_number}}</td>
              <td>{{$volunteer->email}}</td>
              <td>{{$volunteer->city}}</td>
              <!-- <td>
                <div class="actionnavbar hidden-small">
                  <a id="isVisible-{{$volunteer->id}}" onclick="setUserStatus({{$volunteer->id}}, '{{$volunteer->is_visible}}', 'is_visible');" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Set homepage visibility status">
                    <span class="glyphicon glyphicon-eye-open"></span>
                  </a>
                  <a id="isActive-{{$volunteer->id}}" onclick="setUserStatus({{$volunteer->id}}, '{{$volunteer->is_active}}', 'is_active');" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Set activation status">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                  </a>
                  <a href="/admin/volunteer/edit/{{$volunteer->id}}" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Edit">
                    <span class="glyphicon glyphicon-pencil"></span>
                  </a>
                </div>
              </td> -->
          </tr>
           @endforeach
      </tbody>
  </table>
@endsection
@include('partials/dialog/confirmation')
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

  function setUserStatus (volunteerId, status, type) {
    $('#confirmationVolunteerId').val(volunteerId);
    $('#confirmationStatus').val(status);
    $('#confirmationType').val(type);
    var msg = 'Do you want to ';
    switch (type) {
      case 'is_visible':
        msg += status === 'N' ? 'visible this user to homepage' : 'disabled this user from homepage';
        break;
      case 'is_active':
        msg += status === 'N' ? 'activate this user' : 'deactivate this user';
        break;
    }
    msg += '?';
    $('#confirmationMsg').html(msg);
    $('#statusConfirmationModal').modal('show');
  }

  function getUserStatus () {
    var volunteerId = $('#confirmationVolunteerId').val(),
        status = $('#confirmationStatus').val(),
        type = $('#confirmationType').val();
    switch (type) {
      case 'is_visible':
        divId = 'isVisible-'+volunteerId;
        statusMsg = status === 'N' ? 'Disabled' : 'Visible';
        statusMsg += ' to homepage';
        glyphIcon = status === 'N' ? 'glyphicon-eye-open' : 'glyphicon-eye-close';
        break;
      case 'is_active':
        divId = 'isActive-'+volunteerId;
        statusMsg = status === 'N' ? 'Deactivate' : 'Activate';
        glyphIcon = status === 'N' ? 'glyphicon-thumbs-up' : 'glyphicon-thumbs-down';
        break;
    }

    event.preventDefault();

    $.ajax({
       url: host +'/admin',
       dataType: 'json',
       data: {format: 'json'},
       type: 'POST',
       error: function() {
          $('#info').html('<p>An error has occurred</p>');
       },
       success: function(data) {
          var $title = $('<h1>').text(data.talks[0].talk_title);
          var $description = $('<p>').text(data.talks[0].talk_description);
       },
    });
  }
</script>
@endpush
