<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Career;
use App\Model\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Model\Multipleuploads;
use App\Model\Portofolio;
use App\Model\Profile;
use App\Model\Services;
use App\Model\Testimoni;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;

class AdminMultipleuploadsController  extends Controller
{
    public function index(Request $request) {
        // dd($request->multipleuploads);
       
        $multipleuploads = Multipleuploads::all();
        $jobs = Jobs::all();
        return view('admin.multipleuploads.index',compact('multipleuploads','jobs'));
      }

    


      public function download( $filename = '' ) {  
        // Check if file exists in storage directory 
        $file_path = public_path('apply_job') . $filename;  
        // (public_path('apply_job'), $filename)
        if ( file_exists( $file_path ) ) {  
            // Send Download  
            return \Response::download( $file_path, $filename );  
         
            } else {  
            // Error exit( 'Requested file does not exist on our server!' );  
            } 
         } 




    //   
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

    public function show($id) {
        $dl = Multipleuploads::find($id);
        return Storage::download($dl->path, $dl->filename);
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
