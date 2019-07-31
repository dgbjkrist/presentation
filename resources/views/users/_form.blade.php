                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('nom')) has-danger @endif">
                                                        <label class="control-label">Nom*</label>
                                                        {!! Form::text('nom', null, ['class' => "form-control @if ($errors->has('nom')) form-control-danger @endif"]) !!}
                                                        @if ($errors->has('nom')) <p class="form-control-feedback">{{ $errors->first('nom') }}</p> @endif
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('prenoms')) has-danger @endif">
                                                        <label class="control-label">Prenoms*</label>
                                                        {!! Form::text('prenoms', null, ['class' => "form-control @if ($errors->has('prenoms')) form-control-danger @endif"]) !!}
                                                        @if ($errors->has('prenoms')) <p class="form-control-feedback">{{ $errors->first('prenoms') }}</p> @endif
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                     <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('email')) has-danger @endif">
                                                        <label class="control-label">Email*</label>
                                                        {!! Form::text('email', null, ['class' => "form-control @if ($errors->has('email')) form-control-danger @endif"]) !!}
                                                        @if ($errors->has('email')) <p class="form-control-feedback">{{ $errors->first('email') }}</p> @endif
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('contact_1')) has-danger @endif">
                                                        <label class="control-label">Contact 1*</label>
                                                        {!! Form::text('contact_1', null, ['class' => "form-control @if ($errors->has('contact_1')) form-control-danger @endif",'data-mask'=>"99 99 99 99"]) !!}
                                                        @if ($errors->has('contact_1')) <p class="form-control-feedback">{{ $errors->first('contact_1') }}</p> @endif
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('contact_2')) has-danger @endif">
                                                        <label class="control-label">Contact 2*</label>
                                                        {!! Form::text('contact_2', null, ['class' => "form-control @if ($errors->has('contact_2')) form-control-danger @endif",'data-mask'=>"99 99 99 99"]) !!}
                                                        @if ($errors->has('contact_2')) <p class="form-control-feedback">{{ $errors->first('contact_2') }}</p> @endif
                                                    </div>

                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <div class="form-group @if ($errors->has('roles')) has-danger @endif">
                                                    <label class="control-label">Role</label>
                                                    <select class="form-control @if ($errors->has('roles')) form-control-danger @endif custom-select" data-placeholder="Choose a Category" tabindex="1" name="roles">
                                                        <option value=""> --- --- </option>
                                                        @foreach($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                                                        @endforeach
                                                         @if ($errors->has('roles')) <p class="form-control-feedback">{{ $errors->first('roles') }}</p> @endif
                                                    </select>


                                                </div>
                                            </div>



                                        </div>


                                    </div>
