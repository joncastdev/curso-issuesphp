<?php

namespace App\Models;

use Issues\Model\IpModel;

class Post extends MainModel
{	

	public $table = 'post';

	public function getPost()
	{ 		

		$query = IpModel::chosenAll($this->table);
		return $query;	

	}

	public function getWelcomesDbTwo()
	{ 
		

		$query = IpModel::ChosenAll($this->table,2);

		return $query;		

	}

	public function getPostById($id)
	{ 


		$query = IpModel::chosenOrLost($this->table,$id);

		return $query;		

	}

	public function deletePostById($id)
	{ 	

		$query = IpModel::slipk($this->table,$id);

		return $query;		

	}

	public function insert($rowData)
	{ 		

		$query = IpModel::introduce('welcomes',$rowData);
		return $query;	

	}						
}
