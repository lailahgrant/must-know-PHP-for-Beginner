# 10 Projects for beginners in PHP

> Here's a highlight of the projects every beginner in PHP must know

## 1. Database Connection
There are 3 methods for connecting to the Database and they're as follows

- **mysqli_connect()**

<img src="./mysqli_connect.png" alt="mysqli_connect">


- **new mysqli**

Create a variable object `new`
<img src="./new_mysqli.png" alt="new mysqli">

- **define()**

`define()` - defines a constant (values that can't be changed but can be accessed across the code)

<img src="./define().png" alt="define()">

[connection.php](./connection.php)

## 2. Create a Database
- First connect to the database
- Make SQL query to connect to the database 
- Pass two parameters in `mysqli_query()`,  *server connection* and *database creation sql*.

<img src="./create-database.png" alt="create database using sql query">

[create.php](./create.php)

## 3. Create Tables
- Use Sql query to create tables

<img src="./create-table.png" alt="Create Table using query">

[createtable.php](./createtable.php)

## 4. Insert data in Table of the database

<img src="./insert-data-into-table.png" alt="Insert data into the table">

[insert.php](./insert.php)


## 5. Updating data

<img src="./update-table.png" alt="Update data in the table field in PHP">

[update.php](./update.php)


## 6. Alter table data

> To make changes in the table like `adding columns`, `deleting columns`, etc.

a) To remove the email column, use the following query:

```php
$sql = "alter table `data` drop column `email`";
```

- `drop column` deletes the whole column in a table

<img src="./alter-drop-column.png" alt="Alter table data in php - alter column">

[alter.php](./alter.php)


b) To add columns in the table, use the following query:

```php
$sql = "alter table `data` add email VARCHAR(100)";
```

- `add` - adds the column

<img src="./alter-add-column.png" alt="Alter table data in php - Add column">

[alter-add.php](./alter-add.php)


## 7. Delete data 

> Use `id` to delete specific data from the table

<img src="./delete-data-using-id.png" alt="Delete data in a table using id">

[delete.php](delete.php)


## 8. Form data

> How to insert data from a form to a database

<img src="./form-html.png" alt="Form HTML code">

<img src="./form-php.png" alt="PHP code to insert form data to database">

[form.php](./form.php)







