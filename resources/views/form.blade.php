<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Pendaftaran</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->

        <!-- Boostrap --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
    <div class="formulir">
        <!-- form dengan method post -->
        @csrf 
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Nama Lengkap</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama lengkap">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Nama Panggilan</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama panggilan">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" name="jeniskelamin" class="custom-select">
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tempatlahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
                <label for="tanggallahir"">Tanggal Lahir/label>
                <input type="date" class="form-control" id="tgllahir">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat" placeholder="Alamat Lengkap" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" placeholder="NISN">
            </div>
            <div class="submit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    <!-- JS -->
    </body>