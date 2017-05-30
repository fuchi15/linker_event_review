<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = file_get_contents(__DIR__ . '/../mock-data/mock-user.json');
        if ($json === false) {
            throw new \RuntimeException('file not found.');
        }
        $users = json_decode($json, true);
        foreach($users as $user){
            App\User::create($user);
        }
    }
}
