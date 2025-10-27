@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Tambah Maklumat Pelajar</h3>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Kod Pelajar</label>
            <input type="text" name="student_code" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kursus</label>
            <input type="text" name="course" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="remarks" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
