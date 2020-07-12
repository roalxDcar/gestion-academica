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

                            <div class="col-md-8 col-sm-12 col-xs-12 form-group">
                                <ul class="list-unstyled">
                                {{-- @foreach ($roles as $role) --}}
                                    <li>
                                        <label>
                                            <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;">
                                                <span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;">
                                                    <small style="left: 12px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small>
                                                </span> Activado
                                        </label>
                                    </li>
                                {{-- @endforeach --}}
                                </ul>
                            </div>

                            <div class="form-group row">
                                    <div class="col-md-9 col-sm-9 ">
                                      <div class="">
                                        <label>
                                          <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small></span> Checked
                                        </label>
                                      </div>
                                      <div class="">
                                        <label>
                                          <input type="checkbox" class="js-switch" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span> Unchecked
                                        </label>
                                      </div>
                                      <div class="">
                                        <label>
                                          <input type="checkbox" class="js-switch" disabled="disabled" data-switchery="true" readonly="" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s; opacity: 0.5;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span> Disabled
                                        </label>
                                      </div>
                                      <div class="">
                                        <label>
                                          <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" data-switchery="true" readonly="" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s; opacity: 0.5;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span> Disabled Checked
                                        </label>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                        <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
                                          <br>
                                          <small class="text-navy">Normal Bootstrap elements</small>
                                        </label>

                                        <div class="col-md-9 col-sm-9 ">
                                          <div class="checkbox">
                                            <label>
                                              <div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Checked
                                            </label>
                                          </div>
                                          <div class="checkbox">
                                            <label class="">
                                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Unchecked
                                            </label>
                                          </div>
                                          <div class="checkbox">
                                            <label>
                                              <div class="icheckbox_flat-green disabled" style="position: relative;"><input type="checkbox" class="flat" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled
                                            </label>
                                          </div>
                                          <div class="checkbox">
                                            <label>
                                              <div class="icheckbox_flat-green checked disabled" style="position: relative;"><input type="checkbox" class="flat" disabled="disabled" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled &amp; checked
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label class="">
                                              <div class="iradio_flat-green checked" style="position: relative;"><input type="radio" class="flat" checked="" name="iCheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Checked
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label class="">
                                              <div class="iradio_flat-green" style="position: relative;"><input type="radio" class="flat" name="iCheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Unchecked
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                              <div class="iradio_flat-green disabled" style="position: relative;"><input type="radio" class="flat" name="iCheck" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                              <div class="iradio_flat-green checked disabled" style="position: relative;"><input type="radio" class="flat" name="iCheck3" disabled="disabled" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled &amp; Checked
                                            </label>
                                          </div>
                                        </div>
                                      </div>



                            <div class="">

                            </div>


                            <div class="form-group row">
                                    <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
                                      <br>
                                      <small class="text-navy">Normal Bootstrap elements</small>
                                    </label>

                                    <div class="col-md-9 col-sm-9 ">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="flat" checked="checked"> Checked
                                        </label>
                                      </div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="flat"> Unchecked
                                        </label>
                                      </div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="flat" disabled="disabled"> Disabled
                                        </label>
                                      </div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" class="flat" checked name="iCheck"> Checked
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" class="flat" name="iCheck"> Unchecked
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
                                        </label>
                                      </div>
                                      <div class="radio">
                                        <label>
                                          <input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
                                        </label>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Switch</label>
                                        <div class="col-md-9 col-sm-9 ">
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
