<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	//
	protected $filllable = ['id', 'created_at', 'updated_at', 'deleted_at', 'item_name', 'item_commnet', 'price', 'stock'];
	public function getData() {

	}
}
