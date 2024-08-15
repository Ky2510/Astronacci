@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4>My Article (Archived)</h4>
            <div class="d-flex justify-content-end mt-4">
                <a href="{{ route('article.draft') }}" class="btn btn-warning mx-2">Draft</a>
                <a href="{{ route('article.index') }}" class="btn btn-warning mx-2">Published</a>
                <a href="{{ route('article.create') }}" class="btn btn-warning">Create Article</a>
            </div>
            <div class="row mt-4">
                @foreach ($articles as $article)
                <div class="col-md-6 mb-3">
                    <div class="card article mb-3 shadow-sm border-warning" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $article->image_url }}" class="img-fluid rounded-start" alt="..."
                                    style="height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{{ $article->content }}</p>
                                    <p class="card-text"><small class="text-muted">{{
                                            $article->created_at->diffForHumans() }}</small></p>
                                    <p class="card-text"><small class="text-muted">{{ $article->author->name
                                            }}</small></p>
                                    <div class="d-flex justify-content-end">
                                        <form action="{{ route('article.delete', $article->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mx-1 btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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

    .article:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 30px rgba(255, 165, 0, 0.5);
    }

    .btn-warning {
        background-color: #FFA500;
        border: none;
    }

    .btn-warning:hover {
        background-color: #FF8C00;
    }

    .form-control {
        border: 1px solid #FFA500;
    }

    .form-control:focus {
        border-color: #FF8C00;
        box-shadow: 0 0 5px rgba(255, 140, 0, 0.5);
    }
</style>
@endsection