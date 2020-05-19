<?php

use Illuminate\Database\Seeder;

class PostleitzahlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(database_path() . '/seeds/plz.sql');
    
        DB::statement($sql);
    }
}
