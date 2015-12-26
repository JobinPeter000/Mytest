<?php
class Beanclass{
	public $username;
	public $password;
	public $gender;
	public $branch;
	public $tech;
	
	
	function setUsername($user)
	{
		$this->username=$user;
				
	}
	function getUsername()
	{
		return $this->username;
	}
	function setPassword($pwd)
	{
		$this->password=$pwd;
	}
	function getPassword()
	{
		return $this->password;
	}
	function setGender($gn)
	{
		$this->gender=$gn;
	}
	function getGender()
	{
		return $this->gn;
	}
	function setBranch($br)
	{
		$this->branch=$br;
	}
	function getBranch()
	{
		return $this->branch;
	}
	function setTech($tech)
	{
		$this->tech=$tech;
	}
	function getTech()
	{
		return $this->tech;
	}
	
}
?>
