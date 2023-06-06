
                            <div class="form-group">
                                {!! Form::label('','Title') !!}  
                                {!! Form::text('product_title',null,[
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
                              {!! Form::text('product_description',null,[
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
                              {!! Form::number('product_quantity',null,[
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
                              {!! Form::text('discount_price',null,[
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
                              {!! Form::text('product_price',null,[
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
                              {!! Form::select('product_category',$categories->pluck('category_name','category_id'),isset($product) ? $product->category_id : '',[
                                'class'=>'form-control',
                                'style'=>'color:white',
                                ]) !!}
                               
                               
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
                        
                          
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                           

                          
                        