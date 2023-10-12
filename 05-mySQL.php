<!-- MySQL --
MySQL is the most popular database system used with PHP.

A query is a question or a request. For example:

SELECT LastName FROM Employees
The query above selects all the data in the "LastName" column from the "Employees" table.

=== CONNECT TO MYSQL ===
Before we can access data in the MySQL database, we need to be able to connect to the server.

$conn = new mysqli($servername, $username, $password);

=== CREATE A MYSQL DATABASE ===	
A database consists of one or more tables.
The CREATE DATABASE statement is used to create a new database.

=== CREATE TABLE ===
A database table has its own unique name and consists of columns and rows.

The CREATE TABLE statement is used to create a new table.

Each table should have a primary key column. Its value must be unique for each record in the table.

=== INSERT DATA ===
The INSERT INTO statement is used to add new records to a MySQL table:

INSERT INTO table_name(column1, column2, column3,...)
VALUES (value1, value2, value3,...)

=== GET LAST INSERTED ID ===
If we perform an INSERT or UPDATE on a table with an AUO_INCREMENT field, 
we can get the ID of the last inserted/updated record immediately.

=== INSERT MULTIPLE RECORDS ===
Multiple SQL statements must be executed with the mysqli_multi_query() function.

Note that each SQL statement must be separated by a semi-colon.

=== PREPARED STATEMENTS ===
A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.

=== SELECT DATA ===
The SELECT statement is used to select data from one or more tables:

SELECT column_name(s) FROM table_name

or we can use the * character to select ALL columns from a table:

SELECT * FROM table_name

=== WHERE CLAUSE ===
The WHERE clause is used to filter records. 
The WHERE clause is used to extract only those records that fulfill a specified condition.

SELECT column_name(s) FROM table_name WHERE column_name operator value

=== ORDER BY CLAUSE ===
The ORDER BY clause is used to sort the result-set in ascending or descending order.

SELECT column_name(s) FROM table_name ORDER BY column_name(S) ASC|DESC

=== DELETE DATA ===

The DELETE statement is used to delete records from a table:
DELETE FROM table_name
WHERE some_column = some_value

Notice the WHERE clause in the DELETE syntax: The WHERE clause specifies which record or records that should be deleted. 
If you omit the WHERE clause, all records will be deleted!

=== UPDATE DATA ===
The UPDATE statement is used to update existing records in a table:
UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value

Notice the WHERE clause in the UPDATE syntax: The WHERE clause specifies which record or records that should be updated. 
If you omit the WHERE clause, all records will be updated!

=== LIMIT DATA SELECTIONS ===
The LIMIT clause makes it easy to code multipage results or pagination with SQL, and is very useful on large tables.

Assume we wish to select all records from 1 - 30 (inclusive) from a table called "Orders".
The SQL query would then look like this:

$sql = "SELECT * FROM Orders LIMIT 30";

When the SQL query above is run, it will return the first 30 records.

The SQL query below says "return only 10 records, start on record 16 (OFFSET 15)":

$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";

You could also use a shorter syntax to achieve the same result:

$sql = "SELECT * FROM Orders LIMIT 15, 10";
NOTICE THAT THE NUMBERS ARE REVERSED WHEN YOU USE A COMMA!