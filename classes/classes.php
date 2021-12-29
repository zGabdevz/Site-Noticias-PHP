<?php
#classes em andamento..
class controller{
    private pdo;

    public function __construct($dbname,$host,$user,$pass){
        try
        {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$pass);
        }
        catch(PDOException $e)
        {
            Echo "ERRO AO CONECTAR AO BANCO DE DADOS: ".getMessage();
        }catch(Exception $e)
        {
            echo "ERRO GÉNERICO: ".getMessage();
        }
    }

    public function buscarNoticias(){
       $cmd = $this->pdo->prepare("SELECT * FROM noticias ORDER BY id DESC");
       $cmd->execute();

       while($lista = $cmd->fetch(PDO::FETCH_ASSOC))
       {

       }
    }
}