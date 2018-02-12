<?

// redirect for short urls.  uses .htaccess file

include_once ("../setup.php");


$id = trim($_GET['l']); 
if ( $id == '' ) { exit; }

$SQL="SELECT url FROM short_urls WHERE id='$id'";	
$result = mysql_query($SQL);
$row = mysql_fetch_array ($result);	
$url = $row['url'];
//echo "url = " .$url;

if ( $url <> '' )
{
	header("Location: $url");
}

?>