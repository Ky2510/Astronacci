@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card video shadow-lg border-warning">
                <div class="card-header bg-warning text-white">
                    <h4>Create New Video</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('video.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group mt-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Enter judul video" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="url">URL Video</label>
                                    <input type="text" id="url" name="url" class="form-control"
                                        placeholder="Enter URL video" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group mt-3">
                                    <input type="hidden" id="author_id" name="author_id"
                                        value="{{ auth()->user()->id }}" class="form-control" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="draft">Draft</option>
                                        <option value="published" selected>Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-warning me-2">Save</button>
                            <a href="{{ route('video.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
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
</style>
@endsection