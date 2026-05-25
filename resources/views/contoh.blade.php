<!--IMPLEMENTASI BOOTSTRAP CARDS. REFERENSI: WEBSITE IMDB-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Cards Implementation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

    <style>
        .dm-sans-judul {
            font-family: "DM Sans", sans-serif;
            font-style: normal;
            font-size: x-large;
            font-display: block;
            font-weight: bold;
        }

        .subtitle {
            font-family: "DM Sans", sans-serif;
            font-style: normal;
            font-size: medium;
            font-display: block;
            text-align: left;
            font-weight: 600;
        }

        .subtitle2 {
            font-family: "DM Sans", sans-serif;
            font-style: normal;
            font-size: large;
            font-display: block;
            text-align: left;
            font-weight: 800;
        }

        .dm-sans-subjudul {
            font-family: "DM Sans", sans-serif;
            font-style: normal;
            font-size: medium;
            font-display: block;
            text-align: center;
            font-weight: 600;
        }

        .movie-description {
            font-family: "DM Sans", sans-serif;
            text-align: justify;
            font-size: small;
        }
    </style>

</head>

<body>

    <br>
    <div class="container">

        <!--Featured Today-->
        <div class="row">
            <div class="col-4">
                <p class="dm-sans-judul">Featured Today</p>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card h-100">
                    <img class="card-img-top"
                        src="https://tse2.mm.bing.net/th/id/OIP.3XHpE5aFxKrlzotI5mI23AHaEK?pid=Api&P=0&h=180"
                        alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                    <div class="card-body">
                        <h6 class="card-title; subtitle">Where to Watch the Oscars Best Picture Nominees</h6>
                        <a href="https://www.imdb.com/list/ls4159040995/?ref_=hm_edcft_csegosc_26_wtw_1_t"
                            class="card-link; movie-description">See the List</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card h-100">
                    <img class="card-img-top"
                        src="https://www.cheatsheet.com/wp-content/uploads/2022/06/Stranger-Things-Robin-Buckley.jpg?w=1200&h=800"
                        alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                    <div class="card-body">
                        <h6 class="card-title; subtitle">Poll: Fave Fictional Film Buff</h6>
                        <a href="https://www.imdb.com/poll/jkSgJ_A6bf_agsAKycJpgQ/?ref_=hm_edcft_pls_031426_11_i"
                            class="card-link; movie-description">Vote now</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card h-100">
                    <img class="card-img-top"
                        src="https://tse2.mm.bing.net/th/id/OIP.a-dZ93OGoNvpBQU_O0WF5QHaEK?pid=Api&P=0&h=180"
                        alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                    <div class="card-body">
                        <h6 class="card-title; subtitle">Staff Picks: What to Watch in March</h6>
                        <a href="https://www.imdb.com/imdbpicks/staff-picks/?ref_=hm_edcft_ft_staffpicks_elp_4_i"
                            class="card-link; movie-description">See our picks</a>
                    </div>
                </div>
            </div>

        </div>

        <br>
        <!--Most Popular Celebrities-->
        <div class="row">
            <div class="col-4">
                <p class="dm-sans-judul">Most Popular Celebrities</p>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <a href="https://www.imdb.com/name/nm8624059/?ref_=chtstrm_t_13" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://static1.mujerhoy.com/www/multimedia/202403/09/media/cortadas/jacob-elordi-kluE-U2101315384681L6F-1248x1248@MujerHoy.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Jacob Elordi</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/name/nm2842005/?ref_=chtstrm_t_1" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://i.pinimg.com/736x/c3/5b/1f/c35b1f8b7d82e2c851812b6c8aeedcf4.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Hero Fiennes-Tiffin</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/name/nm4960279/?ref_=chtstrm_t_92" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://celebmafia.com/wp-content/uploads/2015/12/margaret-qualley-2015-gq-men-of-the-year-party-in-los-angeles_1.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Margaret Qualley</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/name/nm0350453/?ref_=chtstrm_t_71" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="http://images5.fanpop.com/image/photos/27400000/Jake-Gyllenhaal-jake-gyllenhaal-27441351-1200-1800.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Jake Gyllenhaal</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/name/nm1297015/?ref_=chtstrm_t_69" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://celebmafia.com/wp-content/uploads/2014/09/emma-stone-magic-in-the-moonlight-premiere-in-paris_2.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Emma Stone</h6>
                            <a href="https://www.imdb.com/name/nm1297015/?ref_=chtstrm_t_69"
                                class="text-decoration-none text-dark">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/name/nm0000129/?ref_=chtstrm_t_68" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://static1.srcdn.com/wordpress/wp-content/uploads/2024/08/instar52837500.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Tom Cruise</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <br>

        <!--Top 9 on IMDb this Week-->

        <div class="row">
            <div class="col-4">
                <a href="https://www.imdb.com/search/title/?moviemeter=%2C10&ref_=hm_tenup_sm"
                    class="text-decoration-none text-dark">
                    <p class="dm-sans-judul">Top 9 on IMDb this Week</p>
                </a>
            </div>
        </div>

        <!--War Machine-->
        <div class="row">
            <div class="col-4">
                <a href="https://www.imdb.com/title/tt15940132/?ref_=hm_tenup_t_1"
                    class="text-decoration-none text-dark">
                    <div class="card" style="height: 250px; overflow: hidden">
                        <div class="row no-gutters h-100">
                            <div class="col-4">
                                <img src="https://gowatch.wgfilm21.net/wp-content/uploads/2026/03/rFhKkXhk7ClU03jQ5rHIApJDwev.jpg"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title; subtitle2">War Machine</h5>
                                    <p class="card-text; movie-description">Follow the final recruits of a grueling
                                        special ops boot camp who encounter a mysterious deadly force.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--Young Sherlock-->
            <div class="col-4">
                <a href="https://www.imdb.com/title/tt8599532/?ref_=hm_tenup_t_2"
                    class="text-decoration-none text-dark">
                    <div class="card" style="height: 250px; overflow: hidden">
                        <div class="row no-gutters h-100">
                            <div class="col-4">
                                <img src="https://static0.srcdn.com/wordpress/wp-content/uploads/sharedimages/2026/03/young-sherlock-poster.jpg?q=49&fit=contain&w=480&dpr=2"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title; subtitle2">Young Sherlock</h5>
                                    <p class="card-text; movie-description">A disgraced, young Sherlock Holmes finds
                                        himself wrapped up in a murder case that threatens his liberty. His first ever
                                        case unravels a globe-trotting conspiracy, culminating in an explosive showdown
                                        that changes his life forever.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!--The Bride!-->
            <div class="col-4">
                <a href="https://www.imdb.com/title/tt30851137/?ref_=hm_tenup_t_3"
                    class="text-decoration-none text-dark">
                    <div class="card" style="height: 250px; overflow: hidden">
                        <div class="row no-gutters h-100">
                            <div class="col-4">
                                <img src="https://cdn.moviefone.com/image-assets/1159831/nmfzCWNj4z6GjG6e7U20KXGKmtW.jpg?d=360x540&q=60"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title; subtitle2">The Bride!</h5>
                                    <p class="card-text; movie-description">In 1930s Chicago, Frankenstein asks Dr.
                                        Euphronius to help create a companion. They give life to a murdered woman as the
                                        Bride, sparking romance, police interest, and radical social change.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <br>

        <!--6 Other Movies-->

        <div class="row">
            <div class="col-2">
                <a href="https://www.imdb.com/title/tt27497448/?ref_=hm_tenup_i_4"
                    class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://de.web.img2.acsta.net/img/e8/41/e841422eedbd06a8380819a61052299b.jfif"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">A Knight of the Seven Kingdoms</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/title/tt31938062/?ref_=hm_tenup_i_5"
                    class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://m.media-amazon.com/images/M/MV5BMTU3MDliMGEtMDQxNi00OTk1LTg1NWMtZDM2NmEwZDA1ZDk2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">The Pitt</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/title/tt27444205/?ref_=hm_tenup_t_6"
                    class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://assets-in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/the-paradise-et00436621-1741094191.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Paradise</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/title/tt26443616/?ref_=sr_t_7" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://xinemas.com/data/upload/movies/2025/hoppers.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Hoppers</h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/title/tt8740790/?ref_=sr_t_8" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://mlpnk72yciwc.i.optimole.com/cqhiHLc.IIZS~2ef73/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2025/09/G2Az_6JWAAAPTu7.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Bridgerton</h6>
                            <a href="https://www.imdb.com/name/nm1297015/?ref_=chtstrm_t_69"
                                class="text-decoration-none text-dark">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-2">
                <a href="https://www.imdb.com/title/tt27047903/?ref_=sr_t_10" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="https://www.ecartelera.com/images/img/251000/251076_scream-7-viejos-conocidos-y-nuevas-caras-se-unen-bajo-la-amenaza-de-ghostface-en.jpg"
                            alt="Card image" style="width:100%; height: 200px; object-fit: cover">
                        <div class="card-body">
                            <h6 class="card-title; dm-sans-subjudul">Scream 7</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <br>
        <br>


    </div>

    </div>

</body>

</html>
