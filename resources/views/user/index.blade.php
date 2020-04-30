@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Usuarios <small> - Lista de Usuarios</small></h3>
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
        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Basic Tables <small>basic table subtitle</small></h2>
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
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>


        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Stripped table <small>Stripped table subtitle</small></h2>
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
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
