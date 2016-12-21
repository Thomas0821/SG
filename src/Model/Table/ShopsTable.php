<?php

namespace App\model\Table;

use Cake\ORM\Table;

class ShopsTbale extends Table
{
	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}
};