Installation Steps
================

1. Download zip file and Unzip file on your local server.
2. Put this file inside "c:/wamp/www/"  OR "c:/xamp/htdocs/" .

Database Configuration:
==================

1. Open phpmyadmin
2. Create New Database named "shopping_db".
3. Import database tables in newly created database "shopping_db" from downloaded folder -> database -> shopping_db.sql.zip.
4. In "PROJECT-FOLDER/admin/php_files/database.php" change the value of variable $db_name = "shopping_db".
5. Open Your browser put inside URL: "http://localhost/shopping-project/"
6. To Login as admin put inside URL:"http://localhost/shopping-project/admin"

Admin login details:
====================
Login Id : admin
Password : admin

Demo User login details:
========================
Login Id : user@gmail.com
Password : user1

InstaMojo Payment Gateway Settings
==================================
1. Open Instamojo website and Register on it : https://www.instamojo.com or https://test.instamojo.com/
2. After login goto this page : https://www.instamojo.com/integrations or https://test.instamojo.com/integrations and get API Key , Auth Token.
3. Open this link : https://docs.instamojo.com/docs/create-a-request and click on "PHP" to get the code for PHP. 
4. Open "PROJECT-FOLDER/instamojo.php" and Set API Key , Auth Token on line number. 19 & 20 and set API URL on line number. 14 

