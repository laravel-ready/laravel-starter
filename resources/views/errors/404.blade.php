@extends('errors.minimal')

@section('title', $messageContext ?? __('Not Found'))
@section('code', '404')
@section('message', $messageContext ?? __('Not Found'))
