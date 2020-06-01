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
    <h1>Apply For Book</h1>
   
    <div class="row">
            <form class="col-md-6" style="padding-top: 100px; padding-bottom: 100px; " action="{{ route('applybook')}}" method="POST">
            @csrf 

            <div class="form-group">
            <div class="form-group">
                    <label for="Title of The Book"> Book ID</label>
                    <input type="text" class="form-control" name="bookid" required >
                </div>
                
                <div class="form-group">
                    <label for="Title of The Book">Title of The Book</label>
                    <input type="text" class="form-control" name="booktitle" required >
                </div>
                <div class="form-group">
                    <label for="Author Name">Author Name</label>
                    <input type="text" class="form-control" name="authorname" required>
                </div>    
                <div class="form-group">
                    <label for="ID">ID</label>
                    <input type="text" class="form-control" name="useridno" required>
                </div>    
              
             
           
            
            <input type="submit" class="btn btn-primary" value="Submit">
          </form>
            </div>


    </div>
    <!-- /.content -->
  </div>
  
  @endsection