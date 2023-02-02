<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
   <div class="sidebar-menu no-scrollbar ">
         <ul class="nav nav-sidebar nav-vertical nav-uppercase">
            <li class="header-search-form search-form html relative has-icon">
            <div class="header-search-form-wrapper">
               <div class="searchform-wrapper ux-search-box relative is-normal">
                     <form role="search" method="post" class="searchform" action="{{route('search_result')}}">
                        @csrf
                        <div class="flex-row relative">
                        <div class="flex-col flex-grow">
                           <label class="screen-reader-text" for="woocommerce-product-search-field-2">Tìm kiếmddddd:</label>
                           <input type="search" id="woocommerce-product-search-field-2" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="keyword" />
                           <input type="hidden" name="post_type" value="product" />
                        </div>
                        <div class="flex-col">
                           <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                           <i class="icon-search" ></i></button>
                        </div>
                        </div>
                        <div class="live-search-results text-left z-top"></div>
                     </form>
               </div>
            </div>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-12080 has-icon-left"><a href="{{ route('home') }}" aria-current="page">Trang chủ</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12081 has-icon-left"><a href="{{ route('aboutUs') }}">Giới thiệu</a></li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12085 has-icon-left">
               <a href="#">Danh mục sản phẩm</a>
               <ul class="sub-menu nav-sidebar-ul children">
                  @foreach ($categoryhome as $cate)
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12086 has-icon-left"><a href="{{ route('allListProCate', ['danhmuc'=>$cate->slug]) }}">{{languageName($cate->name)}}</a></li>
                  @endforeach
               </ul>
            </li>
            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12085 has-icon-left">
               <a href="{{ route('allListBlog') }}">Tin tức</a>
               <ul class="sub-menu nav-sidebar-ul children">
                  @foreach ($blogCate as $cate)
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12086 has-icon-left"><a href="{{ route('listCateBlog', ['slug'=>$cate->slug]) }}">{{languageName($cate->name)}}</a></li>
                  @endforeach
               </ul>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12082 has-icon-left"><a href="{{ route('lienHe') }}">Liên hệ</a></li>
            <li class="html header-social-icons ml-0">
            <div class="social-icons follow-icons" >
               <a href="{{$setting->facebook}}" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook" ></i></a>
               <a href="#" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram" aria-label="Follow on Instagram"><i class="icon-instagram" ></i></a>
               <a href="#" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon plain  twitter tooltip" title="Follow on Twitter" aria-label="Follow on Twitter"><i class="icon-twitter" ></i></a>
               <a href="mailto:{{$setting->email}}" data-label="E-mail" rel="nofollow" class="icon plain  email tooltip" title="Send us an email" aria-label="Send us an email"><i class="icon-envelop" ></i></a>
            </div>
            </li>
         </ul>
   </div>
</div>