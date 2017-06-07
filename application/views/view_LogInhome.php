<html>
    <head>
    <style>
    body {                 
        background-color: #B0D1B5;
    } 
    * {box-sizing:border-box}
    
    .mySlides {
        display:none;
    }

    /* Slideshow container */
    .slideshow-container {
        top: 50px;
        right: -100px;
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor:pointer;
      height: 13px;
      width: 13px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .prev, .next,.text {font-size: 11px}
    }
    *{
        padding: 0;
        margin: 0;
     }
    .menu {
        float: left;
        position: absolute;
        top:125px;
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        border: 2px solid #D4BB77;
    }

    .menu li {
        display: block;
        color: #B0D1B5;
        padding: 15px 25px;
        background-color: #B1E86A;

    }
    .menu li :hover {
        background-color: #555;
        color: white;
    }

    .menu li:hover ul{
        display: block;
        background-color: #555;
        color: white;
    }

    .menu li  ul{
        display: block;
        position: absolute;
        top: 0;
        left: 100px;
    }
    .menu li ul{
        display: block;
        position: absolute;
        top: 50px;
        left: 200px;
        width: 150px;
        border: 3px solid #73AD21;
    }

    #searchText{		
        position: absolute;
        top: 40px;
        right: 625px;
        width: 300px;
        height: 30px;
        background-color: #cccccc;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        font-style: oblique;
        font-weight: bold;
    }

    #searchButton{
        position: absolute;
        top: 38px;
        right: 525px;

    }

    #LogOutBu{
        position: absolute;
        top: 20px;
        right: 230px;

    }
    #historyBu{
        position: absolute;
        top: 20px;
        right: 50px;
    }
    #cartBu{
        position: absolute;
        top: 65px;
        right: 100px;
    }
    #ProfileBu{
        position: absolute;
        top: 65px;
        right: 230px;
    }
    
    .recent{
        position: absolute;
        top: 600px;
        right: 825px;
    }

    .button {
        display: inline-block;
        padding: 7px 15px;
        font-size: 15px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {background-color: #CA5555}

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }

    table, th, td {
        border: 0px solid black;
        border-collapse: collapse;
    }
        th, td {
        padding: 10px;
    }
    .nameWeb {
        position: absolute;
        top: 40px;
        right: 1200px;
        background: #B0D1B5;
        -webkit-transition: width 2s, height 2s, -webkit-transform 2s; 
        transition: width 2s, height 2s, transform 2s;
}

    .nameWeb:hover {      
        -webkit-transform: rotate(-1800deg);
        transform: rotate(-1800deg);
    }
    
    a:link {
        text-decoration: none;
        font-weight: bold;   
    }

    a:visited {
        text-decoration: none;
        color: #1B1D19;
    }

    a:hover {
        text-decoration: none;
        color: #B5623F;
    }

    a:active {
        text-decoration: none;
    }
    
    table, th, td {
        border: 0px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 35px;
    }

    .button1 {
       border-top: 1px solid #96d1f8;
       background: #e38c3f;
       background: -webkit-gradient(linear, left top, left bottom, from(#375b73), to(#e38c3f));
       background: -webkit-linear-gradient(top, #375b73, #e38c3f);
       background: -moz-linear-gradient(top, #375b73, #e38c3f);
       background: -ms-linear-gradient(top, #375b73, #e38c3f);
       background: -o-linear-gradient(top, #375b73, #e38c3f);
       padding: 6px 12px;
       -webkit-border-radius: 33px;
       -moz-border-radius: 33px;
       border-radius: 33px;
       -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
       -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
       box-shadow: rgba(0,0,0,1) 0 1px 0;
       text-shadow: rgba(0,0,0,.4) 0 1px 0;
       color: #260521;
       font-size: 12px;
       font-family: Georgia, Serif;
       text-decoration: none;
       vertical-align: middle;
       }
    .button1:hover {
       border-top-color: #28597a;
       background: #28597a;
       color: #e61c0e;
       }
    .button1:active {
       border-top-color: #1b435e;
       background: #1b435e;
       }
            
    
    </style>
    </head>
    <body>

    <h1 class="nameWeb"><a href="/atp3project/home">DorDam</a></h1>
    
    <form action="">
        <input type="text" id ="searchText" name ="search" placeholder="Search.."/>
        <input class="button" type="submit" id ="searchButton" value="search"/>
    </form>
    <!--<form action="/atp3project/Login_signUp/logIn">
            <input class="button" type="submit" id ="LogInBu" value="Log In"/>
    </form>-->

    <form action="/atp3project/Login_signUp/logOut">
            <input class="button" type="submit" id ="LogOutBu" value="Log Out" />
    </form>

    <form action="/atp3project/cart/buyingHistory">
            <input class="button" type="submit"  id ="historyBu" value="Shopping History"/>
    </form>

    <form action="/atp3project/Login_signUp/myProfile">
            <input class="button" type="submit" id ="ProfileBu" value="My Profile"/>
    </form>
    
    <form action="/atp3project/cart/showCart">
            <input class="button" type="submit" id ="cartBu" value="Show Cart"/>
    </form>

    </br></br></br></br></br></br>

    <hr>

    <ul class="menu">
      <li><a href="/atp3project/home" style="background-color:red">Home</a></li>
      <li><a href="/atp3project/home/men">Men</a></li>
      <li><a href="/atp3project/home/women">Women</a></li>
      <li><a href="/atp3project/home/kids">Kids</a></li>
      <li><a href="/atp3project/home/computer">Computer</a></li>
      <li><a href="/atp3project/home/cAccess">Computer Accessory</a></li>
      <li><a href="/atp3project/home/mobile">Mobile & its Accessory</a></li>
      <li><a href="/atp3project/home/electronics">Electronics</a></li>
      <li><a href="/atp3project/home/others">Others</a></li>

    </ul>

    
    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="/atp3project/slideShow/1.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="/atp3project/slideShow/2.png" style="width:100%">
    </div>
        
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="/atp3project/slideShow/3.jpg" style="width:100%">
    </div>    


    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    
 
    

    <form action="/atp3project/product_detail/showDetails" method="post">
    <table class="recent" border="1" style="width:20%" align ="Center">
        <tr><td><h3>Latest Products </h3></td></tr>
        <tr>            
            <td><img src="{Men_picture}{P_picture}{/Men_picture}" alt="" style="width:200px; height:auto;"></td>
            <td><img src="{Women_picture}{P_picture}{/Women_picture}" alt="" style="width:200px; height:auto;"></td>
            <td><img src="{kid_picture}{P_picture}{/kid_picture}" alt="" style="width:200px; height:auto;"></td>
            <td><img src="{Com_picture}{P_picture}{/Com_picture}" alt="" style="width:200px; height:auto;"></td>           
        </tr>
        <tr>
            <td align="center"><input class="button1" type="submit" name="show1" value="Show Details"></td>
            <td align="center"><input class="button1" type="submit" name="show2" value="Show Details"></td>
            <td align="center"><input class="button1" type="submit" name="show3" value="Show Details"></td>
            <td align="center"><input class="button1" type="submit" name="show4" value="Show Details"></td>
        </tr>
        <tr>
            <td><img src="{CAcc_picture}{P_picture}{/CAcc_picture}" alt="" style="width:200px; height:auto;"></td>
            <td><img src="{Mobile_picture}{P_picture}{/Mobile_picture}" alt="" style="width:200px; height:auto;"></td>
            <td><img src="{Elec_picture}{P_picture}{/Elec_picture}" alt="" style="width:200px; height:auto;"></td>
            <td><img src="{Other_picture}{P_picture}{/Other_picture}" alt="" style="width:200px; height:auto;"></td>    
            
        </tr>
        <tr>
            <td align="center"><input class="button1" type="submit" name="show5" value="Show Details"></td>
            <td align="center"><input class="button1" type="submit" name="show6" value="Show Details"></td>
            <td align="center"><input class="button1" type="submit" name="show7" value="Show Details"></td>
            <td align="center"><input class="button1" type="submit" name="show8" value="Show Details"></td>
        </tr>
    </table>
    </form>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>


    </body>
</html>