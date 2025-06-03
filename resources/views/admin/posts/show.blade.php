{{-- filepath: d:\app\laragon\www\project-smt-2\dairyweb\resources\views\admin\posts\show.blade.php --}}
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p class="text-muted">Kategori: {{ $post->category->name ?? '-' }} | Penulis: {{ $post->author->name ?? '-' }}</p>
    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3" alt="{{ $post->title }}">
    @endif
    <p><strong>Excerpt:</strong> {{ $post->excerpt }}</p>
    <div>{!! nl2br(e($post->content)) !!}</div>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
