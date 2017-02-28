<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer(
          [
            'polo.page.index','polo.page.blog','polo.page.blog_post',
            'polo.page.course','polo.page.course_show','polo.page.course_video',
            'polo.page.designs','polo.page.services','polo.page.design_details',
            'polo.page.servicio_show','polo.page.servicio_hire'
          ],
          'App\Http\ViewComposers\HeaderComposer'
        );
        
        view()->composer(
          [
            'polo.page.index','polo.page.blog','polo.page.blog_post',
            'polo.page.course','polo.page.course_show','polo.page.course_video',
            'polo.page.designs','polo.page.services','polo.page.design_details',
            'polo.page.servicio_show','polo.page.servicio_hire'
          ],
          'App\Http\ViewComposers\FooterComposer'
        );


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
