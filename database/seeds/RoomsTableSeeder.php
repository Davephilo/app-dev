<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'name' => '203',
                'capacity' => 180
            ],
            [
                'name' => '204',
                'capacity' => 180
            ],
            [
                'name' => '205',
                'capacity' => 200
            ],
            [
                'name' => '201',
                'capacity' => 200
            ],
            [
                'name' => '202',
                'capacity' => 150
            ],
            [
                'name' => '206',
                'capacity' => 120
            ],
            [
                'name' => '207',
                'capacity' => 120
            ]
        ]);
    }
}
