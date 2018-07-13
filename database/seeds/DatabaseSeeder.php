<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);



        factory(App\People::class,20)->create();
        //还不知道怎么向关联插入数据.!!
        factory(App\Article::class,20)->create();
        factory(App\Comment::class,20)->create();

    }
}
