Create or replace view v_manager_departement as Select e.emp_no as emp_no,birth_date,first_name,last_name,gender,hire_date,to_date,de.dept_no as dept_no, dept_name from employees as e Join dept_manager as dm ON dm.emp_no=e.emp_no Join departments as de ON de.dept_no=dm.dept_no;

Create or replace view v_employer_departement as Select e.emp_no as emp_no,birth_date,first_name,last_name,gender,hire_date,to_date,de.dept_no as dept_no, dept_name from employees as e Join dept_emp as dm ON dm.emp_no=e.emp_no Join departments as de ON de.dept_no=dm.dept_no;

Create or replace view V_nbr_employer_par_departement as select dept_no,count(emp_no) as nbr_employer FROM v_employer_departement where to_date>=NOW() GROUP BY dept_no;

Create or replace view V_nbr_employer_par_departement_global as SELECT emp_no,birth_date,first_name,last_name,gender,hire_date,to_date,v1.dept_no,dept_name,nbr_employer FROM v_manager_departement as v1 JOIN V_nbr_employer_par_departement as v2 ON v1.dept_no=v2.dept_no where to_date>NOW() ORDER BY dept_name ASC;