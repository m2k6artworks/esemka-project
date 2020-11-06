<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <?php echo view('student/components/head_tags') ?>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/views/student/profile.css'>
    <script src="/js/views/student/profile.js"></script>
</head>
<body>
    <?php echo view('student/components/navbar_sidenav') ?>
    <div class="container-fluid">
        <div class="profile-information">
            <div class="setting-btn">
                <i class="fa fa-cog"></i>
            </div>
            <div class="profile-img">
                <img src="/assets/images/00092120.jpg">
            </div>
            <div class="profile-job">
                Software Developer
            </div>
            <div class="profile-username">
                @anonymous
            </div>
            <div class="profile-countable">
                <div class="count-container">
                    <div class="ammounts">500</div>
                    <div class="categories">Portofolio</div>
                </div>
                <div class="count-container">
                    <div class="ammounts">8065100</div>
                    <div class="categories">Suka</div>
                </div>
                <div class="count-container">
                    <div class="ammounts">1240</div>
                    <div class="categories">Challenge</div>
                </div>
            </div>
        </div>

        <div class="skill-information">
            <h3><b>Keahlian</b></h3>
            <div class="skills">
                <div class="skill-item">Figma</div>
                <div class="skill-item">Java</div>
                <div class="skill-item">Android Development</div>
                <div class="skill-item">Node JS</div>
                <div class="skill-item">JavaScript</div>
                <div class="skill-item">React JS</div>
                <div class="skill-item">Bootstrap</div>
                <div class="skill-item">PHP</div>
                <div class="skill-item">Laravel</div>
                <div class="skill-item">Python</div>
                <div class="skill-item">Begginer Machine Learning</div>
            </div>
        </div>

        <ul id="tab-attachment" class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" id="pills-portfolio-tab" data-toggle="pill" href="#pills-portfolio" role="tab" aria-controls="pills-portfolio" aria-selected="true">
                    <i class="fas fa-th-large"></i>
                    <div>Portofolio</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-certificate-tab" data-toggle="pill" href="#pills-certificate" role="tab" aria-controls="pills-certificate" aria-selected="false">
                    <i class="fas fa-file-alt"></i>
                    <div>Sertifikat</div>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-portfolio" role="tabpanel" aria-labelledby="pills-portfolio-tab">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card add-portfolio" data-toggle="modal" data-target="#add-portfolio-modal">
                            <div class="card-body">
                                <i class="fas fa-plus-circle"></i>
                                <div>Tambah</div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card portfolio">
                            <img class="card-img-top" src="/assets/images/OnboardingPage_2.png">
                            <div class="card-body">
                                <h5 class="card-title">Onboarding Page</h5>
                            </div>
                            <list-data class="portfolio-data" style="display: none;">
                                <data class="profile-img">/assets/images/00092120.jpg</data>
                                <data class="profile-username">anonymous</data>
                                <data class="post-time">1604657152</data>
                                <data class="post-images">/assets/images/OnboardingPage_2.png</data>
                                <data class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat perferendis id voluptas distinctio ipsa a ut necessitatibus debitis ad corporis, enim, hic reprehenderit. Aspernatur placeat nesciunt alias hic delectus enim.</data>
                                <data class="like-ammounts">1500</data>
                                <data class="comment-ammounts">8000</data>
                                <data class="share-link">https://nikerja.com</data>
                            </list-data>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="pills-certificate" role="tabpanel" aria-labelledby="pills-finish-tab">
                <div id="certificate-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#certificate-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#certificate-carousel" data-slide-to="1"></li>
                        <li data-target="#certificate-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="certificate-img">
                                <img src="https://miro.medium.com/max/942/1*uM01Buep6X5ddTrdqBz78g.png">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="certificate-img">
                                <img src="https://miro.medium.com/max/1278/1*qEj3Sl_MHBnKbihcagL2Ew.png">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="certificate-img">
                                <img src="https://pbs.twimg.com/media/EdrQ9IMVAAEx7ar.jpg">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#certificate-carousel" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#certificate-carousel" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detail-portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="post-info">
                        <div class="profile-img">
                            <img>
                        </div>
                        <div class="name-time">
                            <div class="profile-username"></div>
                            <div class="post-time"></div>
                        </div>
                    </div>
                    <div class="post-carousel">
                        <img>
                    </div>
                    <div class="post-description"></div>
                </div>
                <div class="modal-footer">
                    <div class="btn-footer like">
                        <i class="fas fa-heart"></i>
                        <div class="ammounts"></div>
                    </div>
                    <div class="btn-footer comments">
                        <i class="far fa-comment-alt"></i>
                        <div class="ammounts"></div>
                    </div>
                    <div class="btn-footer">
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="modal fade" id="add-portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 btn-list">
                            <div class="row">
                                <div class="btn-galery">
                                    <div class="galery-icon"></div>
                                    <div class="">Galery</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 input-list">
                            <form method="POST">

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex">
                    <button type="button" class="btn ml-auto">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    -->

</body>
