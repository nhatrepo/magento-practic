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

    public function createNewPostAction() {
        $blogpost = Mage::getModel('weblog/post');
        $blogpost->setTitle('The title of post');
        $blogpost->setPost('This post was created from code!');
        $blogpost->save();
        echo 'post created';
    }

    public function editPostAction(){
        $params = $this->getRequest()->getParams();
        $post = Mage::getModel('weblog/post');
        if(isset($params['id'])) {
            $post->load($params['id']);
            $post->setTitle('Edit Title');
            $post->save();
        }
        echo __METHOD__;
    }

    public function deletePostAction(){
        $params = $this->getRequest()->getParams();
        $post = Mage::getModel('weblog/post');
        if(isset($params['id'])) {
            $post->load($params['id']);
            $post->delete();
            echo "Deleted post";
        }
        echo __METHOD__;
    }

    public function showAllPostAction(){
        echo __METHOD__ . "<br>";
        $posts = Mage::getModel('weblog/post')
                        ->getCollection();
        foreach ($posts as $post){
//            echo "Title: " . $post['title'] . "<br>";
//            echo "Post: " . $post['post'] . "<br>";
            echo '<h3>'.$post->getTitle().'</h3>';
            echo nl2br($post->getPost());
        }

    }
}