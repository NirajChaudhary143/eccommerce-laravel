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
                    <h4 class="card-title">Edit Category</h4>
                    <!-- <p class="card-description"> Basic form layout </p> -->
                    <form class="forms-sample" action="{{ route('update.category',['id'=>$category->category_id])}}" method="POST">
                        @csrf
                            <!-- <div class="form-group">
                              <label for="exampleInputCategory">Category ID</label>
                              <input type="text" class="form-control" name="category_id" id="exampleInputCategory" style="color:white;background:black" value="{{$category->category_id}}">
                            </div>
                            @error('category_id')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror -->
                            <div class="form-group">
                              <label for="exampleInputCategory">Category Name</label>
                              <input type="text" class="form-control" name="category_name" id="exampleInputCategory" style="color:white;background:black" value="{{$category->category_name}}">
                            </div>
                            @error('category_name')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                      
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <!-- <button class="btn btn-dark">Cancel</button> -->
                    </form>
                  </div>
                </div>
            



          </div>
        </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>


