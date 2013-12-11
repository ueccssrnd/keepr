<?php
class NameController extends BaseController{
	
	public function showName(){
		$name = Input::get('name');
		return View::make('displayname', array('name' => $name));
	}
}