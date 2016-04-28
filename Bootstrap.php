<head runat="server">
    <title></title>
</head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script>

    </script>
    <style>

        * {

            margin:0;
            padding:0;
         

        }


        .katman {
            margin:0 auto;
        }

         .navbar-fixed-top &,
    .navbar-static-top &,
    .navbar-fixed-bottom & {
      padding-left: 0;
      padding-right: 0;
    }
        html,
        body {
            height: 100%;
            background-color:rgba(83, 144, 13, 0.38);
         
           
        }

.row {
  margin-left:0px;
  margin-right:0px;
}

/* Wrapper for page content to push down footer */
#wrap {
  min-height: 100%;
  height: auto !important;
  height: 100%;
  /* Negative indent footer by its height */
  margin: 0 auto -60px;
  /* Pad bottom by footer height */
  padding: 0 0 60px;
}

/* Set the fixed height of the footer here */
#footer {
  height: 60px;
  background-color: #f5f5f5;
  margin-top:-20px;
  padding-top:20px;
  padding-bottom:20px;
 
}

       
        container {
            background-image: url(http://localhost:50677/background.jpg);
       
            background-size:100% 100%;
            background-repeat:no-repeat;
            
        }

#wrap > .container {
  padding: 60px 15px 0;
}
.container .credit {
  margin: 20px 0;
}

#footer {
  background-color:rgba(83, 144, 13, 0.38);
}

#footer a {
  color:#efefef;
}

#topNav {
	z-index:-1;
}

#nav {
  width: 100%;
}

#nav.affix-top {
   position: absolute;
   top:0;
   left:0;
   z-index:10;
   height:54px;
   background-color:transparent;
   border:0;
}

#nav.affix {
   position: fixed;
   top: 0;
   z-index:10;
   -webkit-transition: all .6s ease-in-out;
}

#footer > .container {
  
}

@media (min-width: 767px) {
  .navbar-nav.nav-justified > li{
      float:none;
  }
}
  
.navbar-nav {
  margin: 1px 1px; 
}  

.navbar-toggle {
	outline:0;
}

.divider {
	height:50px;
}

.panel {
	border-width:0;
}

@media (max-width: 768px) {
	header {
	
	}
}

.scroll-top {
   position:fixed;
   bottom:0;
   right:6%;
   z-index:100;
   background: #f2f3f2;
   font-size:24px;
   border-top-left-radius:3px;
   border-top-right-radius:3px;
}
.scroll-top a:link,.scroll-top a:visited {
  color:#222;
} 
 
section {
  color: #ffffff;
  min-height: 400px;
  height: auto !important;
  height: 100%;
  padding-top:100px;
}


      


    
        
        .ust a {
       
       margin:0 auto;
     
       
         text-decoration:none;
         
         font-size-adjust:initial;
         font-kerning:auto;
         font-family:Calibri;
         font-size:15px;
         text-decoration:none;

     
         transition: all .4s;
      
         color:white;
         
         
        


        }
            .ust a:hover {
       
         

             
              
             }
        .ustimg {
            float: left;
            height: 95px;
            width: 20%;
            border-radius: 15px;
            background-image: url(http://localhost:50677/logo2.jpg);
            background-position:100% 100%;
            background-size:100% 100%;
            background-origin:border-box;
            scrollbar-base-color:aqua;
        }
        .orta {
            width:100%;
            height: 800px;
            background-color:rgba(128,128,128,0.2);
        }
            .orta .box {

                width:15%;
                height:50%;
                background-color:rgba(255,255,255,0.6);

            }

        .text-center {
            transition:all 0.4s ease;
            color:rgba(128,128,128,0.9);

        }

            .text-center:hover {
          
            }
        .list-inline center-block {
            width:15px;
            height:15px;
            border-radius:15px;
        }
        .list-inline img {
            width:25px;
            height:25px;
            border-radius:25px;
           transition:all 0.4s ease;
            
        }
            .list-inline img:hover {
                  width:45px;
            height:45px;
            border-radius:45px;

            }
        .panel-thumbnail img {
            transition:all 0.4s ease;
        }
            .panel-thumbnail img:hover{
                
                margin-top:-15px;
            }
        .panel-thumbnail p {
            text-align:center;
            font-family:'Buxton Sketch';
        }
        .panel-body p {
           text-align:center;
           font-size:15px;
           font-family:Georgia;
           font-style:oblique;
        }
        .altpanel img {
            transition:all 0.4s;
        }
            .altpanel img:hover 
            {
                margin-top:15px;
            }
        .page-header {
        
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            border-radius:25px;
        }
}

    </style>
    
        
