@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
   />
<link rel="stylesheet" href="{{asset('frontend/css/tanggiam.css')}}">
@endsection
@section('js')
<script src="{{asset('frontend/js/cart.min.js')}}"></script>
@endsection
@section('content')
<div class="lopgia" style="display: none">
   <div class="modal-thongbao">
      <p class="dong-modal">
         <i class="fa-solid fa-xmark close-custom"></i>
         </p>
         <p class="icon-ctt"><img src="{{asset('frontend/imgs/tichxanh.gif')}}" alt="" srcset=""></p>
       <p class="nd-modal">Đã thêm vào giỏ hàng  !<br> </p>
         
   </div>
</div>

<div id="main">
<div class="global-overlay"></div>
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<div class="wrapper wrapper-breadcrumb">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <table cellspacing="0" id="contentPage_fvdieuhuong" style="width:100%;border-collapse:collapse;">
               <tr>
                  <td colspan="2">
                     <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{route('home')}}" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> / <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="javascript:" itemprop="url"><span itemprop="title">{{languageName($product->name)}}</span></a></span>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="wrapper wrapper-main-content">
   <div class="container">
      <div class="row">
         <div class="group-product">
            <table cellspacing="0" id="contentPage_fvnameProduct" style="width:100%;border-collapse:collapse;">
               <tr>
                  <td colspan="2">
                     <div class="col-xs-12 col-md-8">
                        <h1>{{languageName($product->name)}}</h1>
                     </div>
                     <div class="col-xs-12 col-md-4 mxh-box">
                     </div>
                     <div class="clear col-xs-12 col-md-12">
                        <hr />
                     </div>
                  </td>
               </tr>
            </table>
            <div class="col-xs-12 col-md-9 no-padding">
               <div class="col-xs-12 col-md-6 ">
                  <link href="{{asset('frontend/css/product.min.css')}}" rel="stylesheet" />
                  <div class="slider-detail ">
                     <div id="slider-detail">
                        @php
                        $imgs=json_decode($product->images);
                        @endphp
                        @foreach ($imgs as $item)
                        <div class="item">
                           <div class="img"><a class="img_detail_larg "   rel="group" ><img src="{{$item}}" alt="{{languageName($product->name)}}" /></a></div>
                        </div>
                        @endforeach
                     </div>
                     <div id="slider-thumbnail">
                        @foreach ($imgs as $item)
                        <div class="slick-slide">
                           <div class="item">
                              <div class="img"><a class="img_detail " data-fancybox="gallery" rel="group" href="{{$item}}"><img src="{{$item}}" alt="{{languageName($product->name)}}" /></a></div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                     <script type="text/javascript">
                        jQuery(document).ready(function($) {
                         $('.img_detail').hover(function() {
                          var pic=$(this).attr('href');
                          $('.img_detail_larg img').attr('src',pic);
                         });
                        });
                         
                     </script>
                  </div>
               </div>
               <div class="col-xs-12 col-md-6 top10px border-10">
                  <table cellspacing="0" id="contentPage_fvProductDetail" style="width:100%;border-collapse:collapse;">
                     <tr>
                        <td colspan="2">
                           <div class="top10px">
                              @php
                              $discountprice = $product->price-($product->price*$product->discount/100)
                              @endphp
                              <span class="pricedetail" style=''>
                              {{number_format($discountprice,0,'','.')}}đ
                              </span>
                           </div>
                           <script>
                              
                           </script>
                           <div class="top5px">
                              Giá gốc: 
                              <del class="price-old" style=''>
                              {{number_format($product->price,0,'','.')}}đ
                              </del>
                           </div>
                           <div style='' class="top5px">Tiết kiệm: <span class="colorred">{{$product->discount}}%</span></div>
                           <div class="clear top5px">Bảo hành: 24 tháng</div>
                           <div class="clear top5px">
                              <hr />
                           </div>
                           <div class="clear top5px">
                              {!!languageName($product->description)!!}
                           </div>
                           <div class="clear top5px">
                              <hr />
                           </div>
                           <div class="top10px">
                              <div class="tanggiam">
                                 <div class="custom custom-btn-numbers form-control">		
                                    <button 
                                       onclick="var result = document.getElementById('qty'); 
                                       var qty = result.value;
                                       if( !isNaN(qty) & qty > 1 ) result.value--;return false;" 
                                       class="btn-minus btn-cts" 
                                       type="button">–</button>
                                    <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" disabled/>
                                    <input type="text" name="id" value="{{$product->id}}" class="hidden-ip" hidden/> 
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; 
                                       if( !isNaN(qty)) result.value++;return false;" 
                                       class="btn-plus btn-cts" 
                                       type="button">+</button>
                                 </div>
                              </div>
                              <button href="javascript:; "class=" add_tocart button-custom-new" data-url="{{route('addToCart')}}"><span class="txt-sub">&nbsp;</span><span class="txt-main">THÊM VÀO GIỎ</span><span class="txt-sub">&nbsp;</span></button>
                              <script>
                                 $('.close-custom').click(function(e){
                              $('.lopgia').attr('style', 'display:none;');
                              })
                              $('.lopgia').click(function(e){
                              $('.lopgia').attr('style', 'display:none;');
                              })
                              $('.button-custom-new').click(function(e){
                                 console.log('123');
                              $('.lopgia').attr('style', 'display:flex;');
                              })
                              
                              </script>
                           </div>
                           <script src="{{asset('frontend/js/cart.min.js')}}"></script>
                           <div class="top10px contact-chat">
                              <ul>
                                 <li class="zalo">
                                    <a href="http://zalo.me/{{$setting->phone1}}" target="_blank">
                                       <p class="title">CHAT ZALO</p>
                                       <p>Giải đáp và hỗ trợ ngay tức thì</p>
                                    </a>
                                 </li>
                                 <li class="facebook">
                                    <a href="{{$setting->facebook}}" target="_blank">
                                       <p class="title">CHAT FACEBOOK</p>
                                       <p>Giải đáp và hỗ trợ ngay tức thì</p>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="clear top10px">
                              <hr />
                           </div>
                        </td>
                     </tr>
                  </table>
               </div>
          
               <div class="clear top10px"></div>
               <div class="col-xs-12 col-md-12 border-10" style="margin-bottom: 20px; margin-left:3px">
                  {!!languageName($product->content)!!}
               </div>
            </div>
            <div class="col-xs-12 col-md-3 hidden-sm hidden-xs">
               <div class="system-dk">
                  <ul>
                     Danh mục 
                  </ul>
                  @foreach ($categoryhome as $cate)
                  <ul style="padding: 20px 10px">
                     <a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">
                        <li>{{languageName($cate->name)}}</li>
                     </a>
                  </ul>
                  @endforeach
               </div>
               <div class="whyus border-10">
                  <h3>VÌ SAO BẠN CHỌN CHÚNG TÔI ?</h3>
                  <ul>
                     <li>
                        <strong>NHÀ CUNG CẤP UY TÍNH TẠI VIỆT NAM</strong>
                        <p>Chúng tôi cung cấp sản phẩm đảm bảo chất lượng</p>
                     </li>
                     <li>
                        <strong>HÀNG CHÍNH HÃNG</strong>
                        <p>Nói không với hàng nhái, hàng kém chất lượng</p>
                     </li>
                     <li>
                        <strong>ĐỔI MỚI MIỄN PHÍ TRONG 30 NGÀY</strong>
                        <p>Nếu sản phẩm lỗi do nhà sản xuất</p>
                     </li>
                     <li>
                        <strong>GIAO HÀNG MIỄN PHÍ</strong>
                        <p>10km tính từ chi nhánh gần nhất</p>
                     </li>
                     <li>
                        <strong>BẢO HÀNH TẬN NƠI</strong>
                        <p>Nhân viên đến bảo hành tận nhà khách hàng</p>
                     </li>
                     <li>
                        <strong>HỖ TRỢ KỸ THUẬT 24/7</strong>
                        <p>Chúng tôi luôn hân hạnh phục vụ Quý khách hàng</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="clear top20px"></div>
         
         <div class="clear"></div>
         <div class="top30px">
            <div class="col-xs-12">
               <h2 class="trikethrough"><span>Sản Phẩm Liên Quan</span></h2>
            </div>
            <div class="clear top20px"></div>
            @foreach ($productlq as $item)
            @if($item->id != $product->id)
            <div class="col-xs-6 col-sm-6 col-md-3">
               <div class="list-item">
                  @php
                  $img = json_decode($item->images);
                  @endphp
                  <div class="img-product">
                     <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'slug'=>$item->slug])}}"><img src="" data-original="{{$img[0]}}" alt="{{languageName($item->name)}}" class="imgloading"></a>
                     @if($item->discount > 0)
                     <div style='' class="percent-promotion">-{{$item->discount}}%</div>
                     @endif
                  </div>
                  <div class="content">
                     <div class="name"><a href="{{route('detailProduct',['cate'=>$item->cate_slug,'slug'=>$item->slug])}}">{{languageName($item->name)}}</a></div>
                     <div class="limit-text-2 des">
                        {!!languageName($item->description)!!}
                     </div>
                     @if($item->discount >0)
                     <div class="product-price">
                        @php
                        $giagiam = $item->price-($item->price*$item->discount/100);
                        @endphp
                        <span style=''>
                        {{number_format($giagiam,0,'','.')}}đ
                        </span>
                     </div>
                     <del class="product-price-old" style=''>
                     {{number_format($item->price,0,'','.')}}đ
                     </del>
                     @else
                     <span style=''>
                        <div class="product-price">
                           {{number_format($item->price,0,'','.')}}đ
                        </div>
                     </span>
                     @endif
                  </div>
               </div>
            </div>
            @endif
            @endforeach
         </div>
      </div>
   </div>

</div>
@endsection
