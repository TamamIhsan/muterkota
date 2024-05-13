<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
  .tab-content {
    
  display: flex;
  flex-direction: column;
  align-items: center;
}
.exo-2-light {
      font-family: "Exo 2", sans-serif;
      font-optical-sizing: auto;
      font-weight: 300; /* You can choose the appropriate weight here */
      font-style: normal;
      margin-top: 100px;
      color: yellow;
      font-weight: bold;
    }

    .exo-2-regular {
      font-family: "Exo 2", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400; /* You can choose the appropriate weight here */
      font-style: normal;
    }

/* Untuk gambar pertama */
.card-tabs .tabs .tab-content img:first-child {
  width: 43px; /* Sesuaikan lebar sesuai kebutuhan untuk gambar pertama */
  height: 43px; /* Sesuaikan tinggi sesuai kebutuhan untuk gambar pertama */
  margin-bottom: 50px;
}

/* Untuk gambar kedua */
.card-tabs .tabs .tab-content img.trein {
  width: 50px; /* Sesuaikan lebar sesuai kebutuhan untuk gambar kedua */
  height: 50px; /* Sesuaikan tinggi sesuai kebutuhan untuk gambar kedua */
}

.sliding-text {
      overflow: hidden;
      white-space: nowrap;
      padding: 5px; /* Adjust the padding as needed */
      margin: 0; /* Set margin to 0 */
      animation: slide 20s linear infinite; /* Adjust the duration as needed */
    }

    /* Define the sliding animation */
    @keyframes slide {
      from {
        transform: translateX(100%);
      }
      to {
        transform: translateX(-100%);
      }
    }

  </style>
</head>
<body>
  


