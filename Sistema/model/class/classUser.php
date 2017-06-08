<?php 
class User 
{
	protected $Name;
	protected $Username;
	protected $Email;
	protected $Password;
	protected $YourOcupation;
	protected $YourGraduation;	

	function __construct()
	{
		$this->Name="";
		$this->Username="";
		$this->Email="";
		$this->Password="";
		$this->RPassword="";
		$this->YourOcupation="";
		$this->YourGraduation="";

	}

	function passwordAreEqual($RPassword){

		return($this->Password == $RPassword);

	}

function getEmail(){

		return $this->Email;
	}

	function setEmail($value){

		$this->Email=$value;

	}


	function getPassword(){

		return $this->Password;
	}

	function setPassword($value){

		$this->Password=$value;

	}

	
	function getName(){

		return $this->Name;
	}

	function setName($value){

		$this->Name=$value;

	}

	function getUsername(){

		return $this->Username;
	}

	function setUsername($value){

		$this->Username=$value;

	}

	function getYourOcupation(){

		return $this->YourOcupation;
	}

	function setYourOcupation($value){

		$this->YourOcupation=$value;

	}

	function getYourGraduation(){

		return $this->YourGraduation;
	}

	function setYourGraduation($value){

		$this->YourGraduation=$value;

	}

}
?>



