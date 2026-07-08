<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();

       // return $contactModel->all();
        return $contactModel->where('id', '=>', 2)->get();
       
        return $this->view('home', [
            'title' => 'Home',
            'description' => 'esta es la pagina home'
        ]);
    }

}