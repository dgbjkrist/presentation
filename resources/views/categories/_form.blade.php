                                    <div class="form-body">
                                       {{--  <h3 class="card-title">Category</h3> --}}
                                

                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('title')) has-danger @endif">
                                                        <label class="control-label">Title<span class="text-danger">*</span></label>
                                                        {!! Form::text('title', null, ['class' => "form-control @if ($errors->has('title')) form-control-danger @endif"]) !!}
                                                        @if ($errors->has('title')) <p class="form-control-feedback">{{ $errors->first('title') }}</p> @endif
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-6 ">

                                        <div class="form-group  @if ($errors->has('image')) has-danger @endif">
                                        <h5>Image produit <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control @if ($errors->has('image')) form-control-danger @endif"> </div>
                                    </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                        <div class="form-group @if ($errors->has('description')) has-danger @endif">
                                        <h5>Description du produit <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="description" id="textarea" class="form-control  @if ($errors->has('description')) form-control-danger @endif"  placeholder="" rows="10">@if(isset($category->id)) {!! $category->description !!} @endif</textarea>
                                        </div>
                                    </div>
                                </div>
                                        </div>



                                    </div>
