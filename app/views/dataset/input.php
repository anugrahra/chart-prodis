<form action="<?= BASEURL; ?>/data/input" method="post">
  <label for="tahun" name="tahun">Tahun</label><br>
  <input type="number" name="tahun" id="input-tahun"><br><br>

  <label for="bulan">Bulan</label><br>
  <select name="bulan" id="input-bulan">
    <option value="Januari" data-bulan="1">Januari</option>
    <option value="Februari" data-bulan="2">Februari</option>
    <option value="Maret" data-bulan="3">Maret</option>
    <option value="April" data-bulan="4">April</option>
    <option value="Mei" data-bulan="5">Mei</option>
    <option value="Juni" data-bulan="6">Juni</option>
    <option value="Juli" data-bulan="7">Juli</option>
    <option value="Agustus" data-bulan="8">Agustus</option>
    <option value="September" data-bulan="9">September</option>
    <option value="Oktober" data-bulan="10">Oktober</option>
    <option value="November" data-bulan="11">November</option>
    <option value="Desember" data-bulan="12">Desember</option>
  </select><br><br>

  <input type="hidden" name="final" value="blue">
  <input type="hidden" name="status" value="Final">

  <label for="jam_operasi">Jam Operasi</label><br>
  <input type="number" name="jam_operasi"><br><br>

  <label for="debit">Debit Produksi</label><br>
  <input type="number" name="debit" value="50"><br><br>

  <label for="jumlah_produksi">Jumlah Produksi</label><br>
  <input type="number" name="jumlah_produksi"><br><br>

  <label for="jumlah_distribusi">Jumlah Distribusi</label><br>
  <input type="number" name="jumlah_distribusi"><br><br>

  <label for="nrw">Kehilangan Air</label><br>
  <input type="number" name="nrw"><br><br>

  <label for="pemair">Pemair</label><br>
  <input type="number" name="pemair"><br><br>

  <label for="pac">PAC</label><br>
  <input type="number" name="pac"><br><br>

  <label for="nrw">Kaporit</label><br>
  <input type="number" name="kaporit"><br><br>

  <label for="dosis_pac">Dosis PAC</label><br>
  <input type="number" name="dosis_pac" step="0.01"><br><br>

  <label for="dosis_kaporit">Dosis Kaporit</label><br>
  <input type="number" name="dosis_kaporit" step="0.01"><br><br>

  <label for="kebocoran">Kebocoran</label><br>
  <input type="number" name="kebocoran"><br><br>

  <button type="submit" name="submit">Submit</button>
</form>
<br>