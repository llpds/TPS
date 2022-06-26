<?php include_once (ROOT."/models/User.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>tahtip product sys</title>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css"> <!-- структура -->
</head><!--/head-->

<body>
    <div class="wrapper">
        <div class = "header"><!--header-->
            <div class="headerContent"><!--header_content-->
                <div class="logo">
                    <a href="">
                    llpaul<span class="pink">ds</span><span class="gray">.beget.tech</span>
                    </a>

                </div>

                    <ul class="nav">
                        <?php if(User::isItr()):?>
                            <li><a href="/works">Works</a></li>
                            <li><a href="/input">Works input</a></li>
                            <li><a href="/edit">Works edit</a></li>
                            <li><a href="/schedule">Works schedule</a></li>
                            <li><a href="/cnc">CNC</a></li>
                        <?php endif; ?>
                        <?php if(User::isCnc()):?>
                            <li><a href="/cnc">CNC</a></li>
                        <?php endif; ?>
                <!--        <li><a href="/">Workers shedule</a></li> -->
                        <li><a href="/">About</a></li>
                        <?php if(User::isGuest()): ?>
                            <li><a href="/login">Login</a></li>
                        <?php else: ?>   
                            <li><a href="/logout">Logout</a></li>
                        <?php endif; ?>
                    </ul>
            </div><!--/header_content-->
        </div> <!-- /header -->
        <div class="content">
            <div class="main">
