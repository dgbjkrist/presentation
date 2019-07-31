@extends('layouts.backend')

@section('title', 'categoriess')

@section('css')
@endsection




@section('body')

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Modifier categories</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol> --}}
                            @can("view_categories")
                            <a  href="{{ route('categories.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Liste categories</a>
                            @endcan
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <hr>
                                <h4 class="m-b-0 text-white">Modifier categories</h4>
                            </div>
                            <div class="card-body">
                      {!! Form::model($category, ['method' => 'PUT', 'url' => route('categories.update',$category->id),'enctype' => 'multipart/form-data']) !!}
                        @include('categories._form')
                            <div class="card-body">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @if(isset($category->id)) {!! "Save" !!}  @else {!! "Update" !!} @endif</button>
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
    @endsection

