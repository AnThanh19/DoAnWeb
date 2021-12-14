<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/header__logo.png">
    <title>Thông tin tài khoản</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="./userInfo.css">
</head>
<body>
  <div class="app">
    <header class="header">
        <a href="../../index.php" class="header__logo hide-on-tablet-mobile">
            <img src="../img/logo-sv" alt="" class="header__logo-img">
        </a>
        
        <label for="tablet-mobile-bars-checkbox" class="header__bars">
            <i class="header__bars-icon fas fa-bars"></i>
        </label>
        <input type="checkbox" hidden id="tablet-mobile-bars-checkbox" class="header__navbar-bars-checkbox">
        <label for="tablet-mobile-bars-checkbox" class="nav__overlay"></label>
        <nav class="navbar">
            <ul class="navbar-list">
                <li class="navbar-item noHover">
                    <label for="subnav-film-checkbox" class="navbar-link">Phim</label>
                    <input type="checkbox" hidden id="subnav-film-checkbox" class="suvnav-checkbox">                      
                    
                        <ul class="subnav-list">
                            <li class="subnav-item">
                                <a href="../pages/Phim/phimDangChieu.php" class="subnav-link">Phim đang chiếu</a>
                            </li>
                            <li class="subnav-item">
                                <a href="../pages/Phim/phimSapChieu.php" class="subnav-link">Phim sắp chiếu</a>
                            </li>
                        </ul>
                    
                </li>
                <li class="navbar-item noHover">
                        <a href="../pages/Rap/allRap.php" class="navbar-link">Rạp phim</a>
                    </li>
                    <li class="navbar-item noHover">
                        <a href="../pages/tintuc/tinTuc.php" class="navbar-link">Tin tức</a>
                        
                    </li>
                
            </ul>
            
        </nav>
        <div class="header__user">
            <div class="header__user-info">
                <i class="header__user-icon fas fa-user-circle"></i>
                <span class="header__user-name">Le Thanh Tin</span>
            </div>
            <div class="header__user-options">
                <ul class="user-options-list">
                    <li class="user-options-item">
                        <a href="" class="user-option-link">Tài khoản</a>
                    </li>
                    <li class="user-options-item">
                        <a href="" class="user-option-link">Cài đặt</a>
                    </li>
                    <li class="user-options-item">
                        <a href="" class="user-option-link">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <div class="login">
            <ul class="login-list">
                <li class="login-item login-item-sign-in">
                    <label href="" class="login-link js-login-form">Đăng nhập</label>
                </li>
                <li class="login-item login-item-register">
                    <label href="" class="login-link js-register-form">Đăng ký</label>
                </li>
            </ul>
        </div> -->

    </header>


    <div class="content">
        <div class="grid wide content-user">
            <h1 class="content-user-title">Thông tin tài khoản</h1>     
            <div class="content-user-body">
                <div class="row">
                    <div class="col l-4 m-4 c-12">
                        <ul class="user-option-list">
                            <li class="user-option-item js-info">
                                <span>Thông tin tài khoản</span>
                            </li>
                            <li class="user-option-item js-his">
                                <span>Lịch sử đặt vé</span>
                            </li>
                            <li class="user-option-item js-update">
                                <span>Cập nhật thông tin tài khoản</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-8 m-8 c-12">
                        <div class="user-info">
                            <h1 class="user-title">Thông tin tài khoản</h1>
                            <ul class="user-info-list">
                                <li>Họ tên: <span>Le Thanh Tin</span></li>
                                <li>Giới tính: <span></span></li>
                                <li>Ngày sinh: <span></span></li>
                                <li>Địa chỉ: <span></span></li>
                                <li>SDT: <span></span></li>
                                <li>CCCD: <span></span></li>
                                <li>Ngày đăng ký: <span></span></li>
                                <li>Điểm tích lũy: <span></span></li>
                                <li>Loại tài khoản: <span></span></li>
                                <li>Email: <span></span></li>
                            </ul>
                        </div>
                        <div class="user-info-history">
                            <h1 class="user-title">Lịch sử đặt vé</h1>
                            <input type="search" class="form-control" placeholder = "Search">
                        </div>

                        <div class="user-info-update">
                            <form action="" class="update-form">
                                <div class="form-item">
                                    <label for="city">Họ và tên:
                                        <input type="text" placeholder>
                                    </label>
                                    
                                </div>
                                <div class="form-item">
                                    <label for="theater">SDT:
                                        <input type="text">
                                    </label>
                                    
                                </div>
                                <div class="form-item">
                                    <label for="premiere">Email
                                        <input type="text" name="" id="">
                                    </label>
                                    
                                </div>
                                <div class="btn btn-primary" style="width: 30%; border-radius: 5px; font-weight: 600; text-align: center; padding-top: 10px; margin-top: 20px; float: right;">Cập nhật</div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row user-info-history" style="margin-top: 36px;">
                    <div class="col l-12 m-12 c-12">
                        <table class="table table-history dataTable">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Phim</th>
                                    <th>Ghế</th>
                                    <th>Rạp</th>
                                    <th>Loại vé</th>
                                    <th>Thời gian đặt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Đại chiến Thái Bình Dương</td>
                                    <td></td>
                                    <td>CGV blABLA</td>
                                    <td>Vé phim 2D</td>
                                    <td>06-02-2001 21:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row user-info-history">
                    <div class="col l-6 m-6 c-12 dataTables_info" role="status" aria-live="polite">
                        Showing 1 to 1 of 1 entries
                    </div>

                    <div class="col l-6 m-6 c-12" style="margin-top: 1rem;">
                        <ul class="pagination">
                            <li class="btn pagination-btn">
                                <i class="fas fa-chevron-left pagination-icon"></i>
                            </li>
                            <li class="btn pagination-btn">
                                <a href="#" class="page-link" tabindex="0">1</a>
                            </li>
                            <li class="btn pagination-btn">
                                <i class="fas fa-chevron-right pagination-icon"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        

    </div>


    <footer class="footer">
        <div class="grid wide">
            <div class="row footer-row">
                <div class="col l-3 m-4 c-6">
                    <h3 class="footer-title">CineSV</h3>
                    <ul class="footer-list">
                        <a href="" class="footer-link">Giới thiệu</a>
                        <a href="" class="footer-link">Tiện ích Online</a>
                        <a href="" class="footer-link">Thẻ quà tặng</a>
                        <a href="" class="footer-link">Tuyển dụng</a>
                        <a href="" class="footer-link">Liên hệ quảng cáo CGV</a>
                    </ul>
                </div>

                <div class="col l-3 m-4 c-6">
                    <h3 class="footer-title">Điều khoản sử dụng</h3>
                    <ul class="footer-list">
                        <a href="" class="footer-link">Điều khoản chung</a>
                        <a href="" class="footer-link">Điều khoản giao dịch</a>
                        <a href="" class="footer-link">Chính sách thanh toán</a>
                        <a href="" class="footer-link">Chính sách bảo mật</a>
                        <a href="" class="footer-link">Câu hỏi thường gặp</a>
                    </ul>
                </div>

                <div class="col l-3 m-4 c-6 footer-socials">
                    <h3 class="footer-title">CineSV</h3>
                    <a href="https://www.facebook.com/Tins.Grace.vl/" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-facebook-square" style="color: rgb(12, 55, 150); padding-left: 0;"></i>
                    </a>
                    <a href="https://www.instagram.com/lethanhtin____/" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-instagram-square"  style="color: rgb(219, 58, 152);"></i>
                    </a>
                    <a href="https://www.youtube.com/cgvvietnam" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-youtube-square" style="color: rgb(161, 31, 31);"></i>
                    </a>
                    <a href="https://twitter.com/CGV_ID" target="_blank" class="footer-link-socials">
                        <i class="footer-icon-socials fab fa-twitter-square" style="color: rgb(42, 146, 187);"></i>
                    </a>
                    <a href="http://online.gov.vn/Home/WebDetails/30270" target="_blank" class="bo-cong-thuong"></a>
                </div>

                <div class="col l-3 m-4 c-6 hide-on-tablet">
                    <h3 class="footer-title">Chăm sóc khách hàng</h3>
                    <ul class="footer-list">
                        <h4 href="" class="footer-link">Hotline: 0978827442</h4>
                        <h4 href="" class="footer-link">Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ Tết)</h4>
                        <h4 href="" class="footer-link">Email hỗ trợ: thanlonglua97@gmail.com</h4>
                    </ul>
                </div>
            </div>

            <div class="footer__about">
                <div class="footer-logo" style="background-image: url(/assets/img/Slider/common_sprite_area.png);"></div>
                <div class="footer__contact">
                    <h3 class="footer-name">CÔNG TY TNHH MTV LTT</h3>
                    <h4 class="footer-sub">Giấy CNĐKDN: 0303675393, đăng ký lần đầu ngày 31/7/2008, đăng ký thay đổi lần thứ 5 ngày 14/10/2015, cấp bởi Sở KHĐT thành phố Hồ Chí Minh.</h4>
                    <h4 class="footer-sub">Địa Chỉ: Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, TPHCM.</h4>
                    <h4 class="footer-sub">COPYRIGHT 2017 CJ CGV. All RIGHTS RESERVED</h4>
                </div>

            </div>
        </div>
    </footer>
