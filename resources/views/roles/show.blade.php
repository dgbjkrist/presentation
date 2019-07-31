@extends('layouts.backend')

@section('title', 'Roles')

@section('css')
@endsection




@section('body')


                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Details Roles</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
{{--                             <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 2</li>
                            </ol> --}}
                            <a  href="{{ route('roles.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Liste des Roles</a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Detail Role  {{ $role->display_name }}</h4>
                            </div>
                            <div class="card-body">
                                                    <form action="#">
                            <div class="form-body">
                                    <div class="row">
                                             <div class="col-12">
                                                     <hr class="m-t-0">
                                                             <div class="row">
                                                                 <div class="col-sm-12 col-lg-12">
                                                                         <div class="form-group">
                                                                                 <div class="form-group @if ($errors->has('display_name')) has-info @endif">
                                                                                     <label class="control-label">Nom*</label>
                                                                                     <input type="text" class="form-control" value="{{ $role->display_name }}" readonly>
                                                                                 </div>
                                                                             </div>
                                                                 </div>
                                                             </div>

                                                         </div>
                                                         <div class="card-body">

                                                             <div class="row">
                                                                     <div class="col-md-12">
                                                                         {!! Form::label('permissions*') !!}
                                                                         <div class="form-group row @if ($errors->has('permissions')) has-danger @endif">
                                                                                 @if(isset($role->permissions) && !empty($role->permissions))
                                                                                     @php
                                                                                         $perms_array = $permissions->chunk(4);
                                                                                         foreach($perms_array as $perms) {
                                                                                             echo '<div class="card" style="padding: 0.5rem; width: 18rem;">
                                                                                                 <ul class="list-group list-group-flush">';
                                                                                                     foreach($perms as $perm) {
                                                                                                         if($role->hasPermissionTo($perm->id)) {
                                                                                                             echo '
                                                                                                             <li class="list-group-item">
                                                                                                                 <label class="custom-control custom-checkbox">
                                                                                                                 <input type="checkbox" name="permissions[]" value="'.$perm->name.'" class="custom-control-input" checked disabled>
                                                                                                                 <span class="custom-control-label">'.$perm->name.'</span>
                                                                                                                 </label>
                                                                                                             </li>';
                                                                                                         }
                                                                                                         else {
                                                                                                             echo '
                                                                                                             <li class="list-group-item">
                                                                                                                 <label class="custom-control custom-checkbox">
                                                                                                                 <input type="checkbox" name="permissions[]" value="'.$perm->name.'" class="custom-control-input" disabled>
                                                                                                                 <span class="custom-control-label">'.$perm->name.'</span>
                                                                                                                 </label>
                                                                                                             </li>';
                                                                                                         }
                                                                                                     }
                                                                                                 echo '</ul>
                                                                                             </div>';
                                                                                         }
                                                                                     @endphp

                                                                                 @endif

                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                         </div>
                                         </div>

                                 </div>

                    </form>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

    @section('js')
    @endsection

