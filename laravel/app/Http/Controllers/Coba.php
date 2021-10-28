<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(Request $request) {
        $data = array(
            (object) array(
                "name"  => 'Budi',
                "age"   => 20,
                "gender" => 'male'
            ),
            (object) array(
                "name"  => 'Susi',
                "age"   => 20,
                "gender" => 'female'
            ),
            (object) array(
                "name"  => 'Andi',
                "age"   => 20,
                "gender" => 'male'
            ),
        );

        return view('coba', [
            'name' => 'World',
            'menu' => 1,
            'siswa' => $data
        ]);
    }
}
