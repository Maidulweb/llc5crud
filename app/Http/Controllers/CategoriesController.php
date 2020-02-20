<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{
    public function index ()
    {
             /* all */
        $categories = Categories::select('id', 'name','slug', 'categories_id')->get();
           return view('categories.index')->with('categories', $categories);
    }

    public function create ()
    {
        return view('categories.create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|min:3',
            'slug' => 'required',
            'categories_id' => 'required',
        ]);

       try
        {

            $newvariable = new Categories;
            $newvariable->name = $request->name;
            $newvariable->slug = $request->slug;
            $newvariable->categories_id = $request->categories_id;
            $newvariable->save();

            session()->flash('message', 'Successfully registration!');
            session()->flash('type', 'success');

            return redirect()->route('categories.index');

        }catch(Exception $e){

            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');

            return redirect()->back();

        }
    }
}
