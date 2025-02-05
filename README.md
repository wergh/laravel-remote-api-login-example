## Laravel Fresh installation example for remote-api-login package

Installation

- Clone the repository in you local machine

- Copy the .env.example in .env

- Edit in the .env the database connection

- run the commands:
```sh
composer install

npm install && npm run build

php artisan key:generate

php artisan migrate

```

After that you can enter into your Laravel, go to register and create your user to test.

The route for the device login are placed in the routes/web.php, and they are:

https://YOUR_IP_OR_DOMAIN/public/login


We added an extra route in routes/api.php to verify if the token retrieved by the frontend is working well.
The route is:

https://YOUR_IP_OR_DOMAIN/api/user

Remember you need to register in the [Pusher webpage](https://pusher.com/), create a new APP and use your on credentials
in the .env file

When you log in the pusher webpage, you need to choose the Channels Option and Create APP

After that you can choose a name, select a cluster (use the closer to you), and if you want you can create credentials
for multiple enviroments. The Tech stack is optional and will only show you examples of implementation.

When your app is created, you can enter and go in the left side to App Keys. There you can find all the necesary data for
your .env file
