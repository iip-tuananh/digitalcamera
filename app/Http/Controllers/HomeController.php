<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use App\models\product\ProductCombo;
use App\models\Promotion;
use  App\models\ReviewCus;
use App\models\website\Banner;
use App\models\website\Prize;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerAds'] = BannerAds::where('status',1)->get(['name','image','id']);
        $data['bannerCateHot'] = Banner::where(['status'=>3])->first(['id','image','link','title','description']);
        $data['homeBlog'] = Blog::where([
            'status'=>1, 'home_status'=>1
        ])->orderBy('id','DESC')->limit(12)->get(['id','title','slug','created_at','image','description']);
        $data['comboPro'] = ProductCombo::where(['status'=>1])->get(['name', 'slug', 'link', 'image']);
        $data['reviewCus'] = ReviewCus::where(['status'=>1])->get();
        $data['spnoibat'] = Product::where(['status'=>1,'discountStatus'=>1])->orderBy('id','DESC')->select('id','category','name','discount','price','images','slug','cate_slug','type_slug', 'discountStatus','origin','hang_muc')
            ->paginate(12);
        $data['homeProductCategory'] = Promotion::with([
            'products' => function ($query) {
                $query->where(['status'=>1])->orderBy('id','DESC')->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','promotion_id','origin','hang_muc'); 
            }
        ])->where('status',1)->orderBy('id','ASC')->get(['id','name','link']);
        return view('home',$data);
    }
}
