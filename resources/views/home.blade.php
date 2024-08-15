@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card-body">
            <div class="row mb-4">
                <h2 class="text-center">Article</h2>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fas fa-arrow-up"></i> Upgrade Member
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-warning text-white">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Select Membership Type</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @if(auth()->check())
                                    <div class="row">
                                        @if(auth()->user()->role !== 'A')
                                        <div class="col-md-6 mb-3">
                                            <div class="card shadow border-warning">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">Membership "A"</h5>
                                                    <p class="card-text">Akses 3 artikel dan 3 video <br> Akses dibuka
                                                        selama 5 menit</p>
                                                    <form action="{{ route('member.update', auth()->user()->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" value="A" name="role">
                                                        <button type="submit"
                                                            class="btn btn-warning btn-sm">Ambil</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if(auth()->user()->role !== 'B')
                                        <div class="col-md-6 mb-3">
                                            <div class="card shadow border-warning">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">Membership "B"</h5>
                                                    <p class="card-text">Akses 10 artikel dan 10 video <br> Akses dibuka
                                                        selama 5 menit</p>
                                                    <form action="{{ route('member.update', auth()->user()->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" value="B" name="role">
                                                        <button type="submit"
                                                            class="btn btn-warning btn-sm">Ambil</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if(auth()->user()->role !== 'C')
                                        <div class="col-md-6 mb-3">
                                            <div class="card shadow border-warning">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">Membership "C"</h5>
                                                    <p class="card-text">Akses keseluruhan artikel dan video <br> Akses
                                                        dibuka selama 5 menit</p>
                                                    <form action="{{ route('member.update', auth()->user()->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" value="C" name="role">
                                                        <button type="submit"
                                                            class="btn btn-warning btn-sm">Ambil</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Articles Section -->
                @foreach ($articles as $article)
                <div class="col-md-4 mt-3">
                    <a href="{{ route('article.detail', $article->id) }}" style="text-decoration: none">
                        <div class="card article mb-3 shadow article-card" style="max-width: 540px;">
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
                                                }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <!-- Videos Section -->
            <div class="row">
                <h2 class="text-center">Video</h2>
                @foreach ($videos as $video)
                <div class="col-md-4">
                    <a href="{{ route('video.detail', $video->id) }}" style="text-decoration: none">
                        <div class="card video mb-3 shadow video-card" style="width: 25rem;">
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/{{ $video->url }}" class="card-img-top"
                                    height="240px" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $video->title }}</h5>
                                <p class="card-text">{{ $video->content }}</p>
                                <p class="card-text"><small class="text-muted">{{ $video->created_at->diffForHumans()
                                        }}</small></p>
                                <p class="card-text">{{ $video->author->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>
    html,
    body {
        overflow-x: hidden;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .article:hover {
        transform: scale(1.05);
    }

    .video:hover {
        transform: scale(1.05);
    }

    .modal-header {
        border-bottom: 2px solid #fff;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
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