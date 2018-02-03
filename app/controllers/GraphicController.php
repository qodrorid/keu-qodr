<?php

use Phalcon\Mvc\view;

class GraphicController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->pick("graphic/index");
    }

    public function getGraphicAction()
    {
        $data = new ViewPerkiraanPemasukanTanggal();
        $json_data = $data->getDataGraphic();
        die(json_encode($json_data));
    }

}

