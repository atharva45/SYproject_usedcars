# SYproject_usedcars
Used cars selling and buying

There are a total of 9 webpages. Each webpage of the website is responsive.
•	All the concepts learnt (HTML, CSS, Bootstrap, JavaScript, PHP, Sessions, File Handling, MySQL) were implemented.

•	The homepage consists of the introduction of the website. The latest 3 cars uploaded are shown on the homepage. The user can go to any webpage from here except to the Sell page. The user can see the option to go to the Sell webpage only if he/she has logged in.

•	The signup page can be found from the login page. The users' first name, last name, phone number, location, email, password, and confirmation password are taken as input on this page. All fields in this form are compulsory. If any previous email from the database is inputted, then an alert is shown. The email, phone number, and password (6-20 characters, including a mix of uppercase, lowercase, and digits) are checked for any errors. If any error is present, then an alert is shown. The password entered and the confirmation password are checked for similarity. If they are not the same, then an error is shown. If all details are correct, then an alert showing "Signup Successful" is shown.

•	The login page consists of the user inputting his/her email and password. If the email entered is not present in the database, then an alert is shown. If the password is wrong, then an alert is shown. If both details match with the database, then the user can log in, and an alert is shown that login is successful. The password is stored in hash format in the database.

•	 The buy page consists of all the cars that are on sale. If a car is clicked, then the specific page of that car is opened.

•	The sell page is visible only to the users who have logged in. The car details like name, brand, year, fuel, transmission type, number of owners, kilometers driven, registration number, price, and image to upload are taken as input. All fields are required. The car name and brand are taken as input in a text box. Year and fuel have a dropdown menu. Transmission type and number of owners are taken as input as radio buttons. The number of kilometers driven is inputted by a slider. The registration number is taken as input in a text box. If the registration number matches with a car present in the database, then an alert is shown, and the form needs to be filled again. If the image uploaded is not in JPEG, JPG, or PNG format, then an alert is shown, and the form needs to be filled again.

•	 The individual car display page consists of the webpage of each car linked with the backend. The car image and its details are shown. The location, phone number, and name of the owner are also shown. These details were taken when the user had signed up. So each car is linked with a user.

•	The Contact Us webpage can be used to send any feedback to the company.

•	The About Us webpage shows the information of the website.

•	The logout page is used to log out a user from his/her session.
