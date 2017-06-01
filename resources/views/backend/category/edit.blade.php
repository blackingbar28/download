@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Edit Category
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'put'])  !!}
                    @include('backend.category.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection