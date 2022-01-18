<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <h1 class="text-center mb-4"> TAMPILKAN DATA DATA</h1>
    
        <div class="container"> 
            <div class="row justify-content-center" >
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatetransaksi/{{ $data->id}}" method="POST" enctype="multypart/form-data">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">tgl_sewa</label>
                                  <input type="tgl_sewa" name="" class="form-control" id="exampleInputEmail1" 
                                  aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">tgl kembali</label>
                                    <input type="text" name="tgl_kembali" class="form-control" id="exampleInputEmail1" 
                                      aria-describedby="emailHelp">
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">lama sewa</label>
                                      <input type="text" name="lama" class="form-control" id="exampleInputEmail1" 
                                        aria-describedby="emailHelp">
                                    </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">harga</label>
                                  <input type="text" name="harga" class="form-control" id="exampleInputEmail1" 
                                  aria-describedby="emailHelp">
                                </div>
                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">total</label>
                                      <input type="text" name="total" class="form-control" id="exampleInputEmail1" 
                                      aria-describedby="emailHelp">
                                    </div>
                  
                                  <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>