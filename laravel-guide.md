# Laravel Guide
## 0 Setup
### 1. Copy the GitHub classroom repository URL
   1. Find the GitHub classroom (probably on the [Learn Laravel exam page](https://learn.hz.nl/course/view.php?id=29682#section-7))
   2. Accept the GitHub classroom
   3. Open the GitHub repository page
   4. Copy the repository URL
### 2. Clone the project in PHPStorm
   1. Open `PHP Storm`
   2. Go to `File` > `Project from Version Control...`
   3. Paste the repository URL you copied
   4. Choose a folder to clone this repository to
   5. Click `Clone`
   6. Make sure the right project is open
### 3. Host the project in XAMPP
   1. Copy the file path of your project's `public` folder
      1. Find the `public` folder in PHPStorm
      2. Right-click it > `Copy Path/Reference...` > `Absolute Path`
   2. Start `XAMMP`
   3. Set the `DocumentRoot` to the project's `public` folder
      1. Go to: `Apache` > `Config` > `Apache (httpd.conf)`, a text file will open
      2. Search `DocumentRoot`
      3. Replace the two file paths with your project's `/public` folder you copied
   4. Start both `apache` and `mySQL`
### 4. Set up the database in PHPStorm (Required to make Laravel work)
   1. Open the database panel in PHPStorm
   2. Connect the database
      1. Click on `Connect database`
      2. Select mySQL
      3. Name it `root`
      4. Test it
      5. Save it
   3. Add a schema (a collection of tables)
      1. Right-click on `localhost`, click `new`, `schema`
      2. This creates a schema, name it to anything you like but remember the name.
      3. Open the `.env.example` file
      4. Find the line that says `DB_DATABASE=`
      5. Name it to whatever you want this to be called
   4. Before looking through the database in PHPStorm, press the circular arrow button to refresh it.
### 5. Project command prompt:
1. Open the command prompt using ``CTRL + ` `` and paste the following commands (note: because of the newlines, the commands will immediately be executed in order):
   1. Installation commands
      ```
      composer install
      npm install
      npm run build
      
      ```
   2. Database setup commands
       ```
       cp .env.example .env
       php artisan key:generate
       php artisan migrate:fresh --seed
      
       ```

## 1 Routing and Views
### 1. Views
1. The `php artisan make:view page` command creates a view named `page` in the `resources/views` folder
2. You can write HTML code inside this view file

### 2. Routing
1. Open `routes/web.php`
2. There are two ways a `get` route can be written
   1. Without a controller
        ```
        Route::get('/', function () {
            return view('welcome');
        })->name('home');
        ``` 
   2. With a controller (more structured but requires an extra file (the controller))
       ```
       Route::get('/', [PageController::class, 'index'])->name('home');
       ```
   3. Where:
      1. `get` is an HTTP request
      2. `'/'` is the URL path `localhost/`, the route will activate at this path
      3. `[PageController::class, 'index']` refers to the `index` method of the `PageController` class (If it exists, it would probably be found in `app/Http/Controllers/PageController.php`), this method returns something like `view('welcome')`
      4. `view('welcome')` refers to the `welcome` view at `resources/views/welcome.blade.php`
      5. `->name('home')` names this route to `home` so that this route can be called later if you want to

### 3. Component Views
1. Create a new component view using the `php artisan make:component --view` command
2. The file can be found in `resources/views/components`

## 2 Controllers


## 3 Models, Migrations, Seeders, and Factories


## 4 CRUD


## 5 Relational databases


## Appendix 1: Debugging

1. Check the file path, does it lead to a file you know? If it leads to a file in the vendor directory then it probably is not. Note that sometimes a file in the vendor directory is followed by `../` to point to a file outside the vendor directory that you may know.
2. Does the error message mention some specific part of code? Use `ctrl + shift + f` to search all files in your project to find that specific part of code to remove it or rename it.
3. When your page has a specific HTTP `post` or `put` request being sent, refreshing the page may not accurately reflect the changes. Instead, you should go back one or two pages and try again.
