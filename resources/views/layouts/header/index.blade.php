
<header class="hidden-lg">
   <div class="header-ctn">
      <div class="header-left">
         <a href="" class="btn-toggle"><span></span></a>
      </div>
      <div class="header-middle">
         <a href="{{route('home')}}"><img src="{{$setting->logo}}"  /></a>
      </div>
      <div class="header-right">
         <div class="index-cart">
            <a href="{{route('listCart')}}">
               <img class="icon-cart" src="{{url('frontend/imgs/icon_cart.png')}}" />
               <span class="cnt crl-bg count_item_pr"><span id="TopHomepage_lbnumber">{{count($cartcontent)}}</span></span>
            </a>
         </div>
         <div class="search">
            <a class="icon-search" href="#"><img alt="search" src="{{asset('frontend/imgs/icon_search.png')}}"></a>
        </div>
         <form action="{{route('search_result')}}" method="POST">
                  @csrf
               <div class="arrow_box box-search">
                  <div class="txt-search">
                     <input required id="key" name="keyword" type="text" class="txt" placeholder="Tìm sản phẩm..." />
                  </div>
                  <div class="button-search">
                     <input id ="submitButton" type="submit" value="" class="btn-search" style="background: #ffffff url({{url('frontend/imgs/icon_search_new.png')}});    background-repeat: no-repeat;" ></div>
               </div>
         </form>
      </div>
   </div>
</header>
<div class="nav-mobile hidden-lg">
   <div class="logo-nav">
      <a href="{{route('home')}}"><img src="{{$setting->logo}}" /></a>
      <a href="" class="btn-close"><span></span></a>
   </div>
   <div class="menu-mobile">
      <ul>
         <li><a href="{{route('home')}}">Trang chủ</a></li>
         <li><a href="{{route('allListBlog')}}">Tin Tức</a></li>
         <li><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
         <li class="item"><a href="javascript:;">Dịch vụ</a>
            <span class="icons"></span>
               <div class="nav-dropdow">
                  <ul class="nav-dropdow-wrap">
                 @foreach ($servicehome as $item)
                  <li>
                     <a class="menu-moblie-a" href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a>
                  </li>
                 @endforeach
                  </ul>
               </div>
         </li>
      </ul>
  
      <ul>
         @foreach ($categoryhome as $cate)
            <li class="item">
               <a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
               <span class="icons"></span>
               <div class="nav-dropdow">
                  <ul class="nav-dropdow-wrap">
                 @foreach ($cate->typeCate as $type)
                  <li><a class="menu-moblie-a" href="{{route('allListProType',['danhmuc'=>$cate->slug,'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}</a>
                  </li>
                 @endforeach
                  </ul>
               </div>
            </li>
         @endforeach
      </ul>
      </li>
  </div>
   <div class="address-mobile-nav">
      <div class="block-address-nav">
         <h2>{{$setting->company}}</h2>
         <p class="top5px">Hotline: <a href="tel:0934112255" style="color:#fff"> {{$setting->phone1}}</a> - <a href="tel:{{$setting->phone1}}" style="color:#fff"> {{$setting->phone1}}</a></p>
         <p class="top5px">Email: <a href="mailto:{{$setting->email}}" style="color:#fff">{{$setting->email}}</a></p>
      </div>
   </div>
</div>
<div class="dungim">
<div class="header-slogan visible-lg">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-3 top5px center">
            <a href="{{route('home')}}"><img src="{{$setting->logo}}" style="width:60px; height:60px"></a>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 name-company no-padding-left">
            <table cellspacing="0" id="TopHomepage_fvh1" style="width:100%;border-collapse:collapse;">
               <tr>
                  <td colspan="2">
                     <div class="name">
                        <h1>{{$setting->webname}}</h1>
                     </div>
                  </td>
               </tr>
            </table>
            <form action="{{route('search_result')}}" method="POST">
                     @csrf
                  <div class="col-xs-10 col-md-10 search no-padding">
                     <div class="search-white">
                        <div class="txt-search">
                           <input required name="keyword" type="text"  class="txt" placeholder="Tìm sản phẩm..." />
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-2 col-md-2 search no-padding">
                     <input type="submit" value="" class="btn-search" style="background: #0177d7 url({{url('frontend/imgs/btn-search.png')}});    background-repeat: no-repeat;">
                  </div>
            </form>
         
         </div>
         <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="box-hotline">
               <div class="hotline">
                  <div><i style="color:yellow"class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a class="hotline-text" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></div>
                  <div><i style="color:yellow"class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a class="hotline-text" href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></div>
               </div>
            </div>
            <div class="index-cart">
               <a href="{{route('listCart')}}">
               <img class="icon-cart" src="{{url('frontend/imgs/icon_cart.png')}}" />
               <span class="cnt crl-bg count_item_pr">
                  <span id="TopHomepage_lbnumber">{{count($cartcontent)}}</span>
               </span>
            </a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="header-menu visible-lg">
   <div class="container">
      <div class="row">
         <div class="col-md-3 no-padding-right">
            <div class="mainmenu-product">
               <div class="line"><i></i><i></i><i></i></div>
               <span>Danh mục sản phẩm </span>
               <div class="menuMainProduct">
                  <div class="nav-cate">
                     <ul>
                        @foreach ($categoryhome as $cate)
              
                           <li class="dropdown menu-item-count">
                              <h2>
                                 {{-- <img src="" alt="{{languageName($cate->name)}}" /> --}}
                                 <a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                              </h2>
                              <div class="subcate gd-menu">
                                
                                   @foreach ($cate->typeCate as $type)
                                          <h3 style="font-size: 14px">
                                             <a href="{{route('allListProType',['danhmuc'=>$cate->slug,'loaidanhmuc'=>$type->slug])}}" class="">{{languageName($type->name)}}</a>
                                          </h3>
                                        @endforeach
                              </div>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-9 col-md-9" id="menu">
            <ul class="mainmenu">
               <li><a class="home" href="{{route('home')}}">Trang chủ</a></li>
               <li class="dropdown_normal">
                  <a class="service" href="#">DỊCH VỤ</a>
                  <div class="margin-top10px">
                     <ul class="menu-sub tuan-sua">
                        @foreach ($servicehome as $item)
                        <li><a href="{{route('serviceDetail',['slug'=>$item->slug])}}"><i class="fa-solid fa-tag"></i>&nbsp;&nbsp;&nbsp;{{$item->name}}</a></li>
                        @endforeach
                     </ul>
                  </div>
               </li>
               <li >
                  <a class="news" href="{{route('aboutUs')}}">Giới thiệu</a>
               </li>
               <li ><a class="promotion" href="{{route('allListBlog')}}">Tin Tức</a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
</div>