<body> 
    

    <form id="form1" runat="server">
    <div>
      
    <div class="ust">
      
  

	
    
<!-- Fly-in navbar -->
<div class="navbar navbar-inverse navbar-static-top" id="nav">
    
      <div class="navbar-header">
          <div class="container">
          <div class="col-sm-10 col-sm-offset-1">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Anasayfa</a></li>
          <li><a href="#section2">Blog</a></li>
          <li><a href="#section3">Hakkımızda</a></li>
          <li><a href="#section4">İletişim</a></li>
          <li><a href="#section5">Bize Ulaşın</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  </div>
<!-- Begin page content -->
<div class="divider" id="section1"></div>

<div class="container">
 
    <div class="page-header text-center">
      <h1>HOŞGELDİNİZ</h1>
    
    <p class="lead text-center"> 
      Nasıl yardımcı olabiliriz?
    </p> 
    
   <h1>   WEB GELİŞTİRME</h1>
     <p class="lead text-center"> 

Kullanıcı dostu arayüzlerle, responsive/mobil websitesi, eticaret sitesi ve web uygulamaları geliştiriyoruz.
    </p> 
        <h1>OPTİMİZASYON</h1>
        <p class="lead text-center">

            Mevcut web projelerinizi detaylı incelemeyle modern, hızlı, esnek ve ölçeklenebilir bir yapıya dönüştürüyoruz.

        </p>
        <h1>EĞİTİM</h1>
        <p class="lead text-center">
             
             Mevcut web projelerinizi detaylı incelemeyle modern, hızlı, esnek ve ölçeklenebilir bir yapıya dönüştürüyoruz.

        </p>
        <h1>DESTEK</h1>
        <p class="lead text-center">

            Mevcut web projeleriniz ve bizimle gerçekleştirdiğiniz projelerin güncellenmesi ve geliştirilmesi için destek veriyoruz.

        </p>
        

        </div>
    
    <hr>
      
   
    
    <div class="divider"></div>
    
  </div>
      </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>
  
<div class="divider" id="section2"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Profile</h1>
      
      <hr>
     
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
        Aliquam in felis sit amet augue.
	  </p> 
      
      <hr>
      
      <div class="divider"></div>
      
  	</div><!--/col-->
</div><!--/container-->

<div class="divider"></div>
  
<section class="bg-3">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h1>REFEREANSLAR</h1></div>
</section>
  
<div class="divider" id="section3"></div>
  <div class="ustpanel">
<div class="bg-4">
  <div class="container">
	<div class="row">
	   <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="www.stabucks.com"><img src="lg1.jpg" width="600" height="400"  class="img-responsive"></a></div>
          <div class="panel-body">
            <p>STARBUCKS</p>
            <p> </p>

          </div>
        </div><!--/panel-->
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="www.toblerone.com"><img src="lg2.jpg"  class="img-responsive"></a></div>
          <div class="panel-body">
            <P>TOBLERONE</P>
            <p></p>
            
          </div>
        </div><!--/panel--> 
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="www.ninjascholl.com">
              <img src="lg3.jpg"  class="img-responsive"></a></div>
          <div class="panel-body">
            <p>NİNJA SCHOLL</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
