<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('nav');
		echo view('header');
		echo view('index');
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
