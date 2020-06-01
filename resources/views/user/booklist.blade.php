@extends('user.usermaster');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
    <h1>All Book</h1>
    <form class="form-inline" action="{{ route('/findbook') }}" method="get">
            @csrf
            <input type="text" name="search" class="form-control" placeholder="Enter Book Title">
            <input type="submit" class="btn btn-success" value="search">
            </form>
    <div class="row">
      <table class="table table-dark">
  <thead>
    <tr>
    
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author Name</th>
      <th scope="col">Description</th>
      
      <th scope="col">Number Of Issue</th>
      
     
    </tr>

    </tr>
  </thead>
  <tbody>
  @foreach($book as $row)
    <tr>
      <th scope="row">{{ $row->book_id }}</th>
     
      <td>{{ $row->book_title }}</td>
      <td>{{ $row->author_name }}</td>
      <td>{{ $row->description }}</td>
      
      <td>{{ $row->numberofissue }}</td>
      <td></td>
      <td></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
   
    </div>
    <!-- /.content -->
  </div>
  
  @endsection