@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<!-- Esto es lo que visualizará la persona con rol admin -->
@role('admin')
<p>welcome to this beautiful admin panel.</p>
@endrole
<!-- Esto es lo que visualizará la persona con rol vista -->
@role('vista')
<p>welcome to this beautiful vista panel.</p>
@endrole

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('hi!') </script>
@stop