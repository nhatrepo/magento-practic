<?php
class Inchoo_Blog_Model_Words extends Mage_Core_Model_Abstract{
    public function toOptionArray(){
        return array(
//            array('value'=>1, 'label'=>Mage::helper('inchoo_blog')->__('Hello')),
//            array('value'=>2, 'label'=>Mage::helper('inchoo_blog')->__('Goodbye')),
//            array('value'=>3, 'label'=>Mage::helper('inchoo_blog')->__('Yes')),
//            array('value'=>4, 'label'=>Mage::helper('inchoo_blog')->__('No')),
        1=>'Hello',
        2=>'Goodbye',
        3=>'Yes',
        4=>'No'
        );
    }

    public function toFillField(){
        return array(
//            array('value'=>1, 'label'=>Mage::helper('inchoo_blog')->__('demo')),
//            array('value'=>2, 'label'=>Mage::helper('inchoo_blog')->__('good job')),
//            array('value'=>3, 'label'=>Mage::helper('inchoo_blog')->__('no, thanks')),
//            array('value'=>4, 'label'=>Mage::helper('inchoo_blog')->__('yes, please')),
        1=>'demo',
        2=>'good job',
        3=>'no, thanks',
        4=>'yes, please'
        );
    }
}