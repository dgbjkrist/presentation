@extends('layouts.backend')

@section('title', 'Tableau de Bord')

@section('css')
@endsection




@section('body')

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Tableau de Bord</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol>
                            @can('view_users')
                            <a  href="{{ route('users.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Liste Utilisateur</a>
                            @endcan --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Monthly Report</h4>
                                <div id="bar-chart" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection

@section('js')
    <!-- Chart JS -->
    <script src="/assets/node_modules/echarts/echarts-all.js"></script>
    <script src="/assets/node_modules/echarts/echarts-init.js"></script>
@endsection
