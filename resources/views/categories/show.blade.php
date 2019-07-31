@extends('layouts.backend')

@section('title', 'categorys')

@section('css')
@endsection



@section('body')

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">category</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol> --}}
                            @can('view_categories')
                            <a  href="{{ route('categories.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Liste des categories</a>
                            @endcan
                        </div>
                    </div>
                </div>


                <div class="row">

                 <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card"> <img class="card-img" src="{{ asset($category->image) }}" height="306" alt="Card image">
                            {{-- <div class="card-img-overlay  text-white social-profile d-flex justify-content-center">
                                <div class="align-self-center"> <img src="{{ asset($category->image) }}" class="card-img" height="306" width="306">
                                   
                                </div>
                            </div> --}}
                        </div>

                    </div>

                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Detail category</h4>
                            </div>
                            <div class="card-body">

                                    <div class="form-body">
                                            {{-- <h3 class="card-title">Person Info</h3> --}}
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label class="control-label">Title</label>
                                                        <input type="text" class="form-control" value="{{ $category->title }}" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                            <label class="control-label">Description</label>
                                                         <<textarea class="form-control" rows="5"  readonly="true">{{ $category->description }}</textarea> 
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

