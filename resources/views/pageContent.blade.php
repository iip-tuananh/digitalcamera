@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
@endsection
@section('image')

@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="main" style="height: 500px">

	<div class="wrapper wrapper-breadcrumb">
	   <div class="container">
		  <div class="row">
			 <div class="col-md-12">
				<span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="{{route('home')}}" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="javascript:" itemprop="url"><span itemprop="title">Chính sách hỗ trợ</span></a></span>/ <span>{{$pagecontentdetail->title}}</span>
			 </div>
		  </div>
	   </div>
	</div>
	<div class="wrapper bg-white wrapper-main-content">
	   <div class="container">
		  <div class="row">
			<div class="col-md-12">
			 <h1></h1>
			 <h3>{{$pagecontentdetail->title}}</h3>
			
			 <div style="font-size: 16px">
				{!!$pagecontentdetail->content!!}
			 </div>
			 <br>
			</div>
		</div>
		
	   </div>
	</div>
</div>
@endsection