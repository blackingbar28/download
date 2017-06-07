@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Edit Meta
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($meta, ['route' => ['metas.update', $meta->id], 'method' => 'put'])  !!}
                    @include('backend.meta.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection