@extends('layouts.app')
@section('title', 'Service')
@section('content')

<x-section.header
    header="Layanan Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Layanan Kami', 'url' => '']
    ]"
/>

<x-section.service></x-section.service>


@endsection
