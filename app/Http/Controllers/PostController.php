<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Post;

use App\Tab;



class PostController extends Controller
{


    /*
     * Defining Relationship
     */
     public function category(){
         return $this->belongsTo('App\Category');
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $tabs = Tab::all();
        return view('admin.createpost')->with('category',$categories)
                                       ->with('tabs',$tabs);



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $all_posts = Post::all();
      return view('admin.postlist')->with('posts',$all_posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'featured' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2090',
            'title'=>'required|max:100',
            'content'=>'required',
            'category'=>'required',
            'tab'=>'required'
         ]);


        if ($request->hasFile('featured')) {
             $post = new Post;
             $post->title = $request->input('title');
             $post->content = $request->input('content');
             $post->category = $request->input('category');
             $image = $request->file('featured');
             $post->tabs = serialize($request->input('tab'));



             $image_name = time().'.'.$image->getClientOriginalExtension();
             $destinationPath = public_path('/images');
             $image->move($destinationPath, $image_name);
             $post->featured='images/'.$image_name;
             $post->save();

             return back()->with('success','Post Uploaded Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        $cat_id = Category::find($id);
        $cat = Category::all();
        $tabs = Tab::all();
        return view('admin.editpost')->with('singlepost',$post)
                                     ->with('allcategory',$cat)
                                     ->with('alltabs',$tabs)
                                     ->with('singlecat',$cat_id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
