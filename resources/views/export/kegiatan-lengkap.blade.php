<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unduh Kegiatan Lengkap</title>
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
            var getApiUrl = (role == 100) ? `${api_url}training/with_user` : `${api_url}training/with_user/${user}`
            $.ajax({
                url: getApiUrl,
                type: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer " + token)
                },
                success: function(result) {
                    // Append Header
                    append = `
                        <tr>
                            <td>Jenis Pelatihan</td>
                            <td>Judul Pelatihan</td>
                            <td>Kab/Kota Pelatihan</td>
                            <td>Tempat Pelaksanaan</td>
                            <td>Tanggal Mulai</td>
                            <td>Tanggal Selesai</td>
                            <td>No</td>
                            <td>Nama Lengkap</td>
                            <td>Nomor KTP</td>
                            <td>Jenis Kelamin</td>
                            <td>Tempat Lahir</td>
                            <td>Tanggal Lahir</td>
                            <td>Agama</td>
                            <td>Pendidikan Terakhir</td>
                            <td>Provinsi</td>
                            <td>Kab/Kota</td>
                            <td>Telp/Hp</td>
                            <td>Email</td>
                            <td>Status Usaha</td>

                            <td>Sektor UMKM</td>
                            <td>Nama UMKM</td>
                            <td>Alamat UMKM</td>
                            <td>Tanggal UMKM Didirikan</td>
                            <td>Nomor IUMK</td>
                            <td>Posisi UMKM</td>
                            <td>Omset Usaha per Bulan</td>
                            <td>Jumlah Tenaga Kerja UMKM</td>

                            <td>Nama Koperasi</td>
                            <td>Alamat Koperasi</td>
                            <td>Jenis Koperasi</td>
                            <td>Tanggal Koperasi didirikan</td>
                            <td>Nomor Induk Koperasi</td>
                            <td>Posisi Koperasi</td>
                            
                            <td>Permasalahan yang dihadapi dalam pengembangan usaha</td>
                            <td>Kebutuhan Diklat</td>
                            <td>Rekomendasi</td>
                        </tr>
                    `
                    var no = 1;
                    $.each(result.data, function(index, value) {
                        // Append Body 
                        $.each(value.participant, function(indexP, participant) {
                            
                            append += `
                                <tr>
                                    <td>${value.training_type.param}</td>
                                    <td>${value.training_title}</td>
                                    <td>${value.districts_city.districts_city}</td>
                                    <td>${value.place}</td>
                                    <td>${value.start_date}</td>
                                    <td>${value.finish_date}</td>
                                    <td>${no++}</td>
                                    <td>${participant.name}</td>
                                    <td>'${participant.id_number}</td>
                                    <td>${participant.gender}</td>
                                    <td>${participant.place_birth}</td>
                                    <td>${participant.date_birth}</td>
                                    <td>${participant.religion_id.param}</td>
                                    <td>${participant.education.param}</td>
                                    <td>${participant.province.province}</td>
                                    <td>${participant.districts_city.districts_city}</td>
                                    <td>'${participant.phone_number}</td>
                                    <td>${participant.email}</td>
                                    <td>${participant.business_status.param}</td>
                                    <td>${(participant.business_sector != null) ? participant.business_sector.param : null}</td>
                                    <td>${participant.name_umkm}</td>
                                    <td>${participant.address_umkm}</td>
                                    <td>${participant.date_establishment_umkm}</td>
                                    <td>'${participant.no_iumk}</td>
                                    <td>${(participant.position_umkm != null) ? participant.position_umkm.param : null}</td>
                                    <td>${participant.business_turnover}</td>
                                    <td>${participant.number_employees}</td>
                                    <td>${participant.name_koperasi}</td>
                                    <td>${participant.address_koperasi}</td>
                                    <td>${(participant.type_koperasi != null) ? participant.type_koperasi.param : null}</td>
                                    <td>${participant.date_establishment_koperasi}</td>
                                    <td>'${participant.registrasion_number_koperasi}</td>
                                    <td>${(participant.position_koperasi != null) ? participant.position_koperasi.param : null}</td>
                                    <td>${participant.monitoring.m1}</td>
                                    <td>${participant.monitoring.m2.param}</td>
                                    <td>${participant.monitoring.m3}</td>
                                </tr>
                            `
                        })
                    })
                    $("#data").append(append);
                }
            })

            exportTableToExcel('data', 'Kegiatan Lengkap')
            $(".preloader").fadeOut();
            $("#download-success").removeClass('d-none');
        })
    </script>
</body>
</html>
