@extends('layouts.app')
@section('content')
{{-- ini adalah formulir biodata --}}
    <div class="container">
        <h1>FORMULIR BIODATA</h1>
        <form method="POST"action="{{ route('biodata.store') }}">
            @CSRF
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="nama" class="form-control"  aria-describedby="" placeholder="Tambahkan nama" name="nama" required>
              
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea type="nama" class="form-control"  aria-describedby="" placeholder="Tambahkan keterangan" name="keterangan" required></textarea>
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="usia" class="form-control"  aria-describedby="" placeholder="Tambahkan usia" name="usia" required>
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control"  aria-describedby="" placeholder="Tambahkan alamat" name="alamat" required>
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  
@endsection