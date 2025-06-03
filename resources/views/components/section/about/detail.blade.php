@extends('layouts.app')
@section('title', $detail['title'])
@section('content')

<x-section.header
    :header="$detail['title']"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Tentang Kami', 'url' => route('about')],
        ['label' => $detail['title'], 'url' => '']
    ]"
/>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h2>{{ $detail['title'] }}</h2>
            <p>{{ $detail['content'] }}</p>
        </div>
    </div>
</div>
@endsection
