<?php
class Usuario{

  private  $id;
  private  $nome;
  private  $senha;
  private  $email;
  private  $cpf;
  //private  $empresaId;


   /*
        
        ID

  */

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId() 
  {
    return $this->id;
  }

  /*

        NOME

  */

  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function getNome():string 
  {
    return $this->nome;
  }

   /*

    SENHA

  */

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  public function getSenha():string 
  {
    return $this->senha;
  }

   /*
    
    EMAIL

  */

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail():string
  {
    return $this->email;
  }

  /*
    
    CPF

  */

  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }

  public function getCpf():string
  {
    return $this->cpf;
  }

  /*
    
    CPF

  */

  /*public function setEmpresaId($empresaId)
  {
    $this->empresaId = $empresaId;
  }

  public function getEmpresaId():string
  {
    return $this->empresaId;
  }*/


  /*private  $id;
  private  $nome;
  private  $senha;
  private  $email;
  private  $cpf;
  private  $empresaId;*/

  public function __toString(){
    return json_encode(array(
      ":NOME"=>$this->getNome(),
      ":CPF"=>$this->getCpf(),
      ":EMAIL"=>$this->getEmail(),
      ":SENHA"=>$this->getSenha()
    ));
  }

  public function arrayConstruct(){
      return array(
      ":NOME"=>$this->getNome(),
      ":CPF"=>$this->getCpf(),
      ":EMAIL"=>$this->getEmail(),
      ":SENHA"=>$this->getSenha()
    );
  }



}
?>