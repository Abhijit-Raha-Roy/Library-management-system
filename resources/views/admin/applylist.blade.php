@extends('admin.master');

@section('content');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Apply List</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Apply List</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="row">
      <table class="table table-dark">
  <thead>
    <tr>
    
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author Name</th>
      <th scope="col">ID</th>
      
      <th scope="col">Date</th>
      
     
    </tr>

    </tr>
  </thead>
  <tbody>
  @foreach($apply as $row)
    <tr>
      <th scope="row">{{ $row->book_id }}</th>
     
      <td>{{ $row->book_title }}</td>
      <td>{{ $row->author_name }}</td>
      <td>{{ $row->useridno }}</td>
      
      <td>{{ $row->created_at }}</td>
      <td></td>
      <td></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
    </div>
    <!-- /.content-header -->
    
  </div>
  
  @endsection