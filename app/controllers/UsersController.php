<?php

class UsersController extends \BaseController {

	/**
	 * Shows login form page
	 */
	public function showLogin()
	{
		return View::make('index');
	}