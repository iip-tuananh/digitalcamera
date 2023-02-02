@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" role="main" class="content-area">
	<div class="row row-lien-he"  id="row-1777154024">
		<div id="col-273144486" class="col small-12 large-12"  >
			<div class="col-inner"  >
				<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_297814993">
				<div class="img-inner dark" >
					{{-- <img width="1024" height="320" src="{{$pageContent->image}}" class="attachment-original size-original" alt="Liên hệ với chúng tôi" loading="lazy" srcset="{{$pageContent->image}} 1024w, {{$pageContent->image}} 600w, {{$pageContent->image}} 768w, {{$pageContent->image}} 1536w" sizes="(max-width: 1024px) 100vw, 1024px" />						 --}}
					{!!$setting->iframe_map!!}
				</div>
				<style>
					#image_297814993 {
					width: 100%;
					}
				</style>
				</div>
			</div>
		</div>
		<div id="col-283779671" class="col cot1 medium-6 small-12 large-6"  >
			<div class="col-inner"  >
				<h3><span style="font-size: 95%;">{{$setting->company}} </span></h3>
				<p> <strong><span style="font-size: 95%;">Trụ sở:</span></strong></p>
				<p><span style="font-size: 95%;">Địa chỉ: {{$setting->address1}}</span><span style="font-size: 95%;"><br />Hotline: <strong><a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a><br /></strong>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></span></p>
				
			</div>
		</div>
		<div id="col-1442772338" class="col medium-6 small-12 large-6"  >
			<div class="col-inner"  >
				<h3>LIÊN HỆ</h3>
				<p><strong><span style="font-size: 95%;">Văn phòng giao dịch:</span></strong></p>
				<p><span style="font-size: 95%;">Địa chỉ: {{$setting->address2}}<br />Điện thoại:  <a href="tel:0367968938"><strong>{{$setting->phone2}}</strong></a><br />Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></span></p>
				<p><span style="font-size: 95%;"> </span></p>
			</div>
		</div>
	</div>
	</div>
</main>
@endsection