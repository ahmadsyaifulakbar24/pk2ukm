<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unduh Pendamping Lengkap</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
</head>
<body>
    <div class="preloader">
        <div class="loading">
            <img src="{{ asset('assets/images/spiner.gif') }}" width="220">
            <p>Harap Tunggu File Sedang di Proses</p>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 200px">
        <div id="download-success" class="d-none col-lg-7 text-center">
            <div class="alert alert-success py-5" role="alert">
                File anda berhasil di download
            </div>
        </div>
    </div>    
    <div class="d-none">
        <table id="data">
            
        </table>
    </div>

    <div id="param" class="d-none">{{ $param }}</div>
    @include('layouts.partials.script')
    <script type="text/javascript" src="{{ asset('assets/js/exportCsv.js') }}"></script>
    @php
        $id_user = (!empty($user_id)) ? $user_id : null;
    @endphp
    <script> let id_user = ({{ $id_user }} != null ) ? {{ $id_user }} : null; </script>
    <script>
        $(document).ready(function() {
            var param = $("#param").text();
            if(param == 'parent_user_id') {
                var data = { parent_user_id : user }
            } else if(param == 'user_id') {
                var data = {parent_user_id : id_user }
            } else {
                var data = {}
            }
            $.ajax({
                url: `${api_url}companion/`,
                type: 'GET',
                async: false,
                data : data,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer " + token)
                },
                success: function(result) {
                    append = `
                        <tr><th>DATA PENDAMPING PK2UKM</th></tr>
                        <tr><th>SELURUH INDONESIA</th></tr>
                        <tr><th>TAHUN 2020</th></tr>
                    
                        <tr></tr>
                    
                        <tr>
                            <th>PROV</th>
                            <th>NO</th>
                            <th>Dinas Prov/Kab/Kota</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor KTP</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Pendidikan</th>
                            <th>Alamat Rumah</th>
                            <th>No.Hp (WA)</th>
                            <th>E-Mail</th>
                        </tr>
                    `
                    let no = 1;
                    $.each(result.data, function(index, companion) {
                        append += `
                            <tr>
                                <td>${companion.parent_user.province}</td>
                                <td>${no++}</td>
                                <td>${companion.parent_user.name}</td>
                                <td>${companion.name}</td>
                                <td>'${companion.no_ktp}</td>
                                <td>${companion.gender}</td>
                                <td>${(companion.religion != null) ? companion.religion.param : ''}</td>
                                <td>${(companion.education != null) ? companion.education.param : ''}</td>
                                <td>${companion.home_address}</td>
                                <td>'${companion.phone_number}</td>
                                <td>${companion.email}</td>
                            </tr>
                        `
                    })

                    $("#data").append(append)
                }
            })
            exportTableToExcel('data', 'Pendamping Lengkap')
            $(".preloader").fadeOut();
            $("#download-success").removeClass('d-none');
        })

        
    </script>
</body>
</html>