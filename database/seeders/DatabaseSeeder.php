<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(VoucherSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
    }
}
