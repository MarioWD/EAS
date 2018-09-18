<?php
namespace controllers;
class Contactus extends Controller
{
  public $mail;
  function __construct()
  {
   parent::__construct();
   $this->mail = $this->loadModel("PHPMailer");
   $this->run();
  }
}
