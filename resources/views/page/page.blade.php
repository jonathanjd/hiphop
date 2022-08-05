@extends('adminlte::page')

@section('title', 'Pages')

@section('content_header')
    <h1>Pages</h1>
    <hr>
@stop

@section('content')
<div id="admin-pages"></div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                  <img src="{{ asset('img/page.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Schools</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"></small>
                  </div>
                </div>
            </div>
        </div>
    </div> --}}
@stop

@section('css')

@stop

@section('js')
<script src="{{ asset('js/app.js') }}"></script>
@stop
