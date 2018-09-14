<html>
   <head><title>Sistem Raport Sederhana</title></head>
<body>
     <FORM ACTION="Fajar.php" METHOD="POST" NAME="input">
         <center><h2>Sistem Raport Sederhana</h2></center>
         <center>
     <table>
     <tr>
     <td>Nama</td>
     <td>:</td>
     <td>
         <input type="text" name="nama" size=50/>
     </td>
 </tr>

 <tr>
     <td>NIS</td>
     <td>:</td>
     <td>
         <input type="text" name="nomor" size="30"/>
     </td>
 </tr>

 <tr>
     <td>Alamat rumah</td>
     <td>:</td>
     <td>
     <textarea cols=50 rows=10 name="alamat"></textarea>
     </td>
 </tr>

  <tr>
     <td>Jenis Kelamin</td>
     <td>:</td>
     <td>
     <input type="radio" name="jeniskelamin" value="Laki-laki">
     <label>Laki-laki</label>
     <input type="radio" name="jeniskelamin" value="Perempuan">
     <label>Perempuan</label>
    </td>
  </tr>

  <tr>
      <td>Agama</td>
      <td>:</td>
     <td>
          <select name="agama">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Budha">Budha</option>
              <option value="Katolik">Katolik</option>
          </select>
      </td>
  </tr>

   <tr>
        <td>Asal sekolah</td>
        <td>:</td>
        <td>
            <input type="text" name="sekolah" size=50>
        </td>
        </tr>

    <tr>
        <td>Mata pelajaran yang disukai</td>
        <td>:</td>
        <td>
        <input type="checkbox" name="mapel1" value="Matematika">
        <label>Matematika</label>
        <input type="checkbox" name="mapel2" value="Bhs indonesia">
        <label>Bhs Indonesia</label>
        <input type="checkbox" name="mapel3" value="Bhs Inggris">
        <label>Bhs Inggris</label>
        <input type="checkbox" name="mapel4" value="KWU">
        <label>KWU</label>
       </td>
    </tr>

    <tr>
        <td>Total Nilai Ijazah SD</td>
        <td>:</td>
        <td>
            <input type="text" name="Total nilai ijazah SD" size=50>
        </td>
    </tr>

    <tr>
        <td>Email</td>
        <td>:</td>
        <td>
            <input type="text" name"email" size=50>
        </td>
    </tr>

    <tr>
        <td>&nbsp</td>
        <td>&nbsp</td>
        <td>
            <input type="submit" name="input" value="Input Data">
        </td>
    </tr>
</table>
</center>
</FORM>
</body>
</html>