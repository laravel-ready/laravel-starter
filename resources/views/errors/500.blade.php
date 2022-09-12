@extends('errors.minimal')

@section('title', $messageContext ?? __('Server Error'))
@section('code', '500')
@section('message', $messageContext ?? __('Server Error'))
