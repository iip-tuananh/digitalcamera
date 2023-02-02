@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main">

	<div class="wrapper wrapper-breadcrumb">
	   <div class="container">
		  <div class="row">
			 <div class="col-md-12">
				<span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="{{route('home')}}" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="javascript:" itemprop="url"><span itemprop="title">Dịch vụ</span></a></span>
			 </div>
		  </div>
	   </div>
	</div>
	<div class="wrapper bg-white wrapper-main-content">
	   <div class="container">
		  <div class="row">
			<div class="col-md-12">
			 <h1>Dịch Vụ</h1>
			 <h3>{{$detail_service->name}}</h3>
				<img src="{{$detail_service->image}}" alt="">
			 <div style="font-size: 16px">
				{!!languageName($detail_service->content)!!}
			 </div>
			 <br>
			</div>
		</div>
		  <div class="row">
			<div class="col-md-12">
		  {!!$setting->iframe_map!!}
		</div>
		  </div>
	   </div>
	</div>
 </div>
@endsection