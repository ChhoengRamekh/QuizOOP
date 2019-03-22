<?php
class getData {
    public $name;
    public $gender;
    public $province;
    public $email;

    public function getName($name) {
        $this->name = $name;
    }
    public function getGender($gender) {
        $this->gender = $gender;
    }
    public function getProvince($province) {
        $this->province = $province;
    }
    public function getEmail($email) {
        $this->email = $email;
    }
}