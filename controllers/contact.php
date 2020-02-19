<?php

if(isset($_POST['send'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message =$_POST["message"];
 $namestatus =false;
 $emailstatus =false;
 $messagestatus =false;

 if(empty($name)){
     echo "Enter your name,please!";
     $namestatus=true;

 }
 elseif(empty($email)){
    echo "Enter your Email,please!";
    $emailstatus=true;

 } elseif(empty($message)){
    echo "Enter your message,please!";
    $messagestatus=true;

 }elseif(!preg_match('/^[a-zA-Z\s]+$/',$name)){
    echo "Name format not allowed,enter only alphabets!";
    $namestatus=true;

 }
 elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Email not valid";
    $emailstatus=true;

 }

 //if the form is valide


 if(($emailstatus == false) && ($namestatus == false) && ($messagestatus == false)){
    $conn =mysqli_connect("localhost","root","","HMorgan.com");
    if($conn){
        $new_name=mysqli_real_escape_string($conn,$name);
        $new_email=mysqli_real_escape_string($conn,$email);
        $new_message=mysqli_real_escape_string($conn,$message);
        $sql= "INSERT INTO Contacts(`name`,email,`message`) VALUES('$new_name','$new_email','$new_message')";

        //passing the query
        $passing=mysqli_query($conn,$sql);
        if($passing){
            
          
               if(mysqli_close($conn)){
                   
//mailing
               
           }
           

           

        }

    }else{
        echo "Error connecting to the database";
    }

 }
}

?>

<script type="text/javascript">

var namestatus="<?php echo $namestatus  ?>";
var emailstatus="<?php echo $emailstatus  ?>";
var messagestatus="<?php echo $messagestatus  ?>";
if( namestatus == true){
    $("#contact_form input").removeClass("alert alert-warning");
    $("#name").addClass("alert alert-warning");

}
if( emailstatus == true){
    $("#contact_form input").removeClass("alert alert-warning");
    $("#email").addClass("alert alert-warning");

}
if( messagestatus == true){
    $("#contact_form input").removeClass("alert alert-warning");
    $("#message").addClass("alert alert-warning");

}

</script>