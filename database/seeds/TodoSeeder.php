<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert(
            [
                [
                    'title' => 'Deneme iş 1',
                    'completed' => '0',  
                ],
                [
                    'title' => 'Deneme iş 2',
                    'completed' => '0',  
                ],
                [
                    'title' => 'Deneme iş 3',
                    'completed' => '1',  
                ],
                [
                    'title' => 'Deneme iş 4',
                    'completed' => '0',  
                ],
                [
                    'title' => 'Deneme iş 5',
                    'completed' => '0',  
                ],
                [
                    'title' => 'Deneme iş 6',
                    'completed' => '0',  
                ],
         ]);
    }
}
