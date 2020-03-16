<?php
include "header.php";
?>
<link rel="stylesheet" type="text/css" href="css/booking.css">
<?php
	$conn = mysqli_connect('localhost','root','','busbooking');

	if (isset($_POST['book_search'])) {
		$depature = $_POST['dept_place'];
		$destination = $_POST['dest'];
		$date = $_POST['book_date'];

		$query = "SELECT * FROM travel_schedule WHERE date='$date'";

        $query_run = mysqli_query($conn, $query);
        ?>

<body class="bg-gradient-primary">
	<div class="col-md-11 m-auto">
 		<div class="card container">
 		<h5 class="card-title mt-2 text-center">Welcome to our Booking Section</h5>
 			<h5 class="card-title text-center">Luxury Coaches Ltd</h5>
 			<?php
				if ($query_run) {
			?>
		    <h6 class="card-title text-left"><img class="fa ml-2 mr-1" src="images/fa/calender.png">Depature Date: 22ND DECEMBER,2019</h4>
 		
 		<!--traveling Info-->
				<div class="card m-auto">
					<div class="card-header" style="background-color: #D6D8D9;">Tavelling Information</div>
					<div class="card-body">
						<div class="m-auto">
							<div class="table-responsive table-striped">          
								  <table class="table">
								    <thead>
								      <tr>
								        <th>Route</th>
								        <th>Bus RegNo</th>
								        <th>Depature</th>
								        <th>Fare</th>
								      </tr>
								    </thead>
								    <tbody>
								    	 <?php
						                        if (mysqli_num_rows($query_run)>0) {
						                          while ( $row = mysqli_fetch_assoc($query_run)) {
						                            
						                   ?>
								      <tr>
								        <td><?php echo $row['depature'];  echo " - "; echo $row['destination'];?></td>
								        <td><?php echo $row['regno'];?></td>
								        <td><?php echo $row['time'];?></td>
								        <td><?php echo $row['fare'];?></td>
								      </tr>
								        <?php
				                          	}
				                        }else{
				                          echo "No records found";
				                        }

				                      ?>
				                       <?php
											}else{
											header('Location: booking.php');
											}
										}?>
									</tbody>
								  </table>
							</div>
			       		</div>
					</div>
				</div>
			</div>
				<!--Booking Guidelines-->
				<div class="my-2">
					<div class="alert alert-dark" role="alert">
					  -You may book as many seats as you wish..<br>
					  -Book by clicking on white seats.<br>
					  -Green seats mean they have already been booked, and you can therefore not bookthem.
					</div>
				</div>
				<!--arrangement-->
		<div class="row">
				<div class="col-md-6" style="background-color: #F2F2F2;">
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-secondary col-md-2">DOOR</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-danger col-md-2">DRIVER</button>
				</div>
				<div class="row m-auto justify-content-center">
					<a href="#modal4" class="button btn btn-outline-success col-md-1" data-toggle="modal">4</a>
					<button class="button btn btn-outline-success col-md-1">3</button>
					
					<div class="col-md-1"></div>
					<button class="button btn btn-outline-success col-md-1">2</button>
					<button class="button btn btn-outline-success col-md-1">1</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">8</button>
					<button class="button btn btn-outline-success col-md-1">7</button>
					<div class="col-md-1"></div>
					
					<button id="demo" type="submit" class="button btn btn-outline-success col-md-1" onclick="myFunction()">6</button>
					<button class="button btn btn-outline-success col-md-1">5</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">12</button>
					<button class="button btn btn-outline-success col-md-1">11</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">10</button>
					<button class="button btn btn-outline-success col-md-1">9</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">16</button>
					<button class="button btn btn-success col-md-1">15</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">14</button>
					<button class="button btn btn-success col-md-1">13</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">20</button>
					<button class="button btn btn-outline-success col-md-1">19</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">18</button>
					<button class="button btn btn-outline-success col-md-1">17</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">24</button>
					<button class="button btn btn-primary col-md-1">23</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">22</button>
					<button class="button btn btn-success col-md-1">21</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">28</button>
					<button class="button btn btn-outline-success col-md-1">27</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">34</button>
					<button class="button btn btn-outline-success col-md-1">33</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">32</button>
					<button class="button btn btn-outline-success col-md-1">31</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">30</button>
					<button class="button btn btn-outline-success col-md-1">29</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-success col-md-1">38</button>
					<button class="button btn btn-success col-md-1">37</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">36</button>
					<button class="button btn btn-outline-success col-md-1">35</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-outline-success col-md-1">42</button>
					<button class="button btn btn-outline-success col-md-1">41</button>
					<div class="col-md-1"></div>
					
					<button class="button btn btn-outline-success col-md-1">40</button>
					<button class="button btn btn-outline-success col-md-1">39</button>
				</div>
				<div class="row m-auto justify-content-center">
					<button class="button btn btn-success col-md-1">47</button>
					<button class="button btn btn-success col-md-1">46</button>
					<div class="button btn btn-outline-success col-md-1">45</div>
					
					<button class="button btn btn-outline-success col-md-1">44</button>
					<button class="button btn btn-outline-success col-md-1">43</button>
				</div>
			</div>
				<!--tickets-->
				<div class="card col-sm-6 m-auto" >
					<div class="card-header">Selected Seats</div>
					<div class="card-body">
						<div class="table-responsive">          
								  <table class="table">
								    <thead>
								      <tr>
								        <th>Seat</th>
								        <th>Class</th>
								        <th>Fare</th>
								        <th>Remove</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td>22</td>
								        <td>Normal</td>
								        <td>KSH 1,200</td>
								        <td>
								        	<button type="button" class="btn btn-danger">Remove</button>
								        </td>
								      </tr>
								    </tbody>
								  </table>
						</div>
					</div>
				</div>
	</div>

			<div class="form-group row">
				<div class="col-md-6"></div>
				<div class="card col-md-6 m-auto">
				  <div class="card-header">Passenger Details</div>
				  <div class="card-body">
				  	<form class="needs-validation" action="passenger.php" method="POST" novalidate>
					 <div class="form-row">
					    <div class="col-md-6">
					      <label for="validationCustom01">Full Names</label>
					      <input type="text" class="form-control" id="validationCustom01" name="full_names" required>
					      <div class="valid-feedback">
					        Looks good!
					      </div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="validationCustom02">Telephone</label>
					      <input type="text" class="form-control" id="validationCustom02" name="telephone" required>
					      <div class="valid-feedback">
					        Looks good!
					      </div>
					    </div>
					</div>
					<div class="form-row">
					    <div class="col-md-6">
					      <label for="validationCustom01">ID / Passport #</label>
					      <input type="text" class="form-control" id="validationCustom01" name="full_names" required>
					      <div class="valid-feedback">
					        Looks good!
					      </div>
					    </div>
					     <div class="col-md-6">
						      <label for="validationCustom04">Nationality</label>
						      <select class="custom-select" id="validationCustom04" required>
							        <option value="Kenyan" selected>Kenyan</option>
							        <option value="Tanzanian">Tanzanian</option>
							        <option value="Ugandan">Ugandan</option>
							        <option value="Other">Other</option>
						      </select>
						      <div class="invalid-feedback">
						        Please select a valid nationality.
						      </div>
						 </div>  
					</div>
					<!--modal contents-->
					<script>
						$(document).ready(function(){
							$('.open-modal').click(function(){
								$('#modal4').modal('show');
							});
						});
					</script>
					<div id="modal4" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dissmis="modal">x</button>
									<h4 class="modal-title">Tavellers Ticket</h4>
								</div>
								<div class="modal-body">
									<p>abcd</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Not Now</button>
									<button type="button" class="btn btn-primary">Not Now</button>
								</div>
							</div>
						</div>
					</div>
						
			  <button class="btn btn-info btn-block btn-lg mt-3" type="submit"><img class="fa mr-2" src="images/fa/login.png">Proceed to payment</button>
			</form>

			<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function() {
			  'use strict';
			  window.addEventListener('load', function() {
			    // Fetch all the forms we want to apply custom Bootstrap validation styles to
			    var forms = document.getElementsByClassName('needs-validation');
			    // Loop over them and prevent submission
			    var validation = Array.prototype.filter.call(forms, function(form) {
			      form.addEventListener('submit', function(event) {
			        if (form.checkValidity() === false) {
			          event.preventDefault();
			          event.stopPropagation();
			        }
			        form.classList.add('was-validated');
			      }, false);
			    });
			  }, false);
			})();
			</script>
			<!--seat booking-->
			<script>
				function myFunction() {
				    var x = document.getElementById("demo");
				    x.style.background-color = "#1cc88a";           
				    x.style.color = "red"; 
				}

			</script>

			</div>
		</div>
	</div>
	</div>
</h6>
</div>
</div>
<?php
include('footer.php');
?>