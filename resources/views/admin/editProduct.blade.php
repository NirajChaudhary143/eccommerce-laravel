
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
                          <!-- <form action="{{ route('update.product',['id'=>$product->product_id]) }}" class="forms-sample" method="POST" enctype="multipart/form-data"> -->

                          {!! Form::open([
                              'route'=> ['update.product','id'=>$product->product_id],
                              'class'=> 'forms-sample',
                              'enctype'=>'multipart/form-data',
                              'method'=>'post'
                            ]) !!}
                          
                            <div class="form-group">
                              {!! Form::label('forProductTitle','Product Title') !!}
                              {!! Form::text('product_title',$product->product_title,['class'=>'form-control','style'=>'color:white;background:black', 'id'=>'forProductTitle' ]) !!}
                              <!-- <label for="">Title</label>
                              <input type="text" class="form-control" name="product_title" id="" style="color:white;background:black" placeholder="" value="{{$product->product_title}}"> -->
                            </div>
                            @error('product_title')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              {!! Form::label('forDescription','Product Description') !!}
                              {!! Form::text('description',$product->product_description,['class'=>'form-control', 'id'=>'forDescription', 'style'=> 'color:white;background:black']) !!}
                             
                            </div>
                            @error('description')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">

                            {!! Form::label('forProductQuantity','Product Quantity') !!}
                            {!! Form::text('product_quantity',$product->product_quantity,['class'=>'form-control','id'=>'forProductQuantity','style'=>'color:white;background:black']) !!}
                              
                            </div>
                            @error('product_quantity')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              {!! Form::label('forDiscount','Discount Price') !!}
                              {!! Form::text('discount_price',$product->discount_price, [
                                'class'=>'form-control',
                                'id'=>'forDiscount',
                                'style'=>'color:white;background:black'
                                ]) !!}
                              <!-- <label for="">Discount Price</label>
                              <input type="text" class="form-control" name="discount_price" id="" style="color:white;background:black" placeholder="" value="{{$product->discount_price}}"> -->
                            </div>
                            @error('discount_price')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                            {!! Form::label('forProductPrice','Product Price') !!}
                              {!! Form::text('product_price',$product->product_price, [
                                'class'=>'form-control',
                                'id'=>'forProductPrice',
                                'style'=>'color:white;background:black'
                                ]) !!}
                             
                            </div>
                            @error('product_price')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            
                            <div class="form-group">
                              {!! Form::label('forSelectCategory','Select Category') !!}
                              {!! Form::select('product_category',$categories->pluck('category_name','category_id'),$product->category_id,['class'=>'form-control','id'=>'forSelectCategory','style'=>'color:white']) !!}
                                                          
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Product Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image" placeholder="Choose Product Image" >
                                </div>
                            </div>
                            @error('image')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                        
                          
                            <button type="submit" class="btn btn-primary mr-2">Update Product</button>
                            <!-- <button class="btn btn-dark">Cancel</button> -->
                          <!-- </form> -->{!! Form::close() !!}
                        </div>
                      

                      
                
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>