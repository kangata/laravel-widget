<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Widget;
use App\Widgets\Banner\BannerDataFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerWidget = Widget::factory()->banner()->create([
            'data' => BannerDataFactory::make([
                'title' => 'Happy Shopping',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus fermentum pellentesque. Ut tincidunt elit at tellus porttitor fermentum. Donec malesuada odio velit, nec aliquam ligula elementum non. Vestibulum ac nulla vel sem ultrices congue porttitor vitae nibh. Cras eu lectus ac ex suscipit lacinia quis et nibh. Donec euismod finibus mi sit amet tempus. Morbi a feugiat ligula, eget finibus nulla. Maecenas gravida lorem eu felis sodales, non vulputate mauris placerat. Quisque at venenatis nisi. Ut sit amet gravida neque.',
                'image' => url('/images/widgets/undraw_shopping_app_flsj.svg'),
                'link' => url('/'),
            ]),
        ]);

        $jumbotronWidget = Widget::factory()->jumbotron()->create();

        $licenseWidget = Widget::factory()->license()->create();

        $pageContentwidget = Widget::factory()->pageContent()->create();

        $pages = Page::factory()->count(5)->create();

        foreach ($pages as $page) {
            $page->widgets()->attach($bannerWidget->id, [
                'sort_number' => 1,
            ]);

            $page->widgets()->attach($licenseWidget->id, [
                'sort_number' => 3,
            ]);

            $page->widgets()->attach($pageContentwidget->id, [
                'sort_number' => 2,
            ]);
        }
    }
}
