@extends('layouts.default')
@section('titulo_pagina','Mascotas | Perfil')
@section('titulo','Mascotas')
@section('subtitulo','Perfil de usuario')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Perfil de usuario</h3>
            </div>
            <div class="box-body">
                @if(Session::has('exito'))
                    <div class="alert alert-success alert-dismissible" style="margin-top: 20px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Éxito!</h4>
                        {{ Session::get('exito') }}
                    </div>
                @endif
                @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible" style="margin-top: 20px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-ban"></i> Error!</h4>
                        {{Session::get('error')}}
                    </div>
                @endif
                <form method="POST" id="frmActualizarPerfil"
                    action="{{route('perfil.update',$usuario->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" value="{{$usuario->name}}">
                    </div>
                    <div class="form-group">
                        <button type="button" id="btnEvaluar" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function doClickEvaluar(event) {
        if($("api.palindromo.lista").val() == $("$usuario->name").val() ) {
            //Envío el formulario
            $("/palindromo/{cadena}").submit();
        } else {
        }
    }
</script>
@endsection