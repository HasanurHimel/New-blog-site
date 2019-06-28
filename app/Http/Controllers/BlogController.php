<?php

namespace App\Http\Controllers;
use App\Blog;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create_blog(){
        return view('dashboard.dashboard-elements.create-blog');
    }


    protected function blog_photo_upload(Request $request){
        $blog_image=$request->file('blog_image');
        $directory='blog-photo/';
        $image_name=$blog_image->getClientOriginalName();
        $image_url=$directory.$image_name;
        $blog_image->move($directory,$image_name );
        return $image_url;
    }

    protected function blog_update_validation($request){
        $blog=$this->validate($request, [
            'category_name' =>'required',
            'blog_title' =>'required|min:5|max:60',
            'blog_short_description' =>'required|min:7|max:200',
            'blog_long_description' =>'required|min:10',
            'blog_image' =>'required | mimes:jpeg,jpg,png | max:2000',
            'publication_status' =>'required',
        ]);
    }
    public function data_transfer($blogs, $request, $image_url=null){
        $blogs->category_name = $request->category_name;
        $blogs->blog_title = $request->blog_title;
        $blogs->blog_short_description = $request->blog_short_description;
        $blogs->blog_long_description = $request->blog_long_description;
        if ($image_url){
            $blogs->blog_image = $image_url;
        }

        $blogs->publication_status = $request->publication_status;
        $blogs->save();
    }


    public function blog_save(Request $request){
        $this->blog_update_validation($request);
        $image_url=$this->blog_photo_upload($request);
        $blogs=new Blog;
        $this->data_transfer($blogs, $request, $image_url);

        return redirect('blog/create')->with('message', 'Your blog update successfully !!');
    }
    public function manage_blog(){


//       $blogs=DB::table('blogs')
//           ->join('categories', 'blogs.category_name', '=', 'categories.category_name')
//           ->select('blogs.*', 'categories.category_name')
//           ->get();
//
//        $blog=Blog::with('category')->where('publication_status', 1)->orderBy('id', 'DESC')->get();
//
//        return $blog->category->category_name;
        return view('dashboard.dashboard-elements.manage-blog', ['blogs'=>$blog]);

    }
    public function blog_unpublished($id){
        $blog_unpublished=Blog::find($id);
        $blog_unpublished->publication_status = 0;
        $blog_unpublished->save();
        return redirect('blog/manage')->with('message', 'Your blog unpublished successfully');

    }
    public function blog_published($id){
        $blog_published=Blog::find($id);
        $blog_published->publication_status = 1;
        $blog_published->save();
        return redirect('blog/manage')->with('message', 'Your blog published successfully');

    }

    public function blog_edit($id){
        $blog_edit=Blog::find($id);
        return view('dashboard.dashboard-elements.edit-blog', ['blog_edit'=>$blog_edit]);
    }
   public function blog_update(Request $request){

        $blogs=Blog::find($request->blog_id);
//       $this->blog_update_validation($request);
       $blog_image=$request->file('blog_image');

       if($blog_image) {
           unlink($blogs->blog_image);
           $image_url=$this->blog_photo_upload($request);
           $this->data_transfer($blogs, $request, $image_url);
       }

       else{
           $this->data_transfer($blogs, $request);
       }
       return redirect('blog/manage')->with('message', 'Your blog update successfully !!');



    }

    public function blog_delete($id){
        $blog_delete=Blog::find($id);
        $blog_delete->delete();
        return redirect('blog/manage')->with('message', 'Your blog delete successfully !!');
    }


}























