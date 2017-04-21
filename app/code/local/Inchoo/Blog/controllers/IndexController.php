<?php

class Inchoo_Blog_IndexController
    extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        /*
         * Create new blog post with author and title
         * -this will create new row in inchoo_blog_post_entity table and
         *  two entries for title and author attributes will be saved in inchoo_blog_post_entity_varchar table
         */
        $post = Mage::getModel('inchoo_blog/post');
        $post->setTitle('Test title');
        $post->setAuthor('Zoran Šalamun');
        $post->save();

        /*
         * Try to create post with book type attribute
         * -book type attribute will not be saved because book type attribute is not defined for our entity type
         * -on new row will be added in inchoo_blog_post_entity
         */
        $post = Mage::getModel('inchoo_blog/post');
        $post->setBookType('Test title');
        $post->save();

        /*
         * Getting posts collection
         * -also load collection
         * -this will load all post entries but without attributes
         * -loaded data is only from inchoo_blog_post_entity table
         */
        $posts = Mage::getModel('inchoo_blog/post')->getCollection();
        $posts->load();
//        var_dump($posts);
        echo "<pre>";
        print_r($posts);
        echo "</pre>";

        /*
         * Getting post collection
         * -load all posts
         * -set attributs to be in collection data
         */
//        $posts = Mage::getModel('inchoo_blog/post')->getCollection()
//                ->addAttributeToSelect('title')
//                ->addAttributeToSelect('author');
//        $posts->load();
//        var_dump($posts);

        /*
         * Load signle post
         * -loading single post will get all attributes that we have set for post
         */
//        $post = Mage::getModel('inchoo_blog/post')->load(1);
//        var_dump($post);
    }

    public function xmlAction(){
        header('Content-Type: text/plain');
        echo $config = Mage::getConfig()
            ->loadModulesConfiguration('system.xml')
            ->getNode()
            ->asXML();
        exit;
    }

    public function getValueConfigAction(){
        $value = Mage::getStoreConfig('blog_option/messages');
        var_dump($value);
    }

    public function collectionObjectAction(){
        echo __METHOD__ . '<br>';

        $thing_1 = new Varien_Object();
        $thing_1->setName('Richard');
        $thing_1->setAge(24);

        $thing_2 = new Varien_Object();
        $thing_2->setName('Jane');
        $thing_2->setAge(12);

        $thing_3 = new Varien_Object();
        $thing_3->setName('Spot');
        $thing_3->setLastName('The Dog');
        $thing_3->setAge(7);
        $thing_3->setNothingElse('nothing');
        var_dump($thing_3->getData('nothing_else'));
        echo $thing_3->getNothingElse();


        $data_collection = new Varien_Data_Collection();
        $data_collection->addItem($thing_1)
                        ->addItem($thing_2)
                        ->addItem($thing_3);
echo '<br>=============================================<br>';
        var_dump($data_collection->toXml());
        var_dump($data_collection->getColumnValues('name', 'Jane'));
//        foreach ($data_collection as $item){
//            var_dump($item->getData());
//        }
    }

    public function getProductsTestAction(){
        $collection_product = Mage::getModel('catalog/product')
            ->getCollection()
            ->addAttributeToSelect('*')
            ->addFieldToFilter('meta_title', 'my title');
        var_dump((string)$collection_product->getSelect());
    }
}