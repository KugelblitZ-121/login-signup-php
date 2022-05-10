- How to install the system?
1- First we need a text editor, so we have to download VScode
2- Second we need a hosting to run our local web server on, so we have to download XAMPP
NOTE: XAMPP is a cross-platform web server package that includes the essentials for back-end developers.
It includes PHP, MySQL, Apache, phpMyAdmin, and more. It's not necessary to install all the software separately with XAMPP
3- Open the XAMPP control panel and run the Apache and MySQL servers, for me I wasn't able to run MySQL server so I had to change the port 
numbner from 3306 to 3307
4- In the XAMPP folder, go to htdocs and create a new file 'phplogin' and open the file from VScode
5- Start createing the needed files with the needed extentions, I used .html .scc and .php 
6- Navigate to http://localhost/phplogin/code/filename.extention to see your work

--------------------------------------------------------------------------------------


- How to use the system?
1- You can signup to the website with your email,name,passowrd and phone number
2- Your information will be stored in a database with a hased passowrd, for a sercurity reason
3- You can login to your account with your entered  information
After logging in:
    1- You can view your information in the 'profile page'
    2- You can see all of the users that are stored in the database
    3- You can use the navbar to swich between the home and profile pages
IMPORTANT NOTE: Bare in mind that the server port I'm using is 3307, so we have to specify it whenever we want to connect with the database

--------------------------------------------------------------------------------------

- Links for the pages:
Login page: http://localhost/phplogin/code/index.html
Register page: http://localhost/phplogin/code/register.html
Home page: http://localhost/phplogin/code/home.php
Profile page: http://localhost/phplogin/code/profile.php