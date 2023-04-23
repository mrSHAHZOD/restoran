@extends('layouts.main')
@section('content')


<x-header name1="About Us" name2="About"></x-header>
<!-- Navbar & Hero End -->


<!-- About Start -->
@include('sections.about')
<!-- About End -->


<!-- Team Start -->
 @include('sections.team')
<!-- Team End -->

@endsection
