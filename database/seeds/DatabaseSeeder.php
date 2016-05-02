<?php

use Illuminate\Database\Seeder;
use App\Link;
use Illuminate\Support\Str;

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
        Link::truncate();
        for($i = 0; $i < 10; $i++) {
            $link = new Link();
            $link->url = 'http://trieudh.me/department/'.$i.'/detail';
            $link->hash = 'ezurl.cf/'.Str::random(6);
            $link->save();
        }
    }
}
