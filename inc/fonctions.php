<?php
    require("connection.php");

    function get_all_departement(){
        $sql="SELECT * FROM V_nbr_employer_par_departement_global where to_date>NOW() ORDER BY dept_name ASC";
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }

    function get_tous_les_departements($id_employer){
        $sql="SELECT * FROM departments WHERE dept_no NOT IN (SELECT dept_no FROM dept_emp WHERE emp_no='%s') ORDER BY dept_name ASC";
        $sql=sprintf($sql,$id_employer);
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }

    function get_employer_par_departement($id_departement){
        $sql = "SELECT * FROM employees JOIN dept_emp  ON employees.emp_no=dept_emp.emp_no WHERE dept_no='%s' AND dept_emp.to_date='9999-01-01' ORDER BY last_name,first_name ASC;";
        $sql =sprintf($sql,$id_departement);
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=array();

        while($donnee=mysqli_fetch_assoc($resultat)){
            $demande[]=$donnee;
        }

        return $demande;
    }

    function get_fiche_employer($id_employer){
        $sql="SELECT * FROM employees JOIN dept_emp  ON employees.emp_no=dept_emp.emp_no JOIN departments ON departments.dept_no=dept_emp.dept_no WHERE employees.emp_no='%s' AND dept_emp.to_date='9999-01-01'";
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
    
    function get_all_recherche($departement,$nom,$min,$max,$limite){
        $lim="LIMIT ".$limite.",20";

        $base_sql = "SELECT dept_name, last_name, first_name, TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) AS age FROM employees JOIN dept_emp ON employees.emp_no=dept_emp.emp_no JOIN departments ON departments.dept_no=dept_emp.dept_no";
    
        $conditions = array();  
        $params = array();      
        
        
        if(!empty($departement)){
            $conditions[] = "dept_name LIKE '%s'";          
            $params[] = "%" . $departement . "%";           
        }
        
        if(!empty($nom)){
            $conditions[] = "last_name LIKE '%s'";          
            $params[] = "%" . $nom . "%";                   
        }
        
        if(!empty($min)){
            $conditions[] = "TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) >= %d";
            $params[] = (int)$min;
        }
        
        if(!empty($max)){
            $conditions[] = "TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) <= %d";
            $params[] = (int)$max;
        }
        
        
        if(!empty($conditions)){
            $sql = $base_sql . " WHERE " . implode(" AND ", $conditions) . " " . $lim . ";";
        } else {
            $sql = $base_sql . " " . $lim . ";";
        }
        
        
        if(!empty($params)){
            $sql = sprintf($sql, ...$params);
        }
        
        $resultat = mysqli_query(dbconnect(), $sql);
        $demande = array();
        
        while($donnee = mysqli_fetch_assoc($resultat)){
            $demande[] = $donnee;
        }
        
        return $demande;

    }

    function get_nbemployee_par_dept($id_departement)
    {
        $sql = "SELECT COUNT(emp_no) as nombre_employee FROM  dept_emp  WHERE dept_no='%s' AND to_date< NOW() ;";
        $sql =sprintf($sql,$id_departement);
        $resultat= mysqli_query(dbconnect(), $sql);
        $demande=mysqli_fetch_assoc($resultat);

        return $demande;
    }

    function get_all_emploi(){
        $sql = "SELECT title FROM  titles GROUP BY title ORDER BY title ASC";
        $resultat = mysqli_query(dbconnect(), $sql);
        $demande = array();
        
        while($donnee = mysqli_fetch_assoc($resultat)){
            $demande[] = $donnee;
        }
        
        return $demande;
    }

    function get_nbr_employer_par_emploi($emploi,$sexe){
        $sql = "SELECT COUNT(titles.emp_no) as nbr FROM  titles JOIN employees ON titles.emp_no=employees.emp_no WHERE title='%s' AND gender='%s' ORDER BY title ASC";
        $sql=sprintf($sql,$emploi,$sexe);

        $resultat = mysqli_query(dbconnect(), $sql);
        $demande=mysqli_fetch_assoc($resultat);

        return $demande;
    }

    function get_salaire_moyen_par_emploi($emploi){
        $sql="SELECT AVG(salary) as nbr FROM  salaries  JOIN titles ON titles.emp_no=salaries.emp_no WHERE title='%s' ORDER BY title ASC  ";
        $sql=sprintf($sql,$emploi);
        $resultat = mysqli_query(dbconnect(), $sql);
        $demande=mysqli_fetch_assoc($resultat);

        return $demande;
    }

    function changer_departement($id_employer,$id_departement,$date){
        $sql1="UPDATE dept_emp SET to_date='%s' WHERE emp_no='%s' AND to_date='9999-01-01'";
        $sql1=sprintf($sql1,$date,$id_employer);
        mysqli_query(dbconnect(), $sql1);

        $sql="INSERT INTO dept_emp VALUES ('%s','%s','%s','9999-01-01')";
        $sql=sprintf($sql,$id_employer,$id_departement,$date);
        mysqli_query(dbconnect(), $sql);
    }
?>