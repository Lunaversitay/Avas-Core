<?php require_once('config.php') ?>

<!DOCTYPE html>

<html>

<head>

<title>Ava's Core | Index</title>

<link href="compiled/css/avascore.css" rel="stylesheet">

</head>

<body>
<!-- simple nav -->
  <ul class="nav">
    <li class="nav"><a class="active" href="#homepage">Home</a></li>
    <li class="nav"><a href="#aboutpage">About</a></li>
    <li class="nav"><a href="#donatepage">Donations</a></li>
    <li class="nav"><a href='<?php echo $forums_link; ?>'>Forums</a></li>
  </ul>
<a id="homepage"></a>
  <div class="new-page">
    <div class="wrapper">
<div id="home">

<div id="header-background">

<div id="header-title"><?php echo $server_name; ?></div>

<div id="header-server-ip" class="truncate"><?php echo $server_ipaddress; ?></div>

</div>


    </div>
  </div>
</div>
<a id="aboutpage"></a>
<div class="new-page">
  <div class="wrapper">

    <div id="about">

      <div id="header-title"><?php echo $about_title; ?></div>
      <div id="header-background">

        <span id="header-sub">
          <?php echo $about_sub_section; ?>
        </span>

    </div>

    </div>
  </div>
</div>
<a id="donatepage"></a>
<div class="new-page">
  <div class="wrapper">

    <div id="donate">

<div class="center">
      <table class="centered-table">
        <tr>
          <th><h2><?php echo $package_1_name; ?></h2>
          <h1><?php echo $package_1_price; ?></h1></th>
          <th><h2><?php echo $package_2_name; ?></h2>
          <h1><?php echo $package_2_price; ?></h1></th>
          <th><h2><?php echo $package_3_name; ?></h2>
          <h1><?php echo $package_3_price; ?></h1></th>
        </tr>
        <tr>
          <td><?php echo $package_1_benefit_1; ?></td>
          <td><?php echo $package_2_benefit_1; ?></td>
          <td><?php echo $package_3_benefit_1; ?></td>
        </tr>
        <tr>
          <td class="second"><?php echo $package_1_benefit_2; ?></td>
          <td class="second"><?php echo $package_2_benefit_2; ?></td>
          <td class="second"><?php echo $package_3_benefit_2; ?></td>
        </tr>
        <tr>
          <td><?php echo $package_1_benefit_3; ?></td>
          <td><?php echo $package_2_benefit_3; ?></td>
          <td><?php echo $package_3_benefit_3; ?></td>
        </tr>
        <tr>
          <td class="second"><?php echo $package_1_benefit_4; ?></td>
          <td class="second"><?php echo $package_2_benefit_4; ?></td>
          <td class="second"><?php echo $package_3_benefit_4; ?></td>
        </tr>
      </table>

</div>


    </div>

  </div>
  </div>
</div>

</body>
