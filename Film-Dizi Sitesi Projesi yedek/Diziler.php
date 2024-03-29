<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Film Sitesi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!--! navbar start  -->
    <div class="navbar">
        <div class="navbar-wrapper">
            <div class="logo-wrapper">
                <h1 class="logo">M-Flix</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a href="index.php">Ana Sayfa</a></li>
                    <li><a href="Filmler.php">Filmler</a></li>
                    <li class="menu-list-item active">Diziler</li>
                    <li><a href="Kaydedilenler.php">Kaydedilenler</a></li>
                    <div class="search-container">
                        <form>
                          <input type="text" id="series" placeholder="Film veya Dizi adı...">
                          <button type="submit">Ara</button>
                        </form>
                     </div>
                    
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/KULLANICI.png" alt="">
               
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn">Hesabım</a>
                            <div class="dropdown-content">
                                <a href="#">Profil</a>
                                <a href="#">Hesap</a>
                                <a href="#">M-Flix oturumunu sonlandır</a>
                            </div>
                        </li>
                    </ul>
                    <i class="bi bi-caret-down-fill"></i>
                
                <div class="toggle">
                    <i class="bi bi-moon-fill toggle-icon"></i>
                    <i class="bi bi-brightness-high-fill toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!--! navbar end  -->

    <!--! sidebar start  -->
    
    <!--! sidebar end  -->

    <!--! content start  -->
    <!-- featured content start -->
    <div class="container">
        <div class="content-wrapper">
            <div class="featured-content-Dizi">
                <img class="featured-title" src="img/LA CASA.png" alt="" />
                <p class="featured-desc">
                    La casa de papel, Álex Pina tarafından yaratılan İspanya yapımı bir soygun ve suç dizisi. Dizi, "Profesör" liderliğindeki ekibin İspanya Kraliyet Darphanesi'ni ve İspanya Merkez Bankası'nı soymasını konu edinir.
                </p>
                <div class="featured-buttons">
                    <button class="play-button">
                        <i class="bi bi-play-circle"></i>
                        Oynat
                    </button>
                    <button class="info-button">
                        <i class="bi bi-info-circle"></i>
                        Daha Fazla Bilgi
                    </button>
                </div>
            </div>
        </div>
        <!-- featured content end -->

      

        <!-- movie list start -->
        <div class="movie-list-container">
            <h1 class="movie-list-title">Dram</h1>
            <div class="movie-list-wrapper">
                <ul class="movie-list">
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/the avengers.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">THE AVENGERS</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/starwars.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">STAR-WARS</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/The Witcher.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">THE WİTCHER</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/f1.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">SPIDER-MAN</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/f2.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">HULK</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/f3.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">G.O.R.A</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/f4.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">DAREDEViL</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/f5.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">HOBBİT</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/f6.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">A.R.O.G</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>

                </ul>
                <i class="bi bi-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Aksiyon</h1>
            <div class="movie-list-wrapper">
                <ul class="movie-list">
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/avatar.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">AVATAR</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/Başlangıç.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">BAŞLANGIÇ</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/barbie-2023.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">BARBİE</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/casa-papel.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">LA CASA DE PAPEL</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/rocky v.jpeg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">ROCKY V</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/84853a_c9e03e11929c4517b84ea50e31db82a4~mv2.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">BLACK MİRROR</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/creed.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">CREED</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/extraction-2.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">EXTRACTİON II</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                </ul>
                <i class="bi bi-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Komedi</h1>
            <div class="movie-list-wrapper">
                <ul class="movie-list">
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/f7.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">DARK</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/fantastic-four-2015-poster-7isr0tm382lxqs4c.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">FANTASTİK 4</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/fury.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">FURY</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/Hızlı-ve-Öfkeli6-Görselleri.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">HIZLI VE ÖFKELİ 6</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/kaybedenler kulübü.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">KAYBEDENLER KULÜBÜ</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/mary kom.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">MARY KOM</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/narcos.png" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">NARCOS</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                    </li>
                    </li>
                    <li class="movie-item">
                        <img class="movie-item-img" src="img/muhteşem yedili.jpg" alt="">
                        <div class="movie-item-info">
                            <span class="movie-item-title">MUHTEŞEM YEDİLİ</span>
                            <div class="movie-item-buttons">
                                <i class="bi bi-play-circle-fill"></i>
                                <i class="bi bi-hand-thumbs-up-fill"></i>
                                <i class="bi bi-hand-thumbs-down-fill"></i>
                                <i class="bi bi-plus-circle-fill"></i>


                            </div>
                        </div>
                    </li>
                </ul>
                <i class="bi bi-chevron-right arrow"></i>
            </div>
        </div>

        <!-- movie list end -->
    </div>
    <!-- LOG OUT -->
<div class="modalfade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    

</div>
<!-- LOG OUT -->

    <!--! content end  -->


    <script src="script.js"></script>
</body>

</html>