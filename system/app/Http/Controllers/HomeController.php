<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{
	function showHome(){
		//Before
		//return view('home');
		//After
		return view('template/home');
	}

	function showBlog(){
		return view('template/blog');
	}
	function showDashboard(){
		return view('dashboard');
	}

	function showAdminBlog(){
		return view('adminblog');
	}
	function showUser(){
		return view('user');
	}

}