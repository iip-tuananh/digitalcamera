@extends('layouts.main.master')
@section('title')
Đặt bàn tại Lynh
@endsection
@section('description')
Đặt bàn tại Lynh
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('content')
<div id="main">
    <div class="global-overlay"></div>
    <script src="/lib/jquery.min.js"></script>
    <div class="wrapper wrapper-breadcrumb">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » Thanh toán
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
                         <td style="width:70%;padding-top:10px"><input name="ctl00$contentPage$txthoten" type="text" id="contentPage_txthoten" class="txtbook" />
                         </td>
                      </tr>
                      <tr>
                         <td style="width:30%;padding-top:10px">Email *:</td>
                         <td style="width:70%;padding-top:10px"><input name="ctl00$contentPage$txtemail" type="text" id="contentPage_txtemail" class="txtbook" />
                         </td>
                      </tr>
                      <tr>
                         <td style="width:30%;padding-top:10px">Điện thoại *:</td>
                         <td style="width:70%;padding-top:10px"><input name="ctl00$contentPage$txtdienthoai" type="text" id="contentPage_txtdienthoai" class="txtbook" />
                         </td>
                      </tr>
                      <tr>
                         <td style="width:30%;padding-top:10px">Địa chỉ:</td>
                         <td style="width:70%;padding-top:10px"><input name="ctl00$contentPage$txtdiachi" type="text" id="contentPage_txtdiachi" class="txtbook" />
                         </td>
                      </tr>
                      <tr>
                         <td style="width:30%;padding-top:10px;vertical-align:top">Yêu cầu khác:</td>
                         <td style="width:70%;padding-top:10px"><textarea name="ctl00$contentPage$txtloinhan" rows="2" cols="20" id="contentPage_txtloinhan" class="txtbook" style="height:100px;">
                            </textarea>
                         </td>
                      </tr>
                      <tr>
                         <td style="width:30%;padding-top:10px"></td>
                         <td style="width:100%;padding-top:10px"><input type="submit" name="ctl00$contentPage$btgui" value="CHẤP NHẬN" id="contentPage_btgui" class="btnBook" /></td>
                      </tr>
                      <tr>
                         <td colspan="2" style="text-align:center;padding-top:15px"><span id="contentPage_lbmessage" style="color:Red;"></span></td>
                      </tr>
                   </table>
                </div>
             </div>
             <div class="col-xs-12 col-md-4">
                <div class="box-gray">
                   <h5><B>Thông tin đơn hàng</B> (<span id="contentPage_lbcount">1 sản phẩm</span>)</h5>
                   <hr />
                   <div style="padding-top:10px">
                      <div style="width:50%;float:left">Camera IP wifi không dây EZVIZ C6N 4MP 2K</div>
                      <div style="width:20%;float:left;text-align:center">1</div>
                      <div style="width:30%;float:left;text-align:center">
                         <script>document.write(TLib.addCommas('950000'));</script>đ
                      </div>
                   </div>
                   <div class="clear"></div>
                   <div class="clear top10px"></div>
                   <hr />
                   <div class="top10px">
                      <div style="width:50%;float:left">Tạm tính:</div>
                      <div style="width:50%;float:right;text-align:right"><span id="contentPage_lbtamtinh">950.000VNĐ</span></div>
                   </div>
                   <div class="clear top10px"></div>
                   <hr />
                   <div class="top10px">
                      <div style="width:50%;float:left;font-weight:bold">Tổng tiền:</div>
                      <div style="width:50%;float:right;text-align:right"><span id="contentPage_lbtongtien" class="priceCart">950.000VNĐ</span></div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
@endsection