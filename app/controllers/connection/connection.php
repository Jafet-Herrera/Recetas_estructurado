<?php
include '../env/env.php';


class Conectar{
    private $db=NAME_BD;
    private $user_db=USER_BD;
    private $password_users_db=PASSWORD_DB;
    private $server_db=SERVER_DB;
    private $smdb=SMDB;
    private $port=PORT;
    

    public function conectar_db(){
        if(!isset($this->db) || $this->db == "" || $this->db == null){
            return 'error, no se puede conectar a';
            
        }else{
            /* $smdb */$this->smdb=strtolower( $this->smdb );//.';port='.$this->port

               $dns=$this->smdb.':host='.$this->server_db.';port='.$this->port.';dbname='.$this->db;
                try {
                    $gbd = new PDO($dns, $this->user_db,$this->password_users_db);
                } catch (PDOException $e) {
                    echo 'Falló la conexión: ' . $e->getMessage();
                }
                return $gbd;
            }
                
            }
            
            
        }
     












?>