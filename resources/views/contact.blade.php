@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

<x-section.header
    header="Kontak Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Kontak Kami', 'url' => '']
    ]"
/>

@endsection
