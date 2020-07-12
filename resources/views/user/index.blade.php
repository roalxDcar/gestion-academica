@extends('layouts.principal')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Administradores
                </h3>
            </div>
            <div class="title_right">
                <div class="col-md-3 col-sm-3 form-group pull-right top_search">
                    <span>
                        <a href="{{ route('user.create') }}">
                            <button class="btn btn-success" type="button">
                                <i class="fa fa-plus">
                                </i>
                                Nuevo Usuario
                            </button>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel table-responsive">
                    <div class="x_title">
                        <h2>
                            Listado de Administradores
                        </h2>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Ingresar Cedula de Identidad" type="text">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" style="color:white;" type="button">
                                                Buscar
                                            </button>
                                        </span>
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Cedula de Identidad
                                        </th>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Ap. Paterno
                                        </th>
                                        <th>
                                            Ap. Materno
                                        </th>
                                        <th>
                                            Correo Electrónico
                                        </th>
                                        <th>
                                            Dirección
                                        </th>
                                        <th>
                                            Celular
                                        </th>
                                        <th class="text-center">
                                            Estado
                                        </th>
                                        <th class="text-center">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <th scope="row">
                                            {{ $user->id }}
                                        </th>
                                        <td>
                                            {{ $user->ci }}
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->first_name }}
                                        </td>
                                        <td>
                                            {{ $user->last_name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->address }}
                                        </td>
                                        <td>
                                            {{ $user->mobil }}
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-round btn-{{ $user->state?'success':'danger' }} btn-xs" type="button">
                                                {{ $user->state?'Activo':'Inactivo' }}
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('user.edit', $user->id) }}">
                                                <button class="btn btn-primary btn-xs" type="button">
                                                    <i class="fa fa-edit">
                                                    </i>
                                                </button>
                                            </a>
                                            <a href="{{ route('user.state',$user->id) }}" title="{{ $user->state?'Desactivar':'Activar' }}">
                                                <button class="btn btn-{{ $user->state?'danger':'success' }} btn-xs modalState" type="submit">
                                                    <i class="fa fa-{{ $user->state?'times':'check' }}">
                                                    </i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
