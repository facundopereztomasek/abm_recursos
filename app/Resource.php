<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model {

	/**
	* The database table used by the model.
	*
	* @var string
	*/
	protected $table = 'resources';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = ['title', 'description', 'url' , 'category_id'];

	static public $rules = array(
		'title' => 'required|min:3|max:50',
		'description' => 'required|max:140',
		'url' => 'required|url|max:255',
	);

	public function category(){
	    return $this->belongsTo('\App\Category');
	}

}
