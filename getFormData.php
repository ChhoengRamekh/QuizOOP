<?php
require_once "src/getData.php";
if(isset($_POST['btn-submit'])) {
    $inputName = $_POST['name'];
    $inputGender = $_POST['gender'];
    $inputProvince = $_POST['province'];
    $inputEmail = $_POST['email'];

    $getName = new getData();
    echo "Name: ".$getName->getName($inputName);

    $getGender= new getData();
    echo "Gender: ".$getGender->getGender($inputGender);

    $getProvince = new getData();
    echo "Province: ".$getProvince->getProvince($inputProvince);

    $getEmail = new getData();
    echo "Email: ".$getEmail->getEmail($InputEmail);

}

