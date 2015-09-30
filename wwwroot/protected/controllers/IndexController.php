<?php

class IndexController extends Controller
{
	public function actionIndex()
	{
		$this->redirect(array('home'));
	}

	public function actionHome()
	{
		
		
		$this->render('home');
	}
	
	
	public function actionCome()
	{
		
		$this->render('come');
	}
	
}