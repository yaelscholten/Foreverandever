<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("nieuw-evenement");
    }
}
