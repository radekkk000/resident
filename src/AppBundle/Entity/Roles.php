<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of Roles
 *
 * @author asuspc
 */
class Roles implements getRights, getRoles {
    private $givenRoles;
    private $rights;
    
    function __construct($role, $department) {
        if($department == 'own department')
        {
            $this->rights = array('read','write');
        }
        if($department == 'frenchise')
        {
            $this->rights = array('read');
        }
        
           if($role == 'secretary')
           {
              $this->givenRoles = array(new BusinessPartnersData($this->rights));
           }
           if($role == 'developer')
           {
              $this->givenRoles = array(new BusinessPartnersData($this->rights),new SellersData($this->rights), new ClientData($this->rights));
           }
           if($role == 'worker')
           {
              $this->givenRoles = array(new ClientData($this->rights));
           }
    }
    public function getRoles()
    {
        return $this->givenRoles;
    }
    
    public function getRights()
    {
        return $this->rights;
    }
}
