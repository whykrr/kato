<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\WebsiteFaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VariationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WebsiteArticleController;
use App\Http\Controllers\Admin\WebsiteBannerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------- ------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('website.dashboard');
});
Route::get('/explore', function () {
    return view('website.explore');
});
Route::get('/products', function () {
    return view('website.product');
});
Route::get('/cart', function () {
    return view('website.cart');
});
Route::group(['prefix' => 'history'], function () {
    Route::get('/', function () {
        return view('website.history');
    });
    Route::get('/{id}', function ($id) {
        return view('website.history-detail');
    });
});

Route::prefix('profile')
    // ->middleware('auth:user')
    ->group(function () {
        Route::get('/', function () {
            return view('website.profile');
        });
        Route::get('/update', function () {
            return view('website.profileForm');
        });
        Route::get('/change-password', function () {
            return view('website.changePassword');
        });
        Route::get('/address', function () {
            return view('website.addressForm');
        });
        Route::get('/address/{id}', function ($id) {
            return view('website.addressForm', ['id' => $id]);
        });
    });

Route::get('/login', function () {
    return view('website.login');
})->name('login')->middleware('guest:user');

Route::get('/register', function () {
    return view('website.register');
})->name('register')->middleware('guest:user');

Route::get('/verification', function () {
    return view('website.verification');
});
Route::get('/forget-password', function () {
    return view('website.forgetPassword');
});
Route::get('/locale/{lang}', function ($lang) {
    App::setLocale($lang);
    session()->put('locale', $lang);

    return redirect()->back();
});
Route::get('/currency/{code}', function ($code) {
    session()->put('currency', $code);

    return redirect()->back();
});


// Route Admin

Route::middleware('auth:admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
        Route::prefix('customer')
            ->controller(CustomerController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.customer');
                Route::get('/{id}', 'detail')->name('admin.customer.detail');
                Route::post('/update', 'doUpdate')->name('admin.customer.update');
            });
        Route::prefix('user')
            ->controller(UserController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.user');
                Route::get('/add', 'form')->name('admin.user.add');
                Route::get('/{id}', 'form')->name('admin.user.edit');
                Route::post('/save', 'doSave')->name('admin.user.save');
                Route::get('/delete/{id}', 'doDelete')->name('admin.user.delete');
            });
        Route::prefix('category')
            ->controller(CategoryController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.category');
                Route::get('/add', 'form')->name('admin.category.add');
                Route::get('/{id}', 'form')->name('admin.category.edit');
                Route::post('/save', 'doSave')->name('admin.category.save');
                Route::get('/delete/{id}', 'doDelete')->name('admin.category.delete');
            });
        Route::prefix('variation')
            ->controller(VariationController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.variation');
                Route::get('/add', 'form')->name('admin.variation.add');
                Route::get('/add-option/{variation_id}', 'formOption')->name('admin.variation.addOption');
                Route::get('/{id}', 'form')->name('admin.variation.edit')->where('id', '[0-9]+');
                Route::get('/{variation_id}/{id}', 'formOption')->name('admin.variation.editOption')->where('variation_id', '[0-9]+')->where('id', '[0-9]+');
                Route::post('/save', 'doSave')->name('admin.variation.save');
                Route::post('/save-option', 'doSaveOption')->name('admin.variation.saveOption');
                Route::get('/delete/{id}', 'doDelete')->name('admin.variation.delete');
                Route::get('/delete-option/{variation_id}/{id}', 'doDeleteOption')->name('admin.variation.deleteOption');
            });
        Route::prefix('product')
            ->controller(ProductController::class)
            ->group(function () {
                Route::get('/', 'index');
                Route::get('/add', 'add');
                Route::get('/{id}', 'edit');
                Route::post('/add', 'doInsert');
                Route::post('/update', 'doUpdate');
                Route::get('/delete/{id}', 'doDelete');
            });
        Route::prefix('stock')
            ->controller(StockController::class)
            ->group(function () {
                Route::get('/', 'index');
                Route::get('/{id}', 'edit');
                Route::post('/update', 'doUpdate');
            });
        Route::prefix('order')
            ->controller(OrderController::class)
            ->group(function () {
                Route::get('/', 'index');
                Route::get('/{id}', 'detail');
                Route::get('/payment-confirm/{id}', 'doConfirm');
                Route::get('/payment-decline/{id}', 'doDecline');
                Route::get('/cancel/{id}', 'doCancel');
                Route::get('/ship/{id}', 'doShip');
            });

        Route::prefix('payment')
            ->controller(PaymentController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.payment');
                Route::get('/add', 'form')->name('admin.payment.add');
                Route::get('/{id}', 'form')->name('admin.payment.edit');
                Route::post('/save', 'doSave')->name('admin.payment.save');
                Route::get('/delete/{id}', 'doDelete')->name('admin.payment.delete');
            });
        Route::prefix('shipping')
            ->controller(ShippingController::class)
            ->group(function () {
                Route::get('/', 'index');
                Route::get('/add', 'add');
                Route::get('/{id}', 'edit');
                Route::post('/add', 'doInsert');
                Route::post('/update', 'doUpdate');
                Route::get('/delete/{id}', 'doDelete');
            });
        Route::prefix('website-banner')
            ->controller(WebsiteBannerController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.banner');
                Route::get('/add', 'form')->name('admin.banner.add');
                Route::get('/{id}', 'form')->name('admin.banner.edit');
                Route::post('/save', 'doSave')->name('admin.banner.save');
                Route::get('/delete/{id}', 'doDelete')->name('admin.banner.delete');
            });
        Route::prefix('website-article')
            ->controller(WebsiteArticleController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.article');
                Route::get('/add', 'form')->name('admin.article.add');
                Route::get('/{id}', 'form')->name('admin.article.edit');
                Route::post('/save', 'doSave')->name('admin.article.save');
                Route::get('/delete/{id}', 'doDelete')->name('admin.article.delete');
            });
        Route::prefix('website-faq')
            ->controller(WebsiteFaqController::class)
            ->group(function () {
                Route::get('/', 'index')->name('admin.faq');
                Route::get('/add', 'form')->name('admin.faq.add');
                Route::get('/{id}', 'form')->name('admin.faq.edit');
                Route::post('/save', 'doSave')->name('admin.faq.save');
                Route::get('/delete/{id}', 'doDelete')->name('admin.faq.delete');
            });

        Route::get('/logout', [UserController::class, 'doLogout'])->name('admin.logout');
    });

Route::middleware('guest:admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/login', function () {
            return view('admin.login');
        })->name('admin.login');
        Route::post('/login', [UserController::class, 'doLogin']);
    });
