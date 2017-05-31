# event-manager
Please follow the steps to run the event manager web application:

1. Install xampp web server package.
2. Clone the repository onto your local machine in a folder within your htdocs folder in xampp.
3. Run Apache and MySQL from xampp and type localhost/phpmyadmin/ in your browser to open the MySQL GUI.
4. Using the simple UI, create a database called eventmanager and in it, create three tables called people, events and attending.  
5. Make 2 columns in the table people; 'username' and 'password'. Please give the appropriate varchar length you require.
6. For events, create the columns 'id' (with auto-increment), 'name', 'genre', 'venue', 'date' and 'summary'. Give name, genre and venue a    varchar datatype with length 25, id a datatype of int and primary key (don't specify any length), date gets a type of date and summary    gets a type of tinytext (with no length specified for either).
7. For attending, create the columns 'username' and 'name'. Please give an appropriate varchar (25) as required. Open the index.php file      in your browser by typing localhost/folder_name/index.php (preferably Chrome) and you are good to go!
8. Sign up and then login to access the homepage.
9. Go to the Add Events page to enter records in the database and see them being displayed in the home page.
10. We can subscribe and unsubscribe from the events through the UI. See the events for which you registered in the Your Events section.
11. A text file with some sample database entries with the table names has been included. Please import it into phpMyAdmin to create the database for the application (although its not required as it just contains some Lorem ipsum and it can be ignored).

Thank you for reading!
