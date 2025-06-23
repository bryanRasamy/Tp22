<?php
    require("connection.php");

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

    
?>