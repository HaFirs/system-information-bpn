<?php namespace App\Controllers;

use App\Models\Dashboard_model;

class Dashboard extends BaseController
{
	public function __construct()
    {
		$this->dashboard_model = new Dashboard_model();
	}
	
	public function index()
	{
		
		$data['total_transaction']	= $this->dashboard_model->getCountTrx();
		$data['total_product']		= $this->dashboard_model->getCountProduct();
		$data['total_category']		= $this->dashboard_model->getCountCategory();
		$data['total_user']			= $this->dashboard_model->getCountUser();
		$data['latest_trx']			= $this->dashboard_model->getLatestTrx();

		$chart['grafik']			= $this->dashboard_model->getGrafik();
		$data['get_grafik']			= count($chart['grafik']);
		// dd(count($this->dashboard_model->getGrafik()));
		echo view('dashboard', $data);
		echo view('_partials/footer', $chart);
    }

	public function penilaian()
    {
       
        echo view('penilaian');
    }
    
}