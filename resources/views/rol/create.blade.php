@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Roles y Permisos
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
                            <form action="{{ route('role.store') }}" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" method="POST">
                                    @csrf
                            <div class="item col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Descripción <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9">
                                    <input type="text" id="first-name" name="description" required="required" class="form-control " placeholder="Ingrese Descripción">
                                </div>
                            </div>

                            <div class="x_title">
                                    <h2>
                                        Lista de Permisos
                                    </h2>
                                    <div class="clearfix">
                                    </div>
                                </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" checked /> Checked
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" /> Unchecked
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
                            </label>
                          </div>
                        </div>
                      </div>










                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('role.get') }}">
                                                <button class="btn btn-dafault" type="button">
                                                    Cancelar
                                                </button>
                                            </a>
                                            <button class="btn btn-primary" type="submit">
                                                Guardar
                                            </button>
                                        </div>
                                    </div>
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
