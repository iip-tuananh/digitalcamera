@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
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
				<table cellspacing="0" id="contentPage_fvDieuhuongP1" style="width:100%;border-collapse:collapse;">
				   <tr>
					  <td colspan="2">
						 <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
							<a href="{{route('home')}}" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » 
							<span itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
							   <a href="javascript:" itemprop="url">
								  <span itemprop="title">Kết quả tìm kiếm</span></a></span>
					  </td>
				   </tr>
				</table>
			 </div>
		  </div>
	   </div>
	</div>
	<div class="wrapper wrapper-main-content">
	   <div class="container">
		  @if(count($resultPro) != '')
		  <div class="row">
			 <div class="col-xs-12 col-md-12">
			  
				<table cellspacing="0" id="contentPage_fvName" style="width:100%;border-collapse:collapse;">
				   <tr>
					  <td colspan="2">
						
						 <h1>Đã tìm thấy {{$countproduct}} sản phẩm</h1>
				  
					  </td>
				   </tr>
				</table>
			   
			 </div>
			 <div class="col-xs-12 col-md-12 no-padding top15px">
				
			  
				   @foreach ($resultPro as $pro)
				   <div class="col-xs-6 col-sm-6 col-md-3">
					  @include('layouts.product.item',['product'=>$pro])
				   </div>
				   @endforeach
			 
			 </div>
		  </div>
		  @else
		  <div class="row">
			 <div class="col-xs-12 col-md-12 form-trong-new">
				Hiện tại chưa có sản phẩm nào ...
			 </div>
		  </div>
		  @endif
	   </div>
	</div>
 </div> 
@endsection