<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of ClientData
 *
 * @author asuspc
 */
class ClientData  extends Data {
    //put your code here
    private $phone; 
            
    function __construct($rights) {
        $this->phone = '531730179';
        
    }
    
     public function getData()
     {
         
     }
     
     public function setData()
     {
         
     }
}
