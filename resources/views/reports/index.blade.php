@extends('layout')
@section('module')
Clientes
@stop
@section('base_url')
<base href="{{URL::to('/')}}/reports"/>
@stop
@section('css-customize')
@stop
@section('content')
<!--<section class="content-header">
    <h1>
        CLIENTES
        <small>Panel de Control</small>
    </h1>
</section>-->

<!-- Main content -->
<section ng-app="reports">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/reports/app.js"></script>
    <script src="/js/app/reports/controllers.js"></script>
    <script src="/js/app/reports/servicesreports.js"></script>
@stop

@stop