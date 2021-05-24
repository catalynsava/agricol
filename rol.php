<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>date generale</title>
</head>
<body>
<?php
  include_once "connect.php";
  if (isset($_GET['idrol'])) {

    $selSql="SELECT * FROM adrrol WHERE idrol=\"" . $_GET['idrol'] . "\"";
    $result = $cnn->query($selSql);
    $rows=$result->fetch_all(MYSQLI_ASSOC);

  }
?>
<p class="h3 text-center">date rol</p>
<form class="row g-3">
<!-- -------------------------------------------------------------------------------------- -->
  <div class="col-md-3">    <!--    denumire    -->
    <label for="tiptxt" class="form-label">tip</label>
    <input type="text" class="form-control" id="tiptxt" value="<?php echo $rows[0]['tip'] ?>">
  </div>
  <div class="col-md-3">    <!--    denumire    -->
    <label for="voltxt" class="form-label">volum</label>
    <input type="text" class="form-control" id="voltxt" value="<?php echo $rows[0]['vol'] ?>">
  </div>
  <div class="col-md-3">    <!--    denumire    -->
    <label for="localitatetxt" class="form-label">localitate</label>
    <input type="text" class="form-control" id="localitatetxt" value="<?php echo $rows[0]['localitate'] ?>">
  </div>
  <div class="col-md-3">    <!--    denumire    -->
    <label for="poztxt" class="form-label">localitate</label>
    <input type="text" class="form-control" id="poztxt" value="<?php echo $rows[0]['poz'] ?>">
  </div>
  <!-- -------------------------------------------------------------------------------------- -->
  <div class="col-md-9">    <!--    denumire    -->
    <label for="tipexploatxt" class="form-label">tip exploatatie</label>
    <input type="text" class="form-control" id="tipexploatxt" value="<?php echo $rows[0]['tipExploa'] ?>">
  </div>
  <div class="col-md-3">    <!--    denumire    -->
    <label for="antxt" class="form-label">bifă an</label>
    <input type="text" class="form-control" id="antxt" value="<?php echo $rows[0]['an'] ?>">
  </div>
  <!-- -------------------------------------------------------------------------------------- -->
  <div class="col-md-6">    <!--    denumire    -->
    <label for="stradatxt" class="form-label">strada</label>
    <input type="text" class="form-control" id="stradatxt" value="<?php echo $rows[0]['strada'] ?>">
  </div>
  <div class="col-md-3">    <!--    denumire    -->
    <label for="nrtxt" class="form-label">nr.</label>
    <input type="text" class="form-control" id="nrtxt" value="<?php echo $rows[0]['nr'] ?>">
  </div>
  <div class="col-md-3">    <!--    denumire    -->
    <label for="literatxt" class="form-label">litera</label>
    <input type="text" class="form-control" id="literatxt" value="<?php echo $rows[0]['litera'] ?>">
  </div>
  <!-- -------------------------------------------------------------------------------------- -->
  <div class="col-md-2">    <!--    denumire    -->
    <label for="blocx" class="form-label">bloc</label>
    <input type="text" class="form-control" id="bloctxt" value="<?php echo $rows[0]['bloc'] ?>">
  </div>
  <div class="col-md-2">    <!--    denumire    -->
    <label for="scaratxt" class="form-label">scara</label>
    <input type="text" class="form-control" id="scaratxt" value="<?php echo $rows[0]['scara'] ?>">
  </div>
  <div class="col-md-2">    <!--    denumire    -->
    <label for="etajtxt" class="form-label">etaj</label>
    <input type="text" class="form-control" id="etajtxt" value="<?php echo $rows[0]['etaj'] ?>">
  </div>
  <div class="col-md-2">    <!--    denumire    -->
    <label for="aptxt" class="form-label">ap.</label>
    <input type="text" class="form-control" id="aptxt" value="<?php echo $rows[0]['ap'] ?>">
  </div>
  <div class="col-md-2">    <!--    denumire    -->
    <label for="codpostaltxt" class="form-label">cod poștal</label>
    <input type="text" class="form-control" id="codpostaltxt" value="<?php echo $rows[0]['codposta'] ?>">
  </div>
  <div class="col-md-2">    <!--    denumire    -->
    <label for="pagregtxt" class="form-label">pag. reg.</label>
    <input type="text" class="form-control" id="pagregtxt" value="<?php echo $rows[0]['pag'] ?>">
  </div>
  <!-- -------------------------------------------------------------------------------------- -->
  <div class="col-md-5">    <!--    denumire    -->
    <label for="numetxt" class="form-label">nume titular rol</label>
    <input type="text" class="form-control" id="numetxt" value="<?php echo $rows[0]['nume'] ?>">
  </div>
  <div class="col-md-2">    <!--    denumire    -->
    <label for="ittxt" class="form-label">initiala tata</label>
    <input type="text" class="form-control" id="ittxt" value="<?php echo $rows[0]['sirues'] ?>">
  </div>
  <div class="col-md-5">    <!--    denumire    -->
    <label for="prenumetxt" class="form-label">prenume titular rol</label>
    <input type="text" class="form-control" id="prenumetxt" value="<?php echo $rows[0]['prenume'] ?>">
  </div>
  <!-- -------------------------------------------------------------------------------------- -->
  <div class="col-md-3">    <!--    denumire    -->
    <label for="cnptxt" class="form-label">cnp titular rol</label>
    <input type="text" class="form-control" id="cnptxt" value="<?php echo $rows[0]['cnp'] ?>">
  </div>
  <div class="col-md-3">    <!--    denumire    -->
    <label for="rolimptxt" class="form-label">rol impozite</label>
    <input type="text" class="form-control" id="rolimptxt" value="<?php echo $rows[0]['rolIMP'] ?>">
  </div>
  <div class="col-md-6">    <!--    denumire    -->
    <label for="nrinregtxt" class="form-label">nr. / data înregistrare</label>
    <input type="text" class="form-control" id="nrinregtxt" value="<?php echo $rows[0]['nrinreg'] ?>">
  </div>
  <!-- -------------------------------------------------------------------------------------- -->
  <div class="col-md-12 text-end">
    <input class="form-check-input" type="checkbox" value="" id="semnatcheck">
    <label class="form-check-label" for="semnatcheck">s-a semnat declarația</label>
    <input class="form-check-input" type="checkbox" value="" id="anulatcheck">
    <label class="form-check-label" for="anulatcheck">rol anulat</label>
    <button type="button" id="btnAdaugare" class="btn btn-primary">adaugare</button>
    <button type="buttob" id="btnStergere" class="btn btn-primary">ștergere</button>
    <button type="button" id="btnSalvare" class="btn btn-primary">salvare</button>
  </div>
  <!-- -------------------------------------------------------------------------------------- -->
</form>
</body>
</html>