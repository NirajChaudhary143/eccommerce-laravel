
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
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                
                  <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Add Title</h4>
                          @if(session()->has('success'))
                          <span class="alert alert-success">

                            {{session('success')}}
                            
                          </span>
                          <br><br>

                          @endif
                          <!-- <p class="card-description"> Basic form layout </p> -->
                          <form action="{{ route('add.category') }}" class="forms-sample" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="exampleInputCategory">Category Name</label>
                              <input type="text" class="form-control" name="category" id="exampleInputCategory" placeholder="Fruits, Vegitables, etc...">
                            </div>
                            @error('category')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                        
                          
                            <button type="submit" class="btn btn-primary mr-2">Add Category</button>
                            <!-- <button class="btn btn-dark">Cancel</button> -->
                          </form>
                        </div>
                      </div>
                    </div>

                      <!-- Table -->
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
                                  <a href="#" class="btn btn-danger">Delete</a>
                                  <a href="#" class="btn btn-success">Edit</a>
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
            </div>
                      <!-- Table End -->
                
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>