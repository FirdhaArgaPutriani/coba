<?php
require_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="asset/css/header_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>
<body>
    <aside class="sidebar">
      <div class="logo">
        <h2>PPM</h2>
      </div>
      <ul class="links">
        <li>
          <span class="material-symbols-outlined">home</span>
          <a href="#">Dashboard</a>
        </li>
        <hr>
        <h4>Pemerintahan</h4>
        <li>
          <span class="material-symbols-outlined">group</span>
          <a href="#">Germas</a>
        </li>
        <li>
          <span class="material-symbols-outlined">person</span>
          <a href="#">Stunting</a>
        </li>
        <li>
          <span class="material-symbols-outlined">ambient_screen</span>
          <a href="#">ATM</a>
        </li>
        <li>
          <span class="material-symbols-outlined">pacemaker</span>
          <a href="#">Kota Sehat</a>
        </li>
        <li>
          <span class="material-symbols-outlined">monitoring</span>
          <a href="#">Ranham</a>
        </li>
        <li>
          <span class="material-symbols-outlined">pie_chart</span>
          <a href="#">SDG</a>
        </li>
        <hr>
        <h4>Pembangunan Manusia</h4>
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">Gender</a>
        </li>
        <li>
          <span class="material-symbols-outlined">group</span>
          <a href="#">KLA</a>
        </li>
        <li>
          <span class="material-symbols-outlined">person</span>
          <a href="#">IPM</a>
        </li>
        <li>
          <span class="material-symbols-outlined">bookmark</span>
          <a href="#">Kebudayaan</a>
        </li>
        <li>
          <span class="material-symbols-outlined">book</span>
          <a href="#">Pendidikan</a>
        </li>
        <li>
          <span class="material-symbols-outlined">monitoring</span>
          <a href="#">Kemiskinan</a>
        </li>
        <!-- <li class="logout-link">
          <span class="material-symbols-outlined">logout</span>
          <a href="#">Logout</a>
        </li> -->
      </ul>
    </aside>
    <div class="centernav">
      <div class="topnav">
        <input type="text" placeholder="Search..">
        <button><span class="material-symbols-outlined">search</span></button>
        <a>
          <span class="material-symbols-outlined">login</span>
          &nbsp; Login
        </a>
      </div>
</div>


    
