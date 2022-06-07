<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home () {
        return view ('home', [
            "title" => "Home"
        ]);
    }

    public function info_kegiatan () {
        return view ('pages.kegiatan_siswa', [
            "title" => "Info"
        ]);
    }

    public function data_siswa () {
        return view ('pages.data-siswa', [
            "title" => "Siswa"
        ]);
    }

    public function data_blog () {
        return view ('pages.blog', [
            "title" => "Blog"
        ]);
    }

    public function data_gallery () {
        return view ('pages.gallery', [
            'title' => "Gallery"
        ]);

    }

    public function data_about () {
        return view ('pages.profil', [
            "title" => "About"
        ]);
    }

    public function data_login () {
        return view ('auth.login', [
            "title" => "Halaman Login"
        ]);
    }

    public function data_register () {
        return view ('auth.register', [
                "title" => "Halaman Pendaftaran"
        ]);
    }
    
}
