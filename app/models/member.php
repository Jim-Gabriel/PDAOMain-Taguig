<?php


class Member {

    protected $db;
    public function __construct() {
        $this->db = new Database;
    }

public function add_member($param)
{

    $surname = !empty($param['surname'])? $param['surname'] : '';
    $firstname = !empty($param['firstname'])? $param['firstname'] : '';
    $middlename = !empty($param['middlename'])? $param['middlename'] : '';
    $nameextention = !empty($param['nameextention'])? $param['nameextention'] : '';
    $disability = !empty($param['disability'])? $param['disability'] : '';
    $birthday = !empty($param['birthday'])? $param['birthday'] : '';
    $gender = !empty($param['gender'])? $param['gender'] : '';
    $bloodtype = !empty($param['bloodtype'])? $param['bloodtype'] : '';

    $Query = 
    "INSERT INTO `mem_profile_m`(
        `mem_surname`, 
        `mem_firstname`, 
        `mem_middlename`, 
        `mem_nameextention`, 
        `mem_disability`, 
        `mem_birthday`, 
        `mem_gender`, 
        `mem_bloodtype`
        ) 

        

    VALUES (
        :surname, 
        :firstname, 
        :middlename, 
        :nameextention, 
        :disability, 
        :birthday, 
        :gender, 
        :bloodtype
        )";

    $this->db->Query($Query);
    
    $this->db->bind(':surname', $surname);
    $this->db->bind(':firstname', $firstname);
    $this->db->bind(':middlename', $middlename);
    $this->db->bind(':nameextention', $nameextention);
    $this->db->bind(':disability', $disability);
    $this->db->bind(':birthday', $birthday);
    $this->db->bind(':gender', $gender);
    $this->db->bind(':bloodtype', $bloodtype);

    $this->db->execute();

    $lastId = $this->db->lastInsertId();
    
return $lastId;

}






public function add_address($lastinsertId, $param)
{


    $housenum = !empty($param['housenum'])? $param['housenum'] : '';
    $street = !empty($param['street'])? $param['street'] : '';
    $village = !empty($param['subdivision'])? $param['subdivision'] : '';
    $barangay = !empty($param['barangay'])? $param['barangay'] : '';


    $Query = "INSERT INTO `mem_address_m` ( 
        `address_mem_id`,
        `address_housenum`, 
        `address_street`, 
        `address_village`, 
        `address_barangay`) 
    VALUES (
        :add_mem_id,
        :housenum, 
        :street, 
        :village,
        :barangay
        )";

$this->db->Query($Query);

$this->db->bind(':add_mem_id', $lastinsertId);
$this->db->bind(':housenum', $housenum);
$this->db->bind(':street', $street);
$this->db->bind(':village', $village);
$this->db->bind(':barangay', $barangay);


$this->db->execute();

}







public function add_contact_details()
{
    $Query = "INSERT INTO `mem_contactdet_m`(`mcont_mem_ID`, `mcont_number`) 
    VALUES ('') ";
}





public function add_contact_person($lastinsertId, $param)
{

    $c_mem_id = !empty($param['c_mem_id'])? $param['c_mem_id'] : '';    
    $c_name = !empty($param['c_name'])? $param['c_name'] : '';
    $c_number = !empty($param['c_number'])? $param['c_number'] : '';
    $c_relation = !empty($param['c_relation'])? $param['c_relation'] : '';

    $Query = "INSERT INTO `mem_contactperson_m`(

        `cperson_mem_id`, 
        `cperson_name`, 
        `cperson_number`, 
        `cperson_relation`
    ) 
    VALUES ('
    :c_mem_id,
    :c_name,
    :c_number,
    :c_relation
    ')";

$this->db->Query($Query);

$this->db->bind(':c_mem_id', $lastinsertId);
$this->db->bind(':c_name', $c_name);
$this->db->bind(':c_number', $c_number);
$this->db->bind(':c_relation', $c_relation);


$this->db->execute();

}
}