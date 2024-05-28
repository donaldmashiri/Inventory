<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('inventories')->insert([
            [
                'item_name' => 'Laptop',
                'item_description' => 'Dell XPS 15 Laptop',
                'item_category' => 'Electronics',
                'item_code' => 'DELL-XPS-15',
                'item_quantity' => 10,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Desk',
                'item_description' => 'Wooden Desk',
                'item_category' => 'Furniture',
                'item_code' => 'WOOD-DESK',
                'item_quantity' => 20,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Printer',
                'item_description' => 'HP Laser Printer',
                'item_category' => 'Electronics',
                'item_code' => 'HP-LASER-PRINT',
                'item_quantity' => 5,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Chair',
                'item_description' => 'Ergonomic Office Chair',
                'item_category' => 'Furniture',
                'item_code' => 'ERGO-CHAIR',
                'item_quantity' => 15,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Whiteboard',
                'item_description' => 'Large Magnetic Whiteboard',
                'item_category' => 'Office Supplies',
                'item_code' => 'LARGE-WHITEBOARD',
                'item_quantity' => 8,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Stapler',
                'item_description' => 'Heavy-Duty Stapler',
                'item_category' => 'Office Supplies',
                'item_code' => 'HEAVY-STAPLER',
                'item_quantity' => 25,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'Projector',
                'item_description' => 'HD Projector for Presentations',
                'item_category' => 'Electronics',
                'item_code' => 'HD-PROJECTOR',
                'item_quantity' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
