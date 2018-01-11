<?php

class ViewPemasukanPerhari extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $Hari;

    /**
     *
     * @var double
     * @Column(type="double", length=32, nullable=true)
     */
    public $pemasukan;

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
        return 'view_pemasukan_perhari';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ViewPemasukanPerhari[]|ViewPemasukanPerhari
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ViewPemasukanPerhari
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
