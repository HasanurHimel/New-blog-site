<?php

namespace App\Http\Controllers;
use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create_category(){

        return view('dashboard.dashboard-elements.create-category');
    }

    protected function category_update_validation($request){
        $this->validate($request, [
            'category_name' =>'required|min:3',
            'category_description' =>'required|min:6',
            'publication_status' =>'required'
        ]);

    }



    public function category_save(Request $request){
        $this->category_update_validation($request);
        $category=new category;
        $category->category_name  = $request->category_name;
        $category->category_description  = $request->category_description;
        $category->publication_status  = $request->publication_status;
        $category->save();
        return redirect('category/create')->with('message', 'Your category save successfully' );
    }


    public function manage_category(){
        $categories=category::all();
        return view('dashboard.dashboard-elements.manage-category', ['categories'=>$categories]);
    }
    public function category_unpublished($id){
        $unpublished_category=category::find($id);
        $unpublished_category->publication_status=0;
        $unpublished_category->save();

        return redirect('category/manage')->with('message', 'Category unpublished successfully !!');

    }
    public function category_published($id){
        $published_category=category::find($id);
        $published_category->publication_status=1;
        $published_category->save();

        return redirect('category/manage')->with('message', 'Category published successfully !!');

    }
 public function category_edit($id){
        $category= category::find($id);
       return view('dashboard.dashboard-elements.edit-category',['category'=>$category]);

    }
    public function category_update(Request $request){
        $category=category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('category/manage')->with('message', 'Category update successfully !! ');
    }
    public  function category_delete($id){
        $category=category::find($id);
        $category->delete();
        return redirect('category/manage')->with('message', 'Category delete successfully !! ');





    }





}
