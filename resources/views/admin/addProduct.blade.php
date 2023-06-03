
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
                          <form action="{{ route('add.product') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                              <label for="">Title</label>
                              <input type="text" class="form-control" name="product_title" id="" style="color:white;background:black" placeholder="">
                            </div>
                            @error('product_title')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              <label for="">Product Description</label>
                              <input type="text" class="form-control" name="description" id="" style="color:white;background:black" placeholder="">
                            </div>
                            @error('description')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              <label for="">Product Quantity</label>
                              <input type="number" class="form-control" name="product_quantity" id="" style="color:white;background:black" placeholder="">
                            </div>
                            @error('product_quantity')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              <label for="">Discount Price</label>
                              <input type="text" class="form-control" name="discount_price" id="" style="color:white;background:black" placeholder="">
                            </div>
                            @error('discount_price')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            
                            <div class="form-group">
                                <label for="">Slect Category</label>
                                <select class="form-control" id="" style="color:white" name="product_category">
                                    @foreach($categories as $category)
                                <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
                                <!-- <option>Female</option> -->
                                     @endforeach
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Product Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image" placeholder="Choose Product Image">
                                </div>
                            </div>
                        
                          
                            <button type="submit" class="btn btn-primary mr-2">Add Product</button>
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