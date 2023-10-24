<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 4rem" src="{{ asset('images/GE.png') }}" alt=""></a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3 "> 
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Make Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('beforelogin') }}">Profile</a>
                    </li>
                </ul>
                <div>
                    
                </div>
                
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="row">

            <div class="col-md-8"> 
                <div class="card shadow-lg">
                    <div class="container">
                        <div class="container text-center p-2" >
                            <h3 class="card-title text-success">Data Pemesanan</h3>
                        </div>
                        <hr class="m-0">
                        <div class="container p-3">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Pemesan</label>
                                    <input type="email" class="form-control mt-2 " id="exampleFormControlInput1" placeholder="Masukan Nama Lengkap">
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group mt-4">
                                            <label for="identitasDropdown">Identitas</label>
                                            <select class="form-control-sm mt-2" id="identitasDropdown">
                                                <option value="ktp">KTP</option>
                                                <option value="sim">SIM</option>
                                                <option value="passport">Passport</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group mt-4">
                                            <label for="nomorIdentitas"></label>
                                            <input type="text" class="form-control mt-2" id="nomorIdentitas" placeholder="Masukan Nomor Identitas">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="name@gmail.com">
                                </div>
                                <div class="form-group mt-4 mb-3">
                                    <label for="exampleFormControlInput1">No. Whatsapp</label>
                                    <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="081xxxxxxxx">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"> 
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="container text-center" >
                            <h3 class="card-title text-success">Rincian Pemesanan</h3>
                        </div>
                        <div class="container p-2">
                            <img src="{{ asset('images/1.png') }}" class="card-img-top rounded" alt="">
                        </div>
                        <div class="container">
                            <h5 class="text-dark">Virtual Concert : Devano Danendra</h5>
                        </div>
                        <hr>
                        <div class=" container pt-0 ">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary m-0">Tiket</p>
                                <p class="text-secondary m-0">Jumlah</p>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <p class="m-0"><strong>Phase 1: Regular A</strong></p>
                                    <p class="m-0"><strong>Rp. 60.000</strong></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="">x1</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary">Subtotal</p>
                                <p class="text-dark">Rp. 60.000</p>
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary">Total</p>
                                <p class="text-dark"><strong>Rp. 60.000</strong></p>
                            </div>
                        </div>
                        <button class="btn btn-success mt-2
                        " style="width:100%;">Bayar</button>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    
</script>
</body>

</html>