</div>
<div class="modal js-modal">
    <div class="modal__overlay"></div>

    <div class="modal__body js-modal__body--login">
        <div class="auth-form">
            <div class="auth-form__container">
                <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch--btn js-register">Đăng ký</span>   
                </div>

                <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" required placeholder="Tài khoản">
                        </div>

                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" required placeholder="Mật khẩu">
                        </div>
                </div>

                <div class="auth-form__controls">
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                </div>

                    <div class="auth-form__help">
                        <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu?</a>
                    </div>
            </div>
        </div>   
    </div>
    
    <div class="modal__body js-modal__body--register">
        <!-- Auth-form register -->

        <div class="auth-form">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <span class="auth-form__switch--btn js-login">Đăng nhập</span>
                    <h3 class="auth-form__heading">Đăng ký</h3>        
                </div>

                <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" required placeholder="Tài khoản">
                        </div>

                        <div class="auth-form__group">
                            <input type="email" class="auth-form__input" required placeholder="Email">
                        </div>

                        <div class="auth-form__group">
                            <input type="tel" class="auth-form__input" required placeholder="Số điện thoại">
                        </div>

                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" required placeholder="Mật khẩu">
                        </div>

                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" required placeholder="Nhập lại mật khẩu">
                        </div>
                </div>

                <div class="auth-form__controls">
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                </div>

                <div class="auth-form__aside">
                    <p class="auth-form__policy-text">Bằng việc đăng ký, bạn đã đồng ý với LTT-Shop về
                        <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                        <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                    </p>
                </div>
            </div>
        </div>  
    </div>
