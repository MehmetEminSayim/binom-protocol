<?php
include "../core/config.php";
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
     $response = array();


     if(isset($_POST)){
     $customerName = $_POST["contact-name"];
     $customerSurname = $_POST["contact-surname"];
     $customerEmail = $_POST["contact-email"];
     $customerPhone = $_POST["contact-phone"];
     $customerTwitter = $_POST["contact-twitter"];
     $customerCountry = $_POST["country"];
     $customerPrice = $_POST["Money"];
     $customerAdress = $_POST["contact-adress"];

     $addCustomer = $pdo -> prepare("insert into customers 
     (customerName,customerSurname,customerMail,customerPhone,customerTwitter,customerCountry,customerAdress,customerPrice) VALUES 
     (:customerName,:customerSurname,:customerMail,:customerPhone,:customerTwitter,:customerCountry,:customerAdress,:customerPrice)");
     $addCustomer -> bindParam((":customerName") , $customerName);
     $addCustomer -> bindParam((":customerSurname") , $customerSurname);
     $addCustomer -> bindParam((":customerMail") , $customerEmail);
     $addCustomer -> bindParam((":customerPhone") , $customerPhone);
     $addCustomer -> bindParam((":customerTwitter") , $customerTwitter);
     $addCustomer -> bindParam((":customerCountry") , $customerCountry);
     $addCustomer -> bindParam((":customerAdress") , $customerAdress);
     $addCustomer -> bindParam((":customerPrice") , $customerPrice);
     $addCustomer -> execute();

     }

	}else{

		// $responseArray['result'] = false;
		// $responseArray['messages'][] = "Ürün aktif değil.";
	}
	// echo json_encode($responseArray,true);

