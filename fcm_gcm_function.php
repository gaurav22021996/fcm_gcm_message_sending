private function sendPushNotification($registation_ids, $message) {
	 
	 
	 
	// var_dump($message);die;
	 
	 
	   $fields = array(
            'to' => $registation_ids,
            'data' => $message,
        );
	 
         
      
 
        // Set POST variables
        $url = 'https://fcm.googleapis.com/fcm/send';
 
        $headers = array(
            'Authorization: key=' . 'AAAAuxTEZT4:APA91bF5Bji5EnBLIQhWn_JyEOfnEs37XYk-zhN7MqCBLh4IfQmJeW7COe9q5TnqnVGLMN_VbaM4q-A1F0uuWj2-FzJQNw7KWlNQN-yJvv1iGPm8jVxlN7d3_HDucX9-M9DTsZWoxB8O',
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
 
        // Close connection
        curl_close($ch);
 
        return $result;
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	    public function GCM($registation_ids, $message)
	    {
	    
	    	$GOOGLE_API_KEY='AIzaSyC9YNr8RQgI979zWZXEb_davZ6sTkRJUEE';


	    	// echo $message;
	    	// var_dump($registation_ids);


	        $url = 'https://android.googleapis.com/gcm/send';

	 

	        $fields = array(

	            'registration_ids' => $registation_ids,

	            'data' => array('message'=>$message['msg'],'type'=>$message['type']),

	        );

	 
	 	//var_dump($fields);die;
	 

	        $headers = array(

	            'Authorization: key=' . "AIzaSyDnhKJnXpCElwFbqq0EzRxcgSuFnEeT64E",

	            'Content-Type: application/json'

	        );
	        $ch = curl_init();


	        curl_setopt($ch, CURLOPT_URL, $url);

	        curl_setopt($ch, CURLOPT_POST, true);

	        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	 
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	 

	        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));


	        $result = curl_exec($ch);
	        
	        echo $result;

	        if ($result === FALSE) {

	            die('Curl failed: ' . curl_error($ch));

	        }
	        else
	        {
	        echo "succcess";
	        }

	        curl_close($ch);
	    }
