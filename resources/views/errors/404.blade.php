@extends('errors.minimal')

@section('title', __('Not Found'))
@section('code', '404')

@if ($exception)
    @section('message', $exception->getMessage())
@else
    @section('message', __('Not Found'))
@endif
