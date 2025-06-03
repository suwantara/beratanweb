<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = \App\Models\Product::take(6)->get();
        return view('home', compact('products'));
    }


    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function detail()
    {
        return view('detail');
    }

    // Detail untuk about
    public function aboutDetail($slug)
    {
        // Untuk contoh, slug bisa 'sejarah', 'visi-misi', dsb.
        // Anda bisa ambil data dari database atau array statis.
        $details = [
            'sejarah' => [
                'title' => 'Sejarah Beratan Dairy Farm',
                'content' => 'Beratan Dairy Farm berdiri sejak tahun 2000 ... (isi lengkap sejarah di sini).'
            ],
            'visi-misi' => [
                'title' => 'Visi & Misi',
                'content' => 'Visi kami adalah ... (isi visi misi di sini).'
            ],
            // Tambah detail lain jika perlu
        ];

        if (!isset($details[$slug])) {
            abort(404);
        }

        $detail = $details[$slug];

        return view('components.section.about.detail', compact('detail'));
    }

}
