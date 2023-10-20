<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Volunteer;
use App\Models\Work;
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
        $blogs = Blog::where('status', 1)->paginate(6);
        $categories = Category::withCount('blogs')->get();
        $latestBlogs = Blog::where('status', 1)->latest()->limit(3)->get();
        return view('blog.blogs', compact(['blogs', 'categories', 'latestBlogs']));
    }


    public function blog_details($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::withCount('blogs')->get();
        $latestBlogs = Blog::where('status', 1)->latest()->limit(3)->get();
        return view('blog.blog_details', compact(['blog', 'categories', 'latestBlogs']));
    }

    public function category_blogs($id)
    {
        $blogs = Blog::where('category_id', $id)->paginate(6);
        $categories = Category::withCount('blogs')->get();
        $latestBlogs = Blog::where('status', 1)->where('category_id', $id)->latest()->limit(3)->get();
        return view('blog.category_blogs', compact(['blogs', 'categories', 'latestBlogs']));
    }


    public function our_works()
    {
        $works = Work::where('status', 1)->paginate(5);
        return view('work.works', compact(['works']));
    }


    public function work_details($id)
    {
        $work = Work::findOrFail($id);
        return view('work.work_details', compact(['work']));
    }



    public function terms_and_conditions(){
        return view('extra.terms_and_conditions');
    }

    public function privacy_policy(){
        return view('extra.privacy_policy');
    }
}
