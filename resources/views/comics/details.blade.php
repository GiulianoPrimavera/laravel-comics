@extends('layouts.layout_base')

@section('title')
    dettagli prodotto {{ $comic["title"] }}
@endsection

@section('content')
    <h1>titolo dei dettagli {{ $comic["title"] }}</h1>
@endsection