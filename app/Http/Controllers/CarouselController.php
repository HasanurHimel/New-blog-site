<?php

namespace App\Http\Controllers;
use App\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function carousel_content($id){
        $carousel=Carousel::find($id);
        return view('front-end.content.carousel-content', [
            'carousel'=>$carousel
        ]);

}

    public function carousel_create(){
        return view('dashboard.dashboard-elements.carousel-create');
    }
    protected function carousel_validation($request){
        $this->validate($request, [
            'carousel_image' =>'required',
            'carousel_short_description' =>'required|min: 5|max: 200',
            'carousel_long_description' =>'required|min: 5',
            'publication_status' =>'required',
        ]);
    }
    protected function carousel_photo_update($request){
        $carousel_image=$request->file('carousel_image');
        $directory='blog-photo/';
        $image_name=$carousel_image->getClientOriginalName();
        $image_url=$directory.$image_name;
        $carousel_image->move($directory, $image_name);
        return $image_url;
    }

    protected function data_transfer($carousel, $request, $image_url=null){

        if ($image_url){
        $carousel->carousel_image = $image_url;
        }
        $carousel->carousel_short_description = $request->carousel_short_description;
        $carousel->carousel_long_description = $request->carousel_long_description;
        $carousel->publication_status = $request->publication_status;
        $carousel->save();

    }

    public function carousel_save(Request $request)
    {
        $carousel=new Carousel;
        $this->carousel_validation($request);
        $image_url=$this->carousel_photo_update($request);
        $this->data_transfer($carousel, $request, $image_url);
        return redirect('carousel/create')->with('message', 'Your carousel update successfully !!');
    }
    public function carousel_manage(){
        $carousel=Carousel::all();
        return view('dashboard.dashboard-elements.manage-carousel',['carousels'=>$carousel]);

    }
    public function carousel_unpublished($id){
        $carousel=Carousel::find($id);
        $carousel->publication_status =0;
        $carousel->save();
        return redirect('carousel/manage')->with('message', 'carousel unpublished successfully !!');

    }
    public function carousel_published($id){
        $carousel=Carousel::find($id);
        $carousel->publication_status =1;
        $carousel->save();
        return redirect('carousel/manage')->with('message', 'carousel published successfully !!');

    }
    public function carousel_edit($id){
        $carousel=Carousel::find($id);
        return view('dashboard.dashboard-elements.edit-carousel', ['carousel'=>$carousel]);

    }
    public function carousel_update(Request $request){
        $carousel=Carousel::find($request->carousel_id);
        $carousel_photo=$request->file('carousel_image');
        if ($carousel_photo){
            unlink($carousel->carousel_image);
            $image_url=$this->carousel_photo_update($request);
            $this->data_transfer($carousel, $request, $image_url);
        }
        else{
            $this->data_transfer($carousel, $request);
        }

        return redirect('carousel/manage')->with('message', 'your carousel update successfully !!');
    }
    public function carousel_delete($id){
        $carousel=Carousel::find($id);
        $carousel->delete();
        return redirect('carousel/manage')->with('message', 'your carousel delete successfully !!');

    }


}
