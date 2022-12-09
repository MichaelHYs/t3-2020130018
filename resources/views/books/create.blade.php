@extends('layouts.master')
@section('title', 'Add New Book')
@section('content')
    <h2>Add New Book</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">id</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                    value="{{ old('judul') }}">
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="halaman">halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror" name="halaman"
                    id="halaman" min="1" max="9999" value="{{ old('halaman') }}">
                @error('halaman')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="title">penerbit</label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit"
                    value="{{ old('penerbit') }}">
                @error('penerbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="kategori">kategori</label>
            <select class="form-control form-control-sm" name="kategori" id="kategori">
                <option value="Thriller"{{ old('kategori') == 'Thriller' ? 'selected' : '' }}>
                    Thriller</option>
                <option value="Comedy"{{ old('kategori') == 'Comedy' ? 'selected' : '' }}>
                    Comedy</option>
                <option value="Drama"{{ old('kategori') == 'Drama' ? 'selected' : '' }}>
                    Drama</option>
                <option value="Action"{{ old('kategori') == 'Action' ? 'selected' : '' }}>
                    Action</option>
                <option value="Slice of Life"{{ old('kategori') == 'Slice of Life' ? 'selected' : '' }}>
                    Slice of Life</option>
                <option value="Fantasi"{{ old('kategori') == 'Fantasi' ? 'selected' : '' }}>
                    Fantasi</option>
                <option value="History"{{ old('kategori') == 'History' ? 'selected' : '' }}>
                    History</option>
                <option value="Romance"{{ old('kategori') == 'Romance' ? 'selected' : '' }}>
                    Romance</option>
                <option value="Sci Fi"{{ old('kategori') == 'Sci Fi' ? 'selected' : '' }}>
                    Sci Fi</option>
                <option value="Adult"{{ old('kategori') == 'Adult' ? 'selected' : '' }}>
                    Adult</option>
            </select>
            @error('kategori')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection
