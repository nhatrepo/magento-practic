<?php
class Practice_Weblog_Model_Post extends Mage_Core_Model_Abstract{

    public function _construct(){
//        parent::_construct();
        $this->_init('weblog/post');
    }

    public function testModel(){
        echo __METHOD__ ."<br>";
    }
}