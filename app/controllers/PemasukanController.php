<?php

class PemasukanController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function getAjaxAction()
    {
        if ($this->request->isPost()) {
            $bulan = $this->request->getPost('bulan');
            $dataPemasukanPerhari = new ViewPemasukanPerhari();
            $json_data = $dataPemasukanPerhari->getDataPemasukan($bulan);
            die(json_encode($json_data));

            // return 
        }else{
            $dataPemasukanPerhari = new ViewPemasukanPerhari();
            $json_data = $dataPemasukanPerhari->getDataPemasukan();
            die(json_encode($json_data));
        }
    }

    public function filterBulan()
    {
        $bulan = $this->request->getPost('bulan');
        $dataPemasukanPerhari = new ViewPemasukanPerhari();
        $json_data = $dataPemasukanPerhari->getDataPemasukan($bulan);
        die(json_encode($json_data));
    }
}

