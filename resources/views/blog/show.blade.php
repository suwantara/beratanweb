@extends('layouts.app')
@section('title', $post->title)
@section('content')

<x-section.header
    header="{{ $post->title }}"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Artikel', 'url' => route('blog.index')],
        ['label' => $post->title, 'url' => '']
    ]"
/>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <img src="{{ Storage::url($post->image) }}" class="img-fluid" alt="{{ $post->title }}">
                <div class="card-body">
                    <h1 class="card-title">{{ $post->title }}</h1>
                    <p class="text-muted">
                        <small>Diunggah oleh {{ $post->author->name }} | {{ $post->created_at->format('d M Y') }}</small>
                    </p>
                    <div class="card-text text-justify">{!! $post->content !!}</div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <!-- Sidebar: Categories -->
            <div class="mb-4">
                <h4>Kategori</h4>
                <ul class="list-group">
                    @foreach($post->category->posts as $relatedPost)
                        <li class="list-group-item">
                            <a href="{{ route('blog.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
