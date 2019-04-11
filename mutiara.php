<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="muti.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" action="">
                                <div class="card-body row no-gutters align-items-center">
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Masukkan nama kota" name="kota">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

    <?php
        if(!empty($_GET['kota'])){
            $url = "http://api.openweathermap.org/data/2.5/weather?q=".$_GET['kota']."&lang=id&appid=d2825f040cc0c63e91b4d5464e1ea09c&mode=xml";
            $xml = simplexml_load_file($url);
            echo    "<link rel='stylesheet' type='text/css' href='bootstrap.css'>";
    ?>




                <div class='container'>
                    <br>
                        <div class="row">
                        <div class="container col-offset-4 col-8">
                            <h3 >Cuaca di Kota <?= $xml->city["name"] ?></h3>
                            <div class="img">
                                <img src="https://openweathermap.org/img/w/<?= $xml->weather['icon']?>.png" alt="" >
                            </div>
                            <div>
                                <h5><?= $xml->temperature["value"]-273 ;?>℃</h5>
                            </div>
                            <br>
                            <table class='table'>
                                <tr>
                                    <td>Negara</td>
                                    <td><?= $xml->city->country;?></td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td><?= $xml->city["name"];?></td>
                                </tr>
                                <tr>
                                    <td>Koordinat</td>
                                    <td><?= $xml->city->coord["lon"].' '.$xml->city->coord["lat"];?></td>
                                </tr>
                                <tr>
                                    <td>Suhu</td>
                                    <td><?= $xml->temperature["value"]-273 ;?>℃</td>
                                </tr>
                                <tr>
                                    <td>Kecepatan Angin</td>
                                    <td><?= $xml->wind[0]->speed["value"];?></td>
                                </tr>
                                <tr>
                                    <td>Cuaca</td>
                                    <td><?=  $xml->clouds["name"] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
    

    <?php  } else{echo " MASUKKAN NAMA KOTA ";}
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html> 