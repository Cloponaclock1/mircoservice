# mircoservice
 Partner Miscroservice

Communication Contract

The client attempts to create an account. The server processes the by first checking if the username field is not NULL and then if the password field > 5. If not, then it notifies the user of the issue respectively. The server then encrypts the password in preparation for being sent to the database.

Execute() is then run and the data is written to the database. Using $result = $stmt->execute(); Which saves the result of the database insert as either True or False.

If there was a duplicate row during the process then the email is already in use and the user is notified by checking the result of execute(). After the log-in is processed session_start() is run to ensure the user remains logged in. 
The server will then receive a redirect to the index page of the site. Once the user logs out sesseion_destroy() is run and the user is logged out. The user will then be asked to either login or register for a new account. 
![image](https://github.com/Cloponaclock1/mircoservice/assets/88414374/b9a1e199-9b08-43d4-b68a-61afa64c8bea)
