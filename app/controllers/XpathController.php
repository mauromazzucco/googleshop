<?php

class XpathController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipos = array(null,'sku','imagem');
		return View::make('xpath.index')->with('tipos', $tipos);
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
		// $xpath = new Xpath;

		// $xpath->id_site = Input::get('id_site');
		// $xpath->tp_xpath = Input::get('id_site');
		// $site->save();

		DB::table('gs_xpath')->insert(array(
   			array('id_site' => Input::get('id_site'), 'tp_xpath' => 'sku', 'ds_xpath' => Input::get('sku')),
    		array('id_site' => Input::get('id_site'), 'tp_xpath' => 'nome', 'ds_xpath' => Input::get('nome')),
    		array('id_site' => Input::get('id_site'), 'tp_xpath' => 'preco_de', 'ds_xpath' => Input::get('preco_de')),
    		array('id_site' => Input::get('id_site'), 'tp_xpath' => 'preco_por', 'ds_xpath' => Input::get('preco_por')),
    		array('id_site' => Input::get('id_site'), 'tp_xpath' => 'imagem', 'ds_xpath' => Input::get('imagem')),
		));;

		return "hello";
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
