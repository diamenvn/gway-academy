@extends('site.layout.master')
@section('title', "Innovator Academy")

@section('content')
@include('site.home.banner')
@include('site.home.brand')
@include('site.home.post')
@include('site.home.course')
@include('site.home.professional')
@include('site.home.training-method')
@include('site.home.review-by-customer')
@include('site.home.recent-posts')
@include('site.home.list-question')
@endsection