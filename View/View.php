<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Booking Form HTML Template</title>

	<link href="https://fonts.googleapis.com/css?family=Alegreya:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="View/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="View/css/style.css" />



</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-header">
										<h2>Tmaniya</h2>
									</div>
								</div>
								<div class="col-md-7">
									<div class="row no-margin">
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Depart City</span>
												<input class="form-control" type="text" placeholder="city1">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Depart City</span>
												<input class="form-control" type="text" placeholder="city2">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">Guests</span>
												<select class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">Kids</span>
												<select class="form-control">
													<option>0</option>
													<option>1</option>
													<option>2</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-btn">
										<button class="submit-btn">Check availability</button>
									</div>
								</div>
							</div>

							
						</form>
					</div>
				</div>
			</div>
			<?php foreach ($horraires as $horraire): ?>
			<div class="container" style="margin-top: 10px;">
				<div class="row" style="height: 10%;">
					<div class="booking-form">
						
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-header ">
										<img src="View\img\image_company\<?php echo $horraire->getImagecompany(); ?>" alt="Tmaniya Image" style="width: 10vw; height: 5vw;">
									</div>
								</div>
								<div class="col-md-7">
									<div class="row no-margin">
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Depart City</span>
												<div class="form-control" type="text" placeholder="city1"><?php echo $horraire->getDepartnamecity(); ?></div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Depart City</span>
												<div class="form-control" type="text" placeholder="city1"><?php echo $horraire->getArrivetnamecity(); ?></div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<span class="form-label">Date</span>
												<div class="form-control">
												<td><?php echo $horraire->getNhar(); ?></td>
												</div>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<span class="form-label">hour depart</span>
												<div class="form-control" type = "hour">
												<?php echo $horraire->gethr_dep(); ?>
												</div>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<span class="form-label">hour arrive</span>
												<div class="form-control">
												<td><?php echo $horraire->getHr_arv(); ?></td>
												</div>
												<span class="select-arrow"></span>
											</div>
										</div>
										
									</div>
									
								</div>
								<div class="col-md-2">
									<div class="form-btn">
										<button class="submit-btn">see  info</button>
									</div>
								</div>
								
							</div>

							
						
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		
		
	</div>
	
</body>

</html>