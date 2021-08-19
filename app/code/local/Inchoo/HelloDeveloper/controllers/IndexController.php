<?php

class Inchoo_HelloDeveloper_IndexController extends Mage_Core_Controller_Front_Action
{


    public function indexAction()
    {
        echo '<-------------- testtttttttttttttttttttttttttttt -------->>';
        // "Fetch" display
        $this->loadLayout();
        // THe below example will not actualy show anything since the core/template is empty
        // $this->_addContent($this->getLayout()->createBlock('core/template'));
        $this->getDataFromDB();
        // $this->writeToDb();
        // Mage::log('test');
        
        // "Output" display
        $this->renderLayout();
    }

    
    public function getDataFromDB()
    {
        $resource = Mage::getSingleton('core/resource');

        // $writeConnection = $resource->getConnection('core_write');

        $readConnection = $resource->getConnection('core_read');

        $query = 'SELECT * FROM ' . $resource->getTableName('user_new2');

        $results = $readConnection->fetchAll($query);

        foreach ($results as $result) {
            echo '<br>', $result['name'], '<br>';
        }

        var_dump($results);
        die();
    }
    public function writeToDb()
    {
        $resource = Mage::getSingleton('core/resource');

        $writeConnection = $resource->getConnection('core_write');

    }



    public function sayHelloAction()
    {
        echo 'Hello one more time...';
    }
}
