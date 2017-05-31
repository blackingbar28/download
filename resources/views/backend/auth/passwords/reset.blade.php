@extends('backend.layouts.login')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>{!! trans('labels.reset-password.reset_password') !!}</b></a>
    </div>
    <div class="login-box-body">
        @include('backend.auth.passwords.message')

        {!! Form::open(array('url' => route('password.request'))) !!}
        <input type="hidden" name="token" value="{!! $token !!}">
        <div class="form-group has-feedback{!! $errors->has('email') ? ' has-error' : '' !!}">
            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => trans('labels.reset-password.email')]) }}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{!! $errors->first('email') !!}</strong>
            </span>
            @endif
        </div>
        <div class="form-group has-feedback{!! $errors->has('password') ? ' has-error' : '' !!}">
            {{ Form::password('password', ['class'=>'form-control', 'placeholder' => trans('labels.reset-password.password')]) }}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{!! $errors->first('password') !!}</strong>
            </span>
            @endif
        </div>
        <div class="form-group has-feedback{!! $errors->has('password_confirmation') ? ' has-error' : '' !!}">
            {{ Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => trans('labels.reset-password.confirm_password')]) }}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{!! $errors->first('password_confirmation') !!}</strong>
            </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-8"></div>
            <div class="col-xs-4">
                {!! Form::submit(trans('labels.reset-password.reset'), ['class' => 'btn btn-primary btn-block btn-flat']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection