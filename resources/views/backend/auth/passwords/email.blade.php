@extends('backend.layouts.login')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>{!! trans('labels.reset-password.reset_password') !!}</b></a>
    </div>
    <div class="login-box-body">
        @include('backend.auth.passwords.message')
        {!! Form::open(array('url' => route('password.email') )) !!}
        <div class="form-group has-feedback{!! $errors->has('email') ? ' has-error' : '' !!}">
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => trans('labels.reset-password.email')]) }}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{!! $errors->first('email') !!}</strong>
            </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-8 text-right">
                {!! link_to(route('login'), trans('labels.back'), ['class' => 'btn btn-primary btn-flat']) !!}
                {!! Form::submit(trans('labels.reset-password.reset'), ['class' => 'btn btn-primary btn-flat']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection