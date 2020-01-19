<html>
<head1>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jQuery 3.3.1.js"></script>

</head1>

<body>

    <?php
        session_start();
        $json = $_POST['seats'];
        $json_string = stripslashes($json);
        $data = json_decode($json_string, true);
        echo "<pre>";
        print_r($data);
        $dataString = "";
        foreach($data as $d){
            if($dataString==""){
                $dataString = $d;
            }else{
                $dataString = $dataString . "," . $d;
            }
        }
        echo $dataString;
    ?>
    <br/>
    <?php
        $_SESSION['bookedSeats'] = $dataString;
        echo $_SESSION['bookedSeats'];
    ?>
</body>
</html>
