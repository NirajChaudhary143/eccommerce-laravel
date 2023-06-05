
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.admin_css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @php
            if(!isset($category))
             echo '<div class="row">
                <div class="col-lg-6 grid-margin stretch-card">';
            @endphp    
                  <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">{{$title}}</h4>
                          @if(session()->has('success'))
                          <span class="alert alert-success">

                            {{session('success')}}
                            
                          </span>
                          <br><br>

                          @endif
                          @if(session()->has('fail'))
                          <span class="alert alert-warning">

                            {{session('fail')}}
                            
                          </span>
                          <br><br>

                          @endif
                          <!-- <p class="card-description"> Basic form layout </p> -->

                          {!! Form::open([
                            'url'=> $url,
                            'class'=>'forms-control',
                            'method'=>'POST'
                            ]) !!}
                          <!-- <form action="{{ route('add.category') }}" class="forms-sample" method="POST"> -->
                          
                            <div class="form-group">
                              {!! Form::label('','Category Name') !!}
                              {!! Form::text('category_name',isset($category) ? $category->category_name: '' ,['class'=>'form-control', 'style'=>'color:white;background:black','placeholder'=>'Fruits, Vegitables, etc...']) !!}
                             
                            </div>
                            @error('category_name')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                        

                            {!! Form::submit($submit,['class'=>'btn btn-primary mr-2']) !!}
                          {!! Form::close() !!}
                        </div>
                      </div>
                      @if(!isset($category))
                    </div>
                    @endif

                      <!-- Table -->
                      @if(!isset($category))
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Category Table</h4>
                        <!-- <p class="card-description"> Add class <code>.table</code>
                        </p> -->
                        <div class="table-responsive">
                          <table class="table" id="category_table">
                            <thead>
                              <tr>
                                <th>S.N.</th>
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Action</th>
                                <!-- <th>Status</th> -->
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($categories as $category)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->category_id}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>
                                  <a href="{{ route('delete.category',[ 'id' =>$category->category_id])}}" class="btn btn-danger">Delete</a>
                                  <a href="{{ route('edit.category',[ 'id' =>$category->category_id])}}" class="btn btn-success">Edit</a>
                                </td>
                                <!-- <td><label class="badge badge-danger">Pending</label></td> -->
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  @if(!isset($category))
                </div>
            @endif
            @endif
                      <!-- Table End -->
                
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>