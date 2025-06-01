@extends('layouts.app')
@section('title', 'Checkout')
@section('content')

<div class="container">
    <a href="{{ route('home') }}" class="btn btn-primary text-white">Return to Home</a>
    <div class="justify-content-center text-center my-4">
        <h2>Detail Pesanan</h2>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-4 justify-content-center text-center">
                <h4>Data Pembeli</h4>
            </div>
            <!-- Email Address -->
            <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" class="form-label" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
            </div>

            <!-- telephone -->
            <div class="mb-3">
                <x-input-label for="Telephone" :value="__('Nomor Telepon')" class="form-label" />
                <x-text-input id="telephone" class="form-control" type="telephone" name="telephone" required autocomplete="current-telephone" />
                <x-input-error :messages="$errors->get('telephone')" class="text-danger small mt-1" />
            </div>

            <!-- Address -->
            <div class="mb-3">
                <x-input-label for="address" :value="__('Alamat')" class="form-label" />
                <x-text-input id="address" class="form-control" type="text" name="address" required />
                <x-input-error :messages="$errors->get('address')" class="text-danger small mt-1" />
            </div>
            <!-- City -->
            <div class="mb-3">
                <x-input-label for="city" :value="__('Kota')" class="form-label" />
                <x-text-input id="city" class="form-control" type="text" name="city" required />
                <x-input-error :messages="$errors->get('city')" class="text-danger small mt-1" />
            </div>
            <!-- Postal Code -->
            <div class="mb-3">
                <x-input-label for="postal_code" :value="__('Kode Pos')" class="form-label" />
                <x-text-input id="postal_code" class="form-control" type="text" name="postal_code" required />
                <x-input-error :messages="$errors->get('postal_code')" class="text-danger small mt-1" />
            </div>
            <!-- Country -->
            <div class="mb-3">
                <x-input-label for="country" :value="__('Negara')" class="form-label" />
                <x-text-input id="country" class="form-control" type="text" name="country" required />
                <x-input-error :messages="$errors->get('country')" class="text-danger small mt-1" />
            </div>
            <!-- Payment Method -->
            <div class="mb-3">
                <x-input-label for="payment_method" :value="__('Metode Pembayaran')" class="form-label" />
                <select id="payment_method" class="form-select" name="payment_method" required>
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="bank_transfer">Transfer Bank</option>
                    <option value="credit_card">Kartu Kredit</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash_on_delivery">Bayar di Tempat</option>
                </select>
                <x-input-error :messages="$errors->get('payment_method')" class="text-danger small mt-1" />
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label">
                    Ingatkan saya
                </label>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-4 justify-content-center text-center">
                <h4>Detail Pesanan</h4>
                <p>Berikut adalah detail pesanan Anda:</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Kuantitas</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Susu Sapi Segar</td>
                            <td>Rp 10.000</td>
                            <td>1 Liter</td>
                            <td>Rp 10.000</td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-center"><strong>Total</strong></td>
                            <td><strong>Rp 10.000</strong></td>
                        </tr>
                    </tfoot>
                </table>
                <p class="text-muted">Pastikan semua informasi di atas sudah benar sebelum melanjutkan ke pembayaran.</p>
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="email" value="{{ old('email') }}">
                    <input type="hidden" name="telephone" value="{{ old('telephone') }}">
                    <input type="hidden" name="address" value="{{ old('address') }}">
                    <input type="hidden" name="city" value="{{ old('city') }}">
                    <input type="hidden" name="postal_code" value="{{ old('postal_code') }}">
                    <input type="hidden" name="country" value="{{ old('country') }}">
                    <input type="hidden" name="payment_method" value="{{ old('payment_method') }}">
                    <button type="submit" class="btn btn-success">Konfirmasi Pesanan</button>
                </form>
            </div>


        </div>

    </div>

</div>
@endsection
