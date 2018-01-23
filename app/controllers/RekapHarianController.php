<?php

class RekapHarianController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function getAjaxAction()
    {
        $user = new KeuRab();
        $json_data = $user->getDataRab();
        die(json_encode($json_data));
    }
    
}