</div>
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="www.zippo.com"><img src="lg4.jpg"  class="img-responsive"></a></div>
          <div class="panel-body">
            <p>ZİPPO</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="www.mercedes.com"><img src="lg5.jpg" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>MERCEDES</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="www.apple.com"><img src="lg6.jpg" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>APPLE</p>
            <p></p>
            
          </div>
              
        </div><!--/panel--> 

      </div><!--/col--> 
      
	</div><!--/row-->
  </div><!--/container-->
    </div>
</div>

<div class="divider" id="section4"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
<div class="row">
  
  <div class="col-sm-10 col-sm-offset-1">
      <h1>Hakkımızda</h1>
   işimiz - tecrübemiz

Grimor Web Tasarım Ajansı, temsil ettiği firmalara, internet konulu kurumsal çözüm ve danışmanlık hizmetleri vermek için kurulmuştur. Kuruluş yılı 2004'den günümüze dek iş ortaklarının güveni ve sadakatine yön vermek, vazgeçilmez bir çözüm ortağı olmak, web tasarım işinde bir numara olmak için; yenilikçi, yüksek kaliteli, profesyonel hizmetler vermektedir.

Firmaların web tasarım ihtiyaçlarını giderirken hangi hassasiyetlerinin olduğunu, beklentilerinin neler olduğunu iyi analiz eder ve çözüme kavuşturur. Bu çözüme "ajans çalışanlarımızın uzun yıllara dayalı tecrübe ve birikimlerini işlerine katmaları" ile mümkün olmaktadır.

Doğru stratejiler ve tanıtım, sunum taktikleri ile hedef kitleye, optimum bütçe ile ve bu yatırımın karşılığını verebilme telaşı aktivitelerini mükemmel kılmaya çalışmaktadır.

Grimor gücünü bu amatör ruhunu, profesyonelce iş planlarına ve tasarım yeteneklerine güvenerek; çözüm arayan müşterilerine yıllardır yüksek kalite çözümler sunmaktadır..

Grimor web tasarım ajansı bir aile firması oluşunun sıcaklığını, samimiyetini; yılların deneyiminin getirdiği özgüveni ve iş bilgisini, kaliteli ve memnuniyet odaklı hizmet anlayışının getirdiği profesyonelliğini tüm işlerine ve iletişimine yansıtmaktadır.
  </div>   
       
  
  <hr>
  
</div><!--/row-->
  
<div class="divider" id="section5"></div>  

<div class="row">
  
  <hr>
  
  <div class="col-sm-9 col-sm-offset-1">
      
      <div class="row form-group">
        <div class="col-md-12">
        <h1>BİZE ULAŞIN</h1>        
        </div>
        <div class="col-xs-4">
          <input class="form-control" id="firstName" name="name" placeholder="Your Name" type="text">
        </div>
        <div class="col-xs-6">
          <input class="form-control" id="organization" name="organization" placeholder="Company or Organization" type="text">
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input class="form-control" name="email" placeholder="Email" type="text">
          </div>
          <div class="col-xs-5">
          <input class="form-control" name="phone" placeholder="Phone" type="text">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <textarea class="form-control" placeholder="Comments"></textarea>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button class="btn btn-default pull-right">Contact Us</button>
          </div>
          <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="Button" />
      </div>
    
  </div>
  
</div><!--/row-->
  
<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
          <script>
/* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});	

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top;
  $('body,html').animate({scrollTop:posi},700);
});
</script>





      <ul class="list-inline center-block">
        <li><a href="http://facebook.com/"><img src="sosyal1.jpg" ></a></li>
        <li><a href="http://twitter.com/"><img src="sosyal2.png"></a></li>
        <li><a href="http://google.com/"><img src="sosyal3.png"></a></li>
        <li><a href="http://pinterest.com/"><img src="sosyal4.png"></a></li>
      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">Copyright ugr ©2016 Tüm Hakları Saklıdır.</p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>



        <div class="menu">
          
            
            
               
   
 
        
        </div>
        <div class="alt"></div>
    </div>
