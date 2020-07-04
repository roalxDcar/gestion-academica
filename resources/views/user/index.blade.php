@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Administradores</h3>
        </div>

        {{-- <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Ingrese búsqueda">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
              </span>
            </div>
          </div>
        </div> --}}
        <div class="title_right">

        <div class="col-md-3 col-sm-3   form-group pull-right top_search">
            {{-- <div class="input-group"> --}}
            <span>
                <a href="{{ route('user.create') }}">
                    <button class="btn btn-primary" type="button">
                        Nuevo Usuario
                    </button>
                </a>
            </span>
            {{-- </div> --}}
        </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row" style="display: block;">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Listado de Administradores</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>

              <div class="title_right">
                    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ingresar Cedula de Identidad">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" style="color:white;">Buscar</button>
                        </span>
                    </div>
                    </div>
              </div>

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                <table class="table">
                 <thead>
                  <tr>
                    <th>#</th>
                    <th>Cedula de Identidad</th>
                    <th>Nombre</th>
                    <th>Ap. Paterno</th>
                    <th>Ap. Materno</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                    <th>Celular</th>
                    <th></th>
                  </tr>
                 </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->ci }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->mobil }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}">
                            <button type="button" class="btn btn-round btn-info">
                                <i class="fa fa-edit"></i> Editar
                            </button>
                        </a>


                    </td>
                    <td>
                      <button type="button" class="btn btn-round btn-warning">Activo</button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
@endsection
