<?php
$page = "index";
?>
<!DOCTYPE html>
<?php include 'includes/head.php'; ?>
  <body>
    <div id="wrapper">
    <?php include 'includes/header.php'; ?>
      <main>
      <div class="section">
          <div class="container">
            <div id="short-description">
              <h1>Терзов ЕООД е най-добрият партньор за Вас в строителството!</h1>
              <p>
                Фирма „Терзов”ЕООД е с над 20 годишна практика в областта на
                отдаването на строителната механизация. През годините се доказва
                като професионалист с високо качество на работа, спазване на
                поставените срокове за изпълнение и коректност към своите
                клиенти.
              </p>
              <p>
                Екипът от професионалисти на фирмата със сигурност е най-добрият
                партньор за Вас в строителството. За целта можем да Ви предложим
                богат машинен парк от строителна механизация.
              </p>
            </div>
          </div>
        </div>
        <div id="big-image">
          <div class="container">
            <img src="img/big-image.jpg" alt="Строителна Механизация" />
          </div>
        </div>
        <div class="section">
          <div class="container">
            <div class="quick-links-row row">
              <div class="quick-links-box col-md-6 col-lg-4">
                <a href="http://terzov.reklamatavi.com/machines#carcranes">
                  <div class="quick-link">
                    <img
                      src="img/autocrane.png"
                      alt="Автокранове"
                      class="img-fluid"
                    />
                    <span>Автокранове</span>
                  </div>
                </a>
              </div>
              <div class="quick-links-box col-md-6 col-lg-4">
                <a href="http://terzov.reklamatavi.com/machines#dumpers">
                  <div class="quick-link">
                    <img
                      src="img/dumpers.png"
                      alt="Самосвали"
                      class="img-fluid"
                    />
                    <span>Самосвали</span>
                  </div>
                </a>
              </div>
              <div class="quick-links-box col-md-6 col-lg-4">
                <a href="http://terzov.reklamatavi.com/machines#excavator">
                  <div class="quick-link">
                    <img
                      src="img/excavator.png"
                      alt="Багери, товарачи, валяц"
                      class="img-fluid"
                    />
                    <span>Багери, товарачи, валяци</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="container">
            <div class="title"><h1>Услуги</h1></div>
            <div class="row services-wrapper">
              <div class="col-md-6 col-lg-4 services-box">
                <span class="s-icon">
                  <img
                    src="img/handcart.png"
                    alt="Товарно-разтоварителна дейност"
                  />
                </span>
                <div class="s-title"><h3>Товаро-разтоварна дейност</h3></div>
              </div>
              <div class="col-md-6 col-lg-4 services-box">
                <span class="s-icon">
                  <img src="img/excavator_icon.png" alt="Изкопна дейност" />
                </span>
                <div class="s-title"><h3>Изкопна дейност</h3></div>
              </div>
              <div class="col-md-6 col-lg-4 services-box">
                <span class="s-icon">
                  <img src="img/raw_material.png" alt="Строителни материали" />
                </span>
                <div class="s-title">
                  <h3>Доставка на строителни и инертни материали</h3>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 services-box">
                <span class="s-icon">
                  <img src="img/dumper_truck.png" alt="Строителни отпадъци" />
                </span>
                <div class="s-title">
                  <h3>Извозване на строителни отпадъци и земни маси</h3>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 services-box">
                <span class="s-icon">
                  <img src="img/blueprint.png" alt="Вертикални планировки" />
                </span>
                <div class="s-title"><h3>Вертикални планировки</h3></div>
              </div>
              <div class="col-md-6 col-lg-4 services-box">
                <span class="s-icon">
                  <img
                    src="img/rubber_crawler_carrier.png"
                    alt="Обратни насипи"
                  />
                </span>
                <div class="s-title"><h3>Обратни насипи</h3></div>
              </div>
              <div class="col-md-6 col-lg-4 services-box">
                <span class="s-icon">
                  <img src="img/truck.png" alt="Извънгабаритни товари" />
                </span>
                <div class="s-title">
                  <h3>Извозване на товари (извънгабаритни)</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="container">
            <div class="title"><h1>Видове техника</h1></div>
            <div class="carousel-slider-wrapper">
              <div class="carousel-slider">
                <div class="row machines-slider">
                  <div class="col-md-12">
                    <div
                      id="blogCarousel"
                      class="carousel slide"
                      data-ride="carousel"
                    >
                      <ol class="carousel-indicators">
                        <li
                          data-target="#blogCarousel"
                          data-slide-to="0"
                          class="active"
                        ></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                        <li data-target="#blogCarousel" data-slide-to="2"></li>
                      </ol>

                      <!-- Carousel items -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col-md-6 col-lg-4">
                              <div class="machines-img-desc-wrapper">
                                <div class="machines-image">
                                  <img src="img/avtokran.jpg" alt="Автокран" />
                                  <div class="tech-spec-btn">
                                    <a
                                      href=""
                                      data-toggle="modal"
                                      data-target="#avtokranModal"
                                      >Техническа характеристика</a
                                    >
                                  </div>
                                </div>
                                <div class="machines-desc">
                                  <h2>Автокран</h2>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                              <div class="machines-img-desc-wrapper">
                                <div class="machines-image">
                                  <img
                                    src="img/kamion_s_kran.jpg"
                                    alt="Бордови камион с кран"
                                  />
                                  <div class="tech-spec-btn">
                                    <a
                                      href=""
                                      data-toggle="modal"
                                      data-target="#bordoviKamionModal"
                                      >Техническа характеристика</a
                                    >
                                  </div>
                                </div>
                                <div class="machines-desc">
                                  <h2>Бордови камион с кран</h2>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                              <div class="machines-img-desc-wrapper">
                                <div class="machines-image">
                                  <img src="img/valiak.jpg" alt="Валяк" />
                                  <div class="tech-spec-btn">
                                    <a
                                      href=""
                                      data-toggle="modal"
                                      data-target="#valiakModal"
                                      >Техническа характеристика</a
                                    >
                                  </div>
                                </div>
                                <div class="machines-desc"><h2>Валяк</h2></div>
                              </div>
                            </div>
                          </div>
                          <!-- .row -->
                        </div>
                        <!-- .item -->
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-md-6 col-lg-4">
                              <div class="machines-img-desc-wrapper">
                                <div class="machines-image">
                                  <img
                                    src="img/bager.jpg"
                                    alt="Комбиниран багер"
                                  />
                                  <div class="tech-spec-btn">
                                    <a
                                      href=""
                                      data-toggle="modal"
                                      data-target="#bagerModal"
                                      >Техническа характеристика</a
                                    >
                                  </div>
                                </div>
                                <div class="machines-desc">
                                  <h2>Комбиниран багер</h2>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                              <div class="machines-img-desc-wrapper">
                                <div class="machines-image">
                                  <img
                                    src="img/tovarach.jpg"
                                    alt="Мини челен товарач"
                                  />
                                  <div class="tech-spec-btn">
                                    <a
                                      href=""
                                      data-toggle="modal"
                                      data-target="#tovarachModal"
                                      >Техническа характеристика</a
                                    >
                                  </div>
                                </div>
                                <div class="machines-desc">
                                  <h2>Мини челен товарач</h2>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                              <div class="machines-img-desc-wrapper">
                                <div class="machines-image">
                                  <img src="img/samosval.jpg" alt="Самосвал" />
                                  <div class="tech-spec-btn">
                                    <a
                                      href=""
                                      data-toggle="modal"
                                      data-target="#samosvalModal"
                                    >
                                      Техническа характеристика
                                    </a>
                                  </div>
                                </div>
                                <div class="machines-desc">
                                  <h2>Самосвал</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- .row -->
                        </div>
                        <!-- .item -->
                        <div class="carousel-item">
                          <div class="row">
                            <div class="col-md-6 col-lg-4">
                              <div class="machines-img-desc-wrapper">
                                <div class="machines-image">
                                  <img
                                    src="img/samosval_s_kran.jpg"
                                    alt="Самослвал с кран"
                                  />
                                  <div class="tech-spec-btn">
                                    <a
                                      href=""
                                      data-toggle="modal"
                                      data-target="#samosvalKranModal"
                                      >Техническа характеристика</a
                                    >
                                  </div>
                                </div>
                                <div class="machines-desc">
                                  <h2>Самосвал с кран</h2>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- .row -->
                        </div>
                        <!-- .item -->
                      </div>
                      <!-- .carousel-inner -->
                    </div>
                    <!-- .Carousel -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php include 'includes/footer.php'; ?>
      <?php include 'includes/modals.php';?>
  </body>
</html>
