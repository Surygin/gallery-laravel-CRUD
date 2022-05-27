<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Services\ImageService;

class HomeController extends Controller
{
    private $images;

    //$images = new ImageService();

    public function __construct(ImageService $imageService){
        $this->images = $imageService;
    }

    function index() {
        return view('home', ['images' => $this->images->all()]);
    }

    function about() {
        return view('about');
    }
}
