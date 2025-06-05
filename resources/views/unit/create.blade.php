@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($unit) ? 'Edit' : 'Tambah' }} Unit</h1>
    <form action="{{ isset($unit) ? route('unit.update', $unit->id) : route('unit.store') }}" method="POST">
        @csrf
        @if(isset($unit)) @method('PUT') @endif

        <div class="mb-3">
            <label>Nama Unit</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $unit->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="descripsi" class="form-control">{{ old('descripsi', $unit->descripsi ?? '') }}</textarea>
        </div>

        <button class="btn btn-success">{{ isset($unit) ? 'Update' : 'Simpan' }}</button>
    </form>
</div>
@endsection
