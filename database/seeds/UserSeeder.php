<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'umut';
        $user->surname = 'derebek';
        $user->email = 'ud@d.com';
        $user->password = Hash::make('lol123');
        $user->company = 'rdglobal';
        $user->phone = '530 391 07 09';
        $user->address = 'addressasdasds';
        $user->country = 'türkiye';
        $user->state = 'stateprovince';
        $user->zipcode = 'zipcode';
        $user->addcomment = 'addcomment';
        $user->verified ='1';
        $user->save();
    }
}
