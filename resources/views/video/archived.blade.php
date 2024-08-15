@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="p-4">
                <h4>My Videos (Archived)</h4>
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('video.index') }}" class="btn btn-warning mx-2">Published</a>
                    <a href="{{ route('video.draft') }}" class="btn btn-warning mx-2">Draft</a>
                    <a href="{{ route('video.create') }}" class="btn btn-warning">Create Video</a>
                </div>
            </div>

            <div class="row mt-4">
                @if ($videos->isEmpty())
                <h2 class="text-center">Data Kosong...</h2>
                @else
                @foreach ($videos as $video)
                <div class="col-md-4 mb-3">
                    <div class="card  video mb-3 shadow-sm" style="width: 24em;">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/{{ $video->url }}" class="card-img-top"
                                height="240px" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                            <p class="card-text">{{ $video->content }}</p>
                            <p class="card-text"><small class="text-muted">{{
                                    $video->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $video->author->name }}</p>
                            <div class="d-flex justify-content-end">
                                <form action="{{ route('video.delete', $video->id) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus video ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-1 btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
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

    .video:hover {
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

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
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
</style>
@endsection

@php
function getYoutubeID($url) {
preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
$url, $matches);
return $matches[1] ?? null;
}
@endphp