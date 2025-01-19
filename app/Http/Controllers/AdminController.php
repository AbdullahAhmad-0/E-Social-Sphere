<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Review;
use App\Models\Work;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        // return view('content/admin/admin');
        return redirect('/admin/account');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $email = $credentials['email'];
        $password = $credentials['password'];
        // for creating new password
        // $password = Hash::make($credentials['password']);

        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to a protected page
            return redirect()->route('admin'); // Change this to the desired page
        }
        if (Auth::check()) {
            return redirect()->route('admin'); // Change this to the desired page
        }

        // Authentication failed, redirect back to the login form with an error
        return redirect()->route('login')->with('error', 'Invalid credentials Email: ' . $email . ' Password: ' . $password);
    }

    public function logout()
    {
        Auth::logout(); // Log out the authenticated user
        return redirect()->route('login');
    }

    public function contact()
    {
        $data = Contact::orderBy('id', 'desc')->paginate(30);
        $data = ['data' => $data];
        return view('content/admin/contact', $data);
    }
    public function contact_r($id)
    {
        $data = Contact::find($id);

        if ($data) {
            $data->update(['operation' => 'Read']);
        }

        $urlWithHash = url()->previous();
        return Redirect::to($urlWithHash);
    }
    public function contact_v($id)
    {
        $data = Contact::find($id);
        $data = ['data' => $data];
        return view('content/admin/contact_v', $data);
    }
    public function contact_d($id)
    {
        $item = Contact::findOrFail($id);
        $item->delete();
        $urlWithHash = url()->previous();
        return Redirect::to($urlWithHash);
    }
    public function work()
    {
        $data = Work::orderBy('id', 'desc')->paginate(30);
        $data = ['data' => $data];
        return view('content/admin/work', $data);
    }
    public function work_r($id)
    {
        $data = Work::find($id);

        if ($data) {
            $data->update(['operation' => 'Read']);
        }

        $urlWithHash = url()->previous();
        return Redirect::to($urlWithHash);
    }
    public function work_v($id)
    {
        $data = Work::find($id);
        $data = ['data' => $data];
        return view('content/admin/work_v', $data);
    }
    public function work_d($id)
    {
        $item = Work::findOrFail($id);
        $item->delete();
        $urlWithHash = url()->previous();
        return Redirect::to($urlWithHash);
    }
    public function review()
    {
        $data = Review::orderBy('id', 'desc')->paginate(30);
        $data = ['data' => $data];
        return view('content/admin/review', $data);
    }
    public function review_v($id)
    {
        $data = Review::find($id);
        $data = ['data' => $data];
        return view('content/admin/review_v', $data);
    }
    public function review_d($id)
    {
        $item = Review::findOrFail($id);
        $item->delete();
        $urlWithHash = url()->previous();
        return Redirect::to($urlWithHash);
    }
    public function account()
    {
        $data = User::select('email', 'password')->findOrFail(2);
        $data = ['data' => $data];
        return view('content/admin/account', $data);
    }
    public function save_webdet(Request $request)
    {
        $data = $request->all();
        foreach ($data as $key => $value) {
            Config::set('webdet.' . $key, $value);
        }
        $content = '<?php return ' . var_export(config('webdet'), true) . ';';
        File::put(config_path('webdet.php'), $content);

        $urlWithHash = url()->previous();
        return Redirect::to($urlWithHash . '#webdet-btn')->with('success-web', 'Data saved successfully. ');
        // return redirect()->back()->with('success', 'Data saved successfully. ');
    }
    public function save_usrdet(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::find(2);
        $urlWithHash = url()->previous();

        if ($user) {
            $user->email = $email;

            if ($password) {
                $hashedPassword = Hash::make($password);
                $user->password = $hashedPassword;
            }

            $user->save();

            return Redirect::to($urlWithHash . '#usrdet-btn')->with('success-usr', 'Data saved successfully.');
        } else {
            return Redirect::to($urlWithHash . '#usrdet-btn')->with('success-usr', 'User not found.');
        }
    }
}
