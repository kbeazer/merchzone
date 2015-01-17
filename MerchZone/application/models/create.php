<?php if (! defined('BASEPATH')) exit('No direct script access allowd!');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		session_start();

		// Get the userId
		$userId = 1;

		// Connect to MySql database
		$this->load->database();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
            $firstName = $_POST["fName"];
            $lastName = $_POST["lName"];
            $email = $_POST["email"];
            $userName = $_POST["uName"];
            $password = $_POST["pass"];
            $query = "INSERT INTO users (firstName, lastName, email, uName, pass) VALUES (:firstName, :lastName, :email, :uName, :pass);";

            $stmt = $dbh -> prepare($query);
            $stmt -> bindParam(":firstName", $firstName);
            $stmt -> bindParam(":lastName", $lastName);
            $stmt -> bindParam(":email", $email);
            $stmt -> bindParam(":uName", $userName);
            $stmt -> bindParam(":pass", $password);
            $stmt -> execute();
        }else {
            echo "<div>Please fill out all required fields to continue!</div>";
        }
    }
    header("Location: home.php");
    die();
	}

}


?>