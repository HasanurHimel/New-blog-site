<?php

namespace App\Http\Controllers;
use App\Header_section;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function create_header(){
        return view('dashboard.dashboard-elements.header-section');
    }
    protected function header_validation($request){
        $this->validate($request, [
            'banner_photo' =>'required',
            'latest_news' =>'required|min: 5',
            'publication_status' =>'required',
        ]);
    }
    protected function header_photo_update($request){
        $banner_image=$request->file('banner_photo');
        $directory='blog-photo/';
        $image_name=$banner_image->getClientOriginalName();
        $image_url=$directory.$image_name;
        $banner_image->move($directory, $image_name);
        return $image_url;
    }
    protected function data_transfer($header, $request, $image_url=null){

        if ($image_url){
            $header->banner_photo = $image_url;
        }
        $header->latest_news = $request->latest_news;
        $header->publication_status = $request->publication_status;
        $header->save();

    }


    public function save_header(Request $request){

        $header= new Header_section;
        $this->header_validation($request);
        $image_url=$this->header_photo_update($request);
        $this->data_transfer($header, $request, $image_url);

        return redirect('header/create')->with('message', 'header section create successfully !!');
          }
          public function manage_header(){
        $header= Header_section::all();
        return view('dashboard.dashboard-elements.manage-header', ['header'=>$header]);
          }
          public function unpublished_header($id){
        $header=Header_section::find($id);
        $header->publication_status =0;
        $header->save();
        return redirect('header/manage')->with('message', 'header section unpublished successfully !!');

          }
 public function published_header($id){
        $header=Header_section::find($id);
        $header->publication_status =1;
        $header->save();
        return redirect('header/manage')->with('message', 'header section published successfully !!');

          }
          public function edit_header($id){
              $header=Header_section::find($id);
              return view('dashboard.dashboard-elements.edit-header', ['header'=>$header]);
          }
          public function update_header(Request $request){
              $header=Header_section::find($request->header_id);
              $banner_photo=$request->file('banner_photo');
              if ($banner_photo){
                  unlink($header->banner_photo);
                  $image_url=$this->header_photo_update($request);
                  $this->data_transfer($header, $request, $image_url);
              }
              else{
                  $this->data_transfer($header, $request);
              }

              return redirect('header/manage')->with('message', 'Header section update successfully !!');
          }



    public function delete_header($id){
        $carousel=Header_section::find($id);
        $carousel->delete();
        return redirect('header/manage')->with('message', 'Header section delete successfully !!');

    }


}
