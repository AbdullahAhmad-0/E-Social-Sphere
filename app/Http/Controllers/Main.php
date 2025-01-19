<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Faq;
use App\Models\Cmn_page;
use App\Models\Contact;
use App\Models\Work;
use App\Models\Review;

class Main extends Controller
{
    // Call Home
    function home()
    {
        $ser = Services::all();
        $data = ['ser' => $ser];
        return view('home', $data);
    }

    function services()
    {
        $ser = Services::all();
        $data = ['ser' => $ser];
        return view('content/main/courses', $data);
    }

    function services_det($url)
    {
        $ser = Services::all();
        $data = ['ser' => $ser, 'url' => $url];
        return view('content/main/courses-det', $data);
    }
    function faq()
    {
        $ser = Services::all();
        $faq = Faq::all();
        $data = ['ser' => $ser, 'faq' => $faq];
        return view('content/main/faq', $data);
    }
    function tc()
    {
        $ser = Services::all();
        $cmn = Cmn_page::all();
        $data = ['ser' => $ser, 'cmn' => $cmn];
        return view('content/main/terms-conditions', $data);
    }
    function pp()
    {
        $ser = Services::all();
        $cmn = Cmn_page::all();
        $data = ['ser' => $ser, 'cmn' => $cmn];
        return view('content/main/privacy-policy', $data);
    }
    function about()
    {
        $ser = Services::all();
        $data = ['ser' => $ser];
        return view('content/main/about', $data);
    }
    function contact()
    {
        $ser = Services::all();
        $data = ['ser' => $ser];
        return view('content/main/contact', $data);
    }
    function contact_save(Request $req)
    {
        $member = new Contact;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->phone = $req->phone;
        $member->message = $req->message;
        $member->operation = "Not Read";
        $member->save();

        $req->session()->flash('contact_message_send', $req->name);
        return redirect('contact');
    }
    function work()
    {
        $ser = Services::all();
        $data = ['ser' => $ser];
        return view('content/main/work', $data);
    }
    function work_save(Request $req)
    {
        $member = new Work;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->phone = $req->phone;
        $member->company = $req->company;
        $member->website = $req->website;
        $member->job = $req->job;
        $member->about = $req->about;
        $member->message = $req->message;
        $member->operation = "Not Read";
        $member->save();

        $req->session()->flash('contact_message_send', $req->name);
        return redirect('work-with-us');
    }
    function portfolio()
    {
        $ser = Services::all();
        $data = ['ser' => $ser];
        return view('content/main/portfolio', $data);
    }
    function pricing()
    {
        $ser = Services::all();
        $data = ['ser' => $ser];
        return view('content/main/pricing', $data);
    }
    function testimonials()
    {
        $ser = Services::all();
        $rev = Review::orderBy('id', 'desc')->paginate(15);;
        $data = ['ser' => $ser, 'rev' => $rev];
        return view('content/main/testimonials', $data);
    }
    function testimonials_save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'required',
        ]);

        Review::create($validatedData);

        return redirect('testimonials');
    }
}
