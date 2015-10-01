<?php

class CabinController extends Controller
{
	public function actionIndex()
	{
		$model = new Pic();
		$data = $model->findAll(array(
			'condition' => 'type=2 and state=1',
			'order' => 'seq asc',
		));
		
		
		$this->render('index',array(
			'data' => $data,
		));
	}
}