<?php

	namespace App\Controller;


class MenusController extends AppController
{
	// public $lastName;
	// public $firstName;
	// public $phoneNumber;
	// public $mail;
	// public $message;

	public function index(){

		$menus = $this->Menus->find('all');
		$this->set(compact('menus'));
	}

	public function detail(){

		$menus = $this->Menus->find('all');
		$this->set(compact('menus'));
	}
	public function form(){
		$menus = $this->Menus->find('all');
		$this->set(compact('menus'));
	}

	public function confirm(){
		// $lastName = $_POST['lastname'];
		// $firstName = $_POST['firstname'];
		// $phoneNumber = $_POST['phonenumber'];
		// $mail = $_POST['mail'];
		// $message = $_POST['message'];
	}
}

