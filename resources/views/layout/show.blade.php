<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>教学工作评估宣传网</title>
    <script type="text/javascript" src="js/jquery.media.js"></script>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/index.css') }}"/>
</head>

<body>
<div class="container">
    <div class="header">
        <img class="title-img" src="/images/title.png" alt="">
        <div class="header-btns">
            <ul>
                <li>
                    <a href="index">网站首页</a>
                </li>
                <li>
                    <a href="see?rout=show.dync&table=evadync">评估动态</a>
                </li>
                <li>
                    <a href="see?rout=show.poly&table=evapoly">评估政策</a>
                </li>
                <li>
                    <a href="see?rout=show.othe&table=evaothe">他山之石</a>
                </li>
                <li>
                    <a href="see?rout=show.know&table=evaknow">评建简报</a>
                </li>
                <li>
                    <a href="see?rout=show.poin&table=evapoin">评估要点</a>
                </li>
                <li>
                    <a href="http://www.sylu.edu.cn/sylusite/">返回官网</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="list">
            @yield('content')
        </div>
        <div class="bottom">
            <span>沈阳理工大学评建办公室</span>
            <span>教务处琴理工作室&nbsp;承制</span>
            <span>评建工作邮箱：pingjianban@sylu.edu.cn</span>
        </div>
    </div>
</div>
</body>

</html>
