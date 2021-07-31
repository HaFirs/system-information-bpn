<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
    {
        echo view('template/head_home');
		echo view('home/dashboard');
		echo view('template/footer_home');
    }

	//--------------------------------------------------------------------

}
