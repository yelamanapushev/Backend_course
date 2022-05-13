<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(4)->create();
         \App\Models\Service::create([
             'title' => 'Web backend',
             'tags' => 'web',
             'author' => 'Mr. Kouros',
             'sphere' => 'It',
             'description' => 'So far, what you have is an example of a static website—its content doesn’t really change much. For static sites, all the necessary information that determines what’s on the web page is in the frontend code itself. Static websites are good for showcasing things like businesses, restaurants, web development portfolios, or professional profiles. But if you want to turn your site into something that users can interact with, you’ll need to get more in-depth with regard to what’s going on behind the scenes of the website.',
         ]);

        \App\Models\Service::create([
            'title' => 'OOP',
            'tags' => 'basic',
            'author' => 'Mrs. Sholpan',
            'sphere' => 'It',
            'description' => 'The four principles of object-oriented programming are encapsulation, abstraction, inheritance, and polymorphism.

These words may sound scary for a junior developer. And the complex, excessively long explanations in Wikipedia sometimes double the confusion.

That’s why I want to give a simple, short, and clear explanation for each of these concepts. It may sound like something you explain to a child, but I would actually love to hear these answers when I conduct an interview.',
        ]);
    }
}
