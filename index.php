<html>
	<head>
	    <title>PHP Test</title>
	  </head>
	  <body>   
	 <!-- penanganan form dengan method GET -->
	<form method="get" action="tampil.php">
	    <label>Nama Siswa</label><br/>
		<input type="text" name="nama"><br/>
		<label>Asal Sekolah</label><br/>
		<input type="text" name="sklh"><br/>
        <label>Jenis Kelamin</label><br/>
        <select name="jk" >
        <option value="Perempuan"> Pilih </option>
		<option value="Laki-laki"> L </option>
        <option value="Perempuan"> P </option>
        </select>
        <br />
        <label>No. Telpon</label> 
		<br/>
		<input type="text" name="no"><br/>
		<br/>	
	    <input type="submit" value="Daftar">
	    </form>
	
	  </body>
	</html>
	  