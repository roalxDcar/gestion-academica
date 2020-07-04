@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <Ih3>Administrador</Ih3>
        </div>


        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Nuevo Administrador</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="#">Settings 1</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings 2</a>
                        </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="col-md-4 col-sm-12  form-group">
                        <label>Nombre</label>
                        <input type="text" placeholder="Introduza su Nombre" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="col-md-4 col-sm-12  form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" placeholder="Introduzca Ap. Parterno" class="form-control" name="first_name" required>
                    </div>

                    <div class="col-md-4 col-sm-12  form-group">
                        <label>Apellido Materno</label>
                        <input type="text" placeholder="Introduzca Ap. Materno" class="form-control" name="last_name" required>
                    </div>

                    <div class="col-md-4 col-sm-12  form-group">
                        <label>Cedula de Identidad</label>
                        <input type="text" placeholder="Introduzca C.I." class="form-control" name="ci">
                    </div>

                     <div class="col-md-4 col-sm-12  form-group">
                        <label>Correo Electronico</label>
                        <input type="text" placeholder="Introduzca Email" class="form-control" name="email">
                     </div>

                      <div class="col-md-4 col-sm-12  form-group">
                        <label>Genero</label><br>
                        <div id="gender" class="btn-group" data-toggle="buttons">
                            <div class="radio">
                                <label><input type="radio" name="gender" checked value="1"> Masculino </label> &nbsp;
                                <label><input type="radio" name="gender" value="0"> Femenino </label>
                            </div>
                        </div>
                      </div>


                      <div class="col-md-8 col-sm-12  form-group">
                        <label>Direccion</label>
                        <input type="text" placeholder="Introduzca su Direccion Nro/Zona/Av. o Calle" class="form-control" name="address">
                      </div>

                      <div class="col-md-4 col-sm-12  form-group">
                        <label>Celular</label>
                        <input type="number" placeholder="Instroduzca Celular" class="form-control" name="mobil">
                      </div>

                      <div class="col-md-4 col-sm-12  form-group">
                        <label>Fecha de Nacimiento</label>
                        <input id="date-name" class="form-control" type="date" name="date_happy">
                      </div>

                      <div class="col-md-4 col-sm-12  form-group">
                        <label>Estado Civil</label>
                        <select class="form-control" name="civil_state">

                            <option>Seleccione.......</option>

                            @foreach ($civil_state as $civil)
                               <option value="{{ $civil->civil_state_id }}">
                                    {{ $civil->description }}
                                </option>
                            @endforeach

                        </select>

                      </div>


                      <div class="col-md-4 col-sm-12  form-group">
                        <label>Provincia</label>
                        <select class="form-control" name="province">
                            <option>Seleccione...........</option>
                                @foreach ($province as $prov)
                                <option value="{{ $prov->province_id }}">
                                    {{ $prov->name }}
                                </option>
                                @endforeach
                        </select>

                      </div>


                   {{--    <div class="item form-group">

                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="name" required="required" class="form-control " name="name" placeholder="Introduzca su nombre">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Apellido Paterno <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="first_name" required="required" class="form-control" placeholder="Introduzca su apellido Paterno">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Apellido Materno <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="last-name" name="last_name" required="required" class="form-control" placeholder="Introduzca su Apellido Materno">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">CI</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input id="middle-name" class="form-control" type="number" name="ci" placeholder="Introduzca su Cedula de Identidad">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Correo Electronico</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input id="email-name" class="form-control" type="email" name="email" placeholder="Introduzca su Correo Electronico">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Género</label>
                        <div class="col-md-6 col-sm-6 ">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                            <div class="radio">
                                <label><input type="radio" name="gender" checked value="1"> Masculino </label> &nbsp;
                                <label><input type="radio" name="gender" value="0"> Femenino </label>
                            </div>

                          </div>
                        </div>
                    </div>

                    <div class="item form-group">
                            <label for="adress-name" class="col-form-label col-md-3 col-sm-3 label-align">Dirección</label>
                            <div class="col-md-6 col-sm-6 ">
                            <input id="adress-name" class="form-control" type="text-area" name="address" placeholder="Introduzca su Direccion Nro/Zona/Av. o Calle">
                            </div>
                        </div>

                    <div class="item form-group">
                        <label for="number-name" class="col-form-label col-md-3 col-sm-3 label-align">Celular</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="number-name" class="form-control" type="number" name="mobil" placeholder="instroduzca su Numero de Celular">
                        </div>
                    </div>

                    <div class="item form-group">
                            <label for="date-name" class="col-form-label col-md-3 col-sm-3 label-align">Fecha de Nacimiento</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="date-name" class="form-control" type="date" name="date_happy">
                            </div>
                        </div>


                        <div class="col-md-9 col-sm-9 ">
                                <select class="form-control" name="civil_state">

                                  <option>Seleccione Estado Civil</option>

                                  @foreach ($civil_state as $civil)
                                    <option value="{{ $civil->civil_state_id }}">
                                        {{ $civil->description }}
                                    </option>
                                  @endforeach

                                </select>
                              </div>

                              <div class="col-md-9 col-sm-9 ">
                                    <select class="form-control" name="province">
                                      <option>Seleccione la Provincia</option>
                                        @foreach ($province as $prov)
                                            <option value="{{ $prov->province_id }}">
                                                {{ $prov->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                  </div>
 --}}


                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <a href="{{ route('user.get') }}">
                            <button class="btn btn-primary" type="button">Cancelar</button>
                        </a>

                        <button class="btn btn-primary" type="reset">Limpiar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>

                    </form>
                </div>
                </div>
            </div>


                    <div class="row">




        </div>
    </div>
</div>



@endsection
