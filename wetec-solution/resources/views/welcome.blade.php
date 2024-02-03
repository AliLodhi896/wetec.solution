

@extends('layout.front.master')

@section('content')

<!-- banner-area -->
@include('layout.front.section.banner')
<!-- banner-area-end -->

<!-- clients-area -->
@include('layout.front.section.clients')
<!-- clients-area-end -->

<!-- feature-area -->
@include('layout.front.section.feature')
<!-- feature-area-end -->

<!-- dashboardslider-area -->
@include('layout.front.section.dashboardslider')
<!-- dashboardslider-area-end -->

<!-- imagecontent-area -->
@include('layout.front.section.imagecontent')
<!-- imagecontent-area-end -->

<!-- testimonials-area -->
@include('layout.front.section.testimonials')
<!-- testimonials-area-end -->

<!-- testimonials-area -->
@include('layout.front.section.testimonials')
<!-- testimonials-area-end -->

<!-- blog-area -->
@include('layout.front.section.blog')
<!-- blog-area-end -->

<!-- call-to-action-area -->
@include('layout.front.section.call-to-action')
<!-- call-to-action-area-end -->

@endsection
