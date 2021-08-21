@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ __('Dashboard') }}</h1>
@stop

@section('content')

    @include('components.dashboard.categories')

    @include('components.dashboard.discounts')

    @include('components.dashboard.discounts_category')

@stop