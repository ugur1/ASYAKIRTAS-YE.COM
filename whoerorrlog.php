<style>
<head runat="server">
    <title>WHO</title>
    <style>
      
        *{
            margin:0;
            padding:0;

        }
    
        .katman{
   
            
            text-align:center;
  

        }
        .ust {
            width: 100%;
            height: 80px;
            background-image: url(http://localhost:50743/grayback.jpg);
           

        }
        .ust a {width: 50%;height: 50px;}
            .ust ul li {cursor: pointer;height: 48px;position: relative;list-style-type: none;float: left;}
            .ust .icon {
                

            background: url('http://3.bp.blogspot.com/-XzI0OccnygA/VCBiSB_-UzI/AAAAAAAABbs/6bc04B7aNZY/s1600/html%2Bkod%2Bcanavar%C4%B1%2Bsosyal%2Bmedia%2Biconlar%C4%B1.png') 0 0 no-repeat;display: block;float:none;height: 48px;line-height: 48px;margin: 5px 0;position: relative;text-align: left;text-indent: 60px;text-shadow: #333 0 1px 0;white-space: nowrap;width: 48px;z-index: 5;

            -webkit-transition: width .4s ease-in-out, background-color .5s ease-in-out;
            -moz-transition: width .4s ease-in-out, background-color .5s ease-in-out;
            -o-transition: width .4s ease-in-out, background-color .5s ease-in-out;
            transition: width .4s ease-in-out, background-color .5s ease-in-out;
            margin:10px 62px;
            
            -webkit-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            -moz-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            -o-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            text-decoration: none;
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;font-weight: bold;
            color: #fafafa;
            overflow: hidden;
            border-radius: 30px;
            }
            .ust li:hover .icon {width: 170px;}
            .ust .facebook {background-color: lightgray;background-position: 0 -718px;}
            .ust li:hover .facebook {background-color: gray;background-position: 0 -718px;}
            .ust .twitter {background-color: lightgray;background-position: 0 -718px;}
            .ust li:hover .twitter {background-color: gray;background-position: 0 -718px;}
            .ust .google {background-color: lightgray;background-position: 0 -718px;}
            .ust li:hover .google {background-color: gray;background-position: 0 -718px;}
            .ust .pinterest {background-color: lightgray;background-position: 0 -718px;}
            .ust li:hover .pinterest {background-color: gray;background-position: 0 -718px;}
            .ust .linkedin {background-color: lightgray;background-position: 0 -718px;}
            .ust li:hover .linkedin {background-color: gray;background-position: 0 -718px;}
            .ust .youtube {background-color:lightgray;background-position: 0 -718px;}
            .ust li:hover .youtube {background-color:gray;background-position: 0 -718px;}
            .ust .rss {background-color: lightgray;background-position: 0 -718px;}
            .ust li:hover .rss {background-color: gray;background-position: 0 -718px;}

        .orta {
            width: 100%;
            height: 900px;
            background-image: url(http://localhost:50743/10.jpg) ;
            background-size:100% 100%;
            margin-top:-10px;
          
        }
            .orta p {
                color:whitesmoke;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size:20px;
                margin:10px;
                text-align:center;


            }
        .image {
            width: 10%;
            height: 10%;
            border-radius: 100px;
            background-image: url(http://localhost:50743/websites.jpg);
            background-size:100% 100%;
            background-repeat:no-repeat repeat;
            margin:0 auto;


        }
        .image:hover{
            background-image: url(http://localhost:50743/websites.jpg);
            width:200px;
            height:200px;
            background-color:rgba(128, 128, 128,0.8);
            -webkit-transition:height .4s ease-in-out, width .4s ease-in-out, background-color .5s ease-in-out;
            -moz-transition: height .4s ease-in-out,width .4s ease-in-out, background-color .5s ease-in-out;
            -o-transition: height .4s ease-in-out,width .4s ease-in-out, background-color .5s ease-in-out;
            transition:height .4s ease-in-out, width .4s ease-in-out, background-color .5s ease-in-out;
            -webkit-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            -moz-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            -o-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;

        }
        .hacker{
            margin-top:10px;
           
            width:100%;
            height:400px;
            
          


        }
        .hacker img{
            margin:20px 130px;
            border-radius:35%;
            

        }
          .hacker img:hover{
            margin:20px 130px;
            border-radius:35%;
            

        }

            .hacker a {
                

             -webkit-transition:height .6s ease-in-out, width .6s ease-in-out, background-color .6s ease-in-out,zoom .6s ease-in-out;
            -moz-transition: height .6s ease-in-out,width .6s ease-in-out, background-color .6s ease-in-out,zoom .6s ease-in-out;
            -o-transition: height .6s ease-in-out,width .6s ease-in-out, background-color .6s ease-in-out;
            transition:height .6s ease-in-out, width .6s ease-in-out, background-color .6s ease-in-out;
            -webkit-box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;
            -moz-box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;
            -o-box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;
            box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;
            margin:5px;
            border-radius:5px;
            border:1px solid black;
           
              

           
            }
            .hacker a:hover{

       background-color:rgba(0, 0, 0,0.9);





            }
            .hacker p {
              

            }
        .deepwebimg {
         
            background-image: url(http://localhost:50743/back.jpg);
            width:100%;
            height:700px;
            background-position:100% 100%;
            background-size:100% 100%;


        }
        .deepweb{
         background-color:rgba(0,0,0,0.9);
         width:100%;
         height:700px;
         text-align:center;


             
           
        }
        .deepweb img{
            height:20%;
            width:20%;
            border-radius:10%;
            margin:0 auto;
            margin-top:15px;



        }
        .deepweb p
        { margin:10px;
            text-align:center;
            text-decoration:none;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color:black;

            -webkit-transition:color .5s ease-in-out,height .6s ease-in-out, width .6s ease-in-out, background-color .6s ease-in-out,zoom .6s ease-in-out;
                -moz-transition:color .5s ease-in-out, height .6s ease-in-out,width .6s ease-in-out, background-color .6s ease-in-out,zoom .6s ease-in-out;
                -o-transition:color .5s ease-in-out, height .6s ease-in-out,width .6s ease-in-out, background-color .6s ease-in-out;
                 transition:color .5s ease-in-out, .6s ease-in-out, width .6s ease-in-out, background-color .6s ease-in-out;
                 -webkit-box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;
                  -moz-box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;
                    -o-box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;
                    box-shadow: rgba(0, 0, 0, .99) 0 5px 6px;


        }
       .deepweb p:hover{


         color:white;
         background-color:rgba(0,0,0,0.1);




 
       


       }
        .alt {
            width:100%;
            height:200px;
          background-color:GrayText;



        }
          
        
       

    </style>

</head>

</style>


<form method="post">

<input type="text" name="s1" placeholder="1.sayı"/>
<input type="text" name="s2" placeholder="2.sayı"/>
<input type="submit" value="Topla"/>
<input type="text" name="s3" placeholder="1.sayı"/>
<input type="text" name="s4" placeholder="2.sayı"/>
<input type="submit" value="Cıkart"/>
<input type="text" name="s5" placeholder="1.sayı"/>
<input type="text" name="s6" placeholder="2.sayı"/>
<input type="submit" value="bol"/>
<input type="text" name="s7" placeholder="1.sayı"/>
<input type="text" name="s8" placeholder="2.sayı"/>
<input type="submit" value="carp"/>
<input type="text" name="s9" placeholder="1.sayı"/>
<input type="text" name="s10" placeholder="2.sayı"/>
<input type="submit" value="gönder"/>

</form>
<?php
if($_POST == ["s1"]){
	echo $_POST ["s1"] + $_POST["s2"];
}
else if ($_POST==["s2"]){
	echo $_POST ["s1"] + $_POST["s2"];
}
}

?>
<?php 
if($_POST ==["s3"]{
	
echo $_POST ["s3"] + $_POST["s4"];
}
 else if {$_POST==["s4"]{
	 echo $_POST ["s3"] - $_POST["s4"];
 } 

?>
<?php
if($_POST==["s4"]){
	
	echo $_POST ["s4"]/$_POST["s5"];
	
}
else if($_POST=="s5"){
	echo $_POST ["s4"]/ $_POST["s5"];
}


?>
<?php

if($_POST==["s6"]){
	
echo $_POST ["s6"]* $_POST["s7"]}

 else if($_POST==["s7"]){
	 
	 echo $_POST ["s7"]*$_POST["s8"];
 }
?>
<?php
if($_POST==["s9"]){
echo $_POST["s9"]/ $_POST["s10"]}


 else if($_POST=="s10"){
	 echo $_POST ["s9"]/$_POST["s10"]
 };
 ?>
 <?php
 if($_POST==["s10"]){
	 
	 echo $_POST ["s10"] + $_POST["s10"]
 }
else if {$_POST==["s10"]
echo $_POST["s10"]% $_POST["s10"];
}
?>
<?php
if($_POST==["s10"]){
	
	echo $_POST["s10"]+$_POST["s11"]
	{
	else if($_POST==["s11"])
		echo $_POST["s11"] + $_POST["s12"];
	
}
}

?>

<?php
if($_POST==["s11"]){
	echo $_POST ["S11"]+$_POSTÜ["s12"]
	{
		else if ($_POST==["s12"])
			echo $_POST["s121"]+ $_POST["s13"];
		
	}
}
?>
<?php
if($_POST==["s13"]){
	echo $_POST ["s14"]+$_POST["s15"]
	{
		else if ($_POST==["s16"])
			echo $_POST["s18"]+$_POST["s19"];
		
	}
}
 ?>
 <?php
 if ($_POST==["s17"]){
	 echo $_POST ["s155"]+$_POST["s18"]
	 {
		 else if ($_POST==["S19"])
			 echo $_POST["s55"]+$_POST["s22"];
		 
	 }
 }
 ?>
 <?php 
 if($_POST==["s44"]){
	 echo $_POST ["s1115"]+$_POST["s451"]
	 else if ($_POST==["s19"])
		 echo $_POST["s441"]+$_POST["s7881"];
	 
 }
 ?>
 <?php
 if($_POST==["sr1"]){
	 echo $_POST ["sr1"]+$_POST["sr1"]
	 else if ($_POST["s11111"]/$_POST[sr11321321]
	 echo $_POST["s112312"]-$_POST["sr1123123"];
	 
 }
?> 
