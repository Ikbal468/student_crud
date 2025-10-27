@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Kemaskini Maklumat Pelajar</h3>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Kod Pelajar</label>
            <input type="text" name="student_code" class="form-control" value="{{ $student->student_code }}" readonly>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label>Kursus</label>
            <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="remarks" class="form-control">{{ $student->remarks }}</textarea>
        </div>
        <button class="btn btn-primary">Kemaskini</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
