@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Rol
                </h3>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            Nuevo Rol
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('role.update', $role->role_id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                            <div class="item col-md-8 col-sm-12 col-xs-12 form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Descripción <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" id="first-name" name="description" required="required" class="form-control " required value="{{ $role->description }}">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{ route('role.get') }}">
                                        <button class="btn btn-default" type="button">Cancelar</button>
                                    </a>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