<main>
<!-- <p class="sliding-text">LU MUTERI KOTA, KITA TEMENAN</p> -->
 <div class="carousel carousel-slider center" data-indicators="true">
  <div class="carousel-fixed-item center">
  </div>
  <div style="text-align: left" class="carousel-item blue lighten-1 white-text" href="#one!">
    <div class="container">
    <?php 
    if($this->session->userdata('auth_user')){
      $info = $this->m_general->gDataW('costumer',array('id_costumer'=>$this->session->userdata('auth_user')))->row();
      ?>
      <h1 class="exo-2-light"><?=$info->full_name?></h1>
      <h5 class="exo-2-regular">Pesan Tiket Anda Sekarang dan Mulailah Petualangan Anda!</h5>
      

      <?php
    }else{
      ?>
      <h3 style="margin-top: 100px; font-weight: bold;" class="exo-2-light">SELAMAT DATANG DI <span style="color: white;">MUTERIKOTA</span></h3>
      <h5 style="" class="exo-2-regular">Orang cerdas pilih <span style="color : yellow;">MUTERIKOTA</span></h5>
      <p class="white-text"></p>
      <a href="<?=site_url('account/register')?>" class="btn waves-effect blue white-text darken-text-2">DAFTAR BURUAN!</a>
      <?php
    }
    ?>
  </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div style="margin-top: -100px" class="col s12 m12 l12">
    <div class="card blue custom-card">
  <div class="card-tabs">
    <ul class="tabs tabs-fixed-width tabs-transparent">
            <li class="tab">
              <a href="#test1">
                <div class="tab-content">
                <img width="60" height="60" src="https://img.icons8.com/external-smashingstocks-flat-smashing-stocks/66/external-Plane-travel-and-summer-holidays-smashingstocks-flat-smashing-stocks.png" alt="external-Plane-travel-and-summer-holidays-smashingstocks-flat-smashing-stocks"/>
                </div>
              </a>
            </li>
            <li class="tab">
              <a href="#test2">
                <div class="tab-content">
                  <img src="assets/images/train.png" alt="Airplane" class="trein">
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="card-content grey lighten-5">
          <div id="test1">  
            <form method="GET" action="<?=site_url('flight/search')?>">    
              <div class="row">
                <div class="input-field col l4 m6 s12">
                  <i class="material-icons prefix" style="color: yellow;">flight_takeoff</i>
                  <select name="from" id="p_asal" onchange="cekTP()">
                    <option value="">Pilih Bandara</option>
                    <?php
                    foreach($plp as $l){
                      echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
                    }
                    ?>
                  </select>
                  <label for="icon_prefix">Kota Asal</label>
                </div>
                <div class="input-field col l4 m6 s12">
                  <i class="material-icons prefix" style="color: yellow;">flight_land</i>
                  <select name="to" id="p_tujuan" onchange="cekTP()">
                    <option value="">Pilih Bandara</option>
                    <?php
                    foreach($plp as $l){
                      echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
                    }
                    ?>
                  </select>
                  <label for="icon_prefix">Kota Tujuan</label>
                </div>
                <div class="input-field col l2 m6 s6">
                  <i class="material-icons prefix" style="color: yellow;">airline_seat_recline_normal</i>       
                  <select name="class">
                    <option value="">Semua</option>
                    <?php
                    foreach($kp as $l){
                      echo '<option value="'.$l->id_transportation_class.'">'.$l->class_name.'</option>';
                    }
                    ?>
                  </select>
                  <label>Kelas</label>
                </div>
                <div class="input-field col l2 m6 s6">
                  <i class="material-icons prefix" style="color: yellow;">group</i>   
                  <select name="ps">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                  <label>Jumlah Penumpang</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col l4 m4 s12">
                  <i class="material-icons prefix" style="color: yellow;">date_range</i>
                  <input type="text" id="p_b" name="date_g" class="datepicker" onchange="cekTGLP()">
                  <label for="icon_prefix">Tanggal Berangkat</label>
                </div>
                <div class="input-field col l4 m4 s12">
                  <i class="material-icons prefix" style="color: yellow;">date_range</i>  
                  <input type="text" id="p_p" name="date_b" class="datepicker" onchange="cekTGLP()">
                  <label for="icon_prefix">Tanggal Pulang</label>
                </div>
                <div class="col l4 m4 s12">
                  <button type="submit" style="margin-top:20px;width: 100%" class="waves-effect blue waves-light btn"><i class="material-icons left" style="color: yellow;">search</i>CARI TIKET</button>
                </div>
              </div>
            </form>
          </div>
          <div id="test2">  

            <form method="GET" action="<?=site_url('train/search')?>">    
              <div class="row">
                <div class="input-field col l4 m6 s12">
                  <i class="material-icons prefix" style="color: yellow;">place</i>
                  <select name="from" id="k_asal" onchange="cekTK()">
                    <option value="">Pilih Stasiun</option>
                    <?php
                    foreach($plk as $l){
                      echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
                    }
                    ?>
                  </select>
                  <label for="icon_prefix">Kota Asal</label>
                </div>
                <div class="input-field col l4 m6 s12">
                  <i class="material-icons prefix" style="color: yellow;">place</i>
                  <select name="to" id="k_tujuan" onchange="cekTK()">
                    <option value="">Pilih Stasiun</option>
                    <?php
                    foreach($plk as $l){
                      echo '<option value="'.$l->id_place.'">'.$l->city_name.' - '.$l->place_name.'</option>';
                    }
                    ?>
                  </select>
                  <label for="icon_prefix">Kota Tujuan</label>
                </div>
                <div class="input-field col l2 m6 s6">
                  <i class="material-icons prefix" style="color: yellow;">airline_seat_recline_normal</i>       
                  <select name="class">
                    <option value="">Semua</option>
                    <?php
                    foreach($kk as $l){
                      echo '<option value="'.$l->id_transportation_class.'">'.$l->class_name.'</option>';
                    }
                    ?>
                  </select>
                  <label>Kelas</label>
                </div>
                <div class="input-field col l2 m6 s6">
                  <i class="material-icons prefix" style="color: yellow;">group</i>   
                  <select name="ps">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                  <label>Jumlah Penumpang</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col l4 m4 s12">
                  <i class="material-icons prefix" style="color: yellow;">date_range</i>
                  <input type="text" name="date_g" class="datepicker" id="k_b" onchange="cekTGLK()">
                  <label for="icon_prefix">Tanggal Berangkat</label>
                </div>
                <div class="input-field col l4 m4 s12"><input type="checkbox"/>
                  <i class="material-icons prefix" style="color: yellow;">date_range</i>  
                  <input type="text" name="date_b" class="datepicker" id="k_p" onchange="cekTGLK()">
                  <label for="icon_prefix">Tanggal Pulang</label>
                </div>
                <div class="col l4 m4 s12"><button type="submit" style="margin-top:20px;width: 100%" class="waves-effect blue waves-light btn"><i class="material-icons left" style="color: yellow;">search</i>CARI TIKET</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col m4">
      <h4>Partner Maskapai</h4>
      Partner Maskapai Penerbangan di Dalam & Luar Negeri
      <p class="light">Kami bekerja sama dengan berbagai maskapai penerbangan di seluruh dunia untuk menerbangkan Anda ke mana pun Anda inginkan!</p>
    </div>
    <div class="col m8 partner-list">
      
      <?php foreach($pp as $p) {?>
      <a href="" class="partner"><img title="<?=$p->company_name?>" src="<?=base_url()."assets/"?>images/company_logo/<?=$p->company_logo?>"></a>
      <?php } ?>
    </div>
  </div>
  <div class="row" style="margin-top: 100px">
    <div class="col m4">
      <h4>Partner Kereta Api</h4>
      <p class="light">Pergi ke bandara ataupun menjelajah negeri, pesan tiket kereta Anda bebas repot di sini!</p>
    </div>
    <div class="col m8 partner-list">
      <?php foreach($pk as $p) {?>
      <a href="" class="partner"><img title="<?=$p->company_name?>" src="<?=base_url()."assets/"?>images/company_logo/<?=$p->company_logo?>"></a>
      <?php } ?>
    </div>
  </div> -->

</div>
</main>  
</body>
</html>