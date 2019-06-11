<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>John's Birthday</title>
    <!--css link-->
    <link rel="stylesheet" type="text/css" href="index.css">
    <!--Bootstrap css link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--java script link-->
    <script src="index.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<section>
<div id ="firstdiv" align="center">
<?php include('header.php'); ?>



<?php 
echo '</div></section>';
    $showThankyou=false;
    if(count($_POST) >0){
        $error="";
      if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $error=$error . ", Invalid email";
      }
      if(empty($_POST['phone']) ||!(is_numeric($_POST['phone']) && strlen($_POST['phone'])>=9 && strlen($_POST['phone'])<=10 )    ){
        $error=$error .  ",  Phone must be all numbers and 9-10 digits long";
      }
      if(empty($_POST['firstname']) ||ctype_alpha(str_replace(' ', '',   $_POST['firstname'])) === false   ){
        $error=$error . ", first name should only contain letters";
      }
      if(empty($_POST['numofguests']) || !(is_numeric($_POST['numofguests']) && $_POST['nguests']>0 )    ){
        $error=$error . ", You need to have at least one guest (yourself)";
      }
      if(!(strlen($_POST['comments']) <=200 )){
        $error=$error . ", Comment is too long";
      }
     if(!empty($error)){
    echo $error;
     } else {$showThankyou=true;}
    }

if($showThankyou){
$thanks= "Thank you ".$_POST['fname'].", for registering to my event.
    <br> Number of participants: ".$_POST['nguests'];
    echo $thanks;
}else{
include("eventDetails.php");
include("rsvp.php");}

?>
<div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Contact us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" align="center">
                <img src="John8.jpeg"  alt="John">
            </div>
            <div class="modal-footer">
               <a href="mailto:filipovanna93@gmail.com?Subject=Johns birtday&body=Reservation"><button type="button" class="btn btn-primary">Send Mail</button></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>

</body>
</html>