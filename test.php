<?

include_once ("setup.php");

if ($_GET['submit'] == 'true')  // form submitted
{
	$long_url = $_POST['long_url'];
	if ( $long_url <> '' )
	{
		$short_url = get_tiny_url($long_url);
		echo $short_url;
	}
	exit;
}
?>


<form name="main" role="form" action="?submit=true" method="post" >
		
		<label>Enter long URL:</label>
		<input name="long_url" value=""  size="50">
	
		<BR><BR>	
		<button type="submit">Submit</button>
						 
</form>