</div>
  </div>

<script>
       

    var loginForm = document.querySelector('.js-login-form');
    var registerForm = document.querySelector('.js-register-form');
    var modal = document.querySelector('.js-modal');
    var modalBodyLogin = document.querySelector('.js-modal__body--login');
    var modalBodyRegister = document.querySelector('.js-modal__body--register');

    var switchFormLogin = document.querySelector('.js-login');
    var switchFormRegister = document.querySelector('.js-register');

    // Hàm mở gogin Form
    function openLoginForm(){
        modal.classList.add('open__modal');
        modalBodyRegister.classList.remove('modal-body__open');
        modalBodyLogin.classList.add('modal-body__open');
    }
    // Hàm mở register Form
    function openRegisterForm(){
        modal.classList.add('open__modal');
        modalBodyLogin.classList.remove('modal-body__open');
        modalBodyRegister.classList.add('modal-body__open');
    }
    // Hàm ẩn modal 
    function closeModal(){
        modal.classList.remove('open__modal');
    }

    // Hàm chuyển form login-regisrer
    function switchToLogin(){
        modalBodyRegister.classList.remove('modal-body__open');
        modalBodyLogin.classList.add('modal-body__open');
    }

    function switchToRegister(){
        modalBodyLogin.classList.remove('modal-body__open');
        modalBodyRegister.classList.add('modal-body__open');
    }

    loginForm.addEventListener('click', openLoginForm);

    registerForm.addEventListener('click', openRegisterForm);

    switchFormRegister.addEventListener('click', switchToRegister);
    switchFormLogin.addEventListener('click', switchToLogin);
    //Đóng modal
    modal.addEventListener('click', closeModal);
    modalBodyLogin.addEventListener('click', function(event){
        event.stopPropagation();
    })

    modalBodyRegister.addEventListener('click', function(event){
        event.stopPropagation();
    })

    
    
</script>

<script src="../js/userInfo.js"></script>
</body>
</html>