@extends('errors.minimal')

@section('title', $messageContext ?? __('Forbidden'))
@section('code', '403')
@section('message', $messageContext ?? __($exception->getMessage() ?: 'Forbidden'))
