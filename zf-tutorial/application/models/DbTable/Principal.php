<?php

class Application_Model_DbTable_Principal extends Zend_Db_Table_Abstract {
   protected $_name = 'albums';

    public function getPrincipal(){
        $id = (int)$id;
        $row = $this->fetchRow('id = ' . $id);
        if (!$row) {
        throw new Exception("Could not find row $id");
        }
        return $row->toArray();
       /* $headers = array(
            "Authorization: Basic " . base64_encode($credentials),
            "Accept: application/json",
            "Content-type: application/json"
        );*/
      /*  $credentials = 'michellelombardim@gmail.com:6e35b77f55da1b2dc7fa';
        $url_req= 'https://app.alegra.com/api/v1/contacts/';
        $request = new Request();
        $request->setMethod(Request::METHOD_GET);
        $request->setUri($url_req);
        $request->getHeaders()->addHeaders([
            'Authorization' => 'Basic ' . base64_encode($credentials)
        ]);
        print $request->getGet();
        return $this->$request->getGet();
        */
      /*  $headers = $client->getRequest()->getHeaders();
        $cookies = new Zend\Http\Cookies($headers);
        $client->setUri('https://app.alegra.com/api/v1/contacts/');
        $client->setAuth('michellelombardim@gmail.com', '6e35b77f55da1b2dc7fa', Zend\Http\Client::AUTH_BASIC);
        $response = $client->setMethod('GET')->send();
        return $response;*/
    }
    public function addPrincipal($artist, $title){
       /* $data = array(
        'artist' => $artist,
        'title' => $title,
        );
        $this->insert($data);*/
    }
    public function updatePrincipal($id, $artist, $title){
      /*  $data = array(
        'artist' => $artist,
        'title' => $title,
        );
        $this->update($data, 'id = '. (int)$id);*/
    }
    public function deletePrincipal($id){
       /* $this->delete('id =' . (int)$id);*/
    }
}