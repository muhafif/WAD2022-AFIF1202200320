

<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Modul 1 (Rental Mobil WAD)</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </head>
  <body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <header class="p-3 mb-3 border-bottom">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
              </a>
              
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary"> Home </a></li>
                <li><a href="#" class="nav-link px-2 link-dark"> My Car </a></li>
              </ul>
            </div>
          </div>
          <link rel="stylesheet" href="modul3.css">
      </header>

      <div class="container">
        <h5>Tambah Mobil</h5>
        <p>Tambah Mobil baru anda ke list Showroom</p><br>
        <form>
          <div class="mb-3">
            <label for="exampleInputNama1" class="form-label">Nama Mobil</label>
            <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputNama1" class="form-label">Nama Pemilik</label>
            <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputNama1" class="form-label">Merk</label>
            <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputDate1" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="exampleInputDate" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Foto</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>
          </div>

          <strong><p>Status Pembayaran</p></strong>
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Lunas</label>
          </div>
          <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
          </div><br><br>

          <button type="submit" class="btn btn-primary">Submit</button><br><br>


        </form>

      </div>

  </body>
</html>