@extends('layouts.app')
@section('title', 'Detail Produk')
@section('content')

<x-section.header
    header="Detail Produk"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Detail Produk', 'url' => '']
    ]"
/>


@endsection
