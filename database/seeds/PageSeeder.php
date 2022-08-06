<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Page::truncate();

        $page = new Page();
        $page->name = 'Page';
        $page->slug = $page->slugify('page');
        $page->save();

        $parent_id = $page->id;

        $page = new Page();
        $page->name = 'Central PPCES';
        $page->parent_id = $parent_id;
        $page->slug = $page->slugify('Central PPCES');
        $page->save();

        $page = new Page();
        $page->name = 'Hawkes Bluff';
        $page->parent_id = $parent_id;
        $page->slug = $page->slugify('Hawkes Bluff');
        $page->save();

        $page = new Page();
        $page->name = 'East PPCES';
        $page->parent_id = $parent_id;
        $page->slug = $page->slugify('East PPCES');
        $page->save();

        $page = new Page();
        $page->name = 'Eagle Point';
        $page->parent_id = $parent_id;
        $page->slug = $page->slugify('Eagle Point');
        $page->save();

    }
}
