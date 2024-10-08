
<?php  
	define('SDK_DIR', __DIR__ . '/facebook-php-business-sdk-main'); // Path to the SDK directory
	$loader = include SDK_DIR . '/vendor/autoload.php';

	use FacebookAds\Api;
	use FacebookAds\Logger\CurlLogger;
	use FacebookAds\Object\ServerSide\Content;
	use FacebookAds\Object\ServerSide\CustomData;
	use FacebookAds\Object\ServerSide\DeliveryCategory;
	use FacebookAds\Object\ServerSide\Event;
	use FacebookAds\Object\ServerSide\EventRequest;
	use FacebookAds\Object\ServerSide\Gender;
	use FacebookAds\Object\ServerSide\UserData;

	use libphonenumber\PhoneNumberUtil;
	use libphonenumber\PhoneNumberType;
	use libphonenumber\PhoneNumberFormat;
	use libphonenumber\PhoneNumberToCarrierMapper;
	use libphonenumber\PhoneNumberToTimeZonesMapper;
	use libphonenumber\PhoneNumberOfflineGeocoder;


	//$connect = new mysqli('localhost', 'root', '', 'aqartown');
	$connect = new mysqli('localhost', 'landing_user', 'Aqar@town2023', 'aqar_website');
	$referer = explode("/", $_SERVER['REQUEST_URI'])[1];

	function getCountryCode($phoneNumber)
	{
	    $phoneUtil = PhoneNumberUtil::getInstance();
	    try 
	    {
	        $parsedNumber = $phoneUtil->parse($phoneNumber, null);
	        $countryCode = $phoneUtil->getRegionCodeForNumber($parsedNumber);
	        return $countryCode;
	    } 
	    catch (\libphonenumber\NumberParseException $e) 
	    {
	        return null; // Unable to parse the phone number
	    }
	}

	function get_client_ip() {
	    $ipaddress = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	function sendEvent($email, $phone, $countryCode, $lname, $fname, $ipAddress, $userAgent, $eventName, $sourceURL, $actionSource, $eventID)
	{	
		// Configuration.
		// Should fill in value before running this script
		// $access_token = "EAAJTIp9KLtYBAHNYL97rT5d5KF49qRFddJl0WX5SoWJDZAevetkko98cTwoOQqGKQwNzg9jhlefre0Vr9TMsuF647MlOXZBRf9xTZCt11HHFgCFnvfQcudwXulG9jdZCYLJES9pdSGynrVABg9ZCXpjOUujlZA3FweVoZAmbqw3cp6Mmz4fFjiuD79uUJJE3XwZD";
		// $pixel_id = 1197607317622995;

		$access_token = "EAAKZAgEWZBYz0BOwu16WAZC6xGgkY1rvqoetRhE90oj0tCorMIybLIDYoqscTIl17YZCUJmbfzA879tvZCZAK6ZA0txZBjyOMdeoZBZAZCZBhTb3lI1Fr6zOnG60N56xOVEH0zgGlNwR2v12fwLjOWyd3cpNCmNSafBhf499RwCMs4sBmmhs1nLB9dEW54CaInmXSkF92wZDZD";
          $pixel_id = 594573298147439;

		if (is_null($access_token) || is_null($pixel_id)) {
		  throw new Exception(
		    'You must set your access token and pixel id before executing'
		  );
		}

		// Initialize
		Api::init(null, null, $access_token);
		$api = Api::instance();
		//$api->setLogger(new CurlLogger());

		$user_data = new UserData();
		$user_data
		  ->setEmail($email)
		  ->setPhone($phone)
		  ->setCountryCode($countryCode)
		  ->setLastName($lname)
		  ->setFirstName($fname)
		  ->setClientIpAddress($ipAddress)
		  ->setClientUserAgent($userAgent);
		  


		// Create Server Side Event Object
		$event = new Event();
		$event
		  ->setEventName($eventName)
		  ->setEventTime(time())
		  ->setEventSourceUrl($sourceURL)
		  ->setUserData($user_data)
		  ->setActionSource($actionSource)
		  ->setEventId($eventID);

		$events = array();
		array_push($events, $event);
		array_push($events, $event);

		// Create event request
		$request = new EventRequest($pixel_id);
		$request
			->setEvents($events)
		 	->setTestEventCode("TEST31122");

		// Execute the request
		$response = $request->execute();

		print_r($response);
	}

	function getLastEventID($tableName)
	{
		$getLastEventID = $connect -> prepare("SELECT MAX(id) as id FROM `".$tableName."` ");
		$getLastEventID->execute();
		$LastEventIDResult = $getLastEventID->get_result();
		$LastEventIDFetch = $LastEventIDResult->fetch_assoc();
		$LastEventID = $LastEventIDFetch['id'];
		return $LastEventID;
	}

	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $sourceUrl = "https://";   
    else  
         $sourceUrl = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $sourceUrl.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $sourceUrl.= $_SERVER['REQUEST_URI'];    



	if(isset($_POST['setAppointment']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
				
		$countryCode = strtolower(getCountryCode($phone));
		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone))
		{

			sendEvent($email, $phone, $countryCode, $lname, $fname, get_client_ip(), $_SERVER['HTTP_USER_AGENT'], "lead", $sourceUrl, "website", getLastEventID("appointments")+1);

			$query = $connect -> prepare("INSERT INTO appointments(fname,lname,email,phone) VALUES (?,?,?,?)");
			$query->bind_param("ssss",$fname,$lname,$email,$phone);
			$query->execute();
			$query->close();

			header("location:/".$referer);
		}else{
			echo $phone;
		}
	}

	if(isset($_POST['mobile_setAppointment']))
	{
		$fname = $_POST['mobile_fname'];
		$lname = $_POST['mobile_lname'];
		$email = $_POST['mobile_email'];
		$phone = $_POST['mobile_phone'];
				
		$countryCode = strtolower(getCountryCode($phone));
		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone))
		{

			sendEvent($email, $phone, $countryCode, $lname, $fname, get_client_ip(), $_SERVER['HTTP_USER_AGENT'], "lead", $sourceUrl, "website", getLastEventID("appointments")+1);

			$query = $connect -> prepare("INSERT INTO appointments(fname,lname,email,phone) VALUES (?,?,?,?)");
			$query->bind_param("ssss",$fname,$lname,$email,$phone);
			$query->execute();
			$query->close();

			header("location:/".$referer);
		}
	}

	if(isset($_POST['contactMessage']))
	{

		$fullName = $_POST['fullName'];
		$fname = explode(" ", $fullName)[0];
		$lname = explode(" ", $fullName)[1];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$msg = $_POST['msg'];
		$countryCode = strtolower(getCountryCode($phone));

		if(!empty($fullName) && !empty($email) && !empty($phone) && !empty($subject) && !empty($msg))
		{

			sendEvent($email, $phone, $countryCode, $lname, $fname, get_client_ip(), $_SERVER['HTTP_USER_AGENT'], "Contact", $sourceUrl, "website", getLastEventID("landing_msg")+1);

			$query = $connect -> prepare("INSERT INTO landing_msg(fullName, email,phone,subject,msg) VALUES (?,?,?,?,?)");
			$query->bind_param("sssss",$fullName,$email,$phone,$subject,$msg);
			$query->execute();
			$query->close();
			// $from = "wael.mahfouz60@gmail.com";
			// $headers = 'From: '.$fullName.'<'.$from.'>';
			// mail($email, $subject, $msg, $headers);


			header("location:/".$referer);
		}
	}

?>