@extends('layouts.blog')

@section('blog')

@include('includes.breadcrumbs')

@include('includes.singleNews', ['title' => $title])

@endsection