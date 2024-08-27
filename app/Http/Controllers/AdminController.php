<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Sejarah;
use App\Models\galeri;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminhome()
    {
        return view('admin.adminhome');
    }

    public function post_page()
    {
        return view('admin.post_page');
    }

    public function inputsejarah()
    {
        return view('admin.inputsejarah');
    }

    public function show_sejarah()
    {
        return view('admin.show_sejarah');
    }

    public function post_galeri()
    {
        return view('admin.post_galeri');
    }

    public function sejarah(Request $request)
    {


        $post=new Sejarah;

        $post->description = $request->description;
        $post->save();

        return redirect()->back()->with('message','Post Added Successfully');


    }

    public function showsejarah()
    {

        $sejarahs = Sejarah::all();

        return view('admin.showsejarah',compact('showsejarah'));
    }

    public function galeri(Request $request)
    {


        $post=new galeri;

        $post->image = $request->image;
        $post->save();

        return redirect()->back()->with('message','Post Added Successfully');


    }
    // public function post_galeri(Request $request)
    // {

    //     $post=new galeri;

    //     $image=$request->image;
    //     if($image)
    //     {
    //         $imagename=time().'.'.$image->getClientOriginalExtension();
    //         $request->image->move('post_galeri',$imagename);
    //         $post->image = $imagename;
    //     }

    //     $post->save();

    //     return redirect()->back()->with('message','Post Added Successfully');

    // }

    public function add_post(Request $request)
    {

        $user=Auth()->user();

        $userid = $user->id;

        $name = $user->name;

        $usertype = $user->usertype;


        $post=new Post;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->post_staus = 'active';

        $post->user_id = $userid;

        $post->name = $name;

        $post->usertype = $usertype;


        $image=$request->image;



        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);
    
            $post->image = $imagename;

            $images = Post::paginate(3); // Menampilkan 3 gambar per halaman
            
            return view('home.service', compact('images'));
        }

    
        

        $post->save();

        return redirect()->back()->with('message','Post Added Successfully');


    }


    public function show_post()
    {

        $post = Post::all();

        return view('admin.show_post',compact('post'));
    }

    public function delete_post($id)
    {
        
        $post = Post::find($id);

        $post->delete();

        return redirect()->back()->with('message','Post Dellete Succesfully');
    }

    public function edit_page($id)
    {
        
        $post = Post::find($id);

        return view('admin.edit_page',compact("post"));
    }

    public function update_post(Request $request,$id)

    {

        $data = Post::find($id);

        $data->title=$request->title;

        $data->description=$request->description;

        $image=$request->image;

        if($image)
        {

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);
    
            $data->image = $imagename;

        }

        $data->save();

        return redirect()->back()->with('message','Post Update Successfully');
        
    }

}