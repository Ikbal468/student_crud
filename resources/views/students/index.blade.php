@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Senarai Pelajar</h3>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Tambah</a>

    <table id="students-table" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kod Pelajar</th>
                <th>Nama</th>
                <th>Kursus</th>
                <th>Keterangan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
    </table>
</div>

{{-- ✅ jQuery + DataTables CDN --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

{{-- ✅ Server-Side DataTable Setup --}}
<script>
$(function () {
    $('#students-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('students.data') }}", // Calls your Laravel route
        columns: [
            { data: 'id', name: 'id' },
            { data: 'student_code', name: 'student_code' },
            { data: 'name', name: 'name' },
            { data: 'course', name: 'course' },
            { data: 'remarks', name: 'remarks' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});
</script>
@endsection
