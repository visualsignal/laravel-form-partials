<?php

namespace VisualSignal\FormPartials;

use Illuminate\Support\ServiceProvider;

class FormPartialsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/partials/fields', 'FormPartial');
    }
}