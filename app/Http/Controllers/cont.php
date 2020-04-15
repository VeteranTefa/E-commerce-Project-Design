<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cont extends Controller
{
    function login()
    {
        return view("mypages/login");
    }
    function Regester()
    {
        return view("mypages/regester");
    }
    function main()
    {
        return view("mypages/main");
    }
    function admin()
    {
        return view("mypages/admin");
    }
    function cat( $n )
    {
        return view("mypages/cat",compact('n'));
    }
    function history(){
        return view ("mypages/history");
    }
    function editcat(){
        return view("mypages/editcat");
    }
    function editpro(){
        return view("mypages/editproduct");
    }
}
