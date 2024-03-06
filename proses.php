<?php
if (isset($_POST['button'])) {
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["user_name"])) {
			echo "Nama Kosong";
		} else {
			$user_name = cek_input($_POST["user_name"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $user_name)) {
				echo "nama harus huruf";
			} else {
				$user_name = $_POST['user_name'];
				$user_domisili = $_POST['user_domisili'];
				$user_pesan = $_POST['user_pesan'];

				echo "Atas nama $user_name dengan berdomisili di $user_domisili mengirimkan pesan $user_pesan";
			}
		}
	}
}

function cek_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}