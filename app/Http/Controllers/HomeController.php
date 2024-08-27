<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id())
        {

            $post=Post::all();

            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage',compact('post'));
            }

            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }

            else if($usertype=='admin')
            {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {

        $post = Post::all();

        return view('home.homepage', compact('post'));
    }

    public function berita()
    {

        $post = Post::all();

        return view('home.berita',  compact('post'));
    }

    public function sejarah()
    {
        return view('home.sejarah');
    }

    public function struktur_organisasi()
    {
        return view('home.struktur_organisasi');
    }

    public function tupoksi()
    {
        return view('home.tupoksi');
    }

    public function susunan_organisasi()
    {
        return view('home.susunan_organisasi');
    }

    public function galeri()
    {
        return view('home.galeri');
    }

    public function informasi_kegiatan()
    {
        return view('home.informasi_kegiatan');
    }

    public function permohonan_informasi()
    {
        return view('home.permohonan_informasi');
    }

    public function permohonan_keberatan()
    {
        return view('home.permohonan_keberatan');
    }

    public function post_details($id)
    {

        $post = Post::find($id);

        return view('home.post_details',compact('post'));
    }

    public function create_post()
    {

        return view('home.create_post');
    }

    public function user_post(Request $request)
    {

        $user=Auth()->user();

        $userid=$user->id;

        $username=$user->name;

        $usertype=$user->usertype;


        $post = new Post;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->user_id=$userid;

        $post->name=$username;

        $post->usertype=$usertype;
        
        $post->post_staus='pending';


        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('postimage',$imagename);

            $post->image=$imagename;

        }



        $post->save();

        return redirect()->back();


    }


    public function my_post()
    {
        $user=Auth::user();

        $userid=$user->id;

        $data = Post::where('user_id','=',$userid)->get();

        return view('home.my_post',compact('data'));
    }

    public function my_post_del($id)
    {

        $data = Post::find($id);

        $data->delete();

        return redirect()->back()->with('message','Post Deleted Seccesfully');

    }

    public function post_update_page($id)
    {
        $data = Post::find($id);
        return view('home.post_page',compact('data'));
    }

    public function  update_post_data(Request $request,$id)
    {
        $data = Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $image =$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $data->image=$imagename;
        }

        $data->save();
        return redirect()->back()->with('message','Post Updated Successfully');
    }


}
