<?php

require_once('RestServer.php');

/**
 * BaseAPI provide some basic features and bootstrap for iFind APIs note that is
 * not ment to provide basic REST features this is RestServer role.
 *
 * @author Klederson Bueno <klederson@klederson.com>
 * @package API
 * @subpackage Basics
 */
abstract class BaseAPI extends RestServer {

  protected $allowedContentTypes = array(
      'application/json' => 'json'
  );

  public function __construct() {
    //prepare rest basic responses
    parent::__construct();
  }  
}

?>
