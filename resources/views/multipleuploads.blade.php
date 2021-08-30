

@extends('layout.master')

@section('content')
<!-- <div class="container"> -->
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> -->
                <!-- <div class="card-header">{{ __('Upload File or Images') }}</div>

                <div class="card-body"> -->
                    <form method="POST" action="{{ route('uploads.store') }}" enctype="multipart/form-data">
                        @csrf
<style>
    .kotakorens {
                            
                            width: 100%;
                            height: 12.5rem;
                            /* margin: 0.438rem 12.5rem 3.75rem 3.75rem; */
                            position:center;
                            padding: 4.125rem 32.063rem 3rem 0;
                            opacity: 0.4;
                            border-radius: 20px;
                            border: solid 3px #f9a236;
                            border-style: dashed;
                          }
</style>
                        <div class="form-group ">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Upload your CV/Portfolio*') }}</label>

                            <div class="form-group">
                                <input type="file" class="form-control kotakorens" name="filename[]" required multiple >
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                                @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
@endsection

