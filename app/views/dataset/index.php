<form action="<?= BASEURL; ?>/dataset" method="post">
  <label for="tahun">Tahun</label>
  <select name="tahun" id="select-tahun-list" class="select-tahun">
    <option>-- pilih tahun --</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
  </select>
  <button id="button-tahun-list">submit</button>
</form>
<br>
<div>
  <div class="divcolumnlist">
    <h2>Tahun <?= $data['tahun']; ?></h2>
  </div>
  <div class="divcolumnlist">
    <div class="kettext">
      <p>Keterangan:&nbsp;</p>
    </div>
    <div class="bluesquare">
      <p>nilai terendah</p>
    </div>
    <div class="redsquare">
      <p>nilai tertinggi</p>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Bulan</th>
        <th rowspan="2">Tahun</th>
        <th>Debit Produksi</th>
        <th>Jam Operasi</th>
        <th>Jumlah Produksi</th>
        <th>Jumlah Distribusi</th>
        <th>Pemakaian Air</th>
        <th>Kehilangan Air</th>
        <th>Kebocoran</th>
        <th>PAC</th>
        <th>Kaporit</th>
        <th>Dosis PAC</th>
        <th>Dosis Kaporit</th>
      </tr>
      <tr>
        <th>&lpar;l&sol;d&rpar;</th>
        <th>&lpar;jam&rpar;</th>
        <th>&lpar;m<sup>3</sup>&rpar;</th>
        <th>&lpar;m<sup>3</sup>&rpar;</th>
        <th>&lpar;m<sup>3</sup>&rpar;</th>
        <th>&lpar;m<sup>3</sup>&rpar;</th>
        <th>&lpar;&percnt;&rpar;</th>
        <th>&lpar;kg&rpar;</th>
        <th>&lpar;kg&rpar;</th>
        <th>&lpar;mg&sol;l&rpar;</th>
        <th>&lpar;mg&sol;l&rpar;</th>
      </tr>
    </thead>
    <?php
    $no = 1;
    $maxbocor = $data['maxminbocor']['maxBocor'];
    $minbocor = $data['maxminbocor']['minBocor'];
    foreach ($data['prodis'] as $prodis) :

      // red alert
      if ($prodis['kebocoran'] == $maxbocor) {
        $redalert = 'redalert';
      } else {
        $redalert = '';
      }

      // blue alert
      if ($prodis['kebocoran'] == $minbocor) {
        $bluealert = 'bluealert';
      } else {
        $bluealert = '';
      }
    ?>
      <tr>
        <td class="align-right"><?= $no++; ?></td>
        <td><?= $prodis['bulan']; ?></td>
        <td class="align-right"><?= $prodis['tahun']; ?></td>
        <td class="align-right"><?= $prodis['debit']; ?></td>
        <td class="align-right"><?= number_format($prodis['jam_operasi'], 0, ",", "."); ?></td>
        <td class="align-right"><?= number_format($prodis['jumlah_produksi'], 0, ",", "."); ?></td>
        <td class="align-right"><?= number_format($prodis['jumlah_distribusi'], 0, ",", "."); ?></td>
        <td class="align-right"><?= number_format($prodis['pemair'], 0, ",", "."); ?></td>
        <td class="align-right"><?= number_format($prodis['nrw'], 0, ",", "."); ?></td>
        <td class="align-right <?= $redalert; ?> <?= $bluealert; ?>"><?= $prodis['kebocoran']; ?></td>
        <td class="align-right"><?= number_format($prodis['pac'], 0, ",", "."); ?></td>
        <td class="align-right"><?= number_format($prodis['kaporit'], 0, ",", "."); ?></td>
        <td class="align-right"><?= number_format($prodis['dosis_pac'], 0, ",", "."); ?></td>
        <td class="align-right"><?= number_format($prodis['dosis_kaporit'], 0, ",", "."); ?></td>
      </tr>
    <?php endforeach; ?>
  </table>