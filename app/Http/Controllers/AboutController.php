<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $companyInfo = [
            'founded' => '2022',
            'founder' => 'Mr. Yadav Indrajeet',
            'experience' => '25+ years'
        ];

        return view('pages.about', compact('companyInfo'));
    }
}
