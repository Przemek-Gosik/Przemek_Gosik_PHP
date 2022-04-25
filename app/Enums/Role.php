<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Role
 *
 * @author preme
 */
namespace App\Enums;
class Role {
    //put your code here
    const ADMIN = 'admin';
    const USER = 'user';
    
    const TYPES = [
        self::ADMIN,
        self::USER
    ];
}
