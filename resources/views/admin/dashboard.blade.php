@extends('admin.master');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div>
    <h1>wellcome</h1>
    @if(session('message'))
    <div class="alert-default-success">
    {{session('message')}}
    </div>
    @endif
    <div class="row">
      <table class="table table-dark">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>

    </tr>
  </thead>
  <tbody>
    @foreach($user as $row)
    <tr>
      <th scope="row">{{ $row->name }}</th>
      <th scope="row">{{ $row->email }}</th>
      <th scope="row">{{ $row->role }}</th>
      <th scope="row">@if($row->status == 0) Inactive @else Active @endif</th>
      <th><a href="{{ route('status',['id'=> $row->id])}}">@if($row->status == 1) Inactive @else Active @endif</a></th>
      
      
    </tr>
    @endforeach
  </tbody>
</table>
            </div>

    </table>
    </div>
    <!-- /.content -->
  </div>
  
  @endsection