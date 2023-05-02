<!DOCTYPE html>
<html>
<head>
	<title>Redlock Web 2.0</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Redlockweb-2.0</h1>

	<?php
		$host = "redlock-db";
		$username = "root";
		$password = "root";
		$dbname = "redlock";

		$connection = new mysqli($host, $username, $password, $dbname);
			$result = $connection->query("SELECT * FROM users");

		if (mysqli_num_rows($result) > 0) {
			// Menampilkan header tabel
			echo "<table border = '1'>";
			echo "<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jabatan</th>
			</tr>";

			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>
					<td>".$row["ID"]."</td>
					<td>".$row["Nama"]."</td>
					<td>".$row["Alamat"]."</td>
					<td>".$row["Jabatan"]."</td>
				</tr>";
			}

			echo "</table>";
		}
		?>
</body>
</html>




