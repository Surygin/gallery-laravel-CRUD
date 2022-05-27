<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Services\ImageService;

class ImagesController extends Controller
{
    private $images;

    //$images = new ImageService();

    public function __construct(ImageService $imageService){
        $this->images = $imageService;
    }

    function add_img() {
        return view('add-img');
    }

    function show($id) {
        return view('show', ['img' => $this->images->show($id)]);
    }

    function create(Request $request) {
        $this->images->create($request);
        return redirect()->route('home');
    }

    function editPage($id) {
        return view('edit', ['img' => $this->images->editPageView($id)]);
    }

    function update($id, Request $request) {
        $this->images->update($id, $request);
        return redirect()->route('edit', ['id' => $id]);
    }

    function delete($id) {
        $this->images->delete($id);
        return redirect()->route('home');
    }
}
