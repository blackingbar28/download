@extends('backend.layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Edit Article
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($article, ['route' => ['articles.update', $article->id], 'method' => 'put'])  !!}
                    @include('backend.article.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection