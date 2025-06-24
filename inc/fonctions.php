<?php
    require("connection.php");

    function get_all_departement(){
        $sql="SELECT * FROM departments";
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }

    function get_employer_par_departement($id_departement){
        $sql = "SELECT * FROM employees JOIN dept_manager  ON employees.emp_no=dept_manager.emp_no WHERE dept_no='%s';";
        $sql =sprintf($sql,$id_departement);
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }

    function get_manager_courant($id_departement){
        $sql = "SELECT * FROM employees JOIN dept_manager  ON employees.emp_no=dept_manager.emp_no WHERE dept_no='%s' AND to_date>'2025-06-24';";
        $sql =sprintf($sql,$id_departement);
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=mysqli_fetch_assoc($resultat);

        return $demande;
    }

    
?>