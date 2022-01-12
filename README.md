<img src="https://media0.giphy.com/media/3o85xtLX7zCyeeWGLC/giphy.gif?cid=ecf05e47yeg4a0bta9a5bhotcb5jaget1vrzox8vhnpcokvi&rid=giphy.gif&ct=g" width="100%">

# Todo-list app

CRUD with user login system. Built with Laravel 8.

## Features

-   As a user I'm able to create an account.

-   As a user I'm able to login.

-   As a user I'm able to logout.

-   As a user I'm able to edit my account email and password.

-   As a user I'm able to upload a profile avatar image.

-   As a user I'm able to create new tasks with title, description and deadline date.

-   As a user I'm able to edit my tasks.

-   As a user I'm able to delete my tasks.

-   As a user I'm able to mark tasks as completed.

-   As a user I'm able to mark tasks as uncompleted.

-   As a user I'm able to create new task lists with title.

-   As a user I'm able to edit my task lists.

-   As a user I'm able to delete my task lists along with all tasks.

-   As a user I'm able to add a task to a list.

-   As a user I'm able to view all tasks.

-   As a user I'm able to view all tasks within a list.

-   As a user I'm able to view all tasks which should be completed today.

-   As a user I'm able to remove a task from a list.

-   As a user I'm able to delete my account along with all tasks and lists.

-   As a user I'm able to reset my password via email.

## Installation
   
   1. Clone this repo
      ```bash
      git clone https://github.com/patrikstaaf/todo-php
      cd todo-php
      ```
2. Open the project in your text editor.
3. Create an .env file
      ```bash
      cp .env.example .env
      ```
    - Open the .env file and add the database name, username and password. Make sure MAIL_MAILER in .env is = log, without this the reset password will not work.
    - Close the .env file
4. Install dependencies for php and node.js
      ```bash
      composer install
      npm install
      ```
5. Generate application key.
      ```bash
      php artisan key:generate
      ```
6. Create symbolic links for uploads.
      ```bash
      php artisan storage:link
      ```
7. Run migrations to create database structure.
      ```bash
      php artisan migrate:fresh
      ```
8. Start TailwindCSS build process
      ```bash
      npm run watch
      ```
9. Run the php server.
      ```bash
      php artisan serve
      ```
10. You´re all set, now visit the site at [http://localhost:8000](http://localhost:8000).

## Code Review

Code review written by [Jane Doh](https://github.com/username).

1. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
2. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
3. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
4. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
5. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
6. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
7. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
8. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
9. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.
10. `example.js:10-15` - Remember to think about X and this could be refactored using the amazing Y function.

## Testers

Tested by the following people:

1. Theo Sandell
2. Neo Lejondahl
3. Albin Andersson
