<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }

    public function flexiblePackaging()
    {
        $services = [
            'Custom Printing and Lamination',
            'Material Development',
            'Design Consultation',
            'Quality Testing',
            'Bulk Manufacturing'
        ];

        return view('pages.services.flexible-packaging', compact('services'));
    }

    public function machines()
    {
        $machines = [
            'Form Fill Seal Machines',
            'Shrink Wrapping Machines',
            'Bag Making Machines',
            'Lamination Machines',
            'PET Preform Machines'
        ];

        return view('pages.services.machines', compact('machines'));
    }
}
