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

-   As a user I'm able to move a task from one list to another.

-   As a user I'm able to add share a list of tasks with another user.

-   As a user I'm able to search for tasks.

-   As a user I'm able to mark all tasks in a list as completed with one click.

-   As a user I'm able to read a welcome email when I've created a new account.

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

Code review written by [Neo Lejondahl](https://github.com/NeoIsRecursive).

1. `Controllers` - Strict types,
2. `CategoryTaskController:21` - Maybe validate format aswell,
3. `Models/User:61-66` - You have created hasmany on the user but never use them?,
4. `web.php` - Really like the structure and how it looks, easy to see were stuff is.
5. `resources/css/app.css` - maybe make some own classes and @apply tailwindcss classes to them, if you repeat lots of classes on more than one location example buttons or nav links,
6. `accesability` - I could navigate and do everything on the site with only the keyboard, great!
7. `overall` - I like it, the code is clean and ‘simple’ which is great. Really good job and it looks good aswell,

## Testers

Tested by the following people:

1. Theo Sandell
2. Neo Lejondahl
3. Albin Andersson

# Possible features

As a user I'm able to move a task from one list to another. :white_check_mark:

As a user I'm able to read a welcome email when I've created a new account. :white_check_mark:

As a user I'm able to search for tasks. :white_check_mark:

As a user I'm able to add hashtags to tasks and list all tasks with an specific hashtag.

As a user I'm able to add checklist to tasks.

As a user I'm able to add share a list of tasks with another user. :white_check_mark:

As a user I'm able to mark all tasks in a list as completed with one click. :white_check_mark:
