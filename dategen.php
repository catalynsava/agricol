<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date generale</title>
</head>
<body>
<form class="row g-3">
  <div class="col-md-12">    <!--    denumire    -->
    <label for="denumire" class="form-label">Denumire</label>
    <input type="text" class="form-control" id="denumire">
  </div>
  <div class="col-md-12">     <!--    primar    -->
    <label for="primar" class="form-label">Primar</label>
    <input type="text" class="form-control" id="primar">
  </div>
  <div class="col-12">
    <label for="secretar" class="form-label">Secretar</label>   <!--    secretar    -->
    <input type="text" class="form-control" id="secretar" placeholder="">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</body>
</html>