<?php
$page = "contacts";
?>
<!DOCTYPE html>
<?php include 'includes/head.php'; ?>
  <body>
    <div id="wrapper">
    <?php include 'includes/header.php'; ?>
      <main>
      <div class="section">
          <div class="container">
            <div class="title"><h1>Контакти</h1></div>
            
          </div>
        </div>
        <div id="map-bg-wrapper">
            <div class="container">
                <div class="contact-form-wrapper">
                    <h3>Изпратете ни съобщение</h3>
                    <form action="http://terzov.reklamatavi.com/test/contacts" id="frmContact">
                        <div class="form-group">
                            <label for="name">Вашето име:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="comment">Съобщение:</label>
                            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                        </div>
                        <div style="margin-bottom:20px;" class="g-recaptcha" data-sitekey="6Lcvj4IUAAAAAJ2VmAZ1eKGmVgAthl6qkxGH4EEb"></div>
                        <button type="submit" name="send" id="send" class="btn btn-primary">Изпрати</button>
                    </form>
                    <div id="loader-icon" style="display:none;"><img src="img/arrow_loader.gif" alt="loader-icon" /></div>
                    <div id="mail-status"></div>
                </div>
            </div>
        </div>
        <div id="under-form-contacts">
            <div class="container">
                <div class="under-form-wrapper">
                        <div class="sm-contacts-outer">
                            <span class="sm-contacts-icon"><i class="fas fa-map-marker-alt"></i
                ></span>
                            <ul class="sm-contacts-info">
                                <li class="sm-text">Местоположение</li>
                                <li class="strong-text">гр.София</li>
                            </ul>
                        </div>
                        <div class="sm-contacts-outer">
                        <span class="sm-contacts-icon"><i class="fas fa-phone-square"></i
                ></span>
                            <ul class="sm-contacts-info">
                                <li class="sm-text">Телефон</li>
                                <li class="strong-text"><a href="tel:0878259515">0878 259 515</a></li>
                            </ul>

                        </div>
                        <div class="sm-contacts-outer">
                        <span class="sm-contacts-icon"><i class="fas fa-envelope-square"></i
                ></span>
                            <ul class="sm-contacts-info">
                                <li class="sm-text">E-mail</li>
                                <li class="strong-text"><a href="mailto:terzov_eood@abv.bg">terzov_eood@abv.bg</a></li>
                            </ul>

                        </div>
                </div>
            </div>
        </div>
        
        
      </main>
      <?php include 'includes/footer.php'; ?>
  </body>
</html>
