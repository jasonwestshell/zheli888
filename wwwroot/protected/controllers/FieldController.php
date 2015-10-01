<?php

class FieldController extends Controller
{
	public function actionIndex()
	{
		$model = new Pic();
		$data = $model->findAll(array(
			'condition' => 'type=3 and state=1',
			'order' => 'seq asc',
		));
		
		
		$this->render('index',array(
			'data' => $data,
		));
	}
	
}