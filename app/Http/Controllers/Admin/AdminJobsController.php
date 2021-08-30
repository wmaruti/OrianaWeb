<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Model\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Model\Jobs;
use App\Model\Portofolio;
use App\Model\Profile;
use App\Model\Services;
use App\Model\Testimoni;
use App\Model\Multipleuploads;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;

class AdminJobsController  extends Controller
{
    public function index(Request $request) {
        $jobs = Jobs::all();
        $search = $request->search;
        if (!empty($search)) {
            $jobs = DB::table('jobs')->orderByDesc('id')->where('job_name','LIKE', "%$search%")->orWhere('job_detail', 'LIKE', "%$search%")->paginate(8);
        } else {
            $jobs = DB::table('jobs')->orderByDesc('id')->paginate(8);
        }
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create() {
        return view('admin.jobs.create');
    }

    public function store(Request $request) {
        // dd($request);
        $this->validate($request, [
            'job_name' => 'required',
            'job_position' => 'nullable',
            'category' => 'required',
            'location' => 'required',
            'job_detail' => 'required',
            'status' => 'required'
        ]);
        // $jobs = Jobs::all();

        $job = new Jobs();
        $job->job_name = $request->job_name;
        $job->job_position = $request->job_position;
        $job->category = $request->category;
        $job->location = $request->location;
        $job->job_detail = $request->job_detail;
        $job->status = $request->status;
        $job->save();
        session()->flash('message', 'Data berhasil ditambah');
        return redirect(route('admin.jobs.index'));
    }

    public function delete($id) {
        $jobs = Jobs::findOrFail($id);
        $jobs->delete();
        session()->flash('message', 'Data berhasil dihapus');
        return redirect(route('admin.jobs.index'));
    }

    public function edit($id) {
        // dd($id);
        $jobs = Jobs::findOrFail($id);
        return view('admin.jobs.edit', compact('jobs'));
    }
    // public function update(Request $request, Jobs $jobs)
    public function update(Request $request, $id) {

        // dd($id);
        $this->validate($request, [
            'job_name' => 'required',
            'job_position' => 'nullable',
            'category' => 'required',
            'location' => 'required',
            'job_detail' => 'required',
            'status' => 'required'
        ]);

        $jobs = Jobs::findOrFail($id);
        $jobs->job_name = $request->job_name;
        $jobs->job_position = $request->job_position;
        $jobs->category = $request->category;
        $jobs->location = $request->location;
        $jobs->job_detail = $request->job_detail;
        $jobs->status = $request->status;
        $jobs->saveOrFail();
        session()->flash('message', 'Data berhasil diupdate');
        return redirect(route('admin.jobs.index'));
    }
}
