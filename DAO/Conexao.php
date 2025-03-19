<?php 
    namespace PHP\Modelo\DAO;
    
    class Conexao{
        function conectar(){
            try {
                $conn = mysqli_connect('localhost','root','','sistemalivros');
                if ($conn) {
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
            }
            catch (Exception $e) {
                return "<br>Erro ao conectar!.$erro<br><br>";
                
            }//fim do try
        }//fim da função conectar
    }//fim da classe
?>