<style>

	input { 
	margin:10 100px;
	background-color:none;
		padding:15px;
	-webkit-transition: width .3s ease-ins, background-color .3s ease-in-out,color .3s ease-in-out;
     -moz-transition: width .3s ease-in, background-color .3s ease-in-out,color .3s ease-in-out;
     -o-transition: width .3s ease-in, background-color .3s ease-in-out,color .3s ease-in-out;
     transition: width .3s ease-in, background-color .3s ease-in-out,color .3s ease-in-out;
     -webkit-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
	 -moz-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
	 -o-box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
	 box-shadow: rgba(0, 0, 0, .99) 0 2px 3px;
}
input:hover{
	color:white;
	background:gray;
}
#Button{
    float: right;
    width: 15%;
    padding: 15px;
    border: none;
    outline: none;
    color: black;
    background: white;
    box-shadow: 1px 1px 1px 1px gray;
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
	 border-radius:10px;
	}
	#Button:hover{
    color:white ;
    background: gray;
	}
	td{
		color:black; 
		text-aling:center;
		
	}
	tr{
		margin:10px;
		text-aling:center;
	}
</style>
<body>
<form method="post">
<table width="1000" border="1" cellpadding="10" cellspacing="0">
<thead>
<td><b style="color:red;">Dersler</b></td>
<td><b style="color:red;">Dogru</b></td>
<td><b style="color:red;">Yanlis</b></td>
</thead>
<tr>
<td>Turkce</td>
<td><input type="number" title="Lutfen Giris Yapiniz"  value="0" required="required" name="TR_DGR" placeholder="Turkce Dogru Sayisi"/></td>
<td><input type="number" title="Lutfen Giris Yapiniz" value="0" required="required" name="TR_YNL" placeholder="Turkce Yanlis Sayisi"/></td>
</tr>
<tr>
<td>Matematik</td>
<td><input type="number" title="Lutfen Giris Yapiniz" value="0" required="required" name="MTM_DGR" placeholder="Matematik Dogru Sayisi"/></td>
<td><input type="number" title="Lutfen Giris Yapiniz" value="0" required="required" name="MTM_YNL" placeholder="Matematik Yanlis Sayisi"/></td>
</tr>
<tr>
<td>Sosyal</td>
<td><input type="number" title="Lutfen Giris Yapiniz" value="0" required="required" name="SOS_DGR" placeholder="Sosyal Dogru Sayısi"/></td>
<td><input type="number" title="Lutfen Giris Yapiniz" value="0" required="required" name="SOS_YNL" placeholder="Sosyal Yanlis Sayisi"/></td>
</tr>
<tr>
<td>Fen Bilimleri</td>
<td><input type="number" title="Lutfen Giris Yapiniz" value="0" required="required" name="FEN_DGR" placeholder="Fen Bilimleri Dogru Sayisi"/></td>
<td><input type="number" title="Lutfen Giris Yapiniz" value="0" required="required" name="FEN_YNL" placeholder="Fen Bilimleri Yanlis Sayisi"/></td>
</tr>
<tr>
<td colspan="3">
<input type="submit" value="HESAPLA"  id="Button"  name="HESAPLA"/></td>
</tr>
</table>
<br /><br /><br />
<table width="1000" border="1" cellpadding="10" cellspacing="0">
<tr>
<td><b style="color:red;">Dersler</b></td>
<td><b style="color:red;">Net Sayisi</b></td>
<td><b style="color:red;">Net Sayisi</b></td>
<td><b style="color:red;">Net Sayisi</b></td>
</tr>
<tr>
<td>Turkce</td>
<td><strong>
<?php 
if(isset($_POST["TR_DGR"])){
if($_POST["TR_DGR"]+$_POST["TR_YNL"]>40)
{
echo "Dogru ve Yanlis Toplami 40 Olmak zorundadir.";
}
else
{
$TR_NET=$_POST["TR_DGR"]-($_POST["TR_YNL"]/4);
echo $TR_NET;
}
}
else {echo "Null";}
?>
</strong></td>
</tr>
<tr>
<td>Matematik</td>
<td><strong>
<?php 
if(isset($_POST["MTM_DGR"]))
{
if($_POST["MTM_DGR"]+$_POST["MTM_YNL"]>40)
{
echo "Dogru ve Yanlis Toplami 40 Olmak zorundadir.";
}
else
{
$MTM_NET=$_POST["MTM_DGR"]-($_POST["MTM_YNL"]/4);
echo $MTM_NET;
}
}
else {echo "Null";
}
?>
</strong></td>
</tr>
<tr>
<td>Sosyal</td>
<td><strong>
<?php 
if(isset($_POST["SOS_DGR"]))
{
if($_POST["SOS_DGR"]+$_POST["SOS_YNL"]>40)
{
echo "Dogru ve yanlis toplamı 40 olmak zorundadir.";
}
else
{
$SOS_NET=$_POST["SOS_DGR"]-($_POST["SOS_YNL"]/4);
echo $SOS_NET;
}
}
else 
{
echo "Null";
}
?>
</strong></td>
</tr>
<tr>
<td>Fen Bilimleri</td>
<td><strong>
<?php 
if(isset($_POST["FEN_DGR"]))
{
if($_POST["FEN_DGR"]+$_POST["FEN_YNL"]>40)             
{
echo "Dogru ve Yanlis toplami 40 olmak zorundadir.";
}
else
{
$FEN_NET=$_POST["FEN_DGR"]-($_POST["FEN_YNL"]/4);
echo $FEN_NET;
}
}
else
{
echo "Null";
}
?>
</strong></td>
</tr>
</table>
<?php 
if(isset($_POST["TR_DGR"])){
$TR_NET_1=number_format($TR_NET,2,',','.');
$MTM_NET_1=number_format($MTM_NET,2,',','.');
$SOS_NET_1=number_format($SOS_NET,2,',','.');
$FEN_NET_1=number_format($FEN_NET,2,',','.');
}
?>
<br /><br /><br />
<table width="1000" border="1" cellpadding="10" cellspacing="0">
<tr>
<td>
<b style="color:red;">YGS 1</b></td>
<td>
<b style="color:red;">YGS 2</b></td>
<td>
<b style="color:red;">YGS 3</b></td>
<td>
<b style="color:red;">YGS 4</b></td>
<td>
<b style="color:red;">YGS 5</b></td>
<td>
<b style="color:red;">YGS 6</b></td>
</tr>
<td><strong>
<?php
if(isset($_POST["MTM_DGR"]))
{
$YGS1_SONUC=number_format((100+($TR_NET_1*2)+($MTM_NET_1*4)+($SOS_NET_1*1)+($FEN_NET_1*3)),5);
echo $YGS1_SONUC;
}
else
{
	echo "Null";
}
?>
</strong></td>
<td><strong>
<?php
if(isset($_POST["MTM_DGR"]))
{
$YGS2_SONUC=(100+($TR_NET_1*2)+($MTM_NET_1*3)+($SOS_NET_1*1)+($FEN_NET_1*4));
echo $YGS2_SONUC;
}
else
{
	echo "Null";
}
?>
</strong></td>
<td><strong>
<?php
if(isset($_POST["MTM_DGR"]))
{
$YGS3_SONUC=(100+($TR_NET_1*4)+($MTM_NET_1*2)+($SOS_NET_1*3)+($FEN_NET_1*1));
echo $YGS3_SONUC;
}
else
{
	echo "Null";
}
?>
</strong></td>
<td><strong>
<?php
if(isset($_POST["MTM_DGR"]))
{
$YGS4_SONUC=(100+($TR_NET_1*3)+($MTM_NET_1*2)+($SOS_NET_1*4)+($FEN_NET_1*1));
echo $YGS4_SONUC;
}
else
{
	echo "Null";
}
?>
</strong></td>
<td><strong>
<?php
if(isset($_POST["MTM_DGR"]))
{
$YGS5_SONUC=(100+($TR_NET_1*3.7)+($MTM_NET_1*3.3)+($SOS_NET_1*2)+($FEN_NET_1*1));
echo $YGS5_SONUC;
}
else
{
	echo "Null";
}
?>
</strong></td>
<td><strong>
<?php
if(isset($_POST["MTM_DGR"]))
{
$YGS6_SONUC=(100+($TR_NET_1*3.3)+($MTM_NET_1*3.7)+($SOS_NET_1*1)+($FEN_NET_1*2));
echo $YGS6_SONUC;
}
else
{
	echo "Null";
}
?>
</strong></td>
</table>
</form>
</body>
</html>
