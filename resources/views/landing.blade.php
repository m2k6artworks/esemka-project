<!DOCTYPE html>
<html>
<head>
    <title>nikerja!</title>
    <?php echo view('head_tags.public_head'); ?>
    <?php echo view('head_tags.pwa_head'); ?>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/views/landing.css'>
    <script src="/js/views/landing.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo-container d-flex">
            <div class="app-logo">
                <img src="/assets/icons/logo-54.png">
            </div>
            <span class="app-name d-flex align-items-center">nikerja!</span>
        </div>
        <div class="tab-navigation-navbar">
            <div class="tab-navbar active">
                Murid
            </div>
            <div class="tab-navbar">
                Perusahaan
            </div>
        </div>
        <div class="btn-subscribe-container">
            <a href="#" class="btn-subscribe" data-toggle="modal" data-target="#subscribe-modal">Subscribe</a>
        </div>
    </nav>

    <div class="content-right-background">
        <div class="content">
            <p>
                <b>
                <span class="hashtag"><i>#</i>SiapKerja</span><br>
                <span class="with-text">Dengan nikerja!</span><br><br>
                sebuah platform untuk menghubungkan perusahaan dan murid untuk mencari pekerjaan dan tempat magang, dengan tambahan fitur-fitur yang dibuat untuk mengatasi permasalahan murid dan perusahaan.
                </b>
            </p><br>
            <a class="btn-subscribe" href="#" data-toggle="modal" data-target="#subscribe-modal">Subscribe</a>
        </div>
    </div>

    <div class="feature-content">
        <div class="short-desc">
            <center>
            <b>
                <span class="hashtag">#FiturKami</span>
                <div>Nggak usah bingung pas cari kerja,<br>karena seluruh fitur di nikerja siap bantuin kamu</div>
            </b>
            </center>
        </div><br>
        <div class="feature-card-list">
            <a href="#" class="feature-card">
                <div class="card-img">
                    <img src="/assets/images/landing/character-selfie.png">
                </div><br>
                <span class="card-title">Portofolio</span><br>
                <p class="card-content">
                    Fitur portofolio dihadirkan agar perusahaan dapat menilai skill murid melalui portofolio agar perusahaan tidak melihat hanya melalui jenjang pendidikan.
                </p>
            </a>
            <a href="#" class="feature-card">
                <div class="card-img">
                    <img src="/assets/images/landing/Illustrations-sitting-reading.png">
                </div><br>
                <span class="card-title">Lowongan</span><br>
                <p class="card-content">
                    Fitur mencari lowongan dihadirkan agar murid dapat mencari tempat kerja sesuai dan mudah.
                </p>
            </a>
            <a href="#" class="feature-card">
                <div class="card-img">
                    <img src="/assets/images/landing/character-reading.png">
                </div><br>
                <span class="card-title">Magang</span><br>
                <p class="card-content">
                    Fitur magang dihadirkan agar murid dapat mencari tempat magang yang sesuai dengan keahlian yang dipelajari oleh murid.
                </p>
            </a>
            <a href="#"class="feature-card">
                <div class="card-img">
                    <img src="/assets/images/landing/Illustrations-messy.png">
                </div><br>
                <span class="card-title">Membuat CV</span><br>
                <p class="card-content">
                    Kami menghadirkan Fitur ini agar Murid dapat membuat CV dengan lebih mudah dan lebih menarik.
                </p>
            </a>
        </div><br>
        <div class="feature-wireframe">
            <iframe class="video"></iframe>
            <div class="option-list">
                <div class="option">
                    Mencari Lowongan
                    <div class="link">https://drive.google.com/file/d/1nR4jfjRbNjxriOLxXS-JAQ7m-bH9ylj3/preview</div>
                </div>
                <div class="option">
                    Mencari Tempat Magang
                    <div class="link"></div>
                </div>
                <div class="option">
                    Membuat Portofolio
                    <div class="link">https://drive.google.com/file/d/1yIGWyVdiGHuqr-AUHrTgaV9lIjN64DWc/preview</div>
                </div>
                <div class="option">
                    Membuat CV
                    <div class="link"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-right-background history">
        <div class="content">
            <p>
                <b>
                <span class="hashtag"><i>#</i>CeritaDibalik</span><br>
                <span class="with-text">Nikerja!</span><br><br>
                karena banyaknya permasalahan untuk mencari pekerjaan pada siswa SMK, kami merasa tertarik untuk membangun sebuah sistem yang mudah diaplikasikan untuk perusahaan ataupun murid untuk menjalin sebuah relasi.
                </b>
            </p><br>
            <a class="btn-subscribe" href="#" data-toggle="modal" data-target="#subscribe-modal">Subscribe</a>
        </div>
    </div>

    <div class="footer">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-5">
                <div class="subscribe-info">
                    <div class="partner">
                        <img src="/assets/images/landing/Group_21.png">
                    </div>
                    <div>
                        <span class="now-subs">Subscribe sekarang!</span>
                        <div class="email-subs">contact@nikerja.com</div>
                        <a href="#" class="btn-subscribe-footer" data-toggle="modal" data-target="#subscribe-modal">Subscribe!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="social-media-info d-flex justify-content-center align-items-center flex-column">
                    <span class="title">Temukan nikerja! Di</span>
                    <div class="social-media-list">
                        <div class="social-media twitter">
                            <div class="icon">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span class="name">@nikerja</span>
                        </div>
                        <div class="social-media fb">
                            <div class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <span class="name">nikerja</span>
                        </div>
                        <div class="social-media instagram">
                            <div class="icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <span class="name">@nikerja</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="text-author">Surakarta 2019, Dibuat dengan&nbsp;<i class="fa fa-heart"></i>&nbsp;Oleh Tim nikerja!</span>
    </div>

    <div class="modal fade" id="subscribe-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="subs-text">Subscribe<span>,</span></div>
                        <input class="email-input" type="email" placeholder="Tulis email disini"><br>
                        <button class="btn-subscribe" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>