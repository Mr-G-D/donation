@extends('layouts.admin')
@section('css')
<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('js')
<script>
$(document).ready( function () {
    var table = $('#dataTable').DataTable();
    table.column(6).visible(false);
    table.order([ 6, 'desc' ],[ 2, 'desc' ]).draw();
} );
</script>
@endsection
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">All donations</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-md-12 mb-4">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Displaying {{ count($testimonials) }} testimonials</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover" id="dataTable">
            <thead>
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Date
                </th>
                <th>
                  Email ID
                </th>
                <th>
                  Message
                </th>            
                <th>
                  Options
                </th>
                <th>
                  Status
                </th>
              </tr>
            </thead>
            <tbody>
              @forelse($testimonials as $testimonial)
              <tr>
                <td>
                  {{ $testimonial->id }}
                </td>
                <td>
                  {{ $testimonial->name }}
                </td>
                <td>
                  {{ $testimonial->created_at->format('Y-m-d h:i') }}
                  <br />
                  <small>({{ $testimonial->created_at->diffForHumans()  }})</small>
                </td>
                <td>
                  {{ $testimonial->email }}
                </td>
                <td>
                  {{ $testimonial->message }}
                </td>
                <td>
                  <div class="dropdown mb-4">
                    <button class="btn {{ array('btn-secondary','btn-primary','btn-success')[$testimonial->status] }} dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ array('Unapproved','Approved','Featured')[$testimonial->status] }}
                    </button>
                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" style="">
                      @if($testimonial->status==0 || $testimonial->status==1)<a class="dropdown-item" href="#">Featured</a>@endif
                      @if($testimonial->status==0 || $testimonial->status==2)<a class="dropdown-item" href="#">Approved</a>@endif
                      @if($testimonial->status==1 || $testimonial->status==2)<a class="dropdown-item" href="#">Unapproved</a>@endif
                    </div>
                  </div>
                </td>
                <td>
                  {{ $testimonial->status }}
                </td>
              </tr>
              @empty
                <div class="alert alert-danger">
                  Ooops. No testimonials found.
                </div>
              @endforelse
            </tbody>
          </table>

          <?php
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection