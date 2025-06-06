@extends('layouts.app')
@section('title', 'Beratan Dairy Farm')
@section('content')

<x-section.carousel></x-section.carousel>
<x-section.about.about/>
<x-section.features></x-section.features>
<x-section.service></x-section.service>
<x-section.product :products="$products" />
<x-section.banner></x-section.banner>
<x-section.team></x-section.team>
<x-section.testimonial></x-section.testimonial>

@endsection
