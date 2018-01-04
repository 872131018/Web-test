<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Load test users into users table
     */
    public function run()
    {
        $this->createUser(
            'James Dean',
            'james_dean@doesntexist.no',
            'secret',
            'pizza',
            'silver'
        );

        $this->createUser(
            'Steve Jobs',
            'steve_jobs@doesntexist.no',
            'secret',
            'sushi',
            'flursch'
        );

        $this->createUser(
            'James Adams',
            'james_adams@doesntexist.no',
            'secret',
            'salad',
            'blue'
        );

        $this->createUser(
            'Betty Crocker',
            'betty_crocker@doesntexist.no',
            'secret',
            'muffins',
            'orange'
        );

        $this->createUser(
            'Carl Grimes',
            'carl_grimes@doesntexist.no',
            'secret',
            'cookies',
            'green'
        );

        $this->createUser(
            'John Smith',
            'john_smith@doesntexist.no',
            'secret',
            'steak',
            'pink'
        );

        $this->createUser(
            'Rebecca Johnson',
            'rebecca_johnson@doesntexist.no',
            'secret',
            'apples',
            'lavender'
        );

        $this->createUser(
            'Matthew Jones',
            'matthew_jones@doesntexist.no',
            'secret',
            'chicken',
            'black'
        );

        $this->createUser(
            'Alex Trebek',
            'alex_trebek@doesntexist.no',
            'secret',
            'pork chops',
            'grey'
        );

        $this->createUser(
            'Taylor Swift',
            'taylor_swift@doesntexist.no',
            'secret',
            'pizza',
            'purple'
        );
    }

    protected function createUser($name, $email, $password, $favoriteFood, $favoriteColor)
    {
        App\User::create([
            'name'              => $name,
            'email'             => $email,
            'password'          => bcrypt($password),
            'favorite_food'     => $favoriteFood,
            'favorite_color'    => $favoriteColor
        ]);
    }
}