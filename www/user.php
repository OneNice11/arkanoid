<?php
class User{
    public $id_profile;
    public $phone_profile;
    public $name_profile;
    public $login_profile;
    function __construct($id_profile,$phone_profile,$name_profile,$login_profile)
    {
        $this->$id_profile = $id_profile;
        $this->$phone_profile=$phone_profile;
        $this->$name_profile=$name_profile;
        $this->$login_profile=$login_profile;
    } 
    function vivod(){
        return "{$this->id_profile}"."{$this->phone_profile}"."{$this->name_profile}"."{$this->login_profile}";
    }
}
$us = new User("a","b","v","g");
var_dump($us);
echo $us->vivod();
