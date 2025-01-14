<?php

class Usuario
{

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdUsuario()
    {
        return $this->idusuario;
    }

    public function setIdUsuario($value)
    {
        $this->idusuario = $value;
    }
    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($value)
    {
        $this->deslogin = $value;
    }
    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($value)
    {
        $this->dessenha = $value;
    }
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;
    }

    public function loadById($id)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $id
        ));

        if (count($results) > 0) {

            $row = $results[0];

            $this->setData($results[0]);
        }else{
            throw new Exception ("login e/ou senha inválidos!");
        }
    }

    public static function getList()
    {
        $sql = new Sql();

        return $sql->select("select * from tb_usuarios order by deslogin");
    }

    public function setData($data)
    {
        $this->setIdUsuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert()
    {
        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha()
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }else{
            throw new Exception ("login e/ou senha inválidos!");
        }
    }

    public function update($login, $password)
    { 
        $this->setDessenha($login);
        $this->setDeslogin($password);

        $sql = new Sql();
        $sql->execQuery("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdUsuario()
        ));
    }

    public function delete()
    { 
        $sql = new Sql();
        $sql->execQuery("DELETE from tb_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdUsuario()
        ));
    }

    public static function search($login)
    {
        $sql = new Sql();
        return $sql->select("select * from tb_usuarios where deslogin like :SEARCH order by deslogin", array(
            ":SEARCH"=>"%".$login."%"
        ));
    }

    public function login($login, $senha)
    {
        $sql = new Sql();
        $results= $sql->select("select * from tb_usuarios where deslogin = :LOGIN  AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$senha
        ));
        
        if (count($results) > 0) {

            $row = $results[0];

            $this->setData($results[0]);
        }else{
            throw new Exception ("login e/ou senha inválidos!");
        }
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario" => $this->getIdUsuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}
