@extends('backend.layouts.master')

@section('content')
    <div class='table-header'>
        <h1 class="pull-left">Categories</h1>
        <div class="pull-right">
            <a class="btn btn-primary" href="{!! route('categories.create') !!}">
                Add New
            </a>
        </div>
    </div>

    <div class="clearfix"></div>
    @include('flash::message')
    <div class="clearfix"></div>

    <div class="category-content">
        <div class="box box-primary">
            <div class="box-body data-management">
                @include('backend.category.table')
            </div>
        </div>
    </div>
@endsection