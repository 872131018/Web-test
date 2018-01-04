## Requirements

Thank your for your interest in our candidacy test! To get started, you'll need a few things:

### Environment

- [PHP 5.6/7+](http://www.php.net) 
- [Composer](http://getcomposer.org)
- [SQLite](http://php.net/manual/en/sqlite3.setup.php)
- [Node](https://nodejs.org/en/download)
- [NPM](https://www.npmjs.com/get-npm)
- [GIT](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

### Start developing
Run the following commands

```
git clone https://github.com/SPA-Web/web-test.git
composer install    # Installs PHP dependencies
npm install         # Installs Node compiling dependencies
php artisan migrate # Creates required table structure using the SQLite configuration
php artisan db:seed # Adds 10 dummy users to the SQLite users table
php artisan serve   # Makes development environment available in your browser at http://localhost:8000
npm run watch       # Starts a watcher job to recompile resources when changes are detected
```

## Tasks

The following tasks will test your general ability to code in a Laravel + Vue environment. Do your best and good luck!

### Task 1 requirements

- Create a Laravel route that returns a user JSON object retrieved by a `email` parameter.
- Use the existing Eloquent User model.

### Task 2 requirements

- Update the view to call the newly created user route using the user `email` entered into the `input` field. 
- If a user is not found, an error should be displayed to the user. 
- If the user is found, render the user data in a space below the search box.
- These actions should be repeatable and should not require a new page request.

## Submission

When you're done and confident in your implementation, commit your code locally. Next, you can compress your codebase into an archive (ZIP/TAR/RAR/etc). Please include all hidden files. Files prefixed with a `.` specifically like `.gitignore` for example. Windows hidden files are not needed. Also, please do not include the `node_modules` or `vendor` directories.

Once compressed, you should pass the archived file on to your recruiter or send it in via any method we might have provided during the interview.