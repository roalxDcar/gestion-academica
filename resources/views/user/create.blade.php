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
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Nombre
                                            </label>
                                            <input class="form-control" id="name" name="name" placeholder="Introduza su Nombre" type="text">
                                            </input>
                                            @if($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Apellido Paterno
                                            </label>
                                            <input class="form-control" name="first_name" placeholder="Introduzca Ap. Parterno" type="text">
                                            </input>
                                            @if($errors->has('first_name'))
                                                <div class="text-danger">{{ $errors->first('first_name') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Apellido Materno
                                            </label>
                                            <input class="form-control" name="last_name" placeholder="Introduzca Ap. Materno" type="text">
                                            </input>
                                            @if($errors->has('last_name'))
                                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                                            @endif
                                        </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Cedula de Identidad
                                            </label>
                                            <input class="form-control" name="ci" placeholder="Introduzca C.I." type="number" value="{{old('ci')}}">
                                            </input>
                                            @if($errors->has('ci'))
                                                <div class="text-danger">{{ $errors->first('ci') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Correo Electronico
                                            </label>
                                            <input class="form-control" name="email" placeholder="Introduzca Email" type="text">
                                            </input>
                                            @if($errors->has('email'))
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            @endif
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
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Direccion
                                            </label>
                                            <input class="form-control" name="address" placeholder="Introduzca su Direccion Nro/Zona/Av. o Calle" type="text">
                                            </input>
                                            @if($errors->has('address'))
                                                <div class="text-danger">{{ $errors->first('address') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Celular
                                            </label>
                                            <input class="form-control" name="mobil" placeholder="Instroduzca Celular" type="number">
                                            </input>
                                            @if($errors->has('mobil'))
                                                <div class="text-danger">{{ $errors->first('mobil') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Fecha de Nacimiento
                                            </label>
                                            <input class="form-control" id="date-name" name="date_happy" type="date" value="{{old('date_happy')}}">
                                            </input>
                                            @if($errors->has('date_happy'))
                                                <div class="text-danger">{{ $errors->first('date_happy') }}</div>
                                            @endif
                                        </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Estado Civil
                                            </label>
                                            <select class="form-control" name="civil_state">
                                                <option value="">
                                                    Seleccione estado civil
                                                </option>
                                                @foreach ($civil_state as $civil)
                                                <option value="{{ $civil->civil_state_id }}" {{ old('civil_state')==$civil->civil_state_id?'selected':'' }}>
                                                    {{ $civil->description }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('civil_state'))
                                                <div class="text-danger">{{ $errors->first('civil_state') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                <label>
                                                    Departamento
                                                </label>
                                                <select class="form-control department" name="department" id="department">
                                                    <option value="">
                                                        Seleccione departamento
                                                    </option>
                                                    @foreach ($departments as $department)
                                                    <option value="{{ $department->department_id }}" {{ old('department')==$department->department_id?'selected':'' }}>
                                                        {{ $department->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('department'))
                                                <div class="text-danger">{{ $errors->first('department') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <label>
                                                Provincia
                                            </label>
                                            <select class="form-control province" name="province" disabled="disabled" >
                                                <option value="">Seleccione provincia</option>
                                            </select>
                                        </div>
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
<script>
    $(document).ready(function(){
        load_province();
    });
    $('.department').on('click',function(){
        load_province();
    });

    function load_province(){
        let arm="";
        $('.province').html('<option>Cargando...</option>');
        let department_id = $('#department').val();
        if(department_id != ""){

            console.log(this.prueba);
            $.ajax({
                url: "{{ url('provincia') }}/"+department_id,
                headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                method: "GET",
                success:function(data){
                    // console.log(data);
                    // data.forEach(province => )
                    arm = `<option value="">Seleccione provincia</option>`;
                    for(i in data){
                        arm += `<option value="`+ data[i].province_id +`">` + data[i].name +`</option>`;
                    }
                    $('.province').html(arm).removeAttr('disabled');
                }
            });
        }else{
            $('.province').html(`<option value="">Seleccione provincia</option>`).attr('disabled','disabled');
        }
    }
</script>
@endsection
