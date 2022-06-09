<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\candy;

class CandyController extends Controller
{
    public function index(){
        $data=candy::all();
        return view('layout.card',compact('data'));
    }

    public function delete($id){
        $delet=candy::find($id);
        $delet->delete();
        return redirect('/candyData')->with('message','the data has been delete successfully');
    }

    public function addItem(){
        return view('layout.add');}

      public function saveItem(Request $request){
          $create=new candy();
          $create->candyName=$request->input('candyName');
          $create->candyImage=$request->input('candyImage');
          $create->candyPrice=$request->input('candyPrice');
          $create->candyQuantity=$request->input('candyQuantity');
          $create->save();
          return redirect('/candyData')->with('message','the data has been added successfully');
      }
      
      public function updatePage($id){
        $update=candy::find($id);
        // $update->update();
        return view('layout.update',compact('update'));}

      public function update(Request $request, $id){
        $update=candy::find($id);
        $update->candyName=$request->input('candyName');
        $update->candyImage=$request->input('candyImage');
        $update->candyPrice=$request->input('candyPrice');
        $update->candyQuantity=$request->input('candyQuantity');
        $update->update();
        return redirect('/candyData')->with('message','the data has been updated successfully');

      }
}
