-- create a table
CREATE TABLE employees (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  date_hired datetime NOT NULL,
  department_id INTEGER NOT NULL,
  salary_id INTEGER NOT NULL
);
-- insert some values
INSERT INTO employees VALUES (1, 'Employee1', '2017-10-07 00:00:00', 3, 1);
INSERT INTO employees VALUES (2, 'Employee2', '2012-10-08 00:00:00', 2, 3);
INSERT INTO employees VALUES (3, 'Employee3', '2016-08-10 00:00:00', 1, 2);
INSERT INTO employees VALUES (4, 'Employee4', '2018-08-10 00:00:00', 3, 2);


-- Get all employees that belongs to IT department AND hired 2018 onwards.
SELECT * FROM employees where department_id =3 and date_hired between '2018-01-01 00:00:00' and '2018-31-12 00:00:00'