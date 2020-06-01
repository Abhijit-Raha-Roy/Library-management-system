@extends('admin.master');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ADD BOOK</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add-Book</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row">
            <form class="col-md-6" style="padding-top: 100px; padding-bottom: 100px; " action="{{ route('storebook')}}" method="POST">
            @csrf 

            <div class="form-group">
            <div class="form-group">
                    <label for="Title of The Book"> Book ID</label>
                    <input type="text" class="form-control" name="bookid" >
                </div>
                
                <div class="form-group">
                    <label for="Title of The Book">Title of The Book</label>
                    <input type="text" class="form-control" name="booktitle" >
                </div>
                <div class="form-group">
                    <label for="Author Name">Author Name</label>
                    <input type="text" class="form-control" name="authorname" >
                </div>    
                <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" class="form-control" name="description" >
            </div>
            
            <div class="form-group">
                <label for="Numberofissue">Number of issues</label>
                <input type="text" class="form-control" name="numberofissue" >
            </div>
             
           
            
            <input type="submit" class="btn btn-primary" value="Submit">
          </form>
            </div>
    </div>
    <!-- /.content-header -->
    
  </div>
  
  @endsection