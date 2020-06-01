@extends('admin.master');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Currently Issue Book</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Currently Issue Book</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row">
      <table class="table table-dark">
  <thead>
    <tr>
    
      <th scope="col">Book ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author Name</th>
      
    </tr>

    </tr>
  </thead>
  <tbody>
  @foreach($book as $row)
    <tr>
      
     
      <td>{{ $row->book_id }}</td>
      <td>{{ $row->useridno}}</td>
      <td>{{ $row->issuedate }}</td>
      <td>{{ $row->returndate }}</td>
      <td>{{ $row->book_title }}</td>
      <td>{{ $row->author_name }}</td>
      
      
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
    </div>
    <!-- /.content-header -->
    
  </div>
  
  @endsection