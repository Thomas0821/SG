<?php

namespace App\Controller;

class ShopsController  extends AppController
{
	public function index(){
		$shops = $this->Shops->find('all');
		$this->set(compact('shops'));
	}
}