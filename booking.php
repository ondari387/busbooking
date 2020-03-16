<?php
include "header.php";
?>
<link rel="stylesheet" type="text/css" href="css/booking.css">

<div class="d-flex w-70 p-1 m-auto flex-column">
<!--bus booking-->
	<div class="card col-md-11 m-auto">
	  <div class="card-header border-left-primary">
	    Luxury Booking
	  </div>
	  <div class="card-body text-left border-left-primary">
	    <h5 class="card-title">I would like to travel...</h5>
	    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	    <div class="row">
	    	<div class="col-md-3">
	    		<div class="form-group">
				    <label>From:</label>
				    <input type="text" name="dept_place" class="form-control">
			  	</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="form-group">
				    <label>To:</label>
				    <input type="text" name="dest" class="form-control">
			  	</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="form-group">
				    <label>On this date:</label>
				    <input type="date" name="book_date" class="form-control">
			  	</div>
	    	</div>
	    	<div class="col-md-3 m-auto">
	    		<button type="submit" name="book_search" class="btn btn-outline-info mt-3 col-md-12">Search</button>
	    	</div>
	    </div> 
		</form>
	  </div>
	</div>
	

	<?php
	$conn = mysqli_connect('localhost','root','','busbooking');

	if (isset($_POST['book_search'])) {
		$depature = $_POST['dept_place'];
		$destination = $_POST['dest'];
		$date = $_POST['book_date'];

		$query = "SELECT * FROM travel_schedule WHERE date='$date' AND destination= '$destination'AND depature = '$depature'";

        $query_run = mysqli_query($conn, $query);

        ?>
		<?php
		if ($query_run) {
		?>
		<!--ticket rep-->
		<h5 class="card-title mt-5 ml-5 text-left"><img class="fa ml-2 mr-1" src="images/fa/calender.png">Scheduled depature</h5>
		
		<div class="container p-5 col-md-11 card">
		  			<?php        	
		  				$query_run = mysqli_query($conn, $query);
                            
                   ?>
              <div class="table-responsive"> 
		 		 <h4 class="card-title text-center m-2">Luxury Coaches Ltd</h4>
				  <table class="table table-condensed table-hover">
				    <thead>
				      <tr>
				        <th>Route</th>
				        <th>RegNo</th>
				        <th>Depature</th>
				        <th>Fare</th>
				        <th>Seats</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php if (mysqli_num_rows($query_run)>0) {
                          while ( $row = mysqli_fetch_assoc($query_run)) {
                          	?>
				      <tr>
				      	<h6><img class="fa mr-1" src="images/fa/calender.png">Depature Date: <?php echo $row['date'];?></h6>
				        <td><?php echo $row['depature']; echo " - "; echo $row['destination'];?></td>
				        <td><?php echo $row['regno'];?></td>
				        <td><?php echo $row['time'];?></td>
				        <td><?php echo $row['fare'];?></td>
				        
				        <td>
				        	<div class="col-md-12">
				       			<a href="booking3.php" class="btn btn-info"><!--<img class="fa mr-1" src="images/fa/login.png">-->Book</a>
				       		</div>
				        </td>
				      </tr>
		                   <?php
		                          }
		                        }else{
		                          echo "No sheduled depature";
		                        }

		                      ?>

					      <?php
							}else{
							echo "failed".mysqli_error($conn);
							
							}
						}?>
				    </tbody>
				  </table>
				  </div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    