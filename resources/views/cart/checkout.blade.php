@extends('layouts.main.master')
@section('title')
Thanh toán đơn hàng
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<div id="main">
   <div class="global-overlay"></div>
   <script src="/lib/jquery.min.js"></script>
   <div class="wrapper wrapper-breadcrumb">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="{{route('home')}}" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » Thanh toán
            </div>
         </div>
      </div>
   </div>
   <div class="wrapper wrapper-main-content">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-md-8">
               <h3>THANH TOÁN ĐƠN HÀNG</h3>
               <div class="box-white">
                  <form action="{{route('postBill')}}" method="POST">
                     @csrf
                  <table cellpadding="0" id="tbkhachhang" cellspacing="0" width="100%">
                     <tr>
                        <td colspan="2"></td>
                     </tr>
                     <tr>
                        <td colspan="2" style="padding-top:20px;font-weight:bold">
                           Thông tin khách hàng
                        </td>
                     </tr>
                     <tr>
                        <td style="width:30%;padding-top:10px">Họ và tên *:</td>
                        <td style="width:70%;padding-top:10px"><input name="billingName" required type="text" id="contentPage_txthoten" class="txtbook" />
                        </td>
                     </tr>
                     <tr>
                        <td style="width:30%;padding-top:10px">Email *:</td>
                        <td style="width:70%;padding-top:10px"><input name="billingEmail" required type="email" id="contentPage_txtemail" class="txtbook" />
                        </td>
                     </tr>
                     <tr>
                        <td style="width:30%;padding-top:10px">Điện thoại *:</td>
                        <td style="width:70%;padding-top:10px"><input name="billingPhone" required type="text" id="contentPage_txtdienthoai" class="txtbook" />
                        </td>
                     </tr>
                     <tr>
                        <td style="width:30%;padding-top:10px">Địa chỉ:</td>
                        <td style="width:70%;padding-top:10px"><input name="billingAddress" required type="text" id="contentPage_txtdiachi" class="txtbook" />
                        </td>
                     </tr>
                     <tr>
                        <td style="width:30%;padding-top:10px;vertical-align:top">Yêu cầu khác:</td>
                        <td style="width:70%;padding-top:10px"><textarea required name="note" rows="2" cols="20" id="contentPage_txtloinhan" class="txtbook" style="height:100px;">
                           </textarea>
                        </td>
                     </tr>
                     <tr>
                        <td style="width:30%;padding-top:10px"></td>
                        <td style="width:100%;padding-top:10px"><input type="submit"  value="CHẤP NHẬN" id="contentPage_btgui" class="btnBook" /></td>
                     </tr>
                     <tr>
                        <td colspan="2" style="text-align:center;padding-top:15px"><span id="contentPage_lbmessage" style="color:Red;"></span></td>
                     </tr>
                  </table>
           
               </div>
            </div>
            <div class="col-xs-12 col-md-4">
               <div class="box-gray">
                  <h5><B>Thông tin đơn hàng</B> (<span id="contentPage_lbcount">{{count($cart)}} sản phẩm</span>)</h5>
                  <hr />
                  @php
                      $tongcong = 0;
                      
                  @endphp
                  @foreach ($cart as $item)
                  @php
                  $giagiam = $item['price']-($item['price']*($item['discount']/100));
                  $tongcong += $giagiam*$item['quantity'];
                  @endphp
                  <div style="padding-top:10px">
                     <div style="width:40%;float:left">{{languageName($item['name'])}}</div>
                     <div style="width:20%;float:left;text-align:center">{{$item['quantity']}} &nbsp;&nbsp;x</div>
                  
                     <div style="width:40%;float:left;text-align:center; color:red">
                        {{number_format($giagiam,0,'','.')}} VNĐ
                     </div>
                  </div>
                  @endforeach
                  <div class="clear"></div>
                  <div class="clear top10px"></div>
                  <hr />
                  <div class="top10px" style="color: red">
                     <div style="width:50%;float:left">Tạm tính:</div>
                     <div style="width:50%;float:right;text-align:right"><span id="contentPage_lbtamtinh">{{number_format($tongcong,0,'','.')}} VNĐ</span></div>
                  </div>
                  <div class="clear top10px"></div>
                  <hr />
                  <div class="top10px" style="color: red">
                     <div style="width:50%;float:left;font-weight:bold">Tổng tiền:</div>
                     <div style="width:50%;float:right;text-align:right"><span id="contentPage_lbtongtien" class="priceCart">{{number_format($tongcong,0,'','.')}} VNĐ</span></div>
                     <input type="text" name="total_money" value="{{$tongcong}}" hidden>
                  </div>
               </div>
            </div>
         </form>
         </div>
      </div>
   </div>
@endsection