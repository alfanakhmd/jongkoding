<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Blog extends Controller
{
    public function index(Request $req) {
        $feature = array (
            array(
                'icon'  => 'bi-alarm',
                'title' => 'Ketelitian',
                'description' => 'Belajar koding harus teliti'
            ),
            array(
                'icon'  => 'bi-alarm',
                'title' => 'Kejujuran',
                'description' => 'Belajar koding harus teliti'
            ),
            array(
                'icon'  => 'bi-alarm',
                'title' => 'Kecermatan',
                'description' => 'Belajar koding harus teliti'
            ),
        );

        return view('blog', array(
            'feature' => $feature,
        ));
    }

    public function form() {
        return view('form_blog');
    }

    public function post(Request $req) {
        $validator = Validator::make($req->all(), [
            'title' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('blog/form')
                        ->withErrors($validator)
                        ->withInput();
        }

        $title = $req->input('title');
        $text = $req->input('text');

        // DB Code

        return view('detail_blog', array(
            'title' => $title,
            'text' => $text
        ));
    }
}
