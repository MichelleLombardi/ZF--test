<?php

class IndexController extends Zend_Controller_Action
{

    public function init(){
        /* Initialize action controller here */
     /*   $this->_helper->viewRenderer->setNoRender(true);

        $username = "some-username";
        $password = "some-password";
        
          $this->_todo = array (
            "1" => "Buy milk",
            "2" => "Pour glass of milk",
            "3" => "Eat cookies"
          );
        */
    }

    function indexAction(){
        $principal= new Application_Model_DbTable_Principal();
        $this->view->principal = $principal->fetchAll();

       //echo Zend_Json::encode($principal);
     /*  $credentials = 'michellelombardim@gmail.com:6e35b77f55da1b2dc7fa';
       $url_req= 'https://app.alegra.com/api/v1/contacts/';
       $request = new Request();
       $request->setMethod(Request::METHOD_GET);
       $request->setUri($url_req);
       $request->getHeaders()->addHeaders([
           'Authorization' => 'Basic ' . base64_encode($credentials)
       ]);
       print $request->getGet();
       echo $request->getGet();*/

    }

    public function addAction(){
        // action body
    }

    public function editAction() {
        // action body
    }

    public function deleteAction(){
        // action body
    }


}







