@extends('layouts.backend')

@section('title', 'Utilisateurs')

@section('css')
@endsection



@section('body')

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Utilisateurs</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol> --}}
                            @can('view_users')
                            <a  href="{{ route('users.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Liste des utilisateurs</a>
                            @endcan
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Detail utilisateur</h4>
                            </div>
                            <div class="card-body">

                                    <div class="form-body">
                                            <h3 class="card-title">Person Info</h3>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label class="control-label">Nom</label>
                                                        <input type="text" class="form-control" value="{{ $user->nom }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                            <label class="control-label">Preoms</label>
                                                         <input type="text" class="form-control" value="{{ $user->prenoms }}" readonly>

                                                    </div>
                                                </div>

                                            </div>

                                         <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                            <label class="control-label">Email</label>
                                                            <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                            <label class="control-label">Contact 1</label>
                                                            <input type="text" class="form-control" value="{{ $user->contact_1 }}" readonly>

                                                    </div>
                                                </div>

                                            </div>


                                        <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                            <label class="control-label">Contact 2</label>
                                                            <input type="text" class="form-control" value="{{ $user->contact_2 }}" readonly>
                                                    </div>
                                                </div>



                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label class="control-label">Role</label>
                                                                <input type="text" class="form-control" value="{{ $user->roles->implode('display_name', ' ,') }}" readonly>
                                                        </div>
                                                </div>



                                            </div>


                                        </div>

                            </div>
                        </div>
                    </div>
                </div>

@endsection

    @section('js')
    @endsection

