<?php 

namespace App\Services;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{

  public function all(){
    $images = DB::table('galleries')->select('*')->get();
    return $images;
  }

  public function show($id){
    $img = DB::table('galleries')->where('id', $id)->get();
    return $img;
  }

  public function create(Request $request){
    $image = $request::file('image');
        $filename = $image->store('uploads');
        DB::table('galleries')->insert([
            'name' => $filename
        ]);
  }

  public function editPageView($id){
    $img = DB::table('galleries')->select('*')->where('id', $id)->get();
    return $img;
  }

  public function update($id, $request){
    $img = DB::table('galleries')->select('*')->where('id', $id)->get();
        $img_path = $img[0]->name;
        Storage::delete($img_path);
        $image = $request::file('image');
        $filename = $image->store('uploads');
        DB::table('galleries')
                  ->where('id', $id)
                  ->update(['name' => $filename]);
  }

  public function delete($id){
    $img = DB::table('galleries')->where('id', $id)->get();
    $img_path = $img[0]->name;
    Storage::delete($img_path);
    DB::table('galleries')->where('id', $id)->delete();
  }

}