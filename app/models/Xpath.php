<?php


class Xpath extends Eloquent  {

	public $timestamps = false;
	protected $fillable = array('id_site', 'tp_xpath', 'ds_xpath');


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gs_xpath';

	

}
