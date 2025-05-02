@extends('layouts.app')
@section('title', 'Gallery')
@section('content')

<x-section.header
    header="Galeri Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Galeri', 'url' => '']
    ]"
/>

<x-section.gallery></x-section.gallery>

@endsection
