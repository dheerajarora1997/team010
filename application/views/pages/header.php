<header class="header-area header-sticky text-center header-default">
      <div class="header-main-sticky">
         <div class="header-nav d-none">
            <div class="container">
               <div class="nav-left float-left">
                  <div class="ttheader-service">Wants to explore Upcoming Deals on Weekends?</div>
               </div>
               <div class="nav-right float-right d-flex">
                  <div class="ttheader-mail"><a href="mailto:manishtanan96@gmail.com">manishtanan96@gmail.com</a></div>
               </div>
            </div>
         </div>
         <div class="header-main-head">
            <div class="header-main">
               <div class="container">
                  <div class="header-left float-left d-none d-lg-flex d-md-felx d-xs-none"
                     style="visibility:hidden">
                     <div class="language-wrapper toggle">
                        <button type="button" class="btn text-capitalize dropdown-toggle"><img
                           src="img/banner/en.png" alt="en" height="12"
                           width="18" /><span>English</span></button>
                        <div id="language-dropdown" class="language">
                           <ul>
                              <li><img src="img/banner/en.png" alt="en" width="18"
                                 height="12" /><span>English</span></li>
                              <li><img src="img/banner/fr.png" alt="fr" width="18"
                                 height="12" /><span>French</span></li>
                           </ul>
                        </div>
                     </div>
                     <div class="currency-wrapper toggle">
                        <button type="button" class="btn text-capitalize dropdown-toggle"><span>€
                        Euro</span></button>
                        <div id="currency-dropdown" class="currency">
                           <ul>
                              <li><span>€ Euro</span></li>
                              <li><span>£ Pound Sterling</span></li>
                              <li><span>$ US Dollar</span></li>
                           </ul>
                        </div>
                     </div>
                     <div class="contact">
                        <i class="material-icons">phone</i>
                        <a href="tel:+1234567890">1234567890</a>
                     </div>
                  </div>
                  <div class="header-middle float-lg-left float-md-left float-sm-left float-xs-none">
                     <div class="logo">
                        <a href="<?= page_url ?>Welcome/">
                           <h1>Temao10</h1>
                        </a>
                     </div>
                  </div>
                  <div class="header-right d-none d-xs-none d-sm-none justify-content-end float-right">
                     <div class="search-wrapper">
                        <a>
                        <i class="material-icons search">search</i>
                        <i class="material-icons close">close</i> </a>
                        <form autocomplete="off" action="/action_page.php" class="search-form">
                           <div class="autocomplete">
                              <input id="myInput" type="text" name="myCountry" placeholder="Search here">
                              <button type="button"><i class="material-icons">search</i></button>
                           </div>
                        </form>
                     </div>
                     <div class="user-info">
                        <button type="button" class="btn">
                        <i class="material-icons">perm_identity</i> </button>
                        <div id="user-dropdown" class="user-menu">
                           <ul>
                              <li><a href="my-account.html" class="text-capitalize">my account</a></li>
                              <li><a href="#" class="modal-view button" data-toggle="modal"
                                 data-target="#modalRegisterForm">Register</a></li>
                              <li><a href="#" class="modal-view button" data-toggle="modal"
                                 data-target="#modalLoginForm">login</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="cart-wrapper">
                        <button type="button" class="btn">
                        <i class="material-icons">shopping_cart</i>
                        <span class="ttcount">2</span> </button>
                        <div id="cart-dropdown" class="cart-menu">
                           <ul class="w-100 float-left">
                              <li>
                                 <table class="table table-striped">
                                    <tbody>
                                       <tr>
                                          <td class="text-center"><a href="#"><img
                                             src="img/products/01.jpg" alt="01" title="01"
                                             height="104" width="80"></a></td>
                                          <td class="text-left product-name">
                                             <a href="#">aliquam quaerat
                                             voluptatem</a>
                                             <div class="quantity float-left w-100">
                                                <span class="cart-qty">1 × </span>
                                                <span class="text-left price"> $20.00</span>
                                             </div>
                                          </td>
                                          <td class="text-center close"><a class="close-cart"><i
                                             class="material-icons">close</i></a></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </li>
                              <li>
                                 <table class="table price mb-30">
                                    <tbody>
                                       <tr>
                                          <td class="text-left"><strong>Total</strong></td>
                                          <td class="text-right"><strong>$2,122.00</strong></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </li>
                              <li class="buttons w-100 float-left">
                                 <form action="cart_page.html">
                                    <input class="btn pull-left mt_10 btn-primary btn-rounded w-100"
                                       value="View cart" type="submit">
                                 </form>
                                 <form action="checkout_page.html">
                                    <input class="btn pull-right mt_10 btn-primary btn-rounded w-100"
                                       value="Checkout" type="submit">
                                 </form>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="menu">
               <div class="container">
                  <!-- Navbar -->
                  <nav class="navbar navbar-expand-lg navbar-light d-sm-none d-xs-none d-lg-block navbar-full">
                     <!-- Navbar brand -->
                     <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
                     <!-- Collapse button -->
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                        aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <!-- Collapsible content -->
                     <div class="collapse navbar-collapse">
                        <!-- Links -->
                        <ul class="navbar-nav m-auto justify-content-center">
                           <li class="nav-item dropdown active">
                              <a class="nav-link  text-uppercase" href="<?= page_url ?>Welcome/">
                              Home
                              <span class="sr-only">(current)</span> </a>
                           </li>
                           <li class="nav-item dropdown mega-dropdown">
                              <a class="nav-link text-uppercase"
                                 href="<?= page_url ?>Welcome/category">Category</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link text-uppercase" href="<?= page_url ?>Welcome/shop">
                              Shop
                              <span class="sr-only">(current)</span> </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-uppercase"
                                 href="<?= page_url ?>Welcome/about_us">About Us</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-uppercase" href="<?= page_url ?>Welcome/contact_us">contact us</a>
                           </li>
                        </ul>
                        <!-- Links -->
                     </div>
                     <!-- Collapsible content -->
                  </nav>
                  <!-- Navbar -->
                  <nav class="navbar navbar-expand-lg navbar-light d-lg-none navbar-responsive">
                     <!-- Navbar brand -->
                     <a class="navbar-brand text-uppercase d-none" href="#">Navbar</a>
                     <!-- Collapse button -->
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                        aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><i class='material-icons'>sort</i></span>
                     </button>
                     <!-- Collapsible content -->
                     <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <!-- Links -->
                        <ul class="navbar-nav m-auto justify-content-center">
                           <!-- Features -->
                           <li class="nav-item dropdown active">
                              <a class="nav-link text-uppercase" data-toggle="collapse"
                                 data-target="#menu1"  href="<?= page_url ?>Welcome/">
                              Home
                              <span class="sr-only">(current)</span> </a>
                           </li>
                           <li class="nav-item dropdown mega-dropdown">
                              <a class="nav-link text-uppercase"
                                 href="<?= page_url ?>Welcome/category">Category</a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link text-uppercase" href="<?= page_url ?>Welcome/shop">
                              Shop
                              <span class="sr-only">(current)</span> </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-uppercase"
                                 href="<?= page_url ?>Welcome/about_us">About Us</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link text-uppercase" href="<?= page_url ?>Welcome/contact_us">contact us</a>
                           </li>
                        </ul>
                        <!-- Links -->
                     </div>
                     <!-- Collapsible content -->
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>