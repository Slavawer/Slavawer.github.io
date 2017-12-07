<?php

use Illuminate\Database\Seeder;
use App\Maintag;

class MaintagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintag::create([
        			'maintag'=>'PHP'
        	]);
        Maintag::create([
        			'maintag'=>'CSS'
        	]);
        Maintag::create([
        			'maintag'=>'HTML'
        	]);
        Maintag::create([
        			'maintag'=>'Python'
        	]);
        Maintag::create([
        			'maintag'=>'SQL'
        	]);
    }
}
