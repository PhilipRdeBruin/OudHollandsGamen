<?php 
    $active_navlink = 'profiel'; 
    $filterkey = "filter";
?>

@extends('layouts.standaard')
@section('content')

Spelletje {{ $spelletje->id }}

@include('includes.vraag')
@endsection