
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
                            'url'=>$url,
                            'class'=>'forms-control',
                            'mehtod'=>'post',
                            'enctype'=>'multipart/form-data'
                            ]) !!}
                         
                            <div class="form-group">
                                {!! Form::label('','Title') !!}  
                                {!! Form::text('product_title',isset($product) ? $product->product_title : old('product_title'),[
                                  'class'=>'form-control',
                                  'style'=>'color:white;background:black',
                                  ]) !!}
                           
                            </div>
                            @error('product_title')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                              {!! Form::label('','Product Description') !!}
                              {!! Form::text('description',isset($product) ? $product->product_description : old('description'),[
                                'class'=>'form-control',
                                  'style'=>'color:white;background:black',
                                ]) !!}
                             
                            </div>
                            @error('description')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                            {!! Form::label('','Product Quantity') !!}
                              {!! Form::number('product_quantity',isset($product)?$product->product_quantity:old('product_quantity'),[
                                'class'=>'form-control',
                                  'style'=>'color:white;background:black',
                                ]) !!}
                              
                              </div>
                            @error('product_quantity')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                            {!! Form::label('','Discount Price') !!}
                              {!! Form::text('discount_price',isset($product) ? $product->discount_price :old('discount_price'),[
                                'class'=>'form-control',
                                  'style'=>'color:white;background:black',
                                ]) !!}
                              
                            </div>
                            @error('discount_price')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            <div class="form-group">
                            {!! Form::label('','Product Price') !!}
                              {!! Form::text('product_price',isset($product) ? $product->product_price :old('product_price'),[
                                'class'=>'form-control',
                                  'style'=>'color:white;background:black',
                                ]) !!}
                              
                            </div>
                            @error('product_price')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                            
                            <div class="form-group">
                              {!! Form::select('product_category',$categories->pluck('category_name','category_id'),$product->category_id,[
                                'class'=>'form-control',
                                'style'=>'color:white',
                                ]) !!}
                                <!-- <label for="">Slect Category</label>
                                <select class="form-control" id="" style="color:white" name="product_category" value="{{old('product_category')}}">
                                    @foreach($categories as $category)
                                <option value="{{$category->category_id}}">{{ $category->category_name }}</option>
                                     @endforeach
                                </select> -->
                               
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                  {!! Form::label('','Product Image')!!}
                                  {!! Form::file('image',[
                                    'class'=>'form-control']) !!}
                                    
                                </div>
                            </div>
                            @error('image')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                        
                          
                            <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                           

                          {!! Form::close() !!}
                        </div>
                      

                      
                
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>