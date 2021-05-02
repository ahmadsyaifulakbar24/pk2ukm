<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <style>
        .page-break{
            page-break-after : always;
        }

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
                <div id="file-name"></div>
            </div>
        </div>
    </div>

    <div class="d-none">
        <div class="row" id="content-profile-peserta">
            
            <div class="col-12">
                <div class="border-bottom">
                    <h3 class="pb-2">BIODATA PESERTA</h3>
                </div>
            </div>
            <!-- DATA PESERTA -->
            <div class="col-3 mt-4">
                <img src="#" class="img-fluid rounded" id="profile_photo">
            </div>
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <strong class="text-uppercase">Data Peserta</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>:</th>
                                    <td class="name"></td>
                                </tr>
                                <tr>
                                    <th>Nomor KTP</th>
                                    <th>:</th>
                                    <td class ="id_number"></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>:</th>
                                    <td id="gender"></td>
                                </tr>
                                <tr>
                                    <th>Tempat, Tanggal lahir</th>
                                    <th>:</th>
                                    <td class="ttl"></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <th>:</th>
                                    <td id="religion"></td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                    <th>:</th>
                                    <td id="education"></td>
                                </tr>
                                <tr>
                                    <th>Kab/Kota</th>
                                    <th>:</th>
                                    <td id="districts_city"></td>
                                </tr>
                                <tr>
                                    <th>Telp/HP</th>
                                    <th>:</th>
                                    <td id="phone_number"></td>
                                </tr>
                                <tr>
                                    <th>E-Mail</th>
                                    <th>:</th>
                                    <td id="email"></td>
                                </tr>
                            </tbody>
                        </table>        
                    </div>
                </div>
            </div>
    
            <!-- PAGE BREAK -->
            <div class="page-break"></div>
    
            <div class="col-12">
                <div class="border-bottom">
                    <h3 class="pb-2">DATA KOPERASI/ UMKM PESERTA</h3>
                </div>
            </div>
    
            <!-- DATA KOPERASI / UMKM PESERTA -->
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <strong class="text-uppercase">Data Koperasi/Umkm Peserta</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Status Usaha</th>
                                    <th>:</th>
                                    <td id="business_status"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <!-- DATA KOPERASI -->
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <strong>DATA KOPERASI</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Nama Koperasi</th>
                                    <th>:</th>
                                    <td id="name_koperasi"></td>
                                </tr>
                                <tr>
                                    <th>Alamat Koperasi</th>
                                    <th>:</th>
                                    <td id="address_koperasi"></td>
                                </tr>
                                <tr>
                                    <th>Jenis Koperasi</th>
                                    <th>:</th>
                                    <td id="type_koperasi"></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pendirian Koperasi</th>
                                    <th>:</th>
                                    <td id="date_establishment_koperasi"></td>
                                </tr>
                                <tr>
                                    <th>Nomor Induk Koperasi</th>
                                    <th>:</th>
                                    <td id="registrasion_number_koperasi"></td>
                                </tr>
                                <tr>
                                    <th>Jabatan di Koperasi</th>
                                    <th>:</th>
                                    <td id="position_koperasi"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <!-- DATA UMKM -->
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <strong>DATA UMKM</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Nama Usaha (UMKM)</th>
                                    <th>:</th>
                                    <td id="name_umkm"></td>
                                </tr>
                                <tr>
                                    <th>Alamat Usaha (UMKM)</th>
                                    <th>:</th>
                                    <td id="address_umkm"></td>
                                </tr>
                                <tr>
                                    <th>Sektor Usaha UMKM</th>
                                    <th>:</th>
                                    <td id="business_sector"></td>
                                </tr>
                                <tr>
                                    <th>Tanngal UMKM Didirikan</th>
                                    <th>:</th>
                                    <td id="date_establishment_umkm"></td>
                                </tr>
    
                                <tr>
                                    <th>Nomor IUMK</th>
                                    <th>:</th>
                                    <td id="no_iumk"></td>
                                </tr>
                                <tr>
                                    <th>Jabatan di UMKM</th>
                                    <th>:</th>
                                    <td id="position_umkm"></td>
                                </tr>
                                <tr>
                                    <th>Volume (Omset) Usaha</th>
                                    <th>:</th>
                                    <td id="business_turnover"></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Karyawan</th>
                                    <th>:</th>
                                    <td id="number_employees"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <!-- PAGE BREAK -->
            <div class="page-break"></div>
    
            <!-- PEMANTAUAN -->
            <div class="col-12">
                <div class="border-bottom">
                    <h3 class="pb-2">PEMANTAUAN PELAKSANAAN PELATIHAN</h3>
                </div>
            </div>
            <div class="col-12 mt-3">
                <table class="table table-borderless">
                    <tr>
                        <th>Nomor KTP</th>
                        <td class="id_number"></td>
                    </tr>
                    <tr>
                        <th>Nama Lengkap</th>
                        <td class="name"></td>
                    </tr>
                    <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <td class="ttl"></td>
                    </tr>
    
                    <tr>
                        <th>Nama Kegiatan</th>
                        <td id="training_title"></td>
                    </tr>
    
                    <tr>
                        <th>Kabupaten/ Kota Kegiatan</th>
                        <td id="trainig_disctricts_city"></td>
                    </tr>
                </table>
            </div>
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <strong>Permasalahan yang dihadapi dalam pengembangan usaha </strong>
                            <p id="m1">Jawaban : </p>
                        </div>
                        <div class="mt-3">
                            <strong>Kebutuhan Diklat</strong>
                            <p id="m2">Jawaban : </p>
                        </div>
                        <div class="mt-3">
                            <strong>Rekomendasi</strong>
                            <p id="m3">Jawaban : </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.script')
    <script type="text/javascript" src="{{ asset('assets/vendors/html2pdf.js') }}"></script>
    <script>var peserta_id = {{ $peserta_id }}</script>
    <script>
        $(document).ready(function() {

            $.ajax({
                url: `${api_url}participant/${peserta_id}/by_id`,
                type: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer " + token)
                },
                success: function(result) {
                    let data = result.data
                    $.ajax({
                        url: `${api_url}training/${data.training_id}/by_id`,
                        type: 'GET',
                        async: false,
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader("Authorization", "Bearer " + token)
                        },
                        success: function(result) {
                            let training = result.data
                            $('#training_title').text(training.training_title);
                            $('#trainig_disctricts_city').text(training.districts_city.districts_city);
                        }
                    })
                    $("#file-name").text(data.id_number + '-' + data.name)
                    $('img#profile_photo').attr('src', data.profile_photo)
                    $('.name').text(data.name)
                    $('.id_number').text(data.id_number)
                    $('#gender').text(data.gender)
                    $('.ttl').text(data.place_birth + ', ' + data.date_birth)
                    $('#religion').text(data.religion_id.param);
                    $('#education').text(data.education.param);
                    $('#districts_city').text(data.districts_city.districts_city);
                    $('#phone_number').text(data.phone_number);
                    $('#email').text(data.email);
                    $('#business_status').text(data.business_status.param);
                    $('#name_koperasi').text(data.name_koperasi);
                    $('#address_koperasi').text(data.address_koperasi);
                    $('#type_koperasi').text((data.type_koperasi != null) ? data.type_koperasi.param : '');
                    $('#date_establishment_koperasi').text(data.date_establishment_koperasi);
                    $('#registrasion_number_koperasi').text(data.registrasion_number_koperasi);
                    $('#position_koperasi').text((data.position_koperasi != null) ? data.position_koperasi.param : '');
                    $('#name_umkm').text(data.name_umkm);
                    $('#address_umkm').text(data.address_umkm);
                    $('#business_sector').text((data.business_sector != null) ? data.business_sector.param : '');
                    $('#date_establishment_umkm').text(data.date_establishment_umkm);
                    $('#no_iumk').text(data.no_iumk);
                    $('#position_umkm').text((data.position_umkm != null) ? data.position_umkm.param : '');
                    $('#business_turnover').text(data.business_turnover);
                    $('#number_employees').text(data.number_employees);
                    $('#m1').text(data.monitoring.m1);
                    $('#m2').text(data.monitoring.m2.param);
                    $('#m3').text(data.monitoring.m3);
                }
            })
            let filename =$("#file-name").text() + '.pdf'
            let element = $('#content-profile-peserta').html();
            console.log(element)
            let opt = {
                margin: [0.3, 0.3],
                filename: filename,
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
            }

            html2pdf().from(element).set(opt).toPdf().get('pdf').then(function(pdf) {
                var totalPages = pdf.internal.getNumberOfPages();
                for (i = 1; i <= totalPages; i++) {
                    pdf.setPage(i);
                    pdf.setFontSize(9);
                    pdf.text(i + ' / ' + totalPages, (pdf.internal.pageSize.getWidth() - 0.8), (pdf.internal.pageSize.getHeight() - 0.8));
                }
            }).save();
            $(".preloader").fadeOut();
            $("#download-success").removeClass('d-none');
        })
    </script>
</body>
</html>