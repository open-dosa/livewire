<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private $tables = [
        'posts',
    ];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanDatabase();

        $this->call(PostsTableSeeder::class);
    }

    public function cleanDatabase(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $tableName){
            DB::table("$tableName")->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
    }
    
}
