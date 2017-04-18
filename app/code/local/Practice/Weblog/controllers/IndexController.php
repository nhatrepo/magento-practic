<?php
class Practice_Weblog_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo __METHOD__;
    }

    public function testModelAction(){
        echo __METHOD__ . '<br>';
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('weblog/post');
//        $post = new Practice_Weblog_Model_Post();
//        $post->testModel();
        $blogpost->testModel();
        echo("Loading the blogpost with an ID of ".$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
//        $resource = Mage::getResourceModel('weblog/post');
//        $resource->load(1);
        $user = Mage::getModel('weblog/adminUser');
        $user->load(7);
        $userData = $user->getData();
        var_dump($userData);
    }
}