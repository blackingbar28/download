@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Add New Category
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => ['categories.store'], 'method' => 'post'])  !!}
                    @include('backend.category.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection