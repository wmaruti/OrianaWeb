@extends('adminLayout.master')
@section('title')
    <title>Service</title>
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
                        <form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Posisi</label>
                                    <input type="text" class="form-control" name="job_name" value="{{ old('job_name') }}" id="job_name" placeholder="Masukan Nama Pekerjaan" required="">
                                    @if($error = $errors->first('job_name'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title">Posisi</label>
                                    <input type="text" class="form-control" name="job_position" value="{{ old('job_position') }}" id="job_position" placeholder="Masukan Nama Pekerjaan" required="">
                                    @if($error = $errors->first('job_position'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title">Posisi</label>
                                    <input type="text" class="form-control" name="category" value="{{ old('category') }}" id="category" placeholder="Masukan Nama Pekerjaan" required="">
                                    @if($error = $errors->first('category'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="title">Lokasi</label>
                                    <input type="text" class="form-control" name="location" value="{{ old('location') }}" id="location" placeholder="Masukan Nama Pekerjaan" required="">
                                    @if($error = $errors->first('location'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control js-summernote" id="job_detail" name="job_detail"></textarea>
                                    @if($error = $errors->first('job_detail'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="OPEN" {{ old('status') }}>OPEN</option>
                                        <option value="CLOSED" {{ old('status') }}>CLOSED</option>
                                    </select>
                                    @if($error = $errors->first('status'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                               
                            </div>
                            <div class="card-footer text-left">
                                <button class="btn btn-primary">Add</button>
                                <a href="{{ route('admin.service.index') }}" class="btn btn-danger ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
