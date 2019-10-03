## Moving of Project

1. Click clone or download tab and download this whole repository as a zip.
2. Extract the zip and relocate the folder to your XAMPP's htdoc path E.g. `C:\xampp\htdocs`


## Importing of SQL File
 
1. Ensure that the required services under XAMPP are on, goto "localhost/phpmyadmin on your browser".
2. Create an empty database name: "dbKeyboardHaven" and browse to import tab.
3. Select the sql file to import: "dbKeyboardHaven.sql" and click Go.




## Setting the password for phpMyAdmin Connection
1. Browse to `C:\xampp\phpMyAmin`.
2. Edit the file "config.inc.php" using any text editor.
3. Set the password value to **AL26yK80f0a08dOd**.
```sh
$cfg['Servers'][$i]['password'] = 'AL26yK80f0a08dOd';
```
4. Save the file!

5. Goto phpmyadmin home page and click on user accounts.
6. Change the password for the root account under localhost to 'AL26yK80f0a08dOd'.








