<?php 

class UsuarioModel
{
	public $nome;
	public $email;
	public $telefone;

	private $tbl_newsletter="newsletter";
	private $conn;
	public function __construct($db){
        $this->conn = $db;
    }
    public function CadastrarNewsletter()
    {
    	/*$query="INSERT INTO".$this->tbl_newsletter." (nome, email, telefone) VALUES (?, ?, ?)";
    	$stmt = $this->conn->prepare($query);
    	$this->nome=htmlspecialchars(strip_tags($this->nome));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->telefone=htmlspecialchars(strip_tags($this->telefone));
        //valores vinculados
        $stmt->bindParam(1, $this->nome);
        $stmt->bindParam(2, $this->email);
        $stmt->bindParam(3, $this->telefone);*/
        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}