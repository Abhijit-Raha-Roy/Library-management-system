@extends('user.usermaster');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
    <h1>About</h1>
   
    <hr>
    <p>Name : {{ Auth::user()->name }}</p>  
    <p>Role : {{ Auth::user()->role }}</p>  
    <p>Id   : {{ Auth::user()->useridno }}</p>
    <p>Email : {{ Auth::user()->email }}</p>



    </div>
    <!-- /.content -->
  </div>
  
  @endsection