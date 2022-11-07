<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <? Asset::render('css'); ?>
    <title>Документ</title>
</head>
<body class="grid-body">

<header class="header main colorized-panel">
    <nav class="nav nav-menu-panel container">
        <a href="#" class="menu-item">
            <svg data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" class="logo" viewBox="0 0 391.76 132.38">
                <title>
                    magiclogo</title>
                <path d="M102,0,70.55,54.58,39.67,1,1.38,33.66,12.63,99.25l14,11,0-38.19c0-7.08-1.71-25.19-1.71-34.79L34,46l36.93,86.43,36.75-87.44,9.07-8.71c0,9.6-1.71,27.71-1.71,34.79l0,38.19,14-11L140.3,32.65Z"
                      transform="translate(-1.38)"/>
                <path d="M194.73,101.29l-4.65-17.4H169l-4.65,17.4h-15l20-69.21h20.42l20.09,69.21Zm-7.47-28.76L183,56.5c-.26-1-.84-3.42-1.75-7.33s-1.45-6.53-1.63-7.85q-.72,4.05-1.82,8.94T172,72.53Z"
                      transform="translate(-1.38)"/>
                <path d="M253.9,63.05h24.73V98.41a64.87,64.87,0,0,1-22.35,3.82q-14.11,0-21.72-9.14T227,66.73q0-16.59,8.72-26T260,31.37a42,42,0,0,1,18.48,4.25l-4.76,10.46a29.12,29.12,0,0,0-12.84-3.39,16.2,16.2,0,0,0-13.58,6.53q-5,6.53-5,17.79,0,11.61,3.63,17.78A11.53,11.53,0,0,0,256.5,91a35.14,35.14,0,0,0,7.41-.8V74.37h-10Z"
                      transform="translate(-1.38)"/>
                <path d="M306.15,101.29V32.36h14.16v68.93Z" transform="translate(-1.38)"/>
                <path d="M376.71,42.59q-6.48,0-10.21,6.46t-3.73,18q0,24,14.66,23.95a30.34,30.34,0,0,0,13.45-3.48v11.4q-5.92,3.36-15.17,3.35-13.66,0-21-9.26t-7.34-26q0-16.79,7.56-26.16t21-9.39a34.28,34.28,0,0,1,8.49,1A36.66,36.66,0,0,1,393.14,36l-5,10.42a47,47,0,0,0-5.31-2.66A15.36,15.36,0,0,0,376.71,42.59Z"
                      transform="translate(-1.38)"/>
                <path d="M275.46,110.37h8.79q6,0,8.72,1.27a4.46,4.46,0,0,1,1.52,7.14,5.16,5.16,0,0,1-3.16,1.45v.14a7,7,0,0,1,3.88,1.67,4.48,4.48,0,0,1,1.18,3.25,5,5,0,0,1-2.79,4.48,15.09,15.09,0,0,1-7.58,1.61H275.46Zm6,8.32h3.48a8.28,8.28,0,0,0,3.53-.56,1.93,1.93,0,0,0,1.09-1.85,1.8,1.8,0,0,0-1.19-1.74,10.13,10.13,0,0,0-3.76-.52h-3.15Zm0,3.54v5.47h3.91A7.36,7.36,0,0,0,289,127a2.35,2.35,0,0,0,1.17-2.16q0-2.61-5-2.61Z"
                      transform="translate(-1.38)"/>
                <path d="M321.3,131.38l-2.05-5H309l-2,5h-6.45l10-21.1h7.32l10,21.1Zm-3.48-8.74c-1.89-4.53-3-7.09-3.19-7.69s-.41-1.06-.52-1.4c-.42,1.22-1.64,4.26-3.65,9.09Z"
                      transform="translate(-1.38)"/>
                <path d="M358.33,131.38h-7.61l-12.28-15.89h-.18c.25,2.8.37,4.81.37,6v9.89h-5.35v-21h7.55l12.27,15.74h.13q-.28-4.1-.29-5.79v-9.95h5.39Z"
                      transform="translate(-1.38)"/>
                <path d="M390.13,131.38h-6.8l-7.39-8.85-2.53,1.35v7.5h-6v-21h6V120l2.35-2.48,7.65-7.14h6.64l-9.85,9.3Z"
                      transform="translate(-1.38)"/>
            </svg>
        </a>
    </nav>
</header>


<nav class="main-menu">
    <ul class="menu-items">
        <li class="menu-item">
            <a class="menu-link active" href="#">
                <i class="fal fa-user"></i>
                <span class="nav-text">Клиенты</span>
            </a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="<?= $_SERVER['REQUEST_URI']?>/users/">
                <i class="fal fa-plus"></i>
                <span class="nav-text">Добавление</span>
            </a>
        </li>
    </ul>

    <ul class="logout">
        <li class="menu-item">
            <a class="menu-link" href="/">
                <i class="fal fa-home"></i>
                <span class="nav-text">Главная</span>
            </a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="/account/logout/">
                <i class="fa fa-power-off"></i>
                <span class="nav-text">Выход</span>
            </a>
        </li>
    </ul>
</nav>