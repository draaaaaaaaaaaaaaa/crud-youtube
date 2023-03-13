<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center mb-4">DATA PEGAWAI</h2>

    <div class="container">
        <a href="/tambahpegawai" class="btn btn-success">Tambah</a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">No telepon</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $data as $d);

                    <tr>
                        <th scope="row">{{ $d->id }}</th>
                        <td><img src="{{ asset('fotopegawai/'.$d->foto) }}" alt="" style="width: 50px;"></td>
                        <td>{{  $d->nama }}</td>
                        <td>{{  $d->jeniskelamin }}</td>
                        <td>{{ $d->notelepon }}</td>
                        <td>{{ $d->created_at->diffForHumans() }}</td>
                        <!-- format('D M Y') -->
                        <td>
                            <a href="#" class="btn btn-danger delete" data-id="{{ $d->id }}">Deleted</a>
                            <a href="/editdata/{{ $d->id }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
<script>
    $('.delete').click( function(){

var pegawaiid = $(this).attr('data-id');

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/deletdata/"+pegawaiid+""
                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    });
    
</script>

</html>
