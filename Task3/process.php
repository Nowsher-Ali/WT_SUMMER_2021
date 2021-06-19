<?php include "control/myaction.php"; ?>

<?php
   	
	   $formdata = array(
	      'Full Name' => $_POST["fname"],
	      'Email' => $_POST["email"],
	      'Password' => $_POST["Password"],
          'Comment' => $_POST['Comment'],
          'Gender' => $_POST['gender'],
           'File Path' => $target_file,
		   'Hobby 1' => $_POST['Hobby1'],
		   'Hobby 2' => $_POST['Hobby2'],
		   'Hobby 3' => $_POST['Hobby3']
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] = $formdata;

	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 foreach($mydata as $myobject)
	 {
        foreach($myobject as $key=>$value)
        {
            echo "Your ".$key." is: ".$value."<br>";
        } 
	}
	
?>