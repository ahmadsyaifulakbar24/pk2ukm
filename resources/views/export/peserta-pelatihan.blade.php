<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peserta Lengkap</title>
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
    <script type="text/javascript" src="{{ asset('assets/js/exportExcel.js') }}"></script>
    <script>var training_id = {{ $training_id }}</script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: `${api_url}training/${training_id}/by_id`,
                type: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer " + token)
                },
                success: function(result) {
                    let data = result.data
                    append = `
                        <tr>
                            <th colspan="14">LAPORAN DATA PESERTA KEGIATAN</th>
                        </tr>
                        <tr>
                            <th colspan="14">DAK NONFISIK PK2UKM</th>
                        </tr>
                        <tr>
                            <th colspan="14">DEPUTI BIDANG PENGEMBANGAN SDM</th>
                        </tr>
                        <tr></tr><tr></tr>
                            <tr>
                                <th>Jenis Kegiatan</th>
                                <th>${data.training_type.param}</th>
                            </tr>
                            <tr>
                                <th>Judul Kegiatan</th>
                                <th>${data.training_title}</th>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <th>${data.province.province}</th>
                            </tr>
                            <tr>
                                <th>Kab/Kota</th>
                                <th>${data.districts_city.districts_city}</th>
                            </tr>
                            <tr>
                                <th>Jumlah Peserta</th>
                                <th>${data.total_participant}</th>
                            </tr>
                            <tr>
                                <th>Tempat Pelaksanaan</th>
                                <th>${data.place}</th>
                            </tr>
                            <tr>
                                <th>Tanggal Pelaksanaan</th>
                                <th>${data.start_date} s/d ${data.finish_date}</th>
                            </tr>
                            <tr></tr>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor KTP</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Kab/ Kota </th>
                            <th>Telp/ HP</th>
                            <th>Status Usaha</th>
                            <th>Sektor Usaha UMKM / Jenis Koperasi</th>
                            <th>Nama Koperasi/UMKM</th>
                            <th>Alamat Koperasi/UMKM</th>
                        </tr>
                    `
                    $.ajax({
                        url: `${api_url}participant/${training_id}/by_training`,
                        type: 'GET',
                        async: false,
                        data: {
                            'limit' : 'false'
                        },
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader("Authorization", "Bearer " + token)
                        },
                        success: function(result) {
                            let no = 1
                            $.each(result.data, function(index, participant) {
                                append += `
                                    <tr>
                                        <td>${no++}</td>
                                        <td>${participant.name}</td>
                                        <td>${participant.id_number}</td>
                                        <td>${participant.gender}</td>
                                        <td>${participant.place_birth}</td>
                                        <td>${participant.date_birth}</td>
                                        <td>${participant.religion_id.param}</td>
                                        <td>${participant.education.param}</td>
                                        <td>${participant.districts_city.districts_city}</td>
                                        <td>${participant.phone_number}</td>
                                        <td>${participant.business_status.param}</td>
                                        <td>${(participant.business_sector != null) ? participant.business_sector.param : ''} ${(participant.type_koperasi != null) ? participant.type_koperasi.param : ''}</td>
                                        <td>${(participant.name_umkm != null) ? participant.name_umkm : ''} ${(participant.name_koperasi != null) ? participant.name_koperasi : ''}</td>
                                        <td>${(participant.address_umkm != null) ? participant.address_umkm : ''} ${(participant.address_koperasi != null) ? participant.address_koperasi : ''}</td>
                                    </tr>
                                `
                            })
                        }
                    })
                }
            })
           
            $('#data').append(append)
            exportTableToExcel('data', 'Peseta Lengkap')
            $(".preloader").fadeOut();
            $("#download-success").removeClass('d-none');
        })
    </script>
</body>
</html>