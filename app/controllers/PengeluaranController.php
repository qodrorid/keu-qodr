<?php
class PengeluaranController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
    }
    public function getAjaxAction()
    {
        $user = new ViewPengeluaranPerhari();
        $json_data = $user->getDataPengeluaran();
        die(json_encode($json_data));
    }
    public function getViewAction()
    {
        $keu_harian = new KeuHarian();
        $json_data = $keu_harian->getDataKeuharian2();
        die(json_encode($json_data));
    }
    
    public function getDataPerhariAction($hari)
    {
        $keu_harian = KeuHarian::find("tanggal='$hari'");
        die(json_encode($keu_harian));
    }
}
