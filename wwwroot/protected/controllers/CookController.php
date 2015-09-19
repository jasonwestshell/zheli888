<?php

class CookController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionCold()
	{
		$this->render('cold');
	}
	
	public function actionFried()
	{
		$this->render('fried');
	}
	
	public function actionStew()
	{
		$this->render('stew');
	}
	
	public function actionOther()
	{
		$this->render('other');
	}
	
}