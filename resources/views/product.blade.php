@extends('layouts.app')
@section('title', 'Product')
@section('content')

<x-section.header
    header="Produk Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Produk Kami', 'url' => '']
    ]"
/>

@endsection
