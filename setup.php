<?

$SITEURL="http://localhost:800/robs_short_url/";

$dbhost = 'localhost';
$dbusername = 'root';
$dbpasswd = '';
$db = 'robs_db';

// connecting to MySQL.
$conn = @mysql_connect("$dbhost" , "$dbusername", "$dbpasswd" );
if (!$conn)
{
    echo ('Could not connect to DB:  ' . mysql_error());
    exit;
}

// connect to DB
mysql_select_db("$db", $conn);



//
// functions
//

function get_tiny_url($url)  
{
		global $SITEURL;
		
		$id = make_key(8);
        $SQL = "INSERT INTO short_urls SET id = '$id', url = '$url', date_created = now() ";		
		$result = mysql_query($SQL);			
		
		$data = $SITEURL . "r/" . $id;
        return $data;
}


function make_seed()
{
  list($usec, $sec) = explode(' ', microtime());
  return (float) $sec + ((float) $usec * 100000);
}


function make_key($length)
{
	if ( $length == '' ) { $length=16; }
	
	$vowels = 'aeiouy';
	$consonants = 'bdghjlmnpqrstvwxz' ;
	$specials = '1234567890';
    $password = '';

    $alt = time() % 2;
  //  srand(time());
	srand(make_seed());
	$sp1 = (rand() % $length);
	srand(make_seed());
	$sp2 = (rand() % $length);
    for ($i = 0; $i < $length; $i++) 
	{
		srand(make_seed());
        if ($alt == 1) 
		{
            $password .= $consonants[(rand() % 17)];
            $alt = 0;
        } 
		else 
		{
            $password .= $vowels[(rand() % 6)];
            $alt = 1;
        }		
    }

	// set one special
	$password[$sp1] = $specials[(rand() % 10)];	
	$password[$sp2] = $specials[(rand() % 10)];	

    return $password;
}
?>
