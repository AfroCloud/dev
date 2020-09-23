<?php


//echo 'this happened';

$secrekey = 'd9ce29f6-7ff2-4b6a-bf5e-556e5bc8e088';

$url = 'https://stage.zion.umc.utah.edu/wp-json/uu/v1/searchCourses?key='.$secrekey.'&course=' . urlencode($_GET['course']);

//header('Content-type: application/json');
$response = sendHttpRequest($url);

$json_response = json_decode($response);
if($json_response) {
	echo $response;
}
else {
	$error = ['msg' => $response];
	echo json_encode($error);
}

function sendHttpRequest( $url, $data = null, $headers = [] )
	{
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_HEADER, 0 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		if ( $data !== null ) {
			curl_setopt( $ch, CURLOPT_POST, 1 );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
		}
		if ( $headers ) {
			curl_setopt( $ch, CURLOPT_HEADER, $headers );
		}
		curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 ); //uncomment this for local host dev
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 ); //uncomment this for local host dev
		curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 0 );
		curl_setopt( $ch, CURLOPT_TIMEOUT, 600 );
		$response         = curl_exec( $ch );
		$httpStatus = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
		if ( curl_error( $ch ) ) {
			$error     = curl_error( $ch );
			//$httpError = $this->error;
		}

		curl_close( $ch );

		return $response;

    }


?>