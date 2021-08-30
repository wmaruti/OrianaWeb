@extends('adminLayout.master')
@section('title')
    <title>Services</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Services</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="row mt-3 ml-2 mb-4">
                            <div class="col-md-8">
                                <a href="{{ route('admin.jobs.create') }}" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('admin.jobs.index') }}" method="GET" class="form-inline mr-auto">
                                    <div class="search-element">
                                        <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search" data-width="250">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                        <div class="search-backdrop"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($message = session('message'))
                            <div class="row mt-0 ml-2">
                                <div class="col-md-6">
                                    <h4 class="btn btn-danger">{{ $message }}</h4>
                                </div>
                            </div>
                        @endif
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>Posisi</th>
                                        <th>Divisi</th>
                                        <th>Kategory</th>
                                        <th>Lokasi</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $job->job_name }}</td>
                                            <td>{!! $job->job_position !!}</td>
                                            <td>{!! $job->category !!}</td>
                                            <td>{{ $job->location }}</td>
                                        
                                            @if($job->status == 'ACTIVE')
                                                <td><div class="badge badge-primary">{{ $job->status }}</div></td>
                                            @else
                                                <td><div class="badge badge-danger">{{ $job->status }}</div></td>
                                            @endif
                                           
                                           <td>
                                                <a href="{{ route('admin.jobs.delete', $job->id) }}" class="btn btn-outline-success">Hapus</a>
                                                <a href="{{ route('admin.jobs.edit', $job->id) }}" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @forelse($jobs as $jpb)
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center mt-2">No data</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                        <div class="paginate float-right mt-3">
                            <p class="ml-3"><b>Jumlah Data : {{ $jobs->total() }}</b></p>
                            {{ $jobs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

