<?php

namespace Database\Seeders;

use App\Models\Gift;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $tags = Tag::all();

        Gift::factory(30)->hasAttached($tags->random(3))->create();
    }
}
