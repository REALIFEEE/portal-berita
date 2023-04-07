<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $title = "Zen News";
        $news = News::latest()->get();
        $nav_category = Category::all();
        $side_news = News::inRandomOrder()->limit('4')->get();
        $slider = Slider::all();


        return view('frontend.index', compact(
            'news',
            'nav_category',
            'side_news',
            'slider',
            'nav_category',
            'title'
        ));
    }

    public function detailCategory($slug)
    {
        $title = "Zen Categories";
        $category = Category::where('slug', $slug)->first();
        $news     = News::where('category_id', $category->id)->paginate(10);
        $nav_category = Category::all();
        $side_news = News::inRandomOrder()->limit('4')->get();
        return view('frontend.detail-category', compact('news', 'nav_category', 'side_news', 'title'));
    }

    public function DetailNews($slug)
    {

        $news = News::Where('slug', $slug)->first();
        $text = News::findOrfail($news->id)->title;
        $title = "Berita - $text";
        $nav_category = Category::all();
        $side_news = News::inRandomOrder()->limit('4')->get();
        return view('frontend.detail-news', compact('news', 'nav_category', 'side_news', 'title'));
    }

    public function searchBerita(Request $request)
    {
        $title = "Zen News";
        $keyword = $request->keyword;
        $news  = News::where('title', 'like', '%'. $keyword . '%')->paginate(10);
        $nav_category = Category::all();
        $slider = Slider::all();
        $side_news = News::inRandomOrder()->limit('4')->get();
        
        return view('frontend.index', compact(
            'news',
            'nav_category',
            'side_news',
            'slider',
            'nav_category',
            'title', 'slider'
        ));
    }
};
