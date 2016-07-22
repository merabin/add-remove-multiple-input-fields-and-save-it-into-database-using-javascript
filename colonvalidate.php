
<?php
if(isset($_POST['submit']))
{
$col = isset($_POST['pselcol'])? $_POST['pselcol']:'';
$col1 =isset($_POST['pselcol1'])? $_POST['pselcol1']:'';
$col2 = isset($_POST['pselcol2'])? $_POST['pselcol2']:'';
$col3 = isset($_POST['pselcol3'])? $_POST['pselcol3']:'';






$run=mysql_query("INSERT INTO democolon(college,college1,college2,college3) values('$col','$col1','$col2','$col3')");
if($run)
{	

echo"success";

}

else{
	
	echo"sorry";
}
}
