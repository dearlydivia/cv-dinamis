@extends('layouts.app')
@section('content')
{{-- ini adalah formulir education --}}
    <div class="container">
        <h1>FORMULIR EDUCATION</h1>
        <form method="POST"action="{{ route('education.store') }}">
            @CSRF
            <div class="mb-3">
              <label for="universitas" class="form-label">Universitas</label>
              <input type="universitas" class="form-control"  aria-describedby="" placeholder="Tambahkan universitas" name="universitas" required>
              
            </div>
            <div class="mb-3">
                <label for="Jurusan" class="form-label">jurusan</label>
                <textarea type="jurusan" class="form-control"  aria-describedby="" placeholder="Tambahkan jurusan" name="jurusan" required></textarea>
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
            <div class="mb-3">
                <label for="minat" class="form-label">Minat</label>
                <input type="minat" class="form-control"  aria-describedby="" placeholder="Tambahkan minat" name="minat" required>
                <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  
@endsection