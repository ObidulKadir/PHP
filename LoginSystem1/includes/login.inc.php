<?php

if (isset($_POST['login-submit'])) {
	# code...
	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)) {
		# code...
		header("Location: ../index.php?error=emptyfields&uid");
			exit();

	}
	else {
		# code...
		$sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			# code...
			header("Location: ../index.php?error=sqlerror");
			exit();

		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pwdUsers']);

				if ($pwdCheck == false) {
					# code...
					header("Location: ../index.php?error=wrongpassword");
					exit();
				}
				elseif ($pwdCheck == true) {
					# code...
					session_start();
					$_SESSION['userId'] = $row['idUsers'];
					$_SESSION['userUid'] = $row['uidUsers'];
					
					header("Location: ../index.php?login=successful");

					exit();
				}

			}
			else{
				header("Location: ../index.php?error=nouser");
				exit();
			}
		}
	}

}