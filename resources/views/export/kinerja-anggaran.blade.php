<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unduh Kinerja Anggaran</title>
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
        <table id="data" class="table-bordered">
            <thead>
                <tr>
                    <td rowspan="4">PROV</td>
                    <td rowspan="4">NO</td>
                    <td rowspan="4">Dinas Prov/Kab/Kota</td>
                    <td colspan="4">PAGU</td>
                    <td colspan="6">REALISASI TAHAP 1</td>
                    <td colspan="6">REALISASI TAHAP 2</td>
                    <td colspan="5">SISA REALISASI</td>
                </tr>
                <tr> 
                    <td colspan="4" class="center">VOLUME</td>
            
                    <td colspan="5">VOLUME</td>
                    <td rowspan="3">PERSENT(%)</td>
            
                    <td colspan="5">VOLUME</td>
                    <td rowspan="3">PERSENT(%)</td>
            
                    <td colspan="5">VOLUME</td>
                    <td rowspan="3">PERSENT(%)</td>
                </tr>
                <tr>
                    <td>DIKLAT</td>
                    <td>PENDAMPING</td>
                    <td>TOTAL</td>
                    <td>ANGGARAN</td>
            
                    <td>DIKLAT</td>
                    <td>PENDAMPING</td>
                    <td>TOTAL</td>
                    <td rowspan="2">PERSENT (%)</td>
                    <td>ANGGARAN</td>
            
                    <td>DIKLAT</td>
                    <td>PENDAMPING</td>
                    <td>TOTAL</td>
                    <td rowspan="2">PERSENT (%)</td>
                    <td>ANGGARAN</td>
            
                    <td>DIKLAT</td>
                    <td>PENDAMPING</td>
                    <td>TOTAL</td>
                    <td rowspan="2">PERSENT (%)</td>
                    <td>ANGGARAN</td>
                </tr>
                <tr>
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(RP)</td>
            
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(RP)</td>
            
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(RP)</td>
            
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(ORANG)</td>
                    <td>(RP)</td>
                </tr>
            </thead>

            <!-- ISI DATA -->
            <tbody id="content-data"> </tbody>
        </table>
    </div>

    @include('layouts.partials.script')
    <script type="text/javascript" src="{{ asset('assets/js/exportExcel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: `${api_url}budged_performance/all_budged_performance`,
                type: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Authorization", "Bearer " + token)
                },
                success: function(result) {
                    let append
                    $.each(result.data, function(index, budget) {
                        let pagu_total_taget_person = budget.budged_performance.target_participant + budget.budged_performance.target_companion
                        let t1_total_taget_person = budget.budged_performance.realization_participant1 + budget.budged_performance.realization_companion1
                        let t1_persentase_person = (t1_total_taget_person*100) / pagu_total_taget_person
                        let t1_persetase_budget = (budget.budged_performance.budged_realization1 * 100) / budget.budged_performance.budged

                        let t2_participant = budget.budged_performance.realization_participant1 + budget.budged_performance.realization_participant2
                        let t2_companion = budget.budged_performance.realization_companion1 + budget.budged_performance.realization_companion2
                        let t2_total_target_person = t2_participant + t2_companion
                        let t2_persentase_person = (t2_total_target_person * 100) / pagu_total_taget_person
                        let t2_budged_realization = budget.budged_performance.budged_realization1 + budget.budged_performance.budged_realization2
                        let t2_persetase_budget = (t2_budged_realization * 100) / budget.budged_performance.budged

                        let s_participant = budget.budged_performance.target_participant - t2_participant
                        let s_companion = budget.budged_performance.target_companion - t2_companion
                        let s_total_target_person = s_participant + s_companion
                        let s_persentase_person = (s_total_target_person * 100) / pagu_total_taget_person
                        let s_budged = budget.budged_performance.budged - t2_budged_realization
                        let s_persetase_budget = (s_budged * 100) / budget.budged_performance.budged
                        append += `
                            <tr>
                                <td>${budget.province.province}</td>
                                <td>${budget.order_province}</td>
                                <td>${budget.name}</td>
                                <td>${budget.budged_performance.target_participant}</td>
                                <td>${budget.budged_performance.target_companion}</td>
                                <td>${pagu_total_taget_person}</td>
                                <td>${budget.budged_performance.budged}</td>
                                <td>${budget.budged_performance.realization_participant1}</td>
                                <td>${budget.budged_performance.realization_companion1}</td>
                                <td>${t1_total_taget_person}</td>
                                <td>${t1_persentase_person.toFixed(2)}%</td>
                                <td>${budget.budged_performance.budged_realization1}</td>
                                <td>${t1_persetase_budget.toFixed(2)}%</td>
                                <td>${t2_participant}</td>
                                <td>${t2_companion}</td>
                                <td>${t2_total_target_person}</td>
                                <td>${t2_persentase_person.toFixed(2)}%</td>
                                <td>${t2_budged_realization}</td>
                                <td>${t2_persetase_budget.toFixed(2)}%</td>
                                <td>${s_participant}</td>
                                <td>${s_companion}</td>
                                <td>${s_total_target_person}</td>
                                <td>${s_persentase_person.toFixed(2)}%</td>
                                <td>${s_budged}</td>
                                <td>${s_persetase_budget.toFixed(2)}%</td>
                            </tr>
                        ` 
                    })
                    $("#content-data").append(append)
                }
            })
            
            exportTableToExcel('data', 'Kinerja Anggaran')
            $(".preloader").fadeOut();
            $("#download-success").removeClass('d-none');
        })
    </script>
</body>
</html>