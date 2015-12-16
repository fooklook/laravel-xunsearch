<?php
namespace Fook\xunsearch;

use Illuminate\Support\ServiceProvider;

class XsServiceProvider extends ServiceProvider
{
	public function boot(){
		
	}
	
    /**
     * register service provider
     */
    public function register()
    {
        $this->app->singleton('XS', function() { return new XS(); });
    }
}