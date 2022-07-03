<!DOCTYPE html>
<html>
  
<head>
    <title>Mesaj</title>
</head>
  
<body>
    
        <?php
  
        $conn = mysqli_connect("127.0.0.1", "root", "", "dmgbank");
          
        // Verifica conexiunea
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $nume =  $_REQUEST['nume'];
        $email = $_REQUEST['email'];
        $mesaj =  $_REQUEST['mesaj'];
        
        $sql = "INSERT INTO contact  VALUES ('$nume', '$email','$mesaj')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Mesajul dumneavoastra a fost inregistrat cu succes! 
                Un operator va lua legatura cu dumneavoastra cat de curand.
                Multumim ca ati ales serviciile DMG Bank" 
                . " </h3>"; 
  
            echo nl2br("\n$nume\n $email\n "
                . "\n $mesaj\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        //Inchide conexiunea
        mysqli_close($conn);
        ?>
    
</body>
  
</html>