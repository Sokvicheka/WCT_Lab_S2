<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    public function run()
    {
        $companies = [];
        foreach (range(1, 10) as $index) {
            $company = [
                'name' => "Company $index",
                'address' => "Address $index",
                'website' => "Website $index",
                'email' => "email$index@company.com",
                'created_at' => now(),
                'updated_at' => now(),
            ];
            $companies[] = $company;
        }
        DB::table('companies')->delete();
        DB::table('companies')->insert($companies);
    }
}