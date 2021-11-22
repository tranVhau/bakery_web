<header class="header">
    <div class="header-container grid wide">
        <div class="header__nav row">
            <div class="col l-0 m-3 c-2">
                <div class="mobile-header__bar">
                    <input type="checkbox" hidden="" id="mobile-nav-appear" class="click-header__bar-icon">
                    <label for="mobile-nav-appear" class="header__bar-icon"></label>

                    <input type="checkbox" hidden="" id="mobile-nav-appear" class="click-header__bar-icon">
                    <label for="mobile-nav-appear" class="mobile-header__list">
                        <li class="mobile-header__item">
                            <label for="subnav-appear">
                                <a href="../../Web_Project/index.php">Trang Chủ</a>
                            </label>

                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear2">
                                Bánh
                                <i class="fas fa-chevron-right mobile-header__item-icon-right"></i>
                            </label>

                            <input type="checkbox" hidden="" id="subnav-appear2" class="click-subnav">
                            <ul class="mobile-header__item-list">
                                <li class="mobile-header__item-item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=2">Bánh Kem</a>
                                </li>
                                <li class="mobile-header__item-item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=1">Bánh Mì</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear3">
                                Thức Uống
                                <i class="fas fa-chevron-right mobile-header__item-icon-right"></i>
                            </label>

                            <input type="checkbox" hidden="" id="subnav-appear3" class="click-subnav2">
                            <ul class="mobile-header__item-list">
                                <li class="mobile-header__item-item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=3">Cafe</a>
                                </li>
                                <li class="mobile-header__item-item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=5">Cocktail</a>
                                </li>
                                <li class="mobile-header__item-item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=4">Trà Sữa</a>
                                </li>

                            </ul>
                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                <a href="#contact-area"> liên Hệ</a>
                            </label>

                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                <a href="" class="js-PH">Phản Hồi</a>
                            </label>
                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                <a href="#contact-area">Thông Tin</a>
                            </label>

                        </li>
                    </label>
                </div>
            </div>

            <div class="col l-2 m-6 c-7">
                <div class="header__nav-logo">
                    <a href="">
                        <img src="./assets/img/banner/logomoon.png" style="width: 140px" alt="" />
                    </a>
                </div>
            </div>

            <div class="col l-8 m-0 c-0">
                <nav class="header__nav-menu">
                    <ul class="header__nav-menu__list">
                        <li class="header__nav-menu-item">
                            <a href="../../Web_Project/index.php" class="header__nav-menu--link">Trang Chủ</a>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="../../Web_Project/index.php#banhngot" class="header__nav-menu--link">Bánh</a>
                            <!-- shop none -->
                            <ul class="navbar__shop">
                                <li class="navbar__shop--item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=2" class="navbar__shop--link">Bánh Kem</a>
                                </li>
                                <li class="navbar__shop--item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=1" class="navbar__shop--link">Bánh Mì</a>
                                </li>
                            </ul>
                        </li>

                        <li class="header__nav-menu-item">
                            <a href="../../Web_Project/index.php#nuocngot" class="header__nav-menu--link">
                                Thức Uống
                            </a>
                            <ul class="navbar__page">
                                <li class="navbar__page--item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=3" class="navbar__page--link">
                                        Cafe
                                    </a>
                                </li>
                                <li class="navbar__page--item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=5" class="navbar__page--link">
                                        Cocktail
                                    </a>
                                </li>
                                <li class="navbar__page--item">
                                    <a href="../../Web_Project/Page/main1/index.php?id=4" class="navbar__page--link">
                                        Trà Sữa
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="../../Web_Project/index.php#contact-area" class="header__nav-menu--link">liên hệ</a>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="#" class="header__nav-menu--link js-PH">Phản Hồi</a>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="../../Web_Project/index.php#contact-area" class="header__nav-menu--link">Thông Tin</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col l-2 m-3 c-3">
                <div class="header__nav-warp">
                    <div class="header__nav-warp-login">
                        <a href="logout.php" class="header__nav-warp-link">
                            <i class="header__nav-warp-icon fas fa-sign-in-alt"></i>
                        </a>
                    </div>
                    <div class="header__nav-warp-login">
                        <a href="logout.php" class="header__nav-warp-link">
                            <i class="header__nav-warp-icon fas fa-user-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</div>


<div class="modal js-modal">
    <div class="modal-container js-modal-container">
        <div class="modal-close js-close">
            <i class="far fa-times-circle icon-modal"></i>
        </div>
        <div class="header-ph">
            Phản hồi
        </div>
        <form action="phanhoi_submit.php" method="POST" class="FormPH">
            <div class="modal-body">
                <label for="VD" class="modal-label">
                    Họ và tên:
                </label>
                <input id="VD" type="text" name="fullname_PH" class="modal-input">

                <label for="VD" class="modal-label">
                    Vấn đề phản hồi:
                </label>
                <input id="VD" type="text" name="vande_PH" class="modal-input">
                <label for="ND" class="modal-label">
                    Nội dung phản hồi:
                </label>
                <textarea id="ND" name="noidung_PH" class="modal-input" rows="8"></textarea>
                <div class="button_ThaoTac">
                    <button type="submit" name="send">Gửi phản hồi</button>
                </div>
                <div class="button_ThaoTac">
                    <button type="reset">Làm mới</button>
                </div>
            </div>
        </form>
        <div class="modal-footer">
            <p><i class="far fa-frown-open"></i>Xin lỗi vì sự bất tiện này.</p>
        </div>
    </div>
</div>