<style>
input{
	margin-top:-400px; 
	border-radius:5px;
	text-aling:center;
	 padding:10px;
	 margin:10	 600px;
	 background-color:none;
	 color:black;
	-webkit-transition: width .3s ease-ins, background-color .3s ease-in-out,color .3s ease-in-out;
     -moz-transition: width .3s ease-in, background-color .3s ease-in-out,color .3s ease-in-out;
     -o-transition: width .3s ease-in, background-color .3s ease-in-out,color .3s ease-in-out;
     transition: width .3s ease-in, background-color .3s ease-in-out,color .3s ease-in-out;
     -webkit-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
	 -moz-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
	 -o-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
	 box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
	 text-decoration: none;
     font-family: 'Open Sans', Helvetica, Arial, sans-serif;
	 font-weight: bold;
	 width:150px;
	
}
input:hover{
	background:gray;
	color:white;

}
#button{
	
	
    width: 50%;
    padding: 15px;
    border: none;
    outline: none;
    color: black;
    background: white;
    -webkit-transition: width .3s ease-in-out, background-color .3s ease-in-out;
    -moz-transition: width .3s ease-in-out, background-color .3s ease-in-out;
    -o-transition: width .3s ease-in-out, background-color .3s ease-in-out;
    transition: width .3s ease-in-out, background-color .3s ease-in-out;
    -webkit-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;-moz-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;-o-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;text-decoration: none;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;font-weight: bold;
    color: #fafafa;
    overflow: hidden;
    border-radius: 30px;
    }
	#Button:hover{
		background:red;
		width:35%;
		color:black;
	}
   #tr{
	   border:2px;
       color:black;
       border-radius:3px;
	   
	   
   }
   #td{
	   border:2px;
	   color:black;
	   border-radius:3px;
	   
   }
	
}
</style>
<form id="form1"  method="post" > 
<tr>
<td><input type="text" name="bir" placeholder="1.kenar" /></td> 
<td><input type="text" name="iki" placeholder="2.kenar" /></td>
<td><input type="text" name="uc" placeholder="3.kenar"/></td>  
<td><input type="submit" value="Hesapla" /></td> 
</tr>


<?php 


if(isset($_POST["bir"]))
	
{
if ($_POST ["bir"] == $_POST["iki"] || $_POST ["iki"] == $_POST["uc"] || $_POST ["bir"] == $_POST["uc"] )
{
echo "Ikiz Kenar Ucgen";

}
else
{


}
}
 ?>



<?php

if(isset($_POST["iki"]))
{
if ($_POST ["bir"] != $_POST["iki"] && $_POST ["iki"] != $_POST["uc"] && $_POST ["bir"] != $_POST["uc"])
{
echo "Cesit Kenar Ucgen";	
}
else
{ 

	
}
}
?>
<?php
if(isset($_POST["bir"]))
{
if($_POST ["bir"]== $_POST["iki"] &&  $_POST["iki"] == $_POST["uc"])
{
	echo "Esit Kenar Ucgen";
}	
else
{
	
}
}
?>

</form>
