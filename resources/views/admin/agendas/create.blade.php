@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Buat Agenda Baru</h1>
    <form method="POST" action="{{ route('dashboard.agendas.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="event_date">Tanggal Acara:</label>
            <input type="date" class="form-control" name="event_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
