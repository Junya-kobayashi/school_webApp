<?php
    session_name("j150719j");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="A slideshow with different artsy CSS grid layouts" />
    <meta name="keywords" content="css grid, layout, slideshow, irregular, html, javascript, reveal, animation" />
    <meta name="author" content="Codrops" />
    <title>フリマサイト(情報工学科)</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Kanit:700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/revealer.css" />
    <link rel="stylesheet" type="text/css" href="pater/pater.css" />
    <link rel="stylesheet" href="../css/style.css">
    <script>
        document.documentElement.className = 'js';
    </script>
</head>
<body class="demo-1 loading">
    <h1>Free Market Application</h1>
    <div class="sidemenu">
        <?php
            if(!isset($_SESSION['login_name'])){
                print "まだログインしていません";
                print "<a href='regist.php'>新規登録</a>";
                print "<a href='login.php'>ログイン</a>";
            } else {
                print $_SESSION['login_name']. "さんようこそ！";
                print "<a href='search.php'>商品検索</a>";
                print "<a href='items_list.php'>商品一覧</a>";
                print "<a href='sell_item.php'>商品出品</a>";
                print "<a href='password.php'>パスワード変更</a>";
                print "<a href='logout.php'>ログアウト</a>";
            }
        ?>
    </div>
    <svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-nav-arrow" viewBox="0 0 24 17">
				<title>nav arrow</title>
				<polygon points="14.1333333 2.61666667 18.9333333 7.41666667 0 7.41666667 0 10.0833333 18.9333333 10.0833333 14.1333333 14.8833333 16 16.75 24 8.75 16 0.75"></polygon>
			</symbol>
		</svg>
    <main>
        <div class="message">Please view this demo on a desktop to see the grid.</div>
        <!-- <div class="frame">
            <header class="codrops-header">
                <div class="codrops-links">
                    <a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/OrganicShapeAnimations/" title="Previous Demo"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
                    <a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=31774" title="Back to the article"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
                </div>
                <h1 class="codrops-header__title"><a href="https://tympanus.net/codrops/css_reference/grid/">[CSS Grid]</a> Layout Slideshow</h1> -->
                <!-- <a class="github" href="https://github.com/codrops/GridLayoutSlideshow/">GitHub</a>
            </header>
            <nav class="demos">
                <a class="demo demo--current" href="index.html">Demo 1</a>
                <a class="demo" href="index2.html">Demo 2</a>
                <a class="demo" href="index3.html">Demo 3</a>
            </nav>
            <a href="http://go.hackingui.com/DaPulsecodrops180717" rel="nofollow" class="pater">
                <img class="pater__logo" src="pater/dapulse_logo.svg#black" alt="dapulse Logo" />
                <h2 class="pater__title">Project management is better when it's visual</h2>
                <div class="pater__img-wrap"><img class="pater__img" src="pater/winmacrainbow.png" alt="dapulse Creative" /></div>
            </a>
        </div> -->
        <div class="grid grid--layout-1 grid--current">
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item grid__item--nav grid__item--nav-prev">
                <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
            </div>
            <div class="grid__item grid__item--nav grid__item--nav-next">
                <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
            </div>
            <h2 class="grid__item grid__item--name">Free<br/> Market <br/> on2017 </h2>
            <h3 class="grid__item grid__item--title">Belfast</h3>
            <p class="grid__item grid__item--text">A reet bobbydazzler a right toff Sherlock Queen Elizabeth Shakespeare</p>
        </div>
        <div class="grid grid--layout-2">
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item grid__item--nav grid__item--nav-prev">
                <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
            </div>
            <div class="grid__item grid__item--nav grid__item--nav-next">
                <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
            </div>
            <h2 class="grid__item grid__item--name">free<br/> Market <br/>on2018</h2>
            <h3 class="grid__item grid__item--title">Minsk</h3>
            <p class="grid__item grid__item--text">You mean it ain't me noggin' leisurely shepherd's pie bossy britches</p>
        </div>
        <div class="grid grid--layout-3">
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item grid__item--nav grid__item--nav-prev">
                <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
            </div>
            <div class="grid__item grid__item--nav grid__item--nav-next">
                <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
            </div>
            <h2 class="grid__item grid__item--name">Free<br/> Market <br/>on2019</h2>
            <h3 class="grid__item grid__item--title">Paris</h3>
            <p class="grid__item grid__item--text">Dignified teacakes air one's dirty linen off t'shop scouser quid pezzy little taking the mick</p>
        </div>
    </main>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/revealer.js"></script>
    <script src="js/demo.js"></script>
    <script>
        {
            const DOM = {};
            DOM.body = document.body;
            DOM.gridElems = Array.from(document.querySelectorAll('.grid'));

            imagesLoaded(DOM.body, {
                background: true
            }, () => {
                DOM.body.classList.remove('loading');
                new Slideshow(DOM.gridElems);
            });
        }
    </script>
</body>

</html>