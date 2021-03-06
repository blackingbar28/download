<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="home" href="https://hdfilmedownloaden.de/" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        @yield('title')
        <meta name="keywords" content="hd filme download,filme kostenlos downloaden,download filme,filme download,kostenlos filme downloaden,filme downloaden kostenlos,filme gratis downloaden,filme downloaden free" />
        <meta name="description" content="Hdfilmedownloaden.de, Filme kostenlos downloaden neutest, regelmäßig aktualisieren.">

        <meta name="dcterms.Identifier" content="http://hdfilmedownloaden.de" />
        <meta name="dcterms.Format" content="text/html" />
        <meta name="dcterms.Relation" content="Hdfilmedownloaden" />
        <meta name="dcterms.Language" content="de" />
        <meta name="dcterms.Publisher" content="Hdfilmedownloaden" />
        <meta name="dcterms.Type" content="text/html" />
        <meta name="dcterms.Coverage" content="https://hdfilmedownloaden.de/" />
        <meta name="dcterms.Rights" content="Copyright &copy;2017 Hdfilmedownloaden." />
        <meta name="dcterms.Title" content="Hd Filme Downloaden | Download Filme & Filme kostenlos downloaden" />
        <meta name="dcterms.Subject" content="Filme Download" />
        <meta name="dcterms.Contributor" content="Hdfilmedownloaden" />
        <meta name="dcterms.Description" content="Hdfilmedownloaden.de, Filme kostenlos downloaden neutest, regelmäßig aktualisieren." />

        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{!! asset('/bower/admin-lte/bootstrap/css/bootstrap.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/css/normalize.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/css/frontend/style.css') !!}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="site-wrap">
            @include('frontend.layouts.header')

            <div id="page-content">
                <div class="container">
                    @include('frontend.layouts.search')

                    <div class="row margin-top-30">
                        <div class="col-sm-3">
                            @include('frontend.layouts.nav')
                        </div>
                        <div class="col-sm-9 download-list">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>