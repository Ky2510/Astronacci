@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <img src="{{ $article->image_url }}" class="card-img-top" alt="{{ $article->title }}"
                    style="height: 300px; object-fit: cover;">
                <div class="card-body">
                    <h2 class="card-title">{{ $article->title }}</h2>
                    <p class="card-text"><small class="text-muted">Diterbitkan oleh {{ $article->author->name }} pada {{
                            $article->created_at->format('d M Y') }}</small></p>
                    <p class="card-text">{{ $article->content }}</p>
                    <a href="{{ route('home') }}" class="btn btn-warning float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        border-radius: 0.5rem 0.5rem 0 0;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
@endsection