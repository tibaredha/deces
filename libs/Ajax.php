<?php
class Ajax  extends PDO
{
    const DO_ROOT  = DO_ROOT;
	private $drv    = DB_TYPE;
	private $host   = DB_HOST;
	private $dbName = DB_NAME;
	private $user   = DB_USER;
	private $pass   = DB_PASS;
	private $options = array(
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_CASE => PDO::CASE_NATURAL,
		PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
		);	
	private $dbh;
	private $error;	
	
	
	public function __construct()
	{			
		$dsn = "".$this->drv.":dbname=".$this->dbName.";host=".$this->host.";charset=utf8"; 
		parent::__construct($dsn, $this->user, $this->pass, $this->options);
		try
		{
		  $this->dbh = new PDO($dsn, $this->user, $this->pass, $this->options); 
		}
		catch (PDOException $e)
		{
		   $this->error = $e->getMessage();
		}	
	}
	
	function Ajaxwc($id)
    {
		$wilaya = $this->dbh->query("SELECT IDCOM,COMMUNE from com where idwil=$id order by COMMUNE asc");
		foreach ($wilaya->fetchAll(PDO::FETCH_ASSOC) as $ligne)
		{
		 echo '<option value="'.$ligne['IDCOM'].'">'.$ligne['COMMUNE'].'</option>';
		}
    }
	
	function Ajaxws($id)
    {
		$wilaya = $this->dbh->query("SELECT id,idwil,structure from structure where idwil=$id order by structure asc");
		foreach ($wilaya->fetchAll(PDO::FETCH_ASSOC) as $ligne)
		{
		 echo '<option value="'.$ligne['id'].'">'.$ligne['structure'].'</option>';
		}
    }
	
	
	
	
	
	
}

?>