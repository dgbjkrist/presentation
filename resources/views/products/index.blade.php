@extends('layouts.backend')

@section('title', 'products')

@section('css')

@endsection


@section('body')

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">products</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol> --}}
                            @can('add_products')
                            <a  href="{{ route('products.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Nouvel products</a>
                            @endcan
                        </div>
                    </div>
                </div>

<div class="row">
        <div class="col-12">

                            <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prix</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->prix }}</td>
                                            <td>{{ $product->category->title }}</td>
                                            
                                            <td>
                                                    @include('components._actions', [
                                                        'entity' => 'products',
                                                        'id' => $product->id
                                                    ])
                                            </td>

                                    </tr>
                                @endforeach


                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

@endsection

@section('js')

     <!-- This is data table -->
    <script src="/assets/node_modules/datatables/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping

        });
    });
    
    </script>

    <script src="/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

@endsection