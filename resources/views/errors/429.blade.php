@extends('errors.minimal')

@section('title', $messageContext ?? __('Too Many Requests'))
@section('code', '429')
@section('message', $messageContext ?? __('Too Many Requests'))
