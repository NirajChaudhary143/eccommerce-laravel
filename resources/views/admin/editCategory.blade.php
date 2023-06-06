
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
                                    {!! Form::model($category,[
                                        'route'=>['update.category',$category->category_id],
                                        'method'=>'post'
                                        ]) !!}
                                        
                                        @include('admin.categoryForm')

                                    {!! Form::close() !!}

                                </div>
                        </div>
                    
          </div>
        </div>