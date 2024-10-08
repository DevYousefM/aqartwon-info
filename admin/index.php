<?php 
	session_start();
	$connect = new mysqli('localhost', 'root', '', 'aqartown');
	// $connect = new mysqli('localhost', 'landing_user', 'Aqar@town2023', 'aqar_website');

	if(isset($_SESSION['adminID']))
	{
		if(isset($_GET['do']) && $_GET['do'] == "logout")
		{
			session_destroy();
			header("location: ../");
		}
		$msgQuery = $connect->prepare("SELECT * FROM landing_msg ORDER BY id DESC");
		$msgQuery->execute();
		$msgResult = $msgQuery->get_result();
		$msgNumRows = $msgResult->num_rows;


		$appointmentsQuery = $connect->prepare("SELECT * FROM appointments ORDER BY id DESC");
		$appointmentsQuery->execute();
		$appointmentsResult = $appointmentsQuery->get_result();
		$appointmentsNumRows = $appointmentsResult->num_rows;
		?>
		
		<!DOCTYPE html>
		<html style="font-size: 16px;" lang="av">
			<head>
			    <meta name="viewport" content="width=device-width, initial-scale=1.0">
			    <meta charset="utf-8">
			    <meta name="keywords" content="">
			    <meta name="description" content="">
			    <title>Page 2</title>
			    <link rel="stylesheet" href="../nicepage.css" media="screen">
				<link rel="stylesheet" href="style.css" media="screen">
			    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
			    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
			    <meta name="generator" content="Nicepage 5.8.13, nicepage.com">
			    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
			    
			    
			    <script type="application/ld+json">
			    	{
						"@context": "http://schema.org",
						"@type": "Organization",
						"name": "Aqar Town",
						"logo": "images/1647882841header-logo.png",
						"sameAs": [
								"tel:01100659191",
								"https://www.facebook.com/Aqartown",
								"https://www.instagram.com/aqar_town_business/",
								"https://api.whatsapp.com/send/?phone=%2B201100659191&text&app_absent=0",
								"https://www.linkedin.com/company/aqar-town",
								"https://www.facebook.com/AqarTownBusiness"
						]
					}
				</script>
			    <meta name="theme-color" content="#478ac9">
			    <meta property="og:title" content="Page 2">
			    <meta property="og:description" content="">
			    <meta property="og:type" content="website">
			  	<meta data-intl-tel-input-cdn-path="intlTelInput/" />
		  	</head>
		  	<body class="u-body u-xl-mode">
		  		<header class="u-clearfix u-header u-palette-1-dark-1 u-sticky u-sticky-7142 u-header" id="sec-fb85">
			  		<style class="u-sticky-style" data-style-id="7142">
			  			.u-sticky-fixed.u-sticky-7142:before, .u-body.u-sticky-fixed .u-sticky-7142:before {
							borders: top right bottom left !important
						}
					</style>
					<div class="u-clearfix u-sheet u-sheet-1">
				        <a href="https://aqartown.com/" class="u-align-right u-image u-logo u-image-1" data-image-width="832" data-image-height="300" title="Aqar Town">
				          <img src="../images/1647882841header-logo.png" class="u-logo-image u-logo-image-1">
				        </a>
				        <nav class="u-align-left u-menu u-menu-one-level u-menu-1">
				          	<div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
					            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-palette-2-base" href="#" style="">
					              	<svg class="u-svg-link" viewBox="0 0 24 24">
					              		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
					              	</svg>
					              	<svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
					              		<g>
							              	<rect y="1" width="16" height="2"></rect>
							              	<rect y="7" width="16" height="2"></rect>
							              	<rect y="13" width="16" height="2"></rect>
										</g>
									</svg>
					            </a>
				          	</div>
				          	<div class="u-custom-menu u-nav-container">
				            	<ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
				            		<li class="u-nav-item">
				            			<a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-custom-color-4 u-text-body-alt-color u-text-hover-grey-10" href="index.php?do=logout" style="padding: 10px;">Logout</a>
									</li>
								</ul>
				          	</div>
				          	<div class="u-custom-menu u-nav-container-collapse">
				            	<div class="u-container-style u-custom-color-5 u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
				              		<div class="u-inner-container-layout u-sidenav-overflow">
				                		<div class="u-menu-close"></div>
				                		<ul class="u-align-center u-nav u-popupmenu-items u-spacing-0 u-unstyled u-nav-2">
				                			<li class="u-nav-item">
				                				<a class="u-button-style u-nav-link" href="index.php?do=logout">Logout</a>
											</li>
										</ul>
				              		</div>
				        		</div>
				            	<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
				          	</div>
				        </nav>
			  		</div>
		  		</header>
			    <section class="u-align-center u-clearfix u-section-1" id="sec-cf38">
			      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			        	<div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
				          	<ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
				            	<li class="u-tab-item" role="presentation">
				              	<a class="active u-active-custom-color-5 u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Messages</a>
				            	</li>
					            <li class="u-tab-item" role="presentation">
					              <a class="u-active-custom-color-5 u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Appointments</a>
					            </li>
				          	</ul>
				          	<div class="u-tab-content">
				            	<div class="u-align-left u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
				            		<div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
					  			 		<input type="text" name="search" placeholder="Name, email, phone..." class="u-input-1" id="searchBarMsg">
					  			 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
					  			 		<script type="text/javascript">
					  			 			$(document).ready(function(){
					  			 				$("#searchBarMsg").on("keyup change", function(){
					  			 					var query = $(this).val();
				  			 						$.ajax({
				  			 							url: "adminSearch.php",
				  			 							method: "POST",
				  			 							data: {searchBarMsg:query},
				  			 							success: function(data)
				  			 							{
				  			 								$("#tableDataMsg").html(data)
				  			 							}
				  			 						})
					  			 				});
					  			 			});
					  			 		</script>
				  			 		</div>
				              		<div class="u-container-layout u-container-layout-1">
				                		<div class="u-align-center u-table u-table-responsive u-table-1">
						                  	<?php 
						                  		if($msgNumRows > 0)
						                  		{?>
					                  			<table class="u-table-entity">
								                    <colgroup>
									                    <col width="3%">
									                    <col width="7%">
									                    <col width="16.6%">
									                    <col width="16.6%">
									                    <col width="16.6%">
									                    <col width="17%">
									                    <col width="17%">
								                    </colgroup>
								                    <thead class="u-custom-color-5 u-table-header u-table-header-1">
								                      	<tr>
									                    	<th scope="col" class=""></th>
									                    	<th scope="col" class="">#ID</th>
									                        <th scope="col" class="">Name</th>
									                        <th scope="col" class="">E-mail</th>
									                        <th scope="col" class="">Phone</th>
									                        <th scope="col" class="">Subject</th>
									                        <th scope="col" class="">Action</th>
								                      	</tr>
								                    </thead>
						                    		<tbody class="u-table-alt-grey-5 u-table-body" id="tableDataMsg">
								                    <?php 
								                    	while($msgFetch = $msgResult->fetch_array())
								                    	{?>
									                      	<tr>
										                        <td scope="row" data-label="" class=""><input type="checkbox" name="" disabled <?php if($msgFetch['status'] == 1) echo "checked" ?>> </td>
										                        <td data-label="#ID" class=""><?php echo $msgFetch['id'] ?></td>
										                        <td data-label="Name" class=""><?php echo $msgFetch['fullName'] ?></td>
										                        <td data-label="E-mail" class=""><?php echo $msgFetch['email'] ?></td>
										                        <td data-label="Phone" class=""><?php echo $msgFetch['phone'] ?></td>
										                        <td data-label="Subject" class=""><?php echo $msgFetch['subject'] ?></td>
										                        <td data-label="Action" class="">
										                        	<button class="show" data-id="<?php echo $msgFetch['id'] ?>">SHOW</button>
										                        	<button class="deleteMsg" data-id="<?php echo $msgFetch['id'] ?>">DELETE</button>
										                        </td>
									                      	</tr>
								                    	<?php }
								                    ?>
						                    		</tbody>
								                </table>

						                  		<?php 

						                  		}
						                  		?>
					                  	<script type="text/javascript">
			                        		$(document).ready(function(){
			                        			$(".show").click(function(){
					  			 					var query = $(this).attr("data-id");
				  			 						$.ajax({
				  			 							url: "adminSearch.php",
				  			 							method: "POST",
				  			 							data: {getMessage:query},
				  			 							success: function(data)
				  			 							{
				  			 								$("#messageBox").html(data)
				  			 							}
				  			 						})
			                        				$("#messageBox").css("display","block");
			                        			});
			                        			$(".deleteMsg").click(function(){
			                        				var confirmation = confirm("Are you sure?");
						                  			if(confirmation)
			                        				{
				                        				var query = $(this).attr("data-id");
				                        				$.ajax({
				                        					url: "adminSearch.php",
				                        					method: "POST",
				                        					data: {deleteMessage:query}
				                        				})
				  			 							setTimeout(function(){
								                            location.reload();
							                          	}, 300);
			  			 							}
			                        			})
			                        		});
			                        	</script>
					               	 	</div>
					              	</div>
					              	<div class="u-clearfix u-sheet u-valign-middle u-sheet-3" id="messageBox">

		                  			</div>
					            </div>
				            	<div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
				            		<div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
					  			 		<input type="text" name="search" placeholder="Name, email, phone..." class="u-input-1" id="searchBarAppointments">
					  			 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
					  			 		<script type="text/javascript">
					  			 			$(document).ready(function(){
					  			 				$("#searchBarAppointments").on("keyup change", function(){
					  			 					var query = $(this).val();
				  			 						$.ajax({
				  			 							url: "adminSearch.php",
				  			 							method: "POST",
				  			 							data: {searchBarAppointments:query},
				  			 							success: function(data)
				  			 							{
				  			 								$("#tableDataAppointments").html(data)
				  			 							}
				  			 						})
					  			 				});
					  			 			});
					  			 		</script>
				  			 		</div>
					              	<div class="u-container-layout u-container-layout-2">
						                <div class="u-align-center u-table u-table-responsive u-table-2">
						                  	<?php 
						                  		if($appointmentsNumRows>0)
						                  		{?>
						                  			<table class="u-table-entity">
									                    <colgroup>
										                    <col width="3%">
										                    <col width="7%">
										                    <col width="20%">
										                    <col width="20%">
										                    <col width="20%">
										                    <col width="15%">
									                    </colgroup>
									                    <thead class="u-custom-color-5 u-table-header u-table-header-2">
									                      	<tr>
									                      		<th scope="col" class="u-border-3 u-border-white u-table-cell u-table-cell-31"></th>
										                        <th scope="col" class="u-border-3 u-border-white u-table-cell u-table-cell-31">#ID</th>
										                        <th scope="col" class="u-border-3 u-border-white u-table-cell u-table-cell-32">Name</th>
										                        <th scope="col" class="u-border-3 u-border-white u-table-cell u-table-cell-33">E-mail</th>
										                        <th scope="col" class="u-border-3 u-border-white u-table-cell u-table-cell-34">Phone</th>
										                        <th scope="col" class="u-border-3 u-border-white u-table-cell u-table-cell-35">Action</th>
									                      	</tr>
									                    </thead>
									                    <tbody class="u-table-alt-grey-5 u-table-body" id="tableDataAppointments">
									                      	<?php 
									                      		while($appointmentsFetch = $appointmentsResult->fetch_array())
									                      		{?>
									                      			<tr>
												                        <td scope="row" data-label="" class="u-table-cell"><input type="checkbox" name=""  <?php if($appointmentsFetch['status'] == 1){ echo "checked disabled";} ?> class="checkbox" data-id ="<?php echo $appointmentsFetch['id'] ?>"> </td>
												                        <td data-label="#ID" class="u-table-cell"><?php echo $appointmentsFetch['id'] ?></td>
												                        <td data-label="Name" class="u-table-cell"><?php echo $appointmentsFetch['fname'] . " " . $appointmentsFetch['lname']?></td>
												                        <td data-label="E-mail" class="u-table-cell"><?php echo $appointmentsFetch['email'] ?></td>
												                        <td data-label="Phone" class="u-table-cell"><?php echo $appointmentsFetch['phone'] ?></td>
												                        <td data-label="Action" class="u-table-cell">
												                        	<button class="deleteAppointments" data-id="<?php echo $appointmentsFetch['id'] ?>">DELETE</button>
												                        </td>
											                      	</tr>
									                      		<?php }
									                      	?>
									                    </tbody>
									                  </table>
						                  		<?php }
						                  	?>
						                  	<script type="text/javascript">
						                  		$(document).ready(function(){
						                  			$(".checkbox").click(function(){
						                  				console.log("clicked");
						                  				var query = $(this).attr("data-id");
						                  				console.log(query);
						                  				$.ajax({
					  			 							url: "adminSearch.php",
					  			 							method: "POST",
					  			 							data: {getAppointments:query}
				  			 							})
						                  			})

						                  			$(".deleteAppointments").click(function(){
						                  				var confirmation = confirm("Are you sure?");
						                  				if(confirmation)
						                  				{
					                        				var query = $(this).attr("data-id");
					                        				$.ajax({
					                        					url: "adminSearch.php",
					                        					method: "POST",
					                        					data: {deleteAppointments:query}
					                        				})
					  			 							setTimeout(function(){
									                            location.reload();
								                          	}, 300);
				  			 							}
			                        				})
						                  		});
						                  	</script>
						                </div>
					              	</div>
				            	</div>
			          		</div>
			        	</div>
			      	</div>
			    </section>
			</body>
		</html>

	<?php }
	else
	{
		if(isset($_POST['login']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

			if(!empty($email) && !empty($password))
			{
				$query = $connect->prepare("SELECT * FROM admins WHERE email = ?");
				$query->bind_param("s",$email);
				$query->execute();
				$result = $query->get_result();
				if($result->num_rows > 0)
				{
					$fetch = $result->fetch_assoc();
					if (password_verify($password, $fetch["password"])) {
					    $_SESSION['adminID'] = $fetch['id'];
					    header("location: ../admin/");
					} else {
					    $err = "Invalid email or password!";
					}
				}else{
					$err = "Invalid email or password!";
				}
			}else{
				$err = "Please fill all fields";
			}
		}
		
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Admin Panel</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
			<form method="POST" action="">
				<h1>Login Now</h1>
				<br>
				<h3>Welcome Back</h3>
				<br>
				<?php if(isset($err)) echo "<h4 style='color:red'>".$err."</h4>" ?>
				<input type="email" name="email" required placeholder="Enter your email">
				<input type="password" name="password" required placeholder="Enter your password">
				<input type="submit" name="login" value="Login">
			</form>
		</body>
		</html>
	<?php }

?>