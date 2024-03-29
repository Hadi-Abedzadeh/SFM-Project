<?php

namespace Modules\News\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\News\Models\News;

class FrontendModuleNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang = null)
    {
        $locale = set_lang($lang);
        $news = News::whereLang($locale)->orderBy('id', 'desc')->paginate(env('PAGINATE_COUNT'));
        $most_views = News::whereLang($locale)->orderBy('viewCount', sorting())->limit(6)->get();

        if ($locale == 'en') {
            return view(env('THEME_NAME') . '.frontend.news.index', compact('news', 'most_views'));
        } else {
            return view(env('THEME_NAME') . '.frontend-fa.news.index', compact('news', 'most_views'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang = null, $news)
    {
        $locale = set_lang($lang);
        $most_views = News::whereLang($locale)->orderBy('viewCount', sorting())->limit(6)->get();

        News::whereId($news->id)->increment('viewCount', 1);

        if ($locale == 'en') {
            return view(env('THEME_NAME') . '.frontend.news.show', compact('news', 'most_views'));
        } else {
            return view(env('THEME_NAME') . '.frontend-fa.news.show', compact('news', 'most_views'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
