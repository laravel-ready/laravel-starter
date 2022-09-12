@extends('errors.minimal')

@section('title', $messageContext ?? __('Service Unavailable'))
@section('code', '503')
@section('message', $messageContext ?? __('Service Unavailable'))
