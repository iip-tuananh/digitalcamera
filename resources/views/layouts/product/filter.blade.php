@if (count($products) > 0)
   @foreach ($products as $product)
      @include('layouts.product.item', ['product'=>$product])
   @endforeach
@else
   <div style="padding: 0 15px;">Không có sản phẩm nào phù hợp khoảng giá.</div>
@endif