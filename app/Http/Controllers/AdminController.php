<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function adminpage(){
    return view ('AdminView.adminpage');
   }

   public function dashboard(){
    return view ('AdminView.adminpage');
   }



   /* Home image Controller */

   public function homeimage1(){
    return view ('AdminView.homeimage1');
   }
   public function homeimage2(){
    return view ('AdminView.homeimage2');
   }
   public function homeimage3(){
    return view ('AdminView.homeimage3');
   }


    /* Package image Controller */

    public function packageimage1(){
        return view ('AdminView.packageimage1');
       }
    public function packageimage2(){
        return view ('AdminView.packageimage2');
       }
    public function packageimage3(){
        return view ('AdminView.packageimage3');
       }
    public function packageimage4(){
        return view ('AdminView.packageimage4');
       }
}
