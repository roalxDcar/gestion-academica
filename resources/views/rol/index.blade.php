@extends('layouts.principal')
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Roles</h3>
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
            {{-- <a href="{{ route('role.create') }}">
                    <button class="btn btn-primary" type="button">
                        Nuevo Rol
                    </button>
                </a> --}}
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
              <h2>Lista Roles</h2>
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
                    <th>Descripcion</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                  <tr>
                    <th scope="row">{{ $role->role_id }}</th>
                    <td>{{ $role->description }}</td>

                  </tr>
                @endforeach
                </tbody>
              </table>
              <div class="text-center">{{ $roles->links() }}</div>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
            <div class="x_title">
                <h2>Nuevo Rol</h2>
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('role.store') }}" method="POST">
                    @csrf

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Descripción <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9">
                        <input type="text" id="first-name" name="description" required="required" class="form-control " placeholder="Ingrese Descripción">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button class="btn btn-default" type="reset">Limpiar</button>
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
