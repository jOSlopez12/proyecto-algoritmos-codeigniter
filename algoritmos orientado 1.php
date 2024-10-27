<?php
namespace app\controllers;
use app\models\articlemodel;

class articles extends basecontroller 
{
     public function index()
     {
         $model = new articlemodel;
          return view("articles/index",[
            "articles" => $data 

          ]);
        }

          
          
     





     }


    }