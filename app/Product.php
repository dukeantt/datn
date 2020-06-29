<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Product extends Model
{
    protected $table = "product";

    public function category() {
        return $this->belongsTo('App\Category','category_id');
    }

    public function type() {
        return $this->belongsTo('App\Type','type_id');
    }

    public function getDiscountPriceWithFormatAttribute()
    {
        if ($this->discount == 0) {
            return sprintf('%s', number_format($this->price, 0));
        }
        return sprintf('%s', number_format(($this->price - ($this->price * $this->discount / 100)), 0));
    }

    public function getDiscountPriceAttribute()
    {
        return $this->price - ($this->price * $this->discount / 100);
    }

    public function getDiscountPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return sprintf('%s VNĐ', number_format($this->price, 0));
        }
        return sprintf('%s VNĐ', number_format(($this->price - ($this->price * $this->discount / 100)), 0));
    }

    public function getOriginalPriceStringAttribute()
    {
        if ($this->discount == 0) {
            return '';
        }
        return sprintf('%s VNĐ', number_format($this->price, 0));
    }

    public function isNew()
    {
        return time() - (60 * 60 * 24 * 7) < strtotime($this->created_at);
    }
    public function isDiscount()
    {
        return $this->discount > 0;
    }

    public function getBlockStyleAttribute()
    {
        if ($this->isNew() && $this->isDiscount()) {
            return 'both';
        } else if ($this->isNew()) {
            return 'new';
        } else if ($this->isDiscount()) {
            return 'sale';
        } else {
            return '';
        }
    }

    public function getImages($imgURL){
        $arrayImg = explode('&', $imgURL);
        return $arrayImg;
    }

    public static function productPriceUp()
    {
        $all_product = Product::where('status', 1)
            ->orderBy('price', 'asc')
            ->get();
        if (Input::has('categoryId') && Input::get('categoryId') != 0) {
            $chosen_category = Input::get('categoryId');
            $all_product = Product::where('status', 1)
                ->where('category_id', $chosen_category)
                ->orderBy('price', 'asc')
                ->get();

        }
        return $all_product;
    }

    public static function productPriceDown()
    {
        $all_product = Product::where('status', 1)
            ->orderBy('price', 'desc')
            ->get();
        if (Input::has('categoryId') && Input::get('categoryId') != 0) {
            $chosen_category = Input::get('categoryId');
            $all_product = Product::where('status', 1)
                ->where('category_id', $chosen_category)
                ->orderBy('price', 'desc')
                ->get();
        }
        return $all_product;
    }
}
