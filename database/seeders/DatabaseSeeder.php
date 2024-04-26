<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password'),
        ]);

        //data dummy for company
        Company::create([
            'name' => 'PT. Segar Buana Mandiri',
            'email' => 'cs@segarbuanamandiri.com',
            'address' => 'Jl. Cempaka Putih No. 1',
            'latitude' => '-6.200000',
            'longitude' => '106.816666',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
        ]);
        $this->call([
            PermissionSeeder::class,
        ]);
    }
}
