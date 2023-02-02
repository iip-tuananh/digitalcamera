
@php
      $img = json_decode($product->images);
@endphp

<div class="list-item border-10">
   <div class="img-product border-tren">
      <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
         <img src="{{$img[0]}}" alt="" class="imgloading"></a>
         @if($product->discount>0)
      <div style='' class="percent-promotion">-{{$product->discount}}%</div>
      @endif
   </div>
   <div class="content border-duoi">
      <div class="name"><a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}">
         {{languageName($product->name)}}
      </a>
   </div>
      <div class="des">
       {!!languageName($product->description)!!}
      </div>
      @if($product->discount>0)
      <div class="product-price">
       @php
           $discountprice = $product->price-($product->price*$product->discount/100)
       @endphp
          
               <span style=''>
                     {{number_format($discountprice, 0,'','.')}}&nbsp;đ
               </span>
      </div>
                     <del class="product-price-old" style=''>
               {{number_format($product->price, 0,'','.')}}&nbsp;đ
               </del>
         @else
         <div class="product-price">
            @php
                $discountprice = $product->price-($product->price*$product->discount/100)
            @endphp
               
                    <span style=''>
                          {{number_format($product->price, 0,'','.')}}&nbsp;đ
                    </span>
           </div>
           @endif
                          
   </div>
</div>

