@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/{{ $video->url }}" class="card-img-top" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h2 class="card-title">{{ $video->title }}</h2>
                    <p class="card-text"><small class="text-muted">Diterbitkan oleh {{ $video->author->name }} pada {{
                            $video->created_at->format('d M Y') }}</small></p>
                    <p class="card-text">{{ $video->content }}</p>
                    <a href="{{ route('home') }}" class="btn btn-warning float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>
    .video-container {
        position: relative;
        padding-bottom: 35%;
        /* Aspect ratio 16:9 */
        height: 0;
        overflow: hidden;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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