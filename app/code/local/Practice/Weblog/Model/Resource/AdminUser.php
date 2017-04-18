<?php
Class Practice_Weblog_Model_Resource_AdminUser extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('weblog/adminUser', 'user_id');
    }
}