@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <h3>Administrador</h3>
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                        <label>Nombre</label>
                        <input type="text" placeholder="Introduza su Nombre" class="form-control" id="name" name="name" required value="{{ $user->name }}">
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12  form-group">
                        <label>Apellido Paterno</label>
                        <input type="text" placeholder="Introduzca Ap. Parterno" class="form-control" name="first_name" required value="{{ $user->first_name }}">
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Apellido Materno</label>
                    <input type="text" placeholder="Introduzca Ap. Materno" class="form-control" name="last_name" required value="{{$user->last_name}}">
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Cedula de Identidad</label>
                        <input type="text" placeholder="Introduzca C.I." class="form-control" name="ci" value="{{$user->ci}}">
                    </div>

                     <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Correo Electronico</label>
                        <input type="text" placeholder="Introduzca Email" class="form-control" name="email" value="{{$user->email}}">
                     </div>

                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Genero</label><br>
                        <div id="gender" class="btn-group" data-toggle="buttons">
                            <div class="radio">
                                <label><input type="radio" name="gender" value="1" {{$user->gender==1?'checked':''}}> Masculino </label> &nbsp;
                                <label><input type="radio" name="gender" value="0" {{$user->gender==0?'checked':''}}> Femenino </label>
                            </div>
                        </div>
                      </div>


                      <div class="col-md-8 col-sm-12 col-xs-12 form-group">
                        <label>Direccion</label>
                        <input type="text" placeholder="Introduzca su Direccion Nro/Zona/Av. o Calle" class="form-control" name="address" value="{{$user->address}}">
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Celular</label>
                        <input type="number" placeholder="Instroduzca Celular" class="form-control" name="mobil" value="{{$user->mobil}}">
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Fecha de Nacimiento</label>
                        <input id="date-name" class="form-control" type="date" name="date_happy">
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Estado Civil</label>
                        <select class="form-control col-md-4 col-sm-12 col-xs-12" name="civil_state">

                            <option>Seleccione.......</option>

                            @foreach ($civil_state as $civil)
                               <option value="{{ $civil->civil_state_id }}" {{$civil->civil_state_id==$user->civil_state_id?'selected':''}}>
                                    {{ $civil->description }}
                                </option>
                            @endforeach

                        </select>

                      </div>


                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Provincia</label>
                        <select class="form-control col-md-4 col-sm-12 col-xs-12" name="province">
                            <option>Seleccione...........</option>
                                @foreach ($province as $prov)
                        <option value="{{ $prov->province_id }}" {{$prov->province_id==$user->province_id?'selected':''}}>
                                    {{ $prov->name }}
                                </option>
                                @endforeach
                        </select>

                      </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <a href="{{ route('user.get') }}">
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
