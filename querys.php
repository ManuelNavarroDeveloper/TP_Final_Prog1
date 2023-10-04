<?php

require 'conexion.php';

class Querys{

    public function __construct($conex){
        $this->conex = $conex;       
    }

    function popular()
    {
        $queryCantidad = "SELECT * FROM books";
        $getCantidad = mysqli_query($this->conex, $queryCantidad);
        $cantidad = mysqli_num_rows($getCantidad);


        for ($i = 1; $i < $cantidad + 1; $i++) {
            $queryLibros = "SELECT * FROM books WHERE isbn = " . $i;
            $getLibros = mysqli_query($this->conex, $queryLibros);
            $libro = $getLibros->fetch_array();
            if ($libro[1] == NULL) {
                echo "<option value=\"" . $libro[0] . "\" >" . $libro[2] . "</option>";
            }
        }
        return;
    }
    function nameuser()
    {
        $queryname = "SELECT * FROM users";
        $getname = mysqli_query($this->conex, $queryname);
        $users = $getname->fetch_array();

        if ($users[3] == ($_POST["user_id"])) {
            echo "<option value =\"" . $users[0] . "\">" . $users[3] . "</option>";
        }
        return;
    }

    function countLibros()
    {
        $queryCount = "SELECT COUNT(*) FROM books WHERE user_id IS NULL";
        $getCount = mysqli_query($this->conex, $queryCount);
        $count = mysqli_fetch_assoc($getCount);
        return $count['COUNT(*)'];
    }

}