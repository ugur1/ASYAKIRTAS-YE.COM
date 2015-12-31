
        *{
            margin:0;
            padding:0;

        }
    
        .katman{
   
            
            text-align:center;
  

        }
        .ust {
            width: 100%;
            height: 100px;
            background-image: url(http://localhost:50743/grayback.jpg);
            position:fixed;
            top:0;
            left:0;

        }
        .ust a {width: 50%;height: 50px;}
            .ust ul li {cursor: pointer;height: 48px;position: relative;list-style-type: none;float: left;}
            .ust .icon {
                

            background: url('http://3.bp.blogspot.com/-XzI0OccnygA/VCBiSB_-UzI/AAAAAAAABbs/6bc04B7aNZY/s1600/html%2Bkod%2Bcanavar%C4%B1%2Bsosyal%2Bmedia%2Biconlar%C4%B1.png') 0 0 no-repeat;display: block;float:none;height: 48px;line-height: 48px;margin: 5px 0;position: relative;text-align: left;text-indent: 60px;text-shadow: #333 0 1px 0;white-space: nowrap;width: 48px;z-index: 5;

            -webkit-transition: width .4s ease-in-out, background-color .5s ease-in-out;
            -moz-transition: width .4s ease-in-out, background-color .5s ease-in-out;
            -o-transition: width .4s ease-in-out, background-color .5s ease-in-out;
            transition: width .4s ease-in-out, background-color .5s ease-in-out;
            margin:10px 60px;
            
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
            background-color:rgba(0,0,0,0.45);
            width:100%;
            height:300px;
            border:1px solid black;
            position:absolute;


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
                

             -webkit-transition:height .4s ease-in-out, width .4s ease-in-out, background-color .5s ease-in-out,zoom .4s ease-in-out;
            -moz-transition: height .4s ease-in-out,width .4s ease-in-out, background-color .5s ease-in-out,zoom .4s ease-in-out;
            -o-transition: height .4s ease-in-out,width .4s ease-in-out, background-color .5s ease-in-out;
            transition:height .4s ease-in-out, width .4s ease-in-out, background-color .5s ease-in-out;
            -webkit-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            -moz-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            -o-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
            box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
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
         
            background-image: url(http://localhost:50743/21.jpg);
            width:100%;
            height:500px;
            background-position:100% 100%;
       
            background-size:100% 100%;


        }
        .deepweb{
        

        }
       

    </style>

</head>

    
        

    <form id="form1" runat="server">
    <div class="katman">
        
        <div class="ust">
            
           
           
                <ul>
                    <li><a class="icon rss" href="#">HOME</a></li>
                    <li><a class="icon google" href="#">ABOUT ME!</a></li>
                    <li><a class="icon facebook" href="#">MY HİSTORY</a></li>
                    <li><a class="icon twitter" href="#">MY FUTURE</a></li>
                    <li><a class="icon pinterest" href="#">ABOUT THE HACKER  </a></li>
                    <li><a class="icon youtube" href="#">CONTACT</a></li>
                    <li><a class="icon linkedin" href="#">PLANS</a></li>
                </ul>
            </div>
             
                
          
     
       
           
        
        <div class="orta">
            <p>-The next Pearl Harbor that will resist a cyber attack .</p>
            <p>-We need to get this guy to be a hacker named Hathaway . Even an encoder was sentenced to five years .. On .</p>
            <p>
           -Is it political ? Do you have to let the terrorists ?
           * No claim, no say .
           - But what does he want?
           * It's not about the money . It's not about politics .</p>
            <p>*-You know what man do? National Security and Defense was hacked Instution . Taken.</p>
            <p>-Now check not you. The real impact will come again .</p>
            <p>-This is just the beginning ..</p>
            <p>
           - Next , whatever right there.
           * Country Can you ?
           - Is not that why you brought me here ?
           * If it is determined 're done ..</p>
            <p>I'm UGUR ..I'm a soldier deepweb</p>
            <p>The real world is there a demo here</p>
            <div class="image">

            </div>
               <div class="hacker">
                   <a href="Default.aspx">  <img src="ayyildiz.jpg" width:"35%" height="45%"/ >      </a>            
                   <a href="Default.aspx">  <img src="deepweb.jpg" width:"35%" height="45%"/>   </a>               
                   <a href="Default.aspx"> <img src="tas2.png" width:"35%" height="45%"/> </a>
               </div>

            
           
        </div>
        <div class="deepwebimg">
        <div class="deepweb"></div>
      
     </div>
       
        <div class="alt">

       </div>
        </div>
