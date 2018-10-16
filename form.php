<?php

	include 'aksi.php';

?>

<form action="" method="POST">

	<h2>Pendaftaran Mahasiswa</h2>

	<br>

	<table>

		<tr>

			<td>Nama</td>

			<td>:</td>

			<td><input type="text" name="nama"></td>

		</tr>

		<tr>

			<td>Nim</td>

			<td>:</td>

			<td><input type="text" name="nim"></td>

		</tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="kelamin" value="male" checked>Laki-Laki</td>
			<td><input type="radio" name="kelamin" value="female">Perempuan</td>
		</tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="MI">MI</option>
				<option value="KA">KA</option>
				<option value="tektel">Tektel</option>
				<option value="IF">IF</option>
				<option value="PH">PH</option>
				<option value="TK">TK</option>
				<option value="MP">MP</option>
				<option value="sismed">Sismed</option>
				</select>
			</td>
		</tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>


			<td>Hobi</td>

			<td>:</td>
			
			<td><input type="hidden" name="hobi[]" value=""></td>
			
			<td><input type="checkbox" name="hobi[]" value="music">Musik</td>

			<td><input type="checkbox" name="hobi[]" value="game">Gaming</td>

			<td><input type="checkbox" name="hobi[]" value="dance">Dancing</td>

			<td><input type="checkbox" name="hobi[]" value="travel">Travelling</td>

		</tr>


		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

			<td>Fakultas</td>

			<td>:</td>

			<td><select name="fakultas">

				<option value="fit">FIT</option>

				<option value="fik">FIK</option>

				<option value="fkb">FKB</option>

				<option value="feb">FEB</option>

				<option value="fte">FTE</option>

				<option value="fif">FIF</option>

			</select></td>

			<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>


		</tr>

		<tr>

			<td>Asal</td>

			<td>:</td>

			<td><input type="textarea" name="asal"></td>

		</tr>


		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr>


		<tr>

			<td>Motto Hidup</td>

			<td>:</td>

			<td><input type="textarea" name="motto"></td>



		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

		<tr></tr>

			<td><input type="submit" name="submit" value="input"></td>

		</tr>