<?php 
    function conexion () {
        $cnx = mysqli_connect("localhost","root","", "method");
        if (!$cnx) {
            die("falha na conexão ".mysqli_connect_error());
        }
        return $cnx;
    }
