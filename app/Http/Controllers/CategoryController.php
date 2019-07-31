<?php

namespace App\Http\Controllers;

use Spatie\Flash\flash;
use App\Models\Category;
use App\Traits\uploadOne;
use App\Traits\UploadTrait;
use App\Traits\Authorizable;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\getClientOriginalExtension;

class CategoryController extends Controller
{
     use Authorizable;
     use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'title'  =>'required',
            'description'  =>'required',
            'image'  =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        $category = new Category;

        $category->title = $request->title;
        $category->description = $request->description;

         if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('image')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/categories/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $category->image = $filePath;
        }


        $category->save();

        return redirect()->route('categories.index');
          

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[

            'title'  =>'required',
            'description'  =>'required',
            'image'  =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        
        $category->title = $request->title;
        $category->description = $request->description;


         if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('image')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/categories/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $category->image = $filePath;
        }


        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // je dois mettre un control ici
        $category->delete();
        return redirect()->route('categories.index');
    }
}
