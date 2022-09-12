@extends('errors.minimal')

@section('title', $messageContext ?? __('Page Expired'))
@section('code', '419')
@section('message', $messageContext ?? __('Page Expired'))
