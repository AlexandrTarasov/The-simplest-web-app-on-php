<?php
class Pages extends Controller
{
	public function __construct()
	{
		// $this->postModel = $this->model('Post');
	}
	public function index()
	{
		// $posts = $this->postModel->getPosts();
		$data = [
			'title' => 'pages Index',
			'description' => 'Simple sessi' 
		];

		$this->view('pages/index', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'About page', 
			'description' => 'description form about'
		];
		$this->view('pages/about', $data);
	}

}
