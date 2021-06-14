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

class ProductspageController extends Controller
{
    public function index() {
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
        return view('productspage/index', [
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

    public function contactStore1(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->saveOrFail();
        session()->flash('message', 'Success');
        return redirect(url('productspage'));
    }
}
