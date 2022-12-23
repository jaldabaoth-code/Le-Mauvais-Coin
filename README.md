<h1>Le Mauvais Coin (Symfony Livecoding, WCS Web PHP)</h1>

### Create a website with "Symfony" by WCS trainer during a livecoding

---

### Steps

1. Clone the repo from GitHub : `git@github.com:jaldabaoth-code/Le-Mauvais-Coin.git`
2. Enter the directory : `cd Le-Mauvais-Coin`
3. Open the project with your code editor
4. Copy the `.env` file, name it `.env.local` and fill all informations (Database)
5. Run `composer install` to install PHP dependencies
6. Run `yarn install` to install JS dependencies
7. Run `symfony console doctrine:database:create` to create database
8. Run `symfony console doctrine:migration:migrate` to create structure of database
9. Run `symfony console doctrine:fixtures:load` to load the fixtures in database
10. Run `yarn encore dev` to build assets
11. Run `symfony server:start` to launch symfony server
12. Go to <b>localhost:8000</b> with your favorite browser


### Users

Admin User<br/>
login: frodo@baggins.com<br/>
password: sauron

Demo User<br/>
login: bilbo@baggins.com<br/>
password: baggins

---

## The Links

<a href="https://github.com/WildCodeSchool/orleans-202103-php-livecoding-mauvaiscoin">Link to the repository of project where the trainer worked during <b>Le Mauvais Coin - Symfony Livecoding</b></a>
