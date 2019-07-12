<?php
class Pages extends Controller
{
	public function __construct()
	{
		$this->postModel = $this->model('Post');
	}
	public function index()
	{
		$data = [
			'title' => 'pages Index'
		];

		$this->view('pages/index', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'About page'
		];
		$this->view('pages/about', $data);
	}

}
