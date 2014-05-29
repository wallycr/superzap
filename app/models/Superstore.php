<?php

class Superstore extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stores';
	protected $fillable = array('name', 'address');

}
