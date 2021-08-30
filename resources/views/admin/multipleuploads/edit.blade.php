@extends('adminLayout.master')
@section('title')
    <title>Career</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Service</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('admin.jobs.update', $jobs->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $jobs->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Posisi</label>
                                    <input type="text" class="form-control" name="job_name" value="{{ $jobs->job_name, old('job_name') }}" id="job_name" placeholder="Masukan judul" required="">
                                    @if($error = $errors->first('job_name'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title">Divisi</label>
                                    <input type="text" class="form-control" name="job_position" value="{{ $jobs->job_position, old('job_position') }}" id="job_position" placeholder="Masukan judul" required="">
                                    @if($error = $errors->first('job_position'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title">Lokasi</label>
                                    <input type="text" class="form-control" name="location" value="{{ $jobs->location, old('location') }}" id="location" placeholder="Masukan judul" required="">
                                    @if($error = $errors->first('location'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="category" value="{{ $jobs->category, old('category') }}" id="category" placeholder="Masukan judul" required="">
                                    @if($error = $errors->first('category'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control js-summernote" id="job_detail" name="job_detail">{{ $jobs->job_detail }}</textarea>
                                    @if($error = $errors->first('job_detail'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="OPEN" {{ $jobs->status == 'OPEN' ? 'selected' : '' }}>OPEN</option>
                                        <option value="CLOSED" {{ $jobs->status == 'CLOSED' ? 'selected' : '' }}>CLOSED</option>
                                    </select>
                                    @if($error = $errors->first('status'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                              
                            </div>
                            <div class="card-footer text-left">
                                <button class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.jobs.index') }}" class="btn btn-danger ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
