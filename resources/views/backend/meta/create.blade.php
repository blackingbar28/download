@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Add New Meta
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => ['metas.store'], 'method' => 'post', 'files' => true])  !!}
                    @include('backend.meta.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection