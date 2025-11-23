<?php
$siteName = $title['setting_value'];
$page = basename($_SERVER['REQUEST_URI'], ".php");
$pageTitle = !empty($page) ? ucwords(str_replace('_', ' ', $page)) : "";
$fullTitle = !empty($pageTitle) ? "$siteName - $pageTitle" : $siteName;
$rnd = uniqid();
$url = getBaseUrl() . "{$_SERVER['REQUEST_URI']}";
?>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="theme-color" content="#d4d4d8" />
<title><?= $fullTitle ?></title>
<meta name="description" content="<?= $description['setting_value'] ?>" />
<link rel="manifest" href="/manifest.json?_=<?= $rnd ?>" />
<meta name="keywords" content="<?= $keywords['setting_value'] ?>" />
<meta name="robots" content="index, follow, nocache" />
<link rel="canonical" href="<?= $url ?>" />
<meta property="og:title" content="<?= $title['setting_value'] ?>" />
<meta property="og:description" content="<?= $description['setting_value'] ?>" />
<meta property="og:url" content="<?= $url ?>" />
<meta property="og:site_name" content="<?= $title['setting_value'] ?>" />
<meta property="og:image" content="<?= $logo_play['setting_value'] ?>" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?= $title['setting_value'] ?>" />
<meta name="twitter:description" content="<?= $description['setting_value'] ?>" />
<meta name="twitter:image" content="<?= $logo_play['setting_value'] ?>" />
<link rel="shortcut icon" href="<?= $logo_play['setting_value'] ?>?_=<?= $rnd ?>" sizes="32x32" type="image/x-icon" />
<link rel="icon" href="<?= $logo_play['setting_value'] ?>?_=<?= $rnd ?>" sizes="32x32" type="image/png" />
<link rel="apple-touch-icon" href="<?= $logo_play['setting_value'] ?>?_=<?= $rnd ?>" sizes="32x32" type="image/png" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="//kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script type="text/javascript" src="asset/js/jquery.min.js?_=<?= $rnd ?>"></script>

<script type="text/javascript" src="asset/js/nprogress.min.js?_=<?= $rnd ?>"></script>
<link rel="stylesheet" href="asset/css/nprogress.min.css?_=<?= $rnd ?>">

<script type="text/javascript" src="asset/js/sweetalert2.all.min.js?_=<?= $rnd ?>"></script>
<link rel="stylesheet" href="asset/css/sweetalert2.all.min.css?_=<?= $rnd ?>">

<script type="text/javascript" src="asset/js/alpine.min.js?_=<?= $rnd ?>"></script>

<link rel="stylesheet" href="asset/css/notyf.min.css?_=<?= $rnd ?>">

<script type="text/javascript" src="asset/js/script.js?_=<?= $rnd ?>"></script>
<link rel="stylesheet" href="asset/css/style.css?_=<?= $rnd ?>">

<script>
    console.disableYellowBox = true;
</script>