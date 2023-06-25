<section class="side">
   <div class="logo">
    <a href="" alt="ロゴ"><img src="{{ asset('img/logo.png') }}" alt="ロゴ"></a>
   </div>
   <ul class="list f16">
       <li class="case ">
           <a href="">
               <div class="icon"></div>
               <p>レース</p>
           </a>
       </li>
     <li class="staff ">
         <a href="">
             <div class="icon"></div>
             <p>馬</p>
         </a>
     </li>
     <li class="property ">
         <a href="">
             <div class="icon"></div>
             <p>騎手</p>
         </a>
     </li>
     <li class="management ">
         <a href="">
             <div class="icon"></div>
             <p>調教師</p>
         </a>
     </li>
     <li class="management ">
         <a href="">
             <div class="icon"></div>
             <p>馬主</p>
         </a>
     </li>
     <li class="management ">
         <a href="">
             <div class="icon"></div>
             <p>生産者</p>
         </a>
     </li>
     <li class="management ">
         <a href="">
             <div class="icon"></div>
             <p>産地</p>
         </a>
     </li>
     <li>
       <div class="flex js-link">
         <div class="icon" style="background-image: url(/img/common/list_icon5.png);"></div>
         <p>マスタ</p>
       </div>
       <ul class="submenu f13">
           <li class="submenu__item">
               <a href="">馬</a>
           </li>
           <li class="submenu__item">
               <a href="">レース</a>
           </li>
           <li class="submenu__item">
               <a href="">騎手</a>
           </li>
           <li class="submenu__item">
               <a href="">調教師</a>
           </li>
           <li class="submenu__item">
               <a href="">馬主</a>
           </li>
           <li class="submenu__item">
               <a href="">生産者</a>
           </li>
           <li class="submenu__item">
               <a href="">産地</a>
           </li>
       </ul>
     </li>
   </ul>
   <div class="account open">
     <p class="name f12">@if (Auth::check()) {{ Auth::user()->name }} @endif<span class="f10">さん</span></p>
   </div>
   <div class="setting_box f16">
         <a href="">設定</a>
     <a href="">個人設定</a>
     <a href="">ログアウト</a>
   </div>
 </section>
