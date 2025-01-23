<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Color;
use App\Models\Partwear;
use App\Models\Size;
use App\Models\Gsm;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // Hash the password
        ]);

        Size::factory()->create([
            'name' => 'xl',           
        ], [
            'name' => 'xxl',
        ]);
       
    
    }
}
