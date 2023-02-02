@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
{{$pageContent->description}}
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
               <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="{{route('home')}}" itemprop="url"><span itemprop="title">Trang chủ</span></a></span> » <span itemscope itemtype="https://data-vocabulary.org/Breadcrumb"><a href="javascript:" itemprop="url"><span itemprop="title">Giới thiệu</span></a></span>
            </div>
         </div>
      </div>
   </div>
   <div class="wrapper bg-white wrapper-main-content">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
            <h1>Giới thiệu</h1>
            <h3>{{$setting->company}}</h3>
            <ul>
               @if($setting->address1 != '')
               <li>
                  Địa chỉ 1 : {{$setting->address1}}
               </li>
               @endif
               @if($setting->address2 != '')
               <li>
                  Địa chỉ 2 : {{$setting->address2}}
               </li>
               @endif
               @if($setting->phone1 != '')
               <li>
                  Phone 1 : {{$setting->phone1}}
               </li>
               @endif
               @if($setting->phone2 != '')
               <li>
                 Phone 2 : {{$setting->phone2}}
               </li>
               @endif
               @if($setting->email != '')
               <li>
                  {{$setting->email}}
               </li>
               @endif
            </ul>
            <div style="font-size: 16px">
               {!!$pageContent->content!!}
            </div>
            <br>
            </div></div>
         <div class="row">
         {!!$setting->iframe_map!!}
         </div>
      </div>
   </div>
</div>
@endsection