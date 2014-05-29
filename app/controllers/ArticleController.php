<?php

class ArticleController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*return View::make('store');*/
	    $articles = Article::all();
	 
	    if($articles->isEmpty()){
		    return Response::json(array(
		        'success' => false,
		        'error_code' => "404",
		        'error_msg' => "Record not found"
		        ),
		        200);

	    } else {
	 
		    return Response::json(array(
		        'success' => true,
		        'articles' => $articles->toArray()),
		        200
		    );
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	    $articles = Article::where('id', $id)
	            ->take(1)
	            ->get();
	 
	    if($articles->isEmpty()){
		    return Response::json(array(
		        'success' => false,
		        'error_code' => "404",
		        'error_msg' => "Record not found"),
		        200
		    );

	    } else {
		    return Response::json(array(
		        'success' => true,
		        'article' => $articles->toArray()),
		        200
		    );
	    }
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
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	}


}
