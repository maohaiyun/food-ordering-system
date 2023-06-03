# Food-Ordering-System-in-PHP

## Project Overview  
### Project MissionEats is a web-based online food ordering System where anyone may register and place orders.  
It enables the administrator who is logged in to maintain the menus by using the CRUD operation and shows clients a list of the available food products together with their prices so that Customer may place an order after logged in to select what they want from the menu.  

## Preview
>### Login page:
![login php](https://user-images.githubusercontent.com/118141976/224461265-489aa8c1-9854-449d-bb46-7d161e847c97.png)
>### Registration page:
![register php](https://user-images.githubusercontent.com/118141976/224461273-aa167af4-1b2d-461a-ad10-cd7279ad8e02.png)
>### Product management page(Admin portal only):
![admin php](https://user-images.githubusercontent.com/118141976/224461285-7ec80ad4-2d37-416c-880d-8032dc73a303.png)
>### Product Menu page(Customer portal only)：
![products php](https://user-images.githubusercontent.com/118141976/224461294-2f18bc72-c371-4702-87ff-d2a0a300149c.png)
>### Reset Password page:
![reset-password php](https://user-images.githubusercontent.com/118141976/224461309-41e51279-9b60-4516-a32c-9424fe88172b.png)
>### Shopping Cart page(Customer portal only)：
![cart php](https://user-images.githubusercontent.com/118141976/224461299-25e291b6-80f6-4292-95e1-116459f8b025.png)
>### Checkout page(Customer portal only):
![checkout php](https://user-images.githubusercontent.com/118141976/224461318-ba540c86-8f8b-4e8b-bfd2-2aea37321594.png)

## Features
1. This project is developed in `PHP`, `XAMPP` is used to start `Apache HTTP Server`on a local computer and `phpMyAdmin` is used to manage the `MySQL` database.  

2. `CSS` and `Bootstrap` are used to enhance the UI of the website.  

3. `PHP` script that uses an array to generate search suggestions based on user input, and the use of `AJAX`(Asynchronous JavaScript and XML) to dynamically update the search results on the page without the need for a full page refresh enables a more seamless and responsive user experience.  

4. User authentication, including user verification using `regular expressions`, user authorization based on identity & role, and session management using `PHP sessions` which enables maintaining user login state across multiple pages and implementing different headers to display different menu options or other page elements based on the type of user that is logged in.

5. Implemented `phpMyAdmin`, which allows restaurant Admin to login and CRUD product menu data, and allows Customers to login and CRUD cart data and order data.

6. The use of `PHP CRUD APIs` allows Admin to do CRUD operations on Users through `JSON` with `Postman`. Finally, it uses `JSON` to return a response to the client-side, indicating whether the user data was found/inserted/updated/deleted successfully or not. The data is also displayed in an HTML table on the web page for better visualization.  

7. `JavaScript` is used to add interactivity to a website's header: it uses the `DOM API` to toggle the visibility of a navigation menu and close a form container, based on user input.  

8. It's a website that's compatible with mobile devices. It is developed with mobile users in mind and as such very responsive which gives mobile users the same sleek GUI and function as the web users.  


## Instruction

1. Download the zip file

2. Extract the file and copy "MissionEats" folder

3. Paste inside root directory(for xampp xampp/htdocs, for wamp wamp/www, for lamp var/www/html)

4. Open PHPMyAdmin (http://localhost/phpmyadmin)

5. Create a database called shop_db

6. Import 4 sql files into data base(cart.sql, order.sql, products.sql, users.sql)

7. Put localhost/ into browser, it will direct to login page

8. Register for an account(admin account can be changed in mysql database by changing isAdmin from 0 to 1, 1 is Admin)
