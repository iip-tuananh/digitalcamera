@if(count($cart)>0)
<div class="col-xs-12 col-md-9">
   <h1>Giỏ hàng</h1>
   <div class="bottom10px"><span id="contentPage_lbcount">Có {{count($cart)}} sản phẩm trong giỏ hàng.</span></div>
   <div>
      <hr />
   </div>
   <div>
      <table id="contentPage_datalistgiohang" cellspacing="0" cellpadding="3" style="width:100%;border-collapse:collapse;">
         <tr>
            <td>
               <table cellpadding="0" cellspacing="0" width="100%">
                  <thead>
                     <tr style="border-bottom :1px solid #000">
                        <th style="text-align: center; ">Sản Phẩm</th>
                        <th style="text-align: center; ">Hình Ảnh</th>
                        <th style="text-align: center; ">Giá tiền</th>
                        <th style="text-align: center; ">Số lượng</th>
                        <th style="text-align: center; ">Thao tác</th>
                     </tr>

                  </thead>
               
                  <tbody>
                     @php
                           $total = 0;
                     @endphp
                     @foreach ($cart as $item)
                     @php
                     $giagiam = $item['price']-($item['price']*$item['discount']/100);
                     $total += $giagiam*$item['quantity'];
                  @endphp
                     <tr>
                        <td style="width:20%;text-align:center;padding-top:5px;padding-bottom:5px">
                          
                           <img id="contentPage_datalistgiohang_Image1_0" src="{{$item['image']}}" style="height:100px;width:95px;" />
                        </td>
                        <td style="width:30%;padding-bottom:5px;padding-top:5px;">
                           <span id="contentPage_datalistgiohang_lbtensp_0" style="font-weight:bold;">{{languageName($item['name']) }}</span>
                        </td>
                       
                        <td style="width:20%;text-align:center ; color:red">
                          {{number_format($giagiam,0,'','.')}} VND
                        </td>
                        <td style="width:10%;text-align:center">
                           <div class="tanggiam">
                              <div class="custom custom-btn-numbers form-control">		
                                 <button
                                 onclick="btnMinus('{{$item['id']}}','{{route('updateCart')}}')"
                                 class="reduced items-count btn-minus"
                                 type="button">–</button>
                                 <input type="text"
                                                        maxlength="12" min="0"
                                                        class="input-text number-sidebar qtyMobile27698914"
                                                        id="qty{{$item['id']}}"  name="Lines" size="4"
                                                        value="{{ $item['quantity'] }}">
                                 <button
                                 onclick="btnPlus('{{$item['id']}}','{{route('updateCart')}}')"
                                 class="increase items-count btn-plus"
                                 type="button">+</button>
                              </div>
                           </div>
                        </td>
                        <td style="width:20%;text-align:center; font-size:20px; color :red; cursor:pointer">
                           <i class="fa-solid fa-trash-can" id="remove-item-cart" 
                           onclick="removeItemCart({{$item['id']}},'{{route('removeCart')}}')"></i>
                        </td>
                     </tr>
                     
                     @endforeach
                  </tbody>
               </table>
            </td>
         </tr>
      </table>
   </div>
</div>
<div class="col-xs-12 col-md-3 no-padding-xs no-padding-sm">
   <div class="box-gray">
      <h3>Thông tin đơn hàng</h3>
      <hr />
     
      <div class="top10px">
         <div style="width:50%;float:left">Tạm tính:</div>
         <div style="width:50%;float:right;text-align:right; color:red"><span id="contentPage_lbtamtinh">{{number_format($total,0,'','.')}}.VNĐ</span></div>
      </div>
      <div class="clear top10px"></div>
      <hr />
      <div class="top10px">
         <div style="width:50%;float:left">Tổng tiền:</div>
         <div style="width:50%;float:right;text-align:right; color:red"><span id="contentPage_lbtongtien" class="priceCart">{{number_format($total,0,'','.')}}.VNĐ</span></div>
      </div>
   </div>
   <input type="submit" onclick="window.location.href='{{ route('checkout') }}'"  value="THANH TOÁN" id="contentPage_btnSubmit" class="btn-booking-submit" />
</div>
@else
<div class="form-trong">
   Hiện tại chưa có sản phẩm nào trong giỏ hàng
</div>
@endif