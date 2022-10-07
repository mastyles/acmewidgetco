## About Acme Widget Co Web App

### How to run the application:

- [First, just clone or download the project as a zipped file.]
- [Extract the project and open a terminal on that path.]
- [Open the WampServer (local web server for PHPMyAdmin and the localhost web support).]
- [Create a new database named acmewidco_db and run the migrations on the terminal as:
php artisan migrate]
- [Run the app with the command: php artisan serve
It will provide you localhost browser url along with port. Usually it gives you it's
default url: localhost:8000/
Your app will successfully be running. (More details about the app the navigation/flow are
below in the "About application" section).]
- [There are three main database tables: Users, Products and Cart. The products table will be empty
initially. Kindly either insert three rows/records in the products table for each widget or
simply import the MySQL file to insert the already inserted products, users and carts data for
testing purpose.]

(Kindly run npm i, npm run dev and composer dump-autoload if there are any problems with initiating the project.
And kindly feel free to ask me if still there are any issues.)

### About the application:

The app is very easy to use and simplified as much as possible, along with the events. It's totally responsive and the front end is build using Bootstrap and Bulma CSS. All the possible business logic in separated and used in the respective controllers so that the code in the view
looks nicer and simple.

The front or the first page is the welcome page where all the products are available. On the navbar (the top of the page), there is an option of login and register. Register a new user and login into the portal i.e. the welcome (root) page.

The products can not be purchased until and unless a user is logged in. There are checks everywhere which shows only public information about the app and the rest of user details are shown once the user logs in.

As long as you start purchasing more and more products, they get populated in the descending (latest first on the top) in a tabular form below the products along with the information of if an special offered product is purchased or not. For red widget products, it's price is alternatively stored and calculated using a boolean field 'is_offer' in the cart table in the database.

I have added some extra features besides the required ones but I couldn't finish them as I had to deliver and also it would have changed the calculating logic as well:
Add a new product, remove a purchased product.

I hope you will like the project and let me know your reviews. Thank you for visiting it.
