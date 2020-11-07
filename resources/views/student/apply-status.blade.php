<!DOCTYPE html>
<html>
<head>
    <title>Status Lamaran</title>
    <?php echo view('student/components/head_tags') ?>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/views/student/apply-status.css'>
    <!--<script src="/js/views/student/jobs.js"></script>-->
</head>
<body>
    <?php echo view('student/components/navbar_sidenav') ?>

    <div class="header-blue"></div>
    <div class="container">
        <div class="apply-header">
            <div class="profile-img">
                <img src="/assets/images/00092120.jpg">
            </div>
            <span class="apply-text">Lamaran anda</span>
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-status-tab" data-toggle="pill" href="#pills-status" role="tab" aria-controls="pills-status" aria-selected="true">Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-finish-tab" data-toggle="pill" href="#pills-finish" role="tab" aria-controls="pills-finish" aria-selected="false">Selesai</a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="apply-tab-content">
            <div class="tab-pane fade show active" id="pills-status" role="tabpanel" aria-labelledby="pills-status-tab">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-md-9">
                                <div class="user-name">
                                    anonymous
                                </div>
                                <div class="company-name">
                                    <b>Perusahaan : &nbsp;</b><span>Tokopedia</span>
                                </div>
                                <div class="job-name">
                                    <b>Posisi : &nbsp;</b><span>UI / UX Designer</span>
                                </div>
                                <div class="interview-schedule">
                                    <b>Jadwal Interview : &nbsp;</b><span>Menunggu Konfirmasi</span>
                                </div>
                                <div class="status review">
                                    Review
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="company-img">
                                    <img src="/assets/images/Tokopedia-Logo-Vector-VisualLogo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-md-9">
                                <div class="user-name">
                                    anonymous
                                </div>
                                <div class="company-name">
                                    <b>Perusahaan : &nbsp;</b><span>Tokopedia</span>
                                </div>
                                <div class="job-name">
                                    <b>Posisi : &nbsp;</b><span>UI / UX Designer</span>
                                </div>
                                <div class="interview-schedule">
                                    <b>Jadwal Interview : &nbsp;</b><span>Menunggu Konfirmasi</span>
                                </div>
                                <div class="status sending-file">
                                    Pemberian Berkas
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="company-img">
                                    <img src="/assets/images/Tokopedia-Logo-Vector-VisualLogo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-md-9">
                                <div class="user-name">
                                    anonymous
                                </div>
                                <div class="company-name">
                                    <b>Perusahaan : &nbsp;</b><span>Tokopedia</span>
                                </div>
                                <div class="job-name">
                                    <b>Posisi : &nbsp;</b><span>UI / UX Designer</span>
                                </div>
                                <div class="interview-schedule">
                                    <b>Jadwal Interview : &nbsp;</b><span>01 Nov 2020, 07.00 WIB</span>
                                </div>
                                <div class="status interview">
                                    Interview
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="company-img">
                                    <img src="/assets/images/Tokopedia-Logo-Vector-VisualLogo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-finish" role="tabpanel" aria-labelledby="pills-finish-tab">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-md-9">
                                <div class="user-name">
                                    anonymous
                                </div>
                                <div class="company-name">
                                    <b>Perusahaan : &nbsp;</b><span>Tokopedia</span>
                                </div>
                                <div class="job-name">
                                    <b>Posisi : &nbsp;</b><span>UI / UX Designer</span>
                                </div>
                                <div class="interview-schedule">
                                    <b>Jadwal Interview : &nbsp;</b><span>Selesai</span>
                                </div>
                                <div class="status accepted">
                                    Diterima
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="company-img">
                                    <img src="/assets/images/Tokopedia-Logo-Vector-VisualLogo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 col-md-9">
                                <div class="user-name">
                                    anonymous
                                </div>
                                <div class="company-name">
                                    <b>Perusahaan : &nbsp;</b><span>Tokopedia</span>
                                </div>
                                <div class="job-name">
                                    <b>Posisi : &nbsp;</b><span>UI / UX Designer</span>
                                </div>
                                <div class="interview-schedule">
                                    <b>Jadwal Interview : &nbsp;</b><span>-</span>
                                </div>
                                <div class="status rejected">
                                    Ditolak
                                </div>
                            </div>
                            <div class="col-4 col-md-3">
                                <div class="company-img">
                                    <img src="/assets/images/Tokopedia-Logo-Vector-VisualLogo.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>