<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $appeals = Appeal::where('status', 1)->latest()->get();
        $volunteers = Volunteer::where('status', 1)->latest()->get();
        $images = Gallery::all();
        $blogs = Blog::where('status', 1)->latest()->limit(3)->get();
        return view('welcome', compact(['categories', 'appeals', 'volunteers', 'images', 'blogs']));
    }


    public function contact()
    {
        return view('contact');
    }



    public function about()
    {
        return view('about');
    }

    public function save_contact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'message' => 'required|string',
        ]);

        // Create a new Contact instance and store the data
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->message = $validatedData['message'];
        $contact->save();
        session()->flash('success', 'Thank you for your message. We will get back to you soon.');

        return redirect()->route('contact');
    }



    public function become_volunteer()
    {
        return view('volunteer.become_volunteer');
    }


    public function save_volunteer(Request $request)
    {
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email',
            'primary_number' => 'required|string|max:20',
            'secondary_number' => 'nullable|string|max:20',
            'dob' => 'required|date',
            'gender' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'description' => 'required|string',
            'interested_in' => 'required|string|max:255',
            'resume' => 'nullable|mimes:pdf',
            'image' => 'nullable|image', // Accepts jpg, jpeg, png, and gif
        ];

        $request->validate($rules);

        Volunteer::create($request->all());
        session()->flash('success', 'Thank you for your interest. We will get back to you soon.');

        return redirect()->route('become_volunteer');
    }

    public function appeals()
    {
        $appeals = Appeal::where('status', 1)->paginate(5);
        return view('appeals.appeals', compact(['appeals']));
    }


    public function appeal_details($id)
    {
        $appeal = Appeal::findOrFail($id);
        return view('appeals.appeal_details', compact(['appeal']));
    }



    public function blogs()
    {
        $blogs = Blog::where('status',1 )->get();
        return view('blog.blogs', compact(['blogs']));
    }


    public function blog_details($id)
    {
        $blog = Appeal::findOrFail($id);
        return view('blog.blog_details', compact(['blog']));
    }


}
