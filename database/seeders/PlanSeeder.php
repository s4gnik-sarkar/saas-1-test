<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Plan::query()->delete();

        Plan::create([
            "name"=> "Basic",
            "slug"=> "basic",
            "description"=> "Perfect for getting started",
            "price"=> 0,
            "pdf_limit"=> 10,
            "features"=> json_encode([
                '10 PDFS per month',
                'Standard summaries',
                'Email support',
                'Basic Export options'
            ]),
            "is_active"=> true
        ]);

        Plan::create([
            "name"=> "Standard",
            "slug"=> "standard",
            "description"=> "Best for regular users",
            "price"=> 9.99,
            "pdf_limit"=> 50,
            "features"=> json_encode([
                '50 PDFS per month',
                'Advanced summaries',
                'Priority support',
                'Advanced Export options',
                'Advanced Analytics'
            ]),
            "is_active"=> true
        ]);


        Plan::create([
            "name"=> "Premium",
            "slug"=> "premium",
            "description"=> "For Power Users",
            "price"=> 29.99,
            "pdf_limit"=> -1,
            "features"=> json_encode([
                'Unlimited PDFS',
                'Advanced summaries',
                'Api Access',
                'Advanced Export options',
                'Custom Integration'
            ]),
            "is_active"=> true
        ]);
    }
}
