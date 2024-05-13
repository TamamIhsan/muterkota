<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?="assets/"?>css/materialize.css">
    <link rel="stylesheet" href="<?="assets/"?>css/style.css">
    <style type="text/css">
        body {
            background-color: #fff;

        }

        .head-ticket {
            border-bottom: solid 2px black;
            padding-bottom: 10px;
        }

        .light {
            font-weight: 300;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px; /* Adjust as needed */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .heading-center {
            text-align: center;
        }

        .exo-2-light {
            font-family: "Exo 2", sans-serif;
            font-weight: 300;
            color: yellow;
            font-weight: bold;
        }

        .exo-2-regular {
            font-family: "Exo 2", sans-serif;
            font-weight: 400;
        }
    </style>
    </head>
    <body>
<div>
  <div class="head-ticket">
   <center>
     <!-- <img style="width: 300px" src="assets/images/muni.png"> -->
   </center>
   <div class="heading-center">
                <h1 class="exo-2-light">MUTERTIKET</h1>
            </div>
  <table style="">
    <tbody>
      <tr>
       <td width="30%"></td>
       <td></td>
     </tr>
     <tr>
       <td width="30%"><b>No Pesanan</b></td>
       <td>#<?=$o->id_order?></td>
     </tr>
     <tr>
       <td><b>Nama Pembeli</b></td>
       <td><?=$o->buyer_name?></td>
     </tr>
     <tr>
       <td><b>Email</b></td>
       <td><?=$o->buyer_email?></td>
     </tr>
     <tr>
       <td><b>No HP</b></td>
       <td><?=$o->buyer_phone?></td>
     </tr>
   </tbody>
 </table>
</div>
<div style="margin-top: 40px">
  <h5 class="light">Detail Perjalanan</h5>
  <?php foreach($res as $r){
    $i = $this->m_general->gRuteW($r->id_rute);
    ?>
    <b><?=hari_tgl($i[0]->depart_at)?></b><br>
    <table class="detail">
      <tr>
        <td>
          <!-- <img style="width: 60px" src="<?="assets/images/company_logo/".$i[0]->company_logo?>"></td> -->
          <td><?=$i[0]->company_name?><br><span class="light"><?=$i[0]->class_name?></span>
          </td>
          <td style="text-align:center">
            <span class="t"><?=stime($i[0]->depart_time)?></span>
            <p style="text-align:center"><?=$i[0]->place_name_from?>-<?=$i[0]->p_name_from?></p>
          </td>
          <td style="text-align:center">
            ke
          </td>
          <td style="text-align:center">
            <span class="t"><?=stime($i[0]->arrive_time)?></span>
            <p style="text-align:center"><?=$i[0]->place_name_to?>-<?=$i[0]->p_name_to?></p>
          </td>
        </tr>
      </table>
      <?php } ?>
    </div>
    <div style="margin-top: 40px">
      <h5 class="light">Detail Penumpang</h5>
      <table>
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kode Tiket</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <?php $no=1; foreach($ps as $r){
            ?>
            <tr>
              <td><?=$no?></td>
              <td><?=$r->p_title?> <?=$r->p_full_name?></td>
              <td><?=$r->ticket_code?></td>
            </tr>
          </table>
          <?php $no++; } ?>
        </tbody>
      </div>

    </div>
    </body>
</html>