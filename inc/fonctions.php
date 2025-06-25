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

    function get_fiche_employer($id_employer){
        $sql="SELECT * FROM employees WHERE emp_no='%s'";
        $sql=sprintf($sql,$id_employer);
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=mysqli_fetch_assoc($resultat);

        return $demande;
    }

    function get_historique_salaire($id_employer){
        $sql="SELECT s.emp_no,salary,s.from_date AS from_date,s.to_date AS to_date,title FROM salaries AS s JOIN titles AS t ON s.emp_no=t.emp_no AND s.from_date>=t.from_date AND s.to_date<t.to_date WHERE s.emp_no='%s'";
        $sql=sprintf($sql,$id_employer);
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }
    
?>