# mircoservice
 Partner Microservice Log in/out with database interaction

Communication Contract
In this instance, the Server is communicating with the microservice (log on/out service)
The client attempts to gain access to the server. Then the client attempts to create an account. The server processes the by first checking if the username field is not NULL and then if the password field > 5. If not, it notifies the user of the issue respectively. The server then encrypts the password in preparation for being sent to the database.

Execute() is then run and the data is written to the database. Using $result = $stmt->execute(); Which saves the result of the database insert as either True or False.

If there was a duplicate row during the process then the email is already in use and the user is notified by checking the result of execute(). After the log-in is processed session_start() is run to ensure the user remains logged in. 
The server will then receive a redirect to the index page of the site. Once the user logs out sesseion_destroy() is run and the user is logged out. The user will then be asked to either login or register for a new account. 
![image](https://github.com/Cloponaclock1/mircoservice/assets/88414374/e7633d86-2981-47de-bbf6-efaab89ad869)
