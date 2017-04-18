<?php

class Practice_Weblog_Model_Resource_Post extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('weblog/post', 'blogpost_id');
    }
}