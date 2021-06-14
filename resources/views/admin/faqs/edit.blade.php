@extends('adminLayout.master')
@section('title')
    <title>Faq</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Faq</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <form action="{{ route('admin.faqs.update', $faq->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $faq->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="question">Question</label>
                                    <textarea class="form-control js-summernote" id="question" name="question">{{ $faq->question }}</textarea>
                                    @if($error = $errors->first('question'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <textarea class="form-control js-summernote" id="answer" name="answer">{{ $faq->answer }}</textarea>
                                    @if($error = $errors->first('answer'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" required>
                                        <option value="ACTIVE" {{ $faq->status == 'ACTIVE' ? 'selected' : '' }}>ACTIVE</option>
                                        <option value="INACTIVE" {{ $faq->status == 'INACTIVE' ? 'selected' : '' }}>INACTIVE</option>
                                    </select>
                                    @if($error = $errors->first('status'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer text-left">
                                <button class="btn btn-primary">Update</button>
                                <a href="{{ route('admin.faqs.index') }}" class="btn btn-danger ml-2">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
