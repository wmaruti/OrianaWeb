<?php

namespace App\Http\Controllers;

use App\Model\Career;
use App\Multipleuploads;
use App\Model\About;
use App\Model\Address;
use App\Model\ContactUs;
use App\Model\Faqs;
use App\Model\Feedback;
use App\Model\Portofolio;
use App\Model\Profile;
use App\Model\Services;
use App\Model\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;



class CareerController extends Controller
{
    // public function edit($id) {
    //     $service = Services::findOrFail($id);
    //     return view('career.edit', compact('career'));
    // }

    public function index() {
        $career = DB::table('jobs')->orderByDesc('id')->whereStatus('OPEN')->get();
        $multipleuploads = Multipleuploads::all();
        $about = About::first();
        $listServices = DB::table('services')->orderByDesc('id')->whereStatus('ACTIVE')->get();
        $listFaqs = DB::table('faqs')->orderByDesc('id')->whereStatus('ACTIVE')->get();
        $listTeam = Profile::all()->sortByDesc('id');
        $listPortofolio = Portofolio::all();
        $listTestimoni = DB::table('testimoni')->select('name','quote')->orderByDesc('id')->whereStatus('ACTIVE')->get();
        $listArticles = DB::table('articles')->orderByDesc('id')->whereStatus('ACTIVE')->limit(3)->get();
        $address = Address::first();
        $contactUs = DB::table('contact_us')->select('email', 'contact_number')->first();
        // return view('productspage/index']);
        return view('career/index', [
            'career'     => $career,
            'multipleuploads'  => $multipleuploads,
            'about'     => $about,
            'listServices' => $listServices,
            'listFaqs' => $listFaqs,
            'listTeam' => $listTeam,
            'listPortofolio' => $listPortofolio,
            'listTestimoni' => $listTestimoni,
            'listArticles' => $listArticles,
            'address'   => $address,
            'contactUs' => $contactUs
        ]);
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->jobs_id);
     
        $request->validate([

            'jobs_id' => 'required',
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:50000'
        ]);
        
    // $post = new Multipleuploads;
    //    $post->jobs_id = $request->jobs_id;

        if 
        ($request->hasfile('filename')) { 
            $files = [];
            foreach ($request->file('filename','jobs_id') as $file) {
                if ($file->isValid()) {
                    $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                    $file->move(public_path('apply_job'), $filename);   
                               
                    $files[] = [
                        'filename' => $filename,
                        'jobs_id' => $request->jobs_id,
                       
                    ];
                }
            }
           
            Multipleuploads::insert($files);     

            echo'Congratulations! Your application has been successfully submitted';
        }else{
            echo'Failed';
        }
       

       
        return redirect()->back()->withSuccess('Congratulations! Your application has been successfully submitted!');

    //     // return view('career.index')->with('message', 'The success message!');
  

  
    }



}
