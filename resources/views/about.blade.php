@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<x-section.header
    header="Tentang Kami"
    :breadcrumbs="[
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Tentang Kami', 'url' => '']
    ]"
/>
<x-section.about/>
<x-section.features/>
<x-section.banner/>
<x-section.team/>

@endsection
