@extends('frontend.layouts.main')
{{-- @include('frontend.layouts.navbar') --}}

<div class="container">
    <h1 class="mt-5 text-center">Buku Tamu Pengunjung Museum</h1>
    <form action="/bukutamu" method="POST">
        @csrf
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="asal">Asal:</label>
            <input type="text" name="asal" id="asal" class="form-control @error('asal') is-invalid @enderror" value="{{ old('asal') }}">
            @error('asal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan:</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" value="{{ old('pekerjaan') }}">
            @error('pekerjaan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="usia">Usia:</label>
            <input type="number" name="usia" id="usia" class="form-control @error('usia') is-invalid @enderror" value="{{ old('usia') }}">
            @error('usia')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kesan">Kesan:</label>
            <input type="text" name="kesan" id="kesan" class="form-control @error('kesan') is-invalid @enderror" value="{{ old('kesan') }}">
            @error('kesan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="pesan">Pesan:</label>
            <textarea name="pesan" id="pesan" rows="5" class="form-control @error('pesan') is-invalid @enderror">{{ old('pesan') }}</textarea>
            @error('pesan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Kirim Pesan</button>
    </form>
</div>

{{-- @include('frontend.layouts.footer') --}}