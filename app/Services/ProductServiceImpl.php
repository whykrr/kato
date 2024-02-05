<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Services\Interface\ProductService;

class ProductServiceImpl implements ProductService
{

  /**
   * don't change $this->mainRepository variable name
   * because used in extends service class
   */
  protected $mainRepository;

  // public function __construct(ProductRepository $mainRepository)
  // {
  //   $this->mainRepository = $mainRepository;
  // }


  public function makeProduct(Product $product)
  {
    DB::transaction(function () use ($product) {
      $product->save();

      Product::where("des");
    });
  }
  // Define your custom methods :)
}
