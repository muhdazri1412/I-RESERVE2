<?php 
session_start();
include('connect-db.php');


if(isset($_GET['date']) ){
    $date = $_GET['date'];
    
    

    $stmt = $con->prepare("select * from bookings where date = ? ");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
    
}


   

/*
if(isset($_GET['venues'])){
    $venues = $_GET['venues'];

  
}else{
    $venues =0;
}

*/

$venuechosen = $_GET['venue'];
echo $venuechosen;

if(isset($_POST['submit'])){
   
    
    $timeslot = $_POST['timeslot'];
    
  
    
    $stmt = $con->prepare("select * from bookings where date = ? AND timeslot=? AND venue_id = ?");
    $stmt->bind_param('ssi', $date,$timeslot,$venuechosen);
   
    

    if($stmt->execute()){
        $result = $stmt-> get_result();
        if($result->num_rows>0){

            $msg = "<div class='alert alert-danger'>Already Booked</div>";

        }else{

            $stmt = $con->prepare("INSERT INTO bookings (matricno,date,timeslot,venue_id) VALUES (?,?,?,?)");
            $stmt->bind_param('sssi',$_SESSION['matricno'],$date, $timeslot,$venuechosen);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successfull</div>";
            $bookings[]=$timeslot;

            header('Location:bookingform.php');
            $stmt->close();
            $con->close();

        }

    }
    
}


$duration = 60;
$cleanup = 0;
$start ="08:00";
$end = "17:00";

function timeslots($duration,$cleanup,$start,$end)
{
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval= new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start;$intStart<$end;$intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod ->add($interval);
        if($endPeriod>$end){
            break;
        }
        $slots[]=$intStart->format("H:iA")."-". $endPeriod ->format("H:iA");
    }

    return $slots;

}

?>

<!doctype html>
<html lang="en">


  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        
       
       
        <?php echo isset($msg)?$msg:""; ?>
       
        
        <div class="hourpicker">
        <span class=hourlyheader>Book for one hour</span>
        <span class=dailyheader>Book for one day</span>
        </div>


        <div class="timebutton"> 
            
<?php $timeslots = timeslots($duration,$cleanup,$start,$end);


foreach($timeslots as $ts){
    


    
?>


            <?php if (in_array($ts, $bookings)){ ?>

        
                <div class="flextime">
                <button class="btn btn-danger"><?php echo $ts; ?></button>
                </div>
            
            <?php }else{ ?>

                <div class="flextime">
                <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                </div>
            
        
                        <?php } ?>
                       
                        
             
            <?php }?>
         
    
        </div>

    </div>


        



    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Booking for:   <?php echo date('m/d/Y', strtotime($date)); ?></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post">
                               <div class="form-group">
                                    <label for="">Time Slot</label>
                                    <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                    
                                    
                                </div>
                                <div class="form-group pull-right">
                                    <button name="submit" type="submit" class="btn btn-primary" href="bookingform.html">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
    });
</script>

</body>

</html>
