@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.laboratorio.title')</h3>
    
    {!! Form::model($laboratorio, ['method' => 'PUT', 'route' => ['admin.laboratorios.update', $laboratorio->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
           <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Nombre*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('direccion', 'Direcciòn', ['class' => 'control-label']) !!}
                    {!! Form::text('direccion', old('direccion'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('direccion'))
                        <p class="help-block">
                            {{ $errors->first('direccion') }}
                        </p>
                    @endif
                </div>
            </div>
        
             <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('referencia', 'Referencia', ['class' => 'control-label']) !!}
                    {!! Form::text('referencia', old('referencia'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('referencia'))
                        <p class="help-block">
                            {{ $errors->first('referencia') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

