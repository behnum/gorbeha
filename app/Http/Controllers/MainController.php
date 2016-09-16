<?php

/**
 * This file is where all the main stuff of the website reside.
 *
 * @author Behnam Baharmand <behnam@baharmand.com>
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function home() {
      return view('pages.home');
    }

    public function about() {
      return 'about';
    }

    public function contact() {
      return 'contact';
    }
}
