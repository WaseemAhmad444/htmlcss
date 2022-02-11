<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order Booking</title>
</head>
<body style="background-image: url(fyp/img/carousel-1.jpg);">

<?php include("includes/header.php"); ?>
        <h1 >Order booking<h1>
        <div class="text-center col-md-4">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-2" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-2" placeholder="Order type (e.g Garments, bedsheets )" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-2" placeholder="quantity  (e.g 2suits, 3siuits e.t.c  )" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-2" placeholder="Return( Urgent or Normal)" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-2" placeholder="address" required="required" />
                    </div>


                    <button class="btn btn-primary py-md-3 px-md-5 mt-2" onclick="myFunction()">Save</button>
<script>
function myFunction() {
  alert("Order Receive Sucessfully!");

}
</script>
<br>


                            </p>

                            <a href="student.php" class="btn btn-primary py-md-3 px-md-5 mt-2">BACK</a>
                                    
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

</body>
</html>