@extends('front-end.content.master')
@section('title')
    Contact us
@endsection
@section('category_content')


   <div class="contain">
       <div class="row ">
               <div class="col-sm-9 col-sm-offset-2">
                   <h3 align="center" class="text-secondary">আপনার মতামত অথবা অভিযোগ থাকলে inbox করুন</h3>

              <h3 align="center" style="color: #0ab20a">{{ Session::get('message') }}</h3>
               <div class="panel panel-default ">

                   <div class="panel-heading">
                       <h1 align="center" class="bg-info">Contact-us</h1>

                   </div>
                   <div class="panel-body">


                               <div class="contact_area">
                                   {!! Form::open(['route'=>'public-contact', 'class'=>'contact_form', 'method'=>'post']) !!}
                                       <input class="form-control" name="name" type="text" placeholder="Name*">
                                       <input class="form-control" name="email" type="email" placeholder="Email*">
                                       <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Message*"></textarea>
                                       <input type="submit" value="Send Message">
                                   {!! Form::close() !!}

                           </div>
                       </div>
                   </div>
           </div>
       </div>
   </div>





@endsection