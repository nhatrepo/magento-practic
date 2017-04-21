<?php
class Practice_BlogEav_Model_Resource_Eav_Mysql4_Eavpost extends Mage_Eav_Model_Entity_Abstract{
    public function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('blogeav_eavpost');
        $this->setConnection(
            $resource->getCollection('blogeav_read'),
            $resource->getCollection('blogeav_write')
        );
    }
}