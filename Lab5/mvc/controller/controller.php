<?php 
include_once("model/Model.php");
/**
 * 
 */
class Controller{
	public $model;
	
	function __construct()
	{
		$this->model = new Model();
	}

	public function invoke(){
		if(!isset($_GET['book'])){
			//no special book is requessted, we'll show a list of all availble books
			$books = $this->model->getBookList();
			include 'view/booklist.php';
		}
		else{
			//show the request book
			$book = $this->model->getBook($_GET['book']);
			include 'view/viewbook.php';

		}
	}
}
 ?>