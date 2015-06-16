<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$resources = \App\Resource::with('category')->get();
		return view('viewResource',['resources' => $resources ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$categories = \App\Category::lists('name','id');
		return view('createResource', array('categories'=>$categories));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$inputs = Input::all();
		$validator = Validator::make($inputs , \App\Resource::$rules);
		if($validator->passes()){

			\App\Resource::create($inputs);
			return Redirect::to('/');

		}

		return Redirect::back()
			->withInput(Input::all())
			->withErrors($validator);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$resource = \App\Resource::find($id);
		return view('deleteResource', array( 'resource' => $resource) );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$resource = \App\Resource::find($id);


		$categories = \App\Category::lists('name','id');

		return view('editResource', array( 'resource' => $resource , 'categories'=>$categories) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$inputs = Input::all();
		$validator = Validator::make($inputs , \App\Resource::$rules);
		if($validator->passes()){

			$resource = \App\Resource::find($id);
			$resource->update($inputs);
			return Redirect::to('/');

		}

		return Redirect::back()
			->withInput(Input::all())
			->withErrors($validator);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
		//
		\App\Resource::destroy($id);
		return Redirect::to('/');
	}

}
