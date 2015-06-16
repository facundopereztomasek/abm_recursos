<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'categories';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['name'];

	static public $rules = array(
		'name' => 'required|min:3|max:50',
	);

	
}
