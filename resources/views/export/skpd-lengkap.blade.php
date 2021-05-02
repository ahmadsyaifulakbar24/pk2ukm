<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unduh SKPD Lengkap</title>
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
    @include('layouts.partials.script')
    <script type="text/javascript" src="{{ asset('assets/js/exportCsv.js') }}"></script>
    <script>
        $(document).ready(function() {
            append = `
                <tr><th>DATA LENGKAP SKPD PK2UKM</th></tr>
                <tr><th>SELURUH INDONESIA</th></tr>
                <tr><th>TAHUN 2020</th></tr>
            
                <tr></tr>
            
                <tr>
                    <th>PROV</th>
                    <th>NO</th>
                    <th>Dinas Prov/Kab/Kota</th>
                    <th>Nama Kepala Dinas</th>
                    <th>NIP Kepala Dinas</th>
                    <th>No HP (WA) Kepala Dinas</th>
                    <th>Nama Penanggung Jawab Operasional Harian DAK Non Fisik PK2UKM</th>
                    <th>No HP (WA) Penanggung Jawab Operasional Harian DAK Non Fisik PK2UKM</th>
                </tr>
            `
            $.ajax({
                url: `${api_url}skpd`,
                type: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer " + token)
                },
                success: function(result) {
                    let no = 1;
                    $.each(result.data, function(index, skpd) {
                        append += `
                            <tr>
                                <td>${skpd.user.province.province}</td>
                                <td>${no++}</td>
                                <td>${skpd.user.name}</td>
                                <td>${skpd.name_dinas}</td>
                                <td>'${skpd.nip_dinas}</td>
                                <td>'${skpd.phone_number_dinas}</td>
                                <td>${skpd.name_responsible_person}</td>
                                <td>'${skpd.phone_number_responsible_person}</td>
                            </tr>
                        `
                    })
                    $("#data").append(append)
                }
            })
            exportTableToExcel('data', 'SKPD Lengkap')
            $(".preloader").fadeOut();
            $("#download-success").removeClass('d-none');
        })
    </script>
</body>
</html>