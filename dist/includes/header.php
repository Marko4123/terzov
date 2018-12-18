<header>
        <div class="container">
          <div class="top-bar">
            <div class="logo">
              <a href="http://terzov.reklamatavi.com/test/"><img src="img/logo.jpg" alt="Терзов" class="img-fluid" /></a>
            </div>
            <div class="top-contacts">
              <div class="h-outer-wrapper">
                <span class="h-contact-icons">
                  <i class="fas fa-map-marker-alt"></i
                ></span>
                <ul class="h-contact-info">
                  <li class="h-sm-header">Местоположение</li>
                  <li class="h-strong"><a href="http://terzov.reklamatavi.com/test/contacts">гр. София</a></li>
                </ul>
              </div>
              <div class="h-outer-wrapper">
                <span class="h-contact-icons"
                  ><i class="fas fa-phone-square"></i
                ></span>
                <ul class="h-contact-info">
                  <li class="h-sm-header">Телефон</li>
                  <li class="h-strong"><a href="tel:0878259515">0878 259 515</a></li>
                </ul>
              </div>
              <div class="h-outer-wrapper">
                <span class="h-contact-icons">
                  <i class="fas fa-envelope-square"></i
                ></span>
                <ul class="h-contact-info">
                  <li class="h-sm-header">E-mail</li>
                  <li class="h-strong"><a href="mailto:terzov_eood@abv.bg">terzov_eood@abv.bg</a></li>
                </ul>
              </div>
            </div>
            <div style="clear:both;"></div>
          </div>
          <!-- NAVIGATION -->
          <div id="navigation">
            <nav class="navbar navbar-expand-md  navbar-dark nav-custom-bg">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#collapsibleNavbar"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav nav-fill w-100">
                  <li class="nav-item <?php if ($page == "index") { echo 'active';} else {echo '';} ?>">
                    <a class="nav-link" href="http://terzov.reklamatavi.com/test/">Начало</a>
                  </li>
                  <li class="nav-item <?php if ($page == "machines") { echo 'active';} else {echo '';} ?>">
                    <a class="nav-link" href="http://terzov.reklamatavi.com/test/machines">Видове техника</a>
                  </li>
                  <li class="nav-item <?php if ($page == "services") { echo 'active';} else {echo '';} ?>">
                    <a class="nav-link" href="http://terzov.reklamatavi.com/test/services">Услуги</a>
                  </li>
                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbardrop"
                      data-toggle="dropdown"
                    >
                      Галерия
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item <?php if ($page1 == "avtokranove") { echo 'active';} else {echo '';} ?>" href="http://terzov.reklamatavi.com/test/avtokranove">Автокранове</a>
                      <a class="dropdown-item <?php if ($page1 == "kamion-s-kran") { echo 'active';} else {echo '';} ?>" href="http://terzov.reklamatavi.com/test/kamion-s-kran"
                        >Бордови камион с кран</a
                      >
                      <a class="dropdown-item <?php if ($page1 == "samosval-s-kran") { echo 'active';} else {echo '';} ?>" href="http://terzov.reklamatavi.com/test/samosval-s-kran">Самосвал с кран</a>
                      <a class="dropdown-item <?php if ($page1 == "samosval") { echo 'active';} else {echo '';} ?>" href="http://terzov.reklamatavi.com/test/samosval">Самосвал</a>
                      <a class="dropdown-item <?php if ($page1 == "bager") { echo 'active';} else {echo '';} ?>" href="http://terzov.reklamatavi.com/test/bager">Комбиниран багер</a>
                      <a class="dropdown-item <?php if ($page1 == "tovarach") { echo 'active';} else {echo '';} ?>" href="http://terzov.reklamatavi.com/test/tovarach">Мини челен товарач</a>
                      <a class="dropdown-item <?php if ($page1 == "valiak") { echo 'active';} else {echo '';} ?>" href="http://terzov.reklamatavi.com/test/valiak">Вибро валяк</a>
                    </div>
                  </li>
                  <li class="nav-item <?php if ($page == "contacts") { echo 'active';} else {echo '';} ?>">
                    <a class="nav-link" href="http://terzov.reklamatavi.com/test/contacts">Контакти</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>