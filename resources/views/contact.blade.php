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

<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                <label for="name">Nama</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                <label for="subject">Tentang</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 250px" required></textarea>
                <label for="message">Pesan</label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Kirim Pesan</button>
        </div>
    </div>
</form>
@endsection
