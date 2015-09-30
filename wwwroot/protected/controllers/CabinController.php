<?php

class CabinController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionBigcabin()
	{
		$this->render('bigcabin');
	}
	
	public function actionSmallcabin()
	{
		$this->render('smallcabin');
	}
	
	public function actionRoom()
	{
		$this->render('room');
	}
	
	
	
}