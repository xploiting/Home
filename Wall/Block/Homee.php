<?php

namespace Home\Wall\Block;


class Homee extends \Magento\Framework\View\Element\Template {

   
    
    public function displayText(){
    
         return "Welcome Guest User";
    
    }
    
/* public function walletMoney(){
        
        $suser_id = $this->walletCustId();
        $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\App\ResourceConnection');	
        $connection= $this->_resources->getConnection();
        $sql = "SELECT SUM(product_discount_amount) AS total FROM `wallet_discounts` WHERE `customer_id` = '$suser_id' AND `is_active` = '1' ";
        $result = $connection->fetchall($sql); 
        @$daysto = $result['0'];
        $approve = $daysto['total'];  
        return $approve;

    }
    public function datee(){
        return $currentDate = date('Y-m-d'); //10
    }
    
    public function dateee(){
          $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\App\ResourceConnection');  
    $connection= $this->_resources->getConnection();
    $currentDate = date('Y-m-d'); //10
    //$stop_date = date('Y-m-d', strtotime($approve . ' 2 day')); //10
    
    $sql = "SELECT approval_date FROM `wallet_discounts`";
    $result = $connection->fetchall($sql); 
    $approval = $result['0'];
    return $enable = $approval['approval_date'];
    }
    
 public function homecron(){
      $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\App\ResourceConnection');  
    $connection= $this->_resources->getConnection();
    $currentDate = date('Y-m-d'); //10
    //$stop_date = date('Y-m-d', strtotime($approve . ' 2 day')); //10
    
    $sql = "SELECT approval_date FROM `wallet_discounts`";
    $result = $connection->fetchall($sql); 
    $approval = $result['0'];
    $enable = $approval['approval_date'];
    
   if($currentDate >= $enable){ 
    $sql = "UPDATE `wallet_discounts` SET is_active = '1'  WHERE approval_date = '$enable'";  
    $connection->query($sql);
   }
 }*/
    
}
