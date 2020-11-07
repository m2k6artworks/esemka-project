<!DOCTYPE html>
<html>
<head>
    <title>Lowongan</title>
    <?php echo view('student/components/head_tags'); ?>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/views/student/jobs.css'>    
    <script src="/js/views/student/jobs.js"></script>
</head>
<body>
    <?php echo view('student/components/navbar_sidenav'); ?>

    <div class="container">
        <div id="carousel-news" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="news-1 row d-flex align-items-center">
                        <div class="col-6">
                            <p>Temukan dan pilih pekerjaan yang sesuai dengan kriteria dan bidang yang anda geluti. </p>
                            <a href="#">View more</a>
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <img src="/assets/images/people_touch.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-input row">
            <div class="col-12 col-md-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                    </div>
                    <input class="form-control" placeholder="Cari Lowongan">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                    </div>
                    <input class="form-control" placeholder="Cari Lokasi">
                </div>
            </div>
        </div>

        <div>
            <h4>Lowongan Pekerjaan</h4><br>
            <div class="list-job row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/Tokopedia-Logo-Vector-VisualLogo.png">
                        <div class="card-body">
                            <h5 class="card-title">UI / UX Designer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <list-data class="job-data" style="display: none;">
                            <data class="job-provider">BKK SMK N 2 Surakarta</data>
                            <data class="company-img">/assets/images/Tokopedia-Logo-Vector-VisualLogo.png</data>
                            <data class="company-name">Tokopedia</data>   
                            <data class="company-location">Jakarta, Indonesia</data>                         
                            <data class="job-name">UI / UX Designer</data>
                            <data class="job-type">Remote</data>
                            <data class="job-salary">Rp. 10.000.000 - 15.000.000</data>
                            <data class="job-description">Frontend Engineers in GoMerchant will be responsible for managing web interfaces that are used by merchants for their operations from dashboard and their customers for performing payment. The scope includes both desktop and mobile landscape.</data>
                            <data class="apply-endpoint">https://tokopedia.com</data>
                        </list-data>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/logo-gojek-baru-transparan.png">
                        <div class="card-body">
                            <h5 class="card-title">Web Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <list-data class="job-data" style="display: none;">
                            <data class="job-provider">BKK SMK N 2 Surakarta</data>
                            <data class="company-img">/assets/images/logo-gojek-baru-transparan.png</data>
                            <data class="company-name">Gojek</data>
                            <data class="company-location">Jakarta, Indonesia</data>
                            <data class="job-name">Web Developer</data>
                            <data class="job-type">Full Time</data>
                            <data class="job-salary">Rp. 15.000.000 - 20.000.000</data>
                            <data class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tenetur quis doloribus eius unde! Ad minus excepturi laudantium quos aspernatur repudiandae, dolorem porro tenetur facilis, molestias velit quidem! Eos, nobis.</data>
                            <data class="apply-endpoint">https://gojek.com</data>
                        </list-data>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/Microsoft_logo_525x525.png">
                        <div class="card-body">
                            <h5 class="card-title">Cloud Engineer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <list-data class="job-data" style="display: none;">
                            <data class="job-provider">BKK SMK N 2 Surakarta</data>
                            <data class="company-img">/assets/images/Microsoft_logo_525x525.png</data>
                            <data class="company-name">Microsoft</data>
                            <data class="company-location">Jakarta, Indonesia</data>
                            <data class="job-name">Cloud Engineer</data>
                            <data class="job-type">Full Time</data>
                            <data class="job-salary">Rp. 12.000.000 - 18.000.000</data>
                            <data class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tenetur quis doloribus eius unde! Ad minus excepturi laudantium quos aspernatur repudiandae, dolorem porro tenetur facilis, molestias velit quidem! Eos, nobis.</data>
                            <data class="apply-endpoint">https://microsoft.com</data>
                        </list-data>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images/63281c2d-2454-4efe-94e9-acfec62ca40a_GoogleLogo.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Android Developer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn" data-toggle="modal" data-target="#detail-job-modal">Lihat</a>
                        </div>
                        <list-data class="job-data" style="display: none;">
                            <data class="job-provider">BKK SMK N 2 Surakarta</data>
                            <data class="company-img">/assets/images/63281c2d-2454-4efe-94e9-acfec62ca40a_GoogleLogo.jpg</data>
                            <data class="company-name">Google</data>
                            <data class="company-location">Jakarta, Indonesia</data>
                            <data class="job-name">Android Developer</data>
                            <data class="job-type">Part Time</data>
                            <data class="job-salary">Rp. 15.000.000 - 20.000.000</data>
                            <data class="job-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tenetur quis doloribus eius unde! Ad minus excepturi laudantium quos aspernatur repudiandae, dolorem porro tenetur facilis, molestias velit quidem! Eos, nobis.</data>
                            <data class="apply-endpoint">https://developer.android.com</data>
                        </list-data>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detail-job-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="company-info">
                        <div class="company-img">
                            <img>
                        </div>
                        <div class="company-name-location">
                            <span class="company-name"></span>
                            <div class="company-location">
                                <i class="fa fa-map-marker-alt"></i>&nbsp;
                                <span></span>
                            </div>                        
                        </div>
                    </div>
                    <div class="job-name"></div>
                    <div class="job-type-salary row">
                        <div class="col-6">
                            <span class="job-side-head">Tipe</span>
                            <span class="job-side-detail"></span>
                        </div>
                        <div class="col-6">
                            <span class="job-side-head">Gaji</span>
                            <span class="job-side-detail"></span>
                        </div>
                    </div>
                    <div class="job-description">
                        <div><b>Deskripsi Pekerjaan</b></div>
                        <p></p>
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <button type="button" class="btn btn-favorite-job"><i class="far fa-heart"></i></button>
                    <button type="button" class="btn btn-apply-job ml-auto">Lamar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="apply-job-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <center>
                        <div>
                            <b>Apakah anda igin melamar ?</b><br>
                            <span class="apply-message"></span>
                        </div><br>
                    </center>
                </div>
                <div class="modal-footer d-flex">
                    <a class="btn-apply">
                        <center>Ya</center>
                    </a>
                    <a data-dismiss="modal">
                        <center>Tidak</center>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>