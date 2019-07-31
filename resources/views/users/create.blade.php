@extends('layouts.backend')

@section('title', 'Utilisateurs')

@section('css')
@endsection

@section('body')

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Nouvel Utilisateur</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol> --}}
                            @can('view_users')
                            <a  href="{{ route('users.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Liste Utilisateur</a>
                            @endcan
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Nouvel utilisateur</h4>
                            </div>
                            <div class="card-body">
                      {!! Form::open( ['method' => 'post', 'url' => route('users.store')]) !!}
                        @include('users._form')
                                    <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('password')) has-danger @endif">
                                                        <label class="control-label">Mot de passe par défaut*</label>
                                                        <input name ='password' type="password"  class ="form-control">
                                                        @if ($errors->has('password')) <p class="form-control-feedback">{{ $errors->first('password') }}</p> @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <div class="form-group @if ($errors->has('password_confirmation')) has-danger @endif">
                                                        <label class="control-label">Confirmation du mot de passe*</label>
                                                        <input name ='password_confirmation' type="password"  class ="form-control">
                                                        @if ($errors->has('password_confirmation')) <p class="form-control-feedback">{{ $errors->first('password_confirmation') }}</p> @endif

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                            <div class="card-body">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <a  href="{{url()->previous()}}" class="btn btn-primary">Cancel</a>
                                    </div>
                            </div>
                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

@endsection

    @section('js')

        <script src="/dist/js/pages/mask.js"></script>

    @endsection

