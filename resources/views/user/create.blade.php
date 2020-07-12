@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Administrador
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
                            Nuevo Administrador
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <form action="{{ route('user.store') }}" class="form-horizontal form-label-left" data-parsley-validate="" id="demo-form2" method="POST">
                            @csrf
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Nombre
                                </label>
                                <input class="form-control" id="name" name="name" placeholder="Introduza su Nombre" required="" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Apellido Paterno
                                </label>
                                <input class="form-control" name="first_name" placeholder="Introduzca Ap. Parterno" required="" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Apellido Materno
                                </label>
                                <input class="form-control" name="last_name" placeholder="Introduzca Ap. Materno" required="" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Cedula de Identidad
                                </label>
                                <input class="form-control" name="ci" placeholder="Introduzca C.I." type="text">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Correo Electronico
                                </label>
                                <input class="form-control" name="email" placeholder="Introduzca Email" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Genero
                                </label>
                                <br>
                                    <div class="btn-group" data-toggle="buttons" id="gender">
                                        <div class="radio">
                                            <label>
                                                <input checked="" name="gender" type="radio" value="1">
                                                    Masculino
                                                </input>
                                            </label>
                                            <label>
                                                <input name="gender" type="radio" value="0">
                                                    Femenino
                                                </input>
                                            </label>
                                        </div>
                                    </div>
                                </br>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Direccion
                                </label>
                                <input class="form-control" name="address" placeholder="Introduzca su Direccion Nro/Zona/Av. o Calle" type="text">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Celular
                                </label>
                                <input class="form-control" name="mobil" placeholder="Instroduzca Celular" type="number">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Fecha de Nacimiento
                                </label>
                                <input class="form-control" id="date-name" name="date_happy" type="date">
                                </input>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Estado Civil
                                </label>
                                <select class="form-control" name="civil_state">
                                    <option>
                                        Seleccione.......
                                    </option>
                                    @foreach ($civil_state as $civil)
                                    <option value="{{ $civil->civil_state_id }}">
                                        {{ $civil->description }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                <label>
                                    Provincia
                                </label>
                                <select class="form-control" name="province">
                                    <option>
                                        Seleccione...........
                                    </option>
                                    @foreach ($province as $prov)
                                    <option value="{{ $prov->province_id }}">
                                        {{ $prov->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-right" style="padding-top: 15px;">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12 offset-md-3">
                                        <div class="item form-group">
                                            <a href="{{ route('user.get') }}">
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
