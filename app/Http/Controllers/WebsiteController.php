<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function home()
    {
        // $sliders = Slider::latest()->get();
        $about = About::first();
        // dd(about)
        $stories = Blog::all();
        // latest()->paginate(4);
        // $testies = Testimonial::latest()->paginate(4);
        $services = Service::all();
        $gallery = Gallery::limit(6)->get();
        // $products = Product::latest()->paginate(6);
        //       dd($sliders);
        return view('website.other-home-page', compact('about', 'stories', 'services','gallery'));

    }

    public function about()
    {
        $about = About::first();
        $services = Service::all();
        // dd(about);
        return view('website.about', compact('about','services'));
    }

    public function services()
    {
        $services = Service::all();
        //       dd($services);
        return view('website.service', compact('services'));
    }

    public function team()
    {
        $teams = Team::oldest()->get();
        return view('website.team', compact('teams'));
    }

    public function testy()
    {
        $testies = Testimonial::latest()->get();
        //       dd($sliders);
        return view('testimonials', compact('testies'));
    }

    public function blog()
    {
        $blogs = Blog::latest()->get();
        $blogsmall = Blog::latest()->paginate(5);
        $services = Service::latest()->get();
        return view('website.blog', compact('blogs', 'services', 'blogsmall'));
    }
    public function gallery()
    {
        // $images = Gallery::latest()->get();
        //$gallery = Gallery::limit(6)->get();
        $gallery = Gallery::latest()->get();

        return view('website.gallery', compact('gallery'));
    }

    public function teamSingle($id)
    {
        $team = Team::where('id', $id)->first();
        return view('team-single', compact('team'));
    }


    public function request()
    {
        $testies = Testimonial::latest()->paginate(4);
        $services = Service::all();
        return view('request', compact('testies', 'services'));
    }

    public function blogSingle($id)
    {
        $blog = Blog::where('id', $id)->with(['comments'])->first();
        // dd($blog);
        $total_comments = $blog->comments->count();
        // dd($total_comments);
        $blogs = Blog::latest()->paginate(5);
        return view('blog-single', compact('blog', 'blogs', 'total_comments'));
    }

    public function serviceSingle($id)
    {
        $service = Service::where('id', $id)->first();
        $services = Service::latest()->get();
        return view('service-single', compact('service', 'services'));
    }

    public function show()
    {
        return view('admin.login');
    }
    public function loginView()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $msg = array(
                'status' => 'success',
                'message' => 'login successful',

            );


            return response()->json($msg);
        } else {
            $msg = array(
                'status' => 'error',
                'mesaage' => 'login fail'
            );

            return response()->json($msg);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // public function allCategories($id)
    // {
    //     $products = Product::where('category_id', $id)->get();
    //     $category_name = Category::where('id', $id)->first()->category_name;
    //     return view('category-all', compact('products', 'category_name'));
    // }

    // public function productCats(){
    //     $categories = Category::all();
    //     $services = Service::all();
    //     $posts = Blog::all();
    //     return view('website.products_cats', compact('categories','posts','services'));
    // }

    // public function getProducts(Category $category){
    //     // dd($category->load('products'));
    //     return view('website.products')->with(['category'=>$category->load('products'), 'services'=>Service::all()]);
    // }

    // public function productShow(Product $product){
    //     return view('website.product_single')->with(['product'=>$product, 'services'=>Service::all()]);

    // }

    // public function getProduct($id)
    // {
    //     $product = Product::findOrFail($id);
    //     $categories = Category::latest()->get();
    //     return view('product-single', compact('product', 'categories'));
    // }
}
