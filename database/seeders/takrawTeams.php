<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB; // Ensure this is imported

class TakrawTeams extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('takraw_teams')->insert([
            [
                'id' => (string) Str::uuid(), // Generate a UUID for the primary key
                'team_name' => 'Team A',
                'team_abv' => 'TA',
            ],
            [
                'id' => (string) Str::uuid(), // Generate a UUID for the primary key
                'team_name' => 'Team B',
                'team_abv' => 'TB',
            ],
            [
                'id' => (string) Str::uuid(), // Generate a UUID for the primary key
                'team_name' => 'Team C',
                'team_abv' => 'TC',
            ],
            [
                'id' => (string) Str::uuid(), // Generate a UUID for the primary key
                'team_name' => 'Team D',
                'team_abv' => 'TD',
            ],
            [
                'id' => (string) Str::uuid(), // Generate a UUID for the primary key
                'team_name' => 'Team E',
                'team_abv' => 'TE',
            ],
        ]);

        echo "Data inserted successfully";
    }
}
