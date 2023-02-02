@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<div id="main">
   <div class="global-overlay"></div>
   <div class="wrapper wrapper-breadcrumb">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="/tin-tuc" itemprop="url"><span itemprop="title">Tin tức</span></a></span>
            </div>
         </div>
      </div>
   </div>
   <div class="wrapper bg-white wrapper-main-content">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-md-8">
               <h1>TIN TỨC</h1>
               <div class="list-news">
                  <div class="clear top15px"></div>
                  @foreach ($blogs as $blog)
                     <div class="box-list-news">
                        <div class="col-xs-12 col-sm-4 col-md-4 no-padding">
                           <span style='display:none'>
                              <a href="{{route('detailBlog',['slug'=>$blog->slug])}}"><img alt="{{languageName($blog->title)}}" src="{{$blog->image}}" data-original="{{$blog->image}}" class="imgloading" /></a></span>
                           <span style=''><a href="{{route('detailBlog',['slug'=>$blog->slug])}}"><img alt="{{languageName($blog->title)}}" src="{{$blog->image}}" data-original="{{$blog->image}}" class="imgloading" /></a></span>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8">
                           <span style='display:none'>
                              <a href="{{route('detailBlog',['slug'=>$blog->slug])}}">
                                 <h2>{{languageName($blog->title)}}</h2>
                              </a>
                           </span>
                           <span style=''>
                              <a href="{{route('detailBlog',['slug'=>$blog->slug])}}">
                                 <h2>{{languageName($blog->title)}}</h2>
                              </a>
                           </span>
                           <p class="top5px">
                      {{languageName($blog->description)}}
                           </p>
                        </div>
                     </div>
                  @endforeach
               </div>
              
            </div>
            <div class="col-xs-12 col-md-4">
               <div class="hidden-xs hidden-sm">
                  <div class="sidebar-right">
                     <div class="block-sidebar">
                        <div class="title-block-sidebar">
                           Đang khuyến mãi
                        </div>
                        @foreach ($productkm as $kmpro)
                            @php
                                $img = json_decode($kmpro->images);
                            @endphp
                        @endforeach
                        <div class="col-xs-12 col-md-5 no-padding-left">
                           <a href="{{route('detailProduct',['cate'=>$kmpro->cate_slug,'slug'=>$kmpro->slug])}}">
                              <img alt="{{languageName($kmpro->name)}}" src="{{$img[0]}}" style="border:none;width:100%;height:auto" />
                              <div style='' class="percent-promotion">-{{$kmpro->discount}}%</div>
                           </a>
                        </div>
                        <div class="col-xs-12 col-md-7 no-padding-right">
                           <div><a href="{{route('detailProduct',['cate'=>$kmpro->cate_slug,'slug'=>$kmpro->slug])}}">{{languageName($kmpro->name)}}</a></div>
                           <div class="product-price">
                              @php
                              $discountprice = $kmpro->price-($kmpro->price*$kmpro->discount/100)
                              @endphp
                              <span style=''>
                                 {{number_format($discountprice)}} đ
                              </span>
                           </div>
                           <del class="product-price-old" style=''>
                              {{number_format($kmpro->price)}} đ
                           </del>
                        </div>
                        <div class="clear top20px linesp"></div>
                        
                       
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <input type="hidden" name="ctl00$contentPage$MenuID" id="contentPage_MenuID" value="news" />
@endsection