<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Session;

class ModalController extends Controller
{

    public function indexservices(Request $request) {
        $search = $request->search;
        if (!empty($search)) {
            $services = DB::table('services')->orderByDesc('id')->where('title','LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->paginate(8);
        } else {
            $services = DB::table('services')->orderByDesc('id')->paginate(8);
        }
        return view('admin.services.index', compact('services'));
    }

    public function index(Request $request) {
        
        
        $mcu = Feedback::leftJoin('services', 'services.id', '=', 'Feedback.subject')->get();
        $mcu = Feedback::all();

        $about = About::first();
        $listServices = DB::table('services')->orderByDesc('id')->whereStatus('ACTIVE')->get();
        $listFaqs = DB::table('faqs')->orderByDesc('id')->whereStatus('ACTIVE')->get();
        $listTeam = Profile::all()->sortByDesc('id');
        $listPortofolio = Portofolio::all();
        $listTestimoni = DB::table('testimoni')->select('name','quote')->orderByDesc('id')->whereStatus('ACTIVE')->get();
        $listArticles = DB::table('articles')->orderByDesc('id')->whereStatus('ACTIVE')->limit(3)->get();
        $address = Address::first();
        $contactUs = DB::table('contact_us')->select('email', 'contact_number')->first();
        $search = $request->search;
        if (!empty($search)) {
            $services = DB::table('services')->orderByDesc('id')->where('title','LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->paginate(8);
        } else {
            $services = DB::table('services')->orderByDesc('id')->paginate(8);
        }
        return view('modal.index', [
            'about'     => $about,
            'listServices' => $listServices,
            'listFaqs' => $listFaqs,
            'listTeam' => $listTeam,
            'listPortofolio' => $listPortofolio,
            'listTestimoni' => $listTestimoni,
            'listArticles' => $listArticles,
            'address'   => $address,
            'contactUs' => $contactUs,
            'services'=>$services
        ]);
    }

    

    public function ModalStore(Request $request) {
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        // $services = Services::all();

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->saveOrFail();
        session()->flash('message', 'Success');
        return redirect(route('homepage.index'));
       

        // return view('homepage/index', ['services'=>$services] );
    }


     }

