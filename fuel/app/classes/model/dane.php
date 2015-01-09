<?php

/**
 * Description of Dane
 *
 * @entity
 * @table(name="dane")
 * @author wojtek
 */
class Model_Dane {
    //protected static $_table_name = 'dane'; //set the table name manually
    //protected static $_primary_key = array('id'); 

    /**
     * @id 
     * @column(name="id", type="integer")
     * @GeneratedValue
     * @var type 
     */
    private $id;

    /**
     * @Column(type="string")
     * @var string
     */
    private $info;

    public function getId() {
        return $this->id;
    }

    public function getInfo() {
        return $this->info;
    }

    public function setId(type $id) {
        $this->id = $id;
    }

    public function setInfo($info) {
        $this->info = $info;
    }

//you can set up multiple columns, .. $_primary_key => array('id', 'user_id')
}
