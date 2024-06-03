<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        return view('public.index');
    }

    public function about()
    {
        $name = 'John Doe Saiful';
        $address = 'Dhaka, Bangladesh';
        return view('public.about', compact('name', 'address'));
    }

    public function contact()
    {
        return view('public.contact');
    }


    // OOP - Object Oriented Programming

    // Class and Object
    // Encapsulation
    // Inheritance
    // Polymorphism
    // Abstraction
}
