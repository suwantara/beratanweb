@extends('layouts.app')
@section('title', 'Service')
@section('content')

<x-section.header
    header="Layanan Kami"
    :breadcrumbs="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Layanan Kami', 'url' => '']
    ]"
/>

@endsection
