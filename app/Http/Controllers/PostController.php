<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostController extends MainController
{
	protected $postModel;

	public function __construct()
	{	

		$this->postModel = new Post();
	}

	public function index() 
	{ 

		$post = $this->postModel->getPost();

		// print_r($post);

		// exit;



		$data = array(
			"post" => $post      
		);

		return $this->view('post/index',$data);

	}

	public function show($id) 
	{ 

		$post = $this->postModel->getPostById($id);

		// print_r($post);

		// exit;  

		return $this->view('post/show',$post);


	}   

	public function add() 
	{    

		return $this->view('welcome/add');

	}

	public function store($request) 
	{   

		$data = array(
			"name" => 'a'      
		);

		$welcome = new Welcome();


		print_r($welcome->insert($data));


	}

	public function delete($id) 
	{

		$post = $this->postModel->deletePostById($id);   

		return $this->redirectGo('post','posts');


	}        

}



