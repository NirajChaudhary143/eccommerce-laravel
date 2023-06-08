
                          <!-- <form action="{{ route('add.category') }}" class="forms-sample" method="POST"> -->
                            @if(!isset($category))
                              {!! Form::model([
                            'route'=>'add.category',
                            'class'=>'forms-control',
                            'method'=>'POST'
                            ]) !!}

                            @else
                            {!! Form::model($category,[
                                        'route'=>['update.category',$category->category_id],
                                        'method'=>'post'
                                        ]) !!}

                            @endif
                            <div class="form-group">
                              {!! Form::label('','Category Name') !!}
                              {!! Form::text('category_name',null,['class'=>'form-control', 'style'=>'color:white;background:black','placeholder'=>'Fruits, Vegitables, etc...']) !!}
                             
                            </div>
                            @error('category_name')
                              <span class="alert alert-warning">
                                  {{$message}}
                                  </span><br><br>
                            @enderror
                        

                            {!! Form::submit($submit,['class'=>'btn btn-primary mr-2']) !!}

                            {!! Form:close() !!}
