<?php

namespace App\Http\Controllers;
use App\Gk;
use App\Gk_category;
use DB;
use Illuminate\Http\Request;

class GkController extends Controller
{
    public function gk_category_create(){
        return view('dashboard.dashboard-elements.gk-category-create');
    }
    protected function gk_category_data_transfer($gk_category, $request){
        $gk_category->gk_category_name = $request->gk_category_name;
        $gk_category->gk_category_description = $request->gk_category_description;
        $gk_category->publication_status = $request->publication_status;
        $gk_category->save();

    }


    public function gk_category_save(Request $request){

        $gk_category=new Gk_category;
        $this->gk_category_data_transfer($gk_category, $request);
        return redirect('gkCategory/create')->with('message', 'Gk category create successfully');
    }
    public function gk_category_manage()
    {
        $gk_category = Gk_category::all();
        return view('dashboard.dashboard-elements.gk-category-manage', ['gk_category' => $gk_category]);

    }
    public function gk_category_unpublished($id){
        $gk_category=Gk_category::find($id);
        $gk_category->publication_status =0;
        $gk_category->save();
        return redirect('gkCategory/manage')->with('message', 'Gk Category Unpublished successfully !!');

    }
    public function gk_category_published($id){
        $gk_category=Gk_category::find($id);
        $gk_category->publication_status =1;
        $gk_category->save();
        return redirect('gkCategory/manage')->with('message', 'Gk Category published successfully !!');

    }
    public function gk_category_edit($id){
        $gk_category=Gk_category::find($id);
        return view('dashboard.dashboard-elements.edit-gk-category', ['gk_category'=>$gk_category]);
    }
    public function gk_category_update(Request $request){
        $gk_category=Gk_category::find($request->gk_category_id) ;
        $this->gk_category_data_transfer($gk_category, $request);
        return redirect('gkCategory/manage')->with('message', 'Gk category Update successfully');
    }
    public function gk_category_delete($id){
        $gk_category=Gk_category::find($id);
        $gk_category->delete();
        return redirect('gkCategory/manage')->with('message', 'Gk category Delete successfully');

    }





    public function gk_create(){
        return view('dashboard.dashboard-elements.gk-create');
    }

    protected function gk_validation($request){
        $this->validate($request, [
            'gk_category_name' => 'required',
            'gk_title' => 'required|min:5|max:150',
            'gk_long_description' => 'required|min:5',
            'publication_status' => 'required'
        ]);
    }
    protected function data_transfer($gk, $request){
        $gk->gk_category = $request->gk_category_name;
        $gk->gk_title = $request->gk_title;
        $gk->gk_long_description = $request->gk_long_description;
        $gk->publication_status = $request->publication_status;
        $gk->save();
    }


    public function gk_save(Request $request){
        $this->gk_validation($request);
        $gk=new Gk;
        $this->data_transfer($gk, $request);
        return redirect('gk/create')->with('message', 'Gk save successfully !!');
    }
    public function gk_manage(){
        $gk=DB::table('gks')
            ->join('gk_categories', 'gks.gk_category', '=', 'gk_categories.gk_category_name')
            ->select('gks.*', 'gk_categories.gk_category_name')
            ->get();

        return view('dashboard.dashboard-elements.manage-gk', ['gk'=>$gk]);
    }
    public function gk_unpublished($id){
        $gk= Gk::find($id);
        $gk->publication_status =0;
        $gk->save();
        return redirect('gk/manage')->with('message', 'Gk Unpublished successfully !!');
    }
    public function gk_published($id){
        $gk= Gk::find($id);
        $gk->publication_status =1;
        $gk->save();
        return redirect('gk/manage')->with('message', 'Gk Published successfully !!');
    }
    public function gk_edit($id){
        $gk=Gk::find($id);
        return view('dashboard.dashboard-elements.edit-gk',['gk'=>$gk]);
    }
    public function gk_update(Request $request){
        $gk= Gk::find($request->gk_id);
        $this->gk_validation($request);
        $this->data_transfer($gk, $request);
        return redirect('gk/manage')->with('message', 'Gk update successfully !!');
    }
    public function gk_delete($id){
        $gk= Gk::find($id);
        $gk->delete();
        return redirect('gk/manage')->with('message', 'Gk delete successfully !!');
    }
    public function gk_content($id){
        $gk_content= Gk::find($id);
        return view('front-end.content.gk-content', ['gk_content'=>$gk_content]);
    }






}
