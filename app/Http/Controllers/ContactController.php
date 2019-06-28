<?php

namespace App\Http\Controllers;
use App\PublicContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function contact_us(){
       return view('front-end.content.contact-us.contact-page');
   }
   public function public_contact(Request $request){
       $public_contact=new PublicContact;
       $public_contact->name = $request->name;
       $public_contact->email = $request->email;
       $public_contact->message = $request->message;
       $public_contact->save();
       return redirect('contact-us')->with('message', 'আপনার মতামতের জানানোর জন্য ধন্যবাদ !!');

   }

}
