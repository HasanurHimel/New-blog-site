<?php

namespace App\Http\Controllers;
use App\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function  tutorial_create(){
        return view('dashboard.dashboard-elements.tutorial-create');
    }
    protected function tutorial_validation($request){
        $this->validate($request, [
            'tutorial_title' =>'required|min: 5|max:100',
            'tutorial_short_description' =>'required|min: 5|max: 200',
            'tutorial_long_description' =>'required|min: 5',
            'tutorial_image' =>'required',
            'publication_status' =>'required',
        ]);
    }

    protected function tutorial_photo_update($request){
        $tutorial_image=$request->file('tutorial_image');
        $directory='blog-photo/';
        $image_name=$tutorial_image->getClientOriginalName();
        $image_url=$directory.$image_name;
        $tutorial_image->move($directory, $image_name);
        return $image_url;
    }
    protected function data_transfer($tutorial, $request, $image_url=null){


        $tutorial->tutorial_title = $request->tutorial_title;
        $tutorial->tutorial_short_description = $request->tutorial_short_description;
        $tutorial->tutorial_long_description = $request->tutorial_long_description;
        if ($image_url){
            $tutorial->tutorial_image = $image_url;
        }
        $tutorial->publication_status = $request->publication_status;
        $tutorial->save();

    }


    public function tutorial_save(Request $request){
        $tutorial=new Tutorial;
        $this->tutorial_validation($request);
        $image_url=$this->tutorial_photo_update($request);
        $this->data_transfer($tutorial, $request, $image_url);
        return redirect('tutorial/create')->with('message', 'Your tutorial update successfully !!');
    }
    public function tutorial_manage(){
        $tutorial=Tutorial::all();
        return view('dashboard.dashboard-elements.manage-tutorial',['tutorials'=>$tutorial]);
    }
    public function tutorial_unpublished($id){
        $tutorial=tutorial::find($id);
        $tutorial->publication_status =0;
        $tutorial->save();
        return redirect('tutorial/manage')->with('message', 'tutorial unpublished successfully !!');
    }
    public function tutorial_published($id){
        $tutorial=tutorial::find($id);
        $tutorial->publication_status =1;
        $tutorial->save();
        return redirect('tutorial/manage')->with('message', 'tutorial published successfully !!');

    }
    public function tutorial_edit($id)
    {
        $tutorial = tutorial::find($id);
        return view('dashboard.dashboard-elements.edit-tutorial', ['tutorial' => $tutorial]);

    }
    public function tutorial_update(Request $request){
        $tutorial=tutorial::find($request->tutorial_id);
        $tutorial_photo=$request->file('tutorial_image');
        if ($tutorial_photo){
            unlink($tutorial->tutorial_image);
            $image_url=$this->tutorial_photo_update($request);
            $this->data_transfer($tutorial, $request, $image_url);
        }
        else{
            $this->data_transfer($tutorial, $request);
        }

        return redirect('tutorial/manage')->with('message', 'your tutorial update successfully !!');
    }
    public function tutorial_delete($id){
        $tutorial=tutorial::find($id);
        $tutorial->delete();
        return redirect('tutorial/manage')->with('message', 'your tutorial delete successfully !!');

    }
    public function tutorial_content(){
        $tutorial=Tutorial::where('publication_status', 1)
        ->orderBy('id', 'DESC')
        ->get();
        return view('front-end.content.tutorial-content', ['tutorial'=>$tutorial]);
    }
    public function tutorial_description($id)
    {
        $tutorial_description=Tutorial::find($id);

        return view('front-end.content.tutorial-description', ['tutorial_description'=>$tutorial_description]);
    }


}
