<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect(['entry-level', 'midrange', 'flaghsip', 'gaming', 'iphone-series', 'ROG-series', 
        'galaxy M-series', 'galaxy A-series', 'galaxy S-series', 'reno-series', 'BlackShark-series', 'Y-series', 
        'Redmi-series', 'Poco-series']);
        $tags->each(function ($c) {
            \App\Tag::create([
                'name' => $c,
                'slug' => \Str::slug($c),
            ]);
        });
    }
}
