@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
@if (session()->has("success"))
   <script>
      $.notify("Đặt hàng thành công!", "success");
   </script>
@endif
<div class="clear">&nbsp; </div>
<div class="wrapper">
   <div class="container">
      <div class="row">
         <div class="group">
            <!-- =========Product=========== -->
            <!-- ====wifi không dây==== -->
            @foreach ($categoryhome as $cate)
            @if(count($cate->product)>0)
               <div class="col-lg-12 col-md-12 col-sm-12 danhmucsp no-padding">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="title">
                        <h2><a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">{{languageName($cate->name)}}</a></h2>
                     </div>
                  </div>
                  <div class="product-home">
                     @foreach ($cate->product as $product)
                           <div class="col-xs-6 col-sm-6 col-md-3">
                              @include('layouts.product.item',['product'=>$product])
                           </div>
                     @endforeach
                  </div>
               </div>
               <div class="clear"></div>
               <a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}" class="view-all">Xem tất cả sản phẩm</a>
            @endif
            @endforeach
         </div>
      </div>
   </div>
</div>
<!-- =========End Product=========== -->
<!-- =========CONTENT SEO=========== -->
<!-- =========Footer=========== -->
<div class="clear">&nbsp; </div>
<!-- =========why choose Us=========== -->
<div class="clear">&nbsp; </div>
<div class="wrapper">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="bg-why">
               <div class="silde-Active">
                  <div class="col-md-3">
                     <div class="section_policy_content">
                        <img src="{{asset('frontend/imgs/ship.png')}}" alt="Giao hàng cực nhanh" />
                        <div class="section-policy-padding">
                           <h3><strong>Giao hàng cực nhanh</strong></h3>
                           <div class="section_policy_title">Miễn phí đơn hàng trên 10.000.000đ</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="section_policy_content">
                        <img src="{{asset('frontend/imgs/cheap.png')}}" alt="Mua hàng siêu tiết kiệm" />
                        <div class="section-policy-padding">
                           <h3><strong>Mua hàng siêu tiết kiệm</strong></h3>
                           <div class="section_policy_title">Tiết kiệm 10% - 30% giá thị trường</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="section_policy_content">
                        <img src="{{asset('frontend/imgs/srv_3.png')}}" alt="Chất lượng tuyệt đối 100%" />
                        <div class="section-policy-padding">
                           <h3><strong>Chất lượng tuyệt đối 100%</strong></h3>
                           <div class="section_policy_title">Cam kết sản phẩm chính hãng 100%</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="section_policy_content">
                        <img src="{{asset('frontend/imgs/support.jpg')}}" alt="Hỗ trợ 24/7" />
                        <div class="section-policy-padding">
                           <h3><strong>Hỗ trợ 24/7</strong></h3>
                           <div class="section_policy_title">Giải đáp mọi thắc mắc khách hàng </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clear">&nbsp; </div>
<!-- =========End why choose Us=========== -->
<!-- =========Newsletter=========== -->

@endsection