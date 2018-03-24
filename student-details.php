
<?php
		session_start();
		include 'header.php';
    include 'libs/common_functions.php';

		if (isset($_POST["sbtn"]))
		{

			$usn = trim(addslashes($_POST["your_name"]));
	    $branch = trim(addslashes($_POST["your_email"]));
		  $ik=(integer)$_SESSION['id'];
			echo "$usn  $branch  $ik";
			$mysqli->query("UPDATE users SET usn='$usn', branch='$branch' WHERE id=$ik");
			echo "done";
			header('location: dashboard.php');
		}

?>

<style>
			.rows{ width:100%; height:auto; overflow:hidden; margin-bottom:10px; }
			.label{ width:100px;color:#000; float:left;padding-top:5px;}
			.input-row{ width:280px; height:32px; background-color:#FFF; float:left; position:relative; }
			.input-textarea-row{ width:280px; height:65px; background-color:#FFF; float:left; position:relative; }
			.textbox{ width:100%; height:32px;  border:1px solid #007294;outline:none; background:transparent; color:#000; padding:0px;  }
			.textarea{ width:100%; height:57px;  border:1px solid #007294; outline:none; background:transparent; color:#000; padding:0px;  }
			.submit_button{background:#118eb1;padding:2px;border:none;cursor:pointer;}
			.success{padding-bottom:30px; color:#009900;}
			.error{padding-bottom:30px; color:#F00;}
			body
			{
				background: #9da3ad;
			}

</style>


<script type="text/javascript">
		function IsEmail(email)
		{
		  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  return regex.test(email);
		}
		function validateForm()
		{
			var name = $.trim($("#your_name").val());
			var email = $.trim($("#your_email").val());
			var subject = $.trim($("#your_subject").val());
			var message = $.trim($("#your_message").val());
			if (name == "" )
			{
		    alert("Enter your name");
				$("#your_name").focus();
		    return false;
		  }
			else if (name.length < 3 )
			{
				alert("Enter atleast 2 letter.");
		    $("#your_name").focus();
			  return false;
		  }
			if (email == "" )
			{
		    alert("Enter your email");
				$("#your_email").focus();
		    return false;
		  }
			else if (!IsEmail(email))
			{
		    alert("Enter valid email");
			  $("#your_email").focus();
		    return false;
		  }
</script>
<div class="row main-row">

			<div class="8u">

				<section class="left-content">


					<div style="height:30px;clear:both"></div>
		      <?php if ($_GET["msg"] == "success") { ?>
		      <div class="success">Thank you for contacting us. We will get back to you withinh 24 hours.</div>
		      <?php } if ($_GET["msg"] == "error") {  ?>
		      <div class="error">There was problem sending mail. please try again or try later.</div>
		      <?php } ?>
			    <form action="student-details.php" method="post" name="f" onsubmit="return validateForm();">

					    <div class="rows">
								<div class="label"><span style="color:#F00;">*</span>USN: </div>
								<div class="input-row" ><input name="your_name" id="your_name" type="text" class="textbox" autocomplete="off"></div>
						  </div>

					    <div class="rows">
								<div class="label"><span style="color:#F00;">*</span>Branch: </div>
								<div class="input-row" ><input name="your_email" id="your_email" type="text" class="textbox" autocomplete="off"></div>
							</div>

			         <div class="rows">
			         <div class="label"></div>
			         <input type="submit" value="Done" name="sbtn" class="submit_button" />
			         </div>

			      </form>
		    </section>
		  </div>
</div>
