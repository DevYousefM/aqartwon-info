<?php 
	$connect = new mysqli('localhost', 'root', '', 'aqartown');
	// $connect = new mysqli('localhost', 'landing_user', 'Aqar@town2023', 'aqar_website');
	if(isset($_POST['searchBarMsg']))
	{
		$searchTerm = "{$_POST['searchBarMsg']}%";

		if($searchTerm == "%")
		{
			$searchBarMsg = $connect->prepare("SELECT * FROM landing_msg ORDER BY id DESC");
		}
		else
		{
			$searchBarMsg = $connect->prepare("SELECT * FROM landing_msg WHERE fullName LIKE ? OR email LIKE ? or phone LIKE ? or subject LIKE ? or msg LIKE ? ORDER BY id DESC");
			$searchBarMsg->bind_param("sssss",$searchTerm,$searchTerm,$searchTerm,$searchTerm,$searchTerm);
		}
		
		$searchBarMsg->execute();
		$searchBarMsgResult = $searchBarMsg->get_result();
		if($searchBarMsgResult->num_rows > 0)
		{
			while($searchBarMsgFetching = $searchBarMsgResult->fetch_array())
			{?>
			  	<tr>
				        <td data-label="" scope="col" class="u-table-cell"><input type="checkbox" name="" disabled <?php if($searchBarMsgFetching['status'] == 1) echo "checked" ?>> </td>
				        <td data-label="#ID" class="u-table-cell"><?php echo $searchBarMsgFetching["id"] ?></td>
				        <td data-label="Name" class="u-table-cell"><?php echo $searchBarMsgFetching["fullName"] ?></td>
				        <td data-label="E-mail" class="u-table-cell"><?php echo $searchBarMsgFetching["email"] ?></td>
				        <td data-label="Phone" class="u-table-cell"><?php echo $searchBarMsgFetching["phone"] ?></td>
				        <td data-label="Subject" class="u-table-cell"><?php echo $searchBarMsgFetching["subject"] ?></td>
				        <td data-label="Action" class="u-table-cell">
				        	<button class="show" data-id="<?php echo $searchBarMsgFetching['id']; ?>">SHOW</button>
				        	<button class="deleteMsg" data-id="<?php echo $searchBarMsgFetching['id']; ?>">DELETE</button>
				        </td>
			  		</tr>
			<?php }
			?>
			<script type="text/javascript">
        		$(document).ready(function(){
        			$(".show").click(function(){
        				console.log("clicked")
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
        				var query = $(this).attr("data-id");
        				$.ajax({
        					url: "adminSearch.php",
        					method: "POST",
        					data: {deleteMessage:query},
        				})
 							setTimeout(function(){
                            location.reload();
                      	}, 300);
        			})
        		});
        	</script>
			<?php
		}else{
			echo "No Result Found!";
		}
	}

	if(isset($_POST['searchBarAppointments']))
	{
		$searchTerm = "{$_POST['searchBarAppointments']}%";

		if($searchTerm == "%")
		{
			$searchBarAppointments = $connect->prepare("SELECT * FROM appointments ORDER BY id DESC");
		}
		else
		{
			$searchBarAppointments = $connect->prepare("SELECT * FROM appointments WHERE fname Like ? OR lname LIKE ? OR email LIKE ? OR phone LIKE ? ORDER BY id DESC");
		$searchBarAppointments->bind_param("ssss",$searchTerm,$searchTerm,$searchTerm,$searchTerm);
		}

		
		$searchBarAppointments->execute();
		$searchBarAppointmentsResult = $searchBarAppointments->get_result();
		if($searchBarAppointmentsResult->num_rows > 0)
		{
			while($searchBarAppointmentsFetching = $searchBarAppointmentsResult->fetch_array())
			{?>
			  	<tr>
			        <td data-label="" scope="col" class="u-table-cell"><input type="checkbox" name="" <?php if($searchBarAppointmentsFetching['status'] == 1){ echo "checked disabled";} ?> class="checkbox" data-id ="<?php echo $searchBarAppointmentsFetching['id'] ?>"> </td>
			        <td data-label="#ID" class="u-table-cell"><?php echo $searchBarAppointmentsFetching['id'] ?></td>
			        <td data-label="Name" class="u-table-cell"><?php echo $searchBarAppointmentsFetching['fname'] . " " . $searchBarAppointmentsFetching['lname'] ?></td>
			        <td data-label="E-mail" class="u-table-cell"><?php echo $searchBarAppointmentsFetching['email'] ?></td>
			        <td data-label="Phone" class="u-table-cell"><?php echo $searchBarAppointmentsFetching['phone'] ?></td>
			        <td data-label="Action" class="u-table-cell">
			        	<button class="deleteAppointments" data-id="<?php echo $searchBarAppointmentsFetching['id']; ?>">DELETE</button>
			        </td>
			  	</tr>
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
 							data: {getAppointments:query},
 							})
          			})
          			$(".deleteAppointments").click(function(){
        				var query = $(this).attr("data-id");
        				$.ajax({
        					url: "adminSearch.php",
        					method: "POST",
        					data: {deleteAppointments:query},
        				})
 							setTimeout(function(){
                            location.reload();
                      	}, 300);
        			})
          		});
          	</script>
			<?php
		}else{
			echo "No Result Found!";
		}
	}

	if(isset($_POST['getMessage']))
	{
		$messageID = $_POST['getMessage'];
		$msgUpdate = $connect->prepare("UPDATE landing_msg SET status = 1 WHERE id = ?");
		$msgUpdate->bind_param("i",$messageID);
		$msgUpdate->execute();

		$msgQuery = $connect->prepare("SELECT * FROM landing_msg WHERE id =?");
		$msgQuery->bind_param("i",$messageID);
		$msgQuery->execute();
		$msgResult = $msgQuery->get_result();
		if($msgResult->num_rows > 0)
		{
		  	$msgFetchBox = $msgResult->fetch_array();
			?>
	      	<div>			
	      		<h3><?php echo $msgFetchBox['fullName'] ?></h3>
	      		<br>
	      		<h4><?php echo $msgFetchBox['subject'] ?></h4>
	      		<br>
	      		<textarea disabled><?php echo $msgFetchBox['msg']; ?></textarea>
	      		<button id="back" class="back">Back</button>
	      		<script type="text/javascript">
	      			$(document).ready(function(){
	      				$("#back").click(function(){
	        				$("#messageBox").css("display","none");
	        				setTimeout(function(){
                            location.reload();
                          }, 1);
            			});
	      			})
	      		</script>
	      	</div>
		<?php 
		}else{
			echo "No Message Found!";
		}
	}

	if(isset($_POST['getAppointments']))
	{
		$appointmentsID = $_POST['getAppointments'];
		$appointmentsUpdate = $connect->prepare("UPDATE appointments SET status = 1 WHERE id = ?");
		$appointmentsUpdate->bind_param("i",$appointmentsID);
		$appointmentsUpdate->execute();
	}


//===========================================delete===============================================

	if(isset($_POST['deleteMessage']))
	{
		$messageID = $_POST['deleteMessage'];
		$deleteMsg = $connect->prepare("DELETE FROM landing_msg WHERE id = ?");
		$deleteMsg->bind_param("i",$messageID);
		$deleteMsg->execute();
	}

	if(isset($_POST['deleteAppointments']))
	{
		$appointmentsID = $_POST['deleteAppointments'];
		$deleteAppointments = $connect->prepare("DELETE FROM appointments WHERE id = ?");
		$deleteAppointments->bind_param("i",$appointmentsID);
		$deleteAppointments->execute();
	}
?>