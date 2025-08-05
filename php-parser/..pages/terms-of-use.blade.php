@extends('layouts.main')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style.css?v2.04155" />
    <link rel="stylesheet" type="text/css" href="/css/layout.css?v2.0" />
    <link rel="stylesheet" type="text/css" href="/css/normalize.css?v2.0" />
    <link rel="stylesheet" type="text/css" href="/css/terms-of-use.css" />
    <link rel="stylesheet" type="text/css" href="/old-landing-resources/lib/font-awesome-4.7.0/css/font-awesome.min.css" />
    <div class="container-terms">
        @lang('terms-of-use.terms')
    </div>
@stop