@extends('layouts.master')

@section('tittle','Aplikasi Laravel')

@section('content')

<h2>Halo,{{ Auth::user()->name }}</h2>

@endsection