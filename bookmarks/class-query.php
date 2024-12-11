<?php
/**
 * 
 */
class Query
{
	
	public Static function select($email, $senha)
	{
		return  "SELECT * FROM Users where nome = '". $email."' and senha = '".md5($senha)."'"; 
	}
}


?>