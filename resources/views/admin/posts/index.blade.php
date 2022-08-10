@extends('adminlte::page')


@section('title', 'Panel de Pagina Cobaeh')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.posts.create') }}">Nueva publicación</a>

    <h1>Lista de publicaciones</h1>
@stop

@section('content')

@if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
