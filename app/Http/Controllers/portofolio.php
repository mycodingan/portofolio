<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portofolio extends Controller
{
   public function portofolio (){
        return view('portofolio.portofolio');
   }
   public function about (){
    return view ('portofolio.about.about');
   }
   public function project (){
    return view('portofolio.project.project');
   }
   public function sertifikat (){
    return view('portofolio.certificate.certificate');
   }
}
