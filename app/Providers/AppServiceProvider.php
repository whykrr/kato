<?php

namespace App\Providers;

use App\Services\FaqServiceImpl;
use App\Services\UserServiceImpl;
use App\Services\AdminServiceImpl;
use App\Services\ArticleServiceImpl;
use App\Services\BannerServiceImpl;
use App\Services\CategoryServiceImpl;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use App\Services\Interface\UserService;
use Illuminate\Support\ServiceProvider;
use App\Services\Interface\AdminService;
use App\Services\Interface\ArticleService;
use App\Services\Interface\BannerService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\FaqService;
use App\Services\Interface\PaymentMethodService;
use App\Services\Interface\VariationService;
use App\Services\PaymentMethodServiceImpl;
use App\Services\VariationServiceImpl;
use Illuminate\Database\Events\QueryExecuted;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        AdminService::class => AdminServiceImpl::class,
        UserService::class => UserServiceImpl::class,
        CategoryService::class => CategoryServiceImpl::class,
        VariationService::class => VariationServiceImpl::class,
        PaymentMethodService::class => PaymentMethodServiceImpl::class,
        BannerService::class => BannerServiceImpl::class,
        ArticleService::class => ArticleServiceImpl::class,
        FaqService::class => FaqServiceImpl::class
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (config('app.env') != 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

        // $this->app->singleton(UserService::class, function () {
        //     return new UserServiceImpl();
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();

        DB::listen(function (QueryExecuted $query) {
            $binding = implode(',', $query->bindings);
            Log::info("[SQL:{$query->time}ms] $query->sql - [$binding]");
        });
    }
}
