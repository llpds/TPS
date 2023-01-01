<?php 
    include_once (ROOT."/models/User.php");
    include_once (ROOT."/models/Lang.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>tahtip product sys</title>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css"> <!-- структура -->
</head><!--/head-->

<body>
    <?php 
        Lang::checkLang();
        $lang = include (ROOT."/lang/".$_SESSION['lang'].".php");
    ?>
    <div class="wrapper">
        <div class = "header"><!--header-->
            <div class="headerContent"><!--header_content-->
                <div class="logo">
                    <a href="">
                    llpaul<span class="pink">ds</span><span class="gray">.beget.tech</span>
                    </a>
                    <div class="dropdown">
                        <div class="dropbtn"><?php echo ucfirst($_SESSION['lang']);?></div>
                        <div class="dropdown-content">
                            <?php foreach($_SESSION['langarr'] as $langItem): ?>
                                <a href="/langchng/<?php echo $langItem;?>"><?php echo ucfirst($langItem);?></a>
                            <?php endforeach;?>
                        </div>
                        </div>
                    </div>

                    <ul class="nav">
                        <?php if(User::isItr()):?>
                            <li>Itr: <?php echo $_SESSION['name']; ?></li>
                            <li><a href="/works"><?php echo $lang['nav']['works'];?></a></li>
                            <li><a href="/input"><?php echo $lang['nav']['workInput'];?></a></li>
                            <li><a href="/edit"><?php echo $lang['nav']['workEdit'];?></a></li>
                            <li><a href="/schedule"><?php echo $lang['nav']['workSchedule'];?></a></li>
                            <li><a href="/cnc"><?php echo $lang['nav']['cnc'];?></a></li>

                        <?php endif; ?>
                        <?php if(User::isAdmin()):?>
                            <li>Admin: <?php echo $_SESSION['name']; ?></li>
                            <li><a href="/works"><?php echo $lang['nav']['works'];?></a></li>
                            <li><a href="/input"><?php echo $lang['nav']['workInput'];?></a></li>
                            <li><a href="/edit"><?php echo $lang['nav']['workEdit'];?></a></li>
                            <li><a href="/schedule"><?php echo $lang['nav']['workSchedule'];?></a></li>
                            <li><a href="/cnc"><?php echo $lang['nav']['cnc'];?></a></li>
                            <li><a href="/files"><?php echo $lang['nav']['files'];?></a></li>

                        <?php endif; ?>
                        <?php if(User::isCnc()):?>
                            <li>Cnc: <?php echo $_SESSION['name']; ?></li>
                            <li><a href="/cnc"><?php echo $lang['nav']['cnc'];?></a></li>
                        <?php endif; ?>
                <!--        <li><a href="/">Workers shedule</a></li> -->
                        <li><?php ?></li>
                        <li><a href="/"><?php echo $lang['nav']['about'];?></a></li>
                        <?php if(User::isGuest()): ?>
                            <li><a href="/draw"><?php echo $lang['nav']['draw'];?></a></li>
                            <li><a href="/login"><?php echo $lang['nav']['login'];?></a></li>
                        <?php else: ?>   
                            <li><a href="/logout"><?php echo $lang['nav']['logout'];?></a></li>
                        <?php endif; ?>
                    </ul>
            </div><!--/header_content-->
        </div> <!-- /header -->
        <div class="content">
            <div class="main">
