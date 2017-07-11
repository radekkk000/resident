<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of User
 *
 * @author asuspc
 */
class User implements getRights, getRoles{
   
    private $roles;
    private $department;
    private $rights;
    
    function __construct($type, $department)
    {
       $obj1 = new Roles($type, $department);
       $this->roles = $obj1->getRoles();
       $this->department = $department;
       $this->rights = $obj1->getRights();
    }
    public function getRoles()
    {
        print_r($this->roles);
    }
    
    public function getRights()
    {
        print_r($this->rights);
    }
}
