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
                    <!-- <form class="forms-sample" action="{{ route('update.category',['id'=>$category->category_id])}}" method="POST"> -->
                      {!! Form::open([
                        'route' => ['update.category', 'id' => $category->category_id],
                        'method'=>'post'
                        ]) !!}
                        
                           
                            <div class="form-group">
                            {!! Form::label('exampleInputCategory','Category Name') !!}
                            {!! Form::text('category_name', $category->category_name, ['class'=>'form-control','id'=>'exampleInputCategory', 'style'=>'color:white;background:black']) !!}

                            </div>
                          
                            @error('category_name')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                      
                      <!-- <button type="submit" class="btn btn-primary mr-2">Update</button> -->
                      {!! Form::submit('Update',['class'=> 'btn btn-primary mr-2']) !!}
                      <!-- <button class="btn btn-dark">Cancel</button> -->
                    <!-- </form> -->

                    {!! Form::close() !!}
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


