@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main">
	<div class="global-overlay"></div>
	<script src="/lib/jquery.min.js"></script>
	<div class="wrapper wrapper-breadcrumb">
	   <div class="container">
		  <div class="row">
			 <div class="col-md-12">
				<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{route('home')}}" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{route('allListBlog')}}" itemprop="url"><span itemprop="title">Tin tức</span></a></span> »{{languageName($blog_detail->title)	}}
			
			 </div>
		  </div>
	   </div>
	</div>
	<div class="wrapper bg-white wrapper-main-content">
	   <div class="container">
		  <div class="row">
			 <div id="contentPage_tin2cot">
				<div class="content-news-detail content-des">
				   <div class="col-xs-12 col-md-12">
					  <table cellspacing="0" id="contentPage_fvtin2cot" style="width:100%;border-collapse:collapse;">
						 <tr>
							<td colspan="2">
							   <h1>{{languageName($blog_detail->title)	}}</h1>
						
							 
							   <div class="clearfix"></div>
							</td>
						 </tr>
					  </table>
				   </div>
				   <div class="clear top30px"></div>
				   <div class="clear col-xs-12 col-md-8">
					  <div class="clear top20px">
						 <table cellspacing="0" id="contentPage_fvContent" style="width:100%;border-collapse:collapse;">
							<tr>
							   <td colspan="2">
								<div class="max-width-content">
									{!!languageName($blog_detail->content)!!}
								</div>
							   </td>
							</tr>
						 </table>
					  </div>
					  
				   </div>
				   <div class="col-xs-12 col-md-4">
					  <div class="whyus">
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
					  <div class="hidden-xs hidden-sm">
						 <div class="sidebar-right">
							<div class="block-sidebar">
							   <div class="title-block-sidebar">
								  Bài viết mới
							   </div>
							   @foreach ($news as $item)
							  
								<div class="col-xs-12 col-md-5 no-padding-left">
									<a href="{{route('detailBlog',['slug'=>$item->slug])}}">
										<img alt="{{languageName($item->title)}}" src="{{$item->image}}" style="border:none;width:100%;height:auto" />
									</a>
								</div>
								<div class="col-xs-12 col-md-7 no-padding-right">
									<div><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></div>
									<div class="product-price">
									
										<span style=''>
											<a style="color: red;"href="{{route('detailBlog',['slug'=>$item->slug])}}">Xem Thêm</a>
										</span>
									</div>
									
								</div>
								<div class="clear top20px linesp"></div>
							   @endforeach
							</div>
						 </div>
					  </div>
				   </div>
				</div>
				
			 </div>
		  </div>
	   </div>
	</div>
@endsection