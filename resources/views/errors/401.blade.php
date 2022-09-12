@extends('errors.minimal')

@section('title', $messageContext ?? __('Unauthorized'))
@section('code', '401')
@section('message', $messageContext ?? __('Unauthorized'))
