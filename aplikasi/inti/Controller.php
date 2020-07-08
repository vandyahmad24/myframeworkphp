<?php


/**
 * 
 */
class Controller
{
	public function view($view, $data = []){
			require_once '../aplikasi/views/'.$view.'.php';
	}
	public function model($model){
		require_once '../aplikasi/models/'.$model.'.php';
		return new $model;
	}

}