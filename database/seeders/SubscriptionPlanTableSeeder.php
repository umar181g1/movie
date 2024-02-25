<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubscriptionPlan;

class SubscriptionPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptionPlans = [
            [
                'name' => 'Basic',
                'price' => 1000,
                'active_priode_in_months' => 1,
                'features' => json_encode(['feature1', 'feature2']),

            ],
            [
                'name' => 'premium',
                'price' => 150000,
                'active_priode_in_months' => 8,
                'features' => json_encode(['feature1', 'feature2', 'feature3', 'feature4'])

            ],
        ];

        SubscriptionPlan::insert($subscriptionPlans);
    }
}
