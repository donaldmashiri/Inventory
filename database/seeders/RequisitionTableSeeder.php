<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequisitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('requisitions')->insert([
            [
                'user_id' => 1,
                'item_id' => 1,
                'quantity' => 2,
                'reason' => 'Need additional laptops for new hires',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'item_id' => 2,
                'quantity' => 5,
                'reason' => 'Expanding office space, need more desks',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'item_id' => 3,
                'quantity' => 1,
                'reason' => 'Replacement for broken printer',
                'status' => 'rejected',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'item_id' => 4,
                'quantity' => 3,
                'reason' => 'New hires need chairs',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'item_id' => 5,
                'quantity' => 1,
                'reason' => 'Need a new whiteboard for the conference room',
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'item_id' => 6,
                'quantity' => 10,
                'reason' => 'Stocking up on office supplies',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'item_id' => 7,
                'quantity' => 1,
                'reason' => 'Upgrade for the presentation room',
                'status' => 'rejected',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
