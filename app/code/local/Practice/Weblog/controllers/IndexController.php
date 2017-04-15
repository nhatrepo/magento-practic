<?php
class Practice_Weblog_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo __METHOD__;
    }

    public function testModelAction(){
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('weblog/blogpost');
//        echo get_class($blogpost);
        echo("Loading the blogpost with an ID of ".$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }
}