<?php

namespace App\Http\Controllers\frontend;

use App\About;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Support;
use Illuminate\Http\Request;
use Modules\Faq\Models\Faq;

class FrontendController extends Controller
{
    public function show_contact($lang = null)
    {
        $locale = set_lang($lang);

        if ($locale == 'fa') {
            $contact = Contact::find(2);
            return view(env('THEME_NAME') . '.frontend-fa.contact.index', compact('contact'));
        } else {
            $contact = Contact::find(1);
            return view(env('THEME_NAME') . '.frontend.contact.index', compact('contact'));
        }
    }

    public function about_us($lang = null, $brand = null)
    {
        $locale = set_lang($lang);

        if ($brand == null) {
            $about = About::whereBrand('about')->firstOrFail();
            if ($locale == 'en') {
                return view(env('THEME_NAME') . '.frontend.about.index', compact('about'));
            } else {
                return view(env('THEME_NAME') . '.frontend-fa.about.index', compact('about'));
            }
        }


        $about = About::whereBrand($brand)->firstOrFail();

        if ($locale == 'en') {
            return view(env('THEME_NAME') . '.frontend.about.index', compact('about'));
        } else {
            return view(env('THEME_NAME') . '.frontend-fa.about.index', compact('about'));
        }
    }

    public function faq($lang = null)
    {
        $locale = set_lang($lang);

        if ($locale == 'en') {
            $faq = Faq::whereLang('en')->get();
            return view(env('THEME_NAME') . '.frontend.faq.index', compact('faq'));
        } else {
            $faq = Faq::whereLang('fa')->get();
            return view(env('THEME_NAME') . '.frontend-fa.faq.index', compact('faq'));

        }
    }

    public function support($lang = null)
    {
        $locale = set_lang($lang);

        if ($locale == 'fa') {
            return view(env('THEME_NAME') . '.frontend-fa.support.index', compact('contact'));
        } else {
            return view(env('THEME_NAME') . '.frontend.support.index', compact('contact'));
        }
    }


    public function support_submit(Request $request)
    {
        $locale = set_lang();
        $valid_data = $request->validate([
            'name' => 'required',
            'tel' => 'required',
            'code' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $array = array_merge($valid_data, ['lang' => $locale]);

        Support::create($array);
        return redirect()->back();
    }
}
