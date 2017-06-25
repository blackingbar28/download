@extends('frontend.layouts.master')

@section('title')
    <title>Hd Filme Downloaden | Download Filme &amp; Filme kostenlos downloaden</title>
@endsection

@section('content')
    <!-- title -->
    <div class="row section-inverse">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="no-margin">
                        Filme kostenlos downloaden
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- end title -->
    <div class="data-sumaries">
        @foreach($articles as $article)
        <div class="row row-data-md">
            <!-- left content -->
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0">
                        <a href="#">
                            <img src="{!! ImageHelper::getImage($article->image, null, 'banner') !!}" alt="{{$article->title_de}}" height="152" width="290" class="img-responsive img-film center-block">
                        </a>
                    </div>
                </div>
            </div>
            <!-- end left content -->-
            <!-- right content -->
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="no-margin">
                            <a href="#">React Nanodegree</a>
                            <span class="badges">
                                <span class="span-new badge-squared badge-new">
                                    New
                                </span>
                            </span>
                        </h3>
                        <span class="span-title">3 Projects</span>
                    </div>
                    <div class="col-sm-4 hidden-xs text-right no-margin no-padding">
                        <span class="caption">
                            <span class="star"><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span class="year">2017</span>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            React is completely transforming Front-End Development. Master this powerful UI library from Facebook with Udacity and the experts from React Training.
                        </p>
                    </div>
                </div>
            </div>
            <!-- right content -->
        </div>
        @endforeach
    </div>
@endsection