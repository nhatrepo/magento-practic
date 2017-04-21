<?php
class Practice_Complexworld_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        echo __METHOD__;
        $weblog2 = Mage::getModel('complexworld/eavblogpost');
//        $weblog2->load(1);
//        var_dump($weblog2);
    }
}