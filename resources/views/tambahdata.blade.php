<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center mb-4">Tambah Data</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1"  class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis kelamin</label>
                                <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                    <option selected>pilih jender anda</option>
                                    <option value="cowo">cowo</option>
                                    <option value="cewe">cewe</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomer telepon</label>
                                <input type="number" class="form-control" name="notelepon" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">tambahkan gambar</label>
                                <input type="file" class="form-control" name="foto" >
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
