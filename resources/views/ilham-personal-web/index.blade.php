@extends('layouts.main')

@section('content')
    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

            </div>
        </div>
    </header>

    <!-- Page Content -->
    <section id="section-cv" class="py-5">
        <!-- Page Content -->
        <div class="container">
            <div class="section sectiontop">
                <img src="/img/profilepicture2.png" id="profilepicture" width="110" height="110" alt="profile_picture" />

                <h1>Muhammad Illham Friansyah</h1>

                <h2>Future Programmer</h2>

                <ul>
                    <li><span>E-mail:</span> <a href="#">illham44@gmail.com</a></li>

                    <li><span>Website:</span> <a href="https://illham21.blogspot.com/">illham21.blogspot.com</a></li>

                    <li><span>Phone:</span> +62 87878376013</li>

                    <li><span>Address:</span> Jalan Kalibata Timur 3 RT 05 RW 08 no 49 Kalibata,<br> Pancoran, Jakarta, Indonesia</li>
                </ul>
            </div>

            <div class="section personal">
                <div class="left">
                    <h3>About Me</h3>
                </div>

                <div class="right">
                    <p>Saya adalah mahasiswa Jurusan Teknik Informatika, Fakultas Teknologi Industri, Universitas Gunadarma saat ini saya mampu dalam programming dekstop dan web walaupun hanya basic saja.</p>

                    <p>Saya juga dapat bekerja secara mandiri maupun bekerja di dalam tim karena berdasarkan pengalaman selama kuliah dibimbing untuk menyelesaikan tugas secara berkelompok. Selain itu saya juga sangat mengutamakan kejujuran dan kesabaran.</p>
                </div>
            </div>

            <div class="section education">
                <div class="left">
                    <h3>Education</h3>

                    <p>Saya menempuh pendidikan seperti biasa tidak ada hal yang istimewa hanya mengikuti alur</p>
                </div>

                <div class="right">
                    <div class="row selection_education">
                        <h5>Sekolah Dasar</h5>

                        <h4>SDN 11 PAGI</h4>

                        </p><a href="#">2006-2010</a>
                    </div>

                    <div class="row selection_education">
                        <h5>Sekolah Menengah Pertama</h5>

                        <h4>SMPN 182 Jakarta</h4>

                        </p><a href="#">2010-2013</a>
                    </div>

                    <div class="row selection_education">
                        <h5>Sekolah Menegah Atas</h5>

                        <h4>SMAN 60 Jakarta</h4>

                        </p><a href="#">2013-2016</a>
                    </div>
                </div>
            </div>

            <div class="section technical">
                <div class="left">
                    <h3>Technikal Skills</h3>
                </div>

                <div class="right">
                    <div class="right_right">
                        <h4>Ms Word</h4>
                        <div class="progress-bar green">
                            <span style="width: 90%"></span>
                        </div>
                        <h4>Ms Excel</h4>
                        <div class="progress-bar red">
                            <span style="width: 35%"></span>
                        </div>
                        <h4>Java</h4>
                        <div class="progress-bar orange">
                            <span style="width: 55%"></span>
                        </div>
                        <h4>Sql</h4>
                        <div class="progress-bar orange">
                            <span style="width: 65%"></span>
                        </div>
                        <h4>Bahasa Indonesia</h4>
                        <div class="progress-bar green">
                            <span style="width: 85%"></span>
                        </div>
                        <h4>Bahasa Inggris</h4>
                        <div class="progress-bar green">
                            <span style="width: 70%"></span>
                        </div>
                    </div>

                    <div class="right_left">
                        <p>Pada jenjang perkuliahan saya pernah mengikuti organisasi HIMTI
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>

    @endsection

    