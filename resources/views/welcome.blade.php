<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 id>Layanan 123</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama Anda">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="phone" placeholder="Nomor Telepon Anda">
        </div>
        <select class="form-select" aria-label="Default select example" id="layanan">
            <option selected>Pilih Layanan</option>
            <option value="teller">Teller</option>
            <option value="customer_service">Customer Service</option>
        </select><br><br>
        <button type="button" class="btn btn-primary" onclick="buatAntrian()">Ambil Nomor Antrian</button>
        <div id="tampil-antrian"></div> <br><br>
        <div class="row align-items-start">
            <div class="col text-center">
                <h3>Antrian Teller</h3>
                <div id="tabel-teller">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Telepon</th>
                            </tr>
                        </thead>
                        <tbody id='teller-fill'>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col text-center">
                <h3>Antrian CS</h3>
                <div id="tabel-cs">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Telepon</th>
                            </tr>
                        </thead>
                        <tbody id='cs-fill'>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/inner_queue.js') }}"></script>
</body>

</html>