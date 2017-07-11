<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of BusinesPartersData
 *
 * @author asuspc
 */
class BusinessPartnersData extends Data {
    //put your code here
    private $phone; 
            
    function __construct($rights) {
        $this->phone = '426860589' ;
    }
    
    public function getData()
    {
         
    }
     
    public function setData()
    {
         
    }
}
