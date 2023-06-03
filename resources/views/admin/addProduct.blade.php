
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
            
                
                  <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Add Product</h4>
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
                          <form action="{{ route('add.product') }}" class="forms-sample" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="exampleInputCategory">Category Name</label>
                              <input type="text" class="form-control" name="category" id="exampleInputCategory" style="color:white;background:black" placeholder="Fruits, Vegitables, etc...">
                            </div>
                            @error('category')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              <label for="exampleInputCategory">Category Name</label>
                              <input type="text" class="form-control" name="category" id="exampleInputCategory" style="color:white;background:black" placeholder="Fruits, Vegitables, etc...">
                            </div>
                            @error('category')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              <label for="exampleInputCategory">Category Name</label>
                              <input type="text" class="form-control" name="category" id="exampleInputCategory" style="color:white;background:black" placeholder="Fruits, Vegitables, etc...">
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>