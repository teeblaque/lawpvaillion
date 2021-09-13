<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('pages.index', ['users' => $user]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|max:255|unique:users',
                'primary_legal_counsel' => 'required',
                'dob' => 'required',
                'case_details' => 'required|string'
            ]);

            if ($validator->fails()) {
                return back()->with('error', $validator->errors()->first());
            }

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->dob = $request->dob;
            $user->primary_legal_counsel = $request->primary_legal_counsel;
            $user->case_details = $request->case_details;

            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $fileName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                $location = 'client/' . $fileName;
                Image::make($image)->save($location);

                $user->avatar = $fileName;
            }

            if ($user->save()) {

                $details = [
                        'name' => $user->first_name,
                        'title' => 'Welcome',
                    ];

                Mail::to($request->email)->send(new WelcomeMail($details));

                return back()->with('success', 'Client profile created successfully');
            }

        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function show($id = null)
    {
        if ($id != null) {
            $user = User::find($id);
            if ($user) {
                return view('pages.show', ['user' => $user]);
            }else{
                return back()->with('error', 'Client not found');
            }
        }
    }
}
