<?php

class KeuRab extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $periode;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=true)
     */
    public $nama_barang;

    /**
     *
     * @var string
     * @Column(type="string", length=2, nullable=true)
     */
    public $akun_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=true)
     */
    public $jml_barang;

    /**
     *
     * @var integer
     * @Column(type="integer", length=8, nullable=true)
     */
    public $harga_satuan;

    /**
     *
     * @var string
     * @Column(type="string", length=8, nullable=true)
     */
    public $satuan_barang_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $total_harga;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $keterangan;

    /**
     *
     * @var string
     * @Column(type="string", length=3, nullable=true)
     */
    public $cabang_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("qodr");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'keu_rab';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return KeuRab[]|KeuRab
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return KeuRab
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function getDataRab()
    {
        $requestData = $_REQUEST;
        $requestSearch = strtoupper($requestData['search']['value']);
        $columns = array(
            0 => 'id',
            1 => 'periode',
            2 => 'nama_barang',
            3 => 'akun_id',
            4 => 'jml_barang',
            5 => 'harga_satuan',
            6 => 'satuan_barang_id',
            7 => 'total_harga',
            8 => 'keterangan',
            9 => 'cabang_id',
        );
        $sql = "SELECT * FROM KeuRab";
        $query = $this->modelsManager->executeQuery($sql);
        $totalData = count($query);
        $totalFiltered = $totalData;  
        $no = $requestData['start']+1;
        $start = $requestData['start'];
        $length = $requestData['length'];
        if (!empty($requestSearch)) {
            //function mencari data user
                $sql = "SELECT * FROM KeuRab WHERE username LIKE '%".$requestSearch."%'";
                $sql.= "OR cabang_id LIKE '%".$requestSearch."%'";
                $sql.= "OR type LIKE '%".$requestSearch."%'";
                $query = $this->modelsManager->executeQuery($sql); 
                $totalFiltered = count($query);
    
                $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
                $query = $this->modelsManager->executeQuery($sql); 
            } else {
            //function menampilkan seluruh data
                $sql = "SELECT * FROM KeuRab limit $start,$length" ;
                $query = $this->modelsManager->executeQuery($sql); 
            }
        $data = array();
        
        foreach ($query as $key => $value) {
            $dataUser = array();
            $dataUser[] = $no;
            $dataUser[] = $value->id;
            $dataUser[] = $value->periode;
            $dataUser[] = $value->nama_barang;
            $dataUser[] = $value->akun_id;
            $dataUser[] = $value->jml_barang;
            $dataUser[] = $value->harga_satuan;
            $dataUser[] = $value->satuan_barang_id;
            $dataUser[] = $value->total_harga;
            $dataUser[] = $value->keterangan;
            $dataUser[] = $value->cabang_id;
            $dataUser[] = '
               <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default" 
               onclick="return send_data_edit(\''.$value->id.'\');">Edit</button>
               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"
                onclick="return send_data_delete(\''.$value->id.'\');">Delete</button>
            ';
            $data[] = $dataUser;
            $no++;
        }
                
        $json_data = array(
			"draw"            => intval( $requestData['draw'] ),  
			"recordsTotal"    => intval( $totalData ),
			"recordsFiltered" => intval( $totalFiltered ), 
			"data"            => $data
		);
        
        return $json_data; 
    }
}
