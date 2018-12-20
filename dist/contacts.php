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
            <div class="contact-form-wrapper">
                <div class="row">
                    <div class="col-md-4 contact-form-col">
                        <form action="http://terzov.reklamatavi.com/contacts" id="frmContact">
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
                    <div class="col-md-8 map-col">
                        <div id="map-bg-wrapper">
                            <iframe src="https://snazzymaps.com/embed/121842" width="100%" height="300px" style="border:none;"></iframe>
                        </div>
                        <div class="contact-info-col">
                            <h3>Терзов ЕООД</h3>
                            <p><b>Адрес:</b> гр. София, ул. Бесарабия 104</p>
                            <p><b>Телефон:</b> 0878 259 515</p>
                            <p><b>e-mail:</b> terzov_eood@abv.bg</p>        
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>
            

          </div>
        </div>
        
      </main>
      <?php include 'includes/footer.php'; ?>
  </body>
</html>
