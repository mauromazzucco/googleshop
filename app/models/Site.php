<?php


class Site extends Eloquent  {
	public $timestamps = false;

	public static $rules = [
		'site' => 'required'
	];


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gs_site';

	

}
