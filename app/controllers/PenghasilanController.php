<?php

class PenghasilanController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    
    public function getAjaxAction()
    {
        $user = new ViewPerkiraanPemasukanTanggal();
        $json_data = $user->getDataPenghasilan();
        die(json_encode($json_data));
    }

}

