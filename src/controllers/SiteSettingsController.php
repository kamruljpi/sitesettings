<?php 

namespace kamruljpi\sitesettings\controllers;

use App\Http\Controllers\Controller;

class SiteSettingsController extends Controller
{
    public function index()
    {
    	$name = "MD Kamruzzaman";
        return view('sitesettings::index', compact('name'));
    }
}
