<html lang="bg">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="description"
      content="Фирма Терзов ЕООД е с над 20 годишна практика в областта на отдаването на строителната механизация. Фирмата предлага Товаро-разтоварна дейност, изкопна дейност, доставка на строителни и инертни материали, извозване на строителни отпадъци и земни материали, вертикални планировки, обратни насипи, превозване на товари. Терзов ЕООД разполага с автокранове, бордови камион с кран, самосвал с кран, самосвал, комбиниран багер, мини челен товарач, вибро валяк."
    />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/main.css" />
    <?php if ($page == "machines" || $page == "gallery") {echo '<link rel="stylesheet" href="css/lightbox.min.css" />';} ?>
    <?php 
    switch ($page) {
      case  'index':
        echo '<title>Терзов ЕООД</title>'; 
      break;
      case 'machines':
        echo '<title>Терзов ЕООД | Видове техника</title>'; 
      break;
      case 'services':
        echo '<title>Терзов ЕООД | Услуги</title>'; 
      break;
      case 'gallery':
        echo '<title>Терзов ЕООД | Галерия</title>'; 
      break;
      case 'contacts':
        echo '<title>Терзов ЕООД | Контакти</title>'; 
      break;
      default: 
        echo '<title>Терзов ЕООД</title>'; 
    }
    ?>
    
    <meta property="fb:app_id" content="743902412647704" />
    <meta property="og:url" content="http://terzov.reklamatavi.com" />
    <meta property="og:type" content="website" />
    <meta
      property="og:description"
      content="Терзов ЕООД е най-добрият партньор за Вас в строителството!Фирмата може да Ви предложи богат машинен парк от строителна механизация."
    />
    <meta property="og:title" content="Терзов ЕООД" />
    <meta
      property="og:image"
      content="http://terzov.reklamatavi.com/img/fb-cover.jpg"
    />
  </head>