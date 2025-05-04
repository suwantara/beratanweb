@extends('layouts.app')
@section('title', 'Gallery')
@section('content')

<x-section.header
    header="Artikel Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Artikel', 'url' => '']
    ]"
/>

<x-section.blog></x-section.blog>
@endsection
