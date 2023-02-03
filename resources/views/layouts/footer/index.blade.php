<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="wrapper footer">
   <div class="container">
      <div class="row">
         <div id="info">
            <div class="col-xs-12 col-md-3">
               <div class="align-center">
                  <a href="{{route('home')}}"><img  src="{{$setting->logo}}" style ="width:100px; height:100px"/></a>
                  <div class="top5px cWhite">{{$setting->company}}</div>
                
               </div>
               <style>
                  .custom-footer li{   
                     list-style: none;
                  }
               </style>
            </div>
              <div class="col-xs-12 col-md-5 custom-footer">
               <ul>
                  <li>
                     <i class="fa-solid fa-location-dot"></i> &nbsp;&nbsp;{{$setting->address1}}
                  </li>
                
                      @if($setting->address2 != '')
                        <br>
                  <li>
                 
                     <i class="fa-solid fa-location-dot"></i> &nbsp;&nbsp;{{$setting->address2}}
              
                  </li>
                         @endif
                  <br>
                  <li>
                     <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;{{$setting->email}}
                  </li>
                  
                     @if($setting->phone1 != '')
                     <br>
                  <li>
                     <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;{{$setting->phone1}}
                  </li>
                     @endif
                  
                     @if($setting->phone2 != '')
                     <br>
                     <li>
                     <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;{{$setting->phone2}}
                     </li> 
                     @endif
                  <li></li>
               </ul>
            </div> 
             <div class="col-xs-12 col-md-4">
              {!!$setting->iframe_map!!}
            </div>
         </div>
      
         <div class="address-footer center">
            @ Bản quyền thuộc về {{$setting->company}} | Cung cấp bởi <a href="https://sbtsoftware.vn/">SBT</a> 
         </div>
      </div>
   </div>
</div>