
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>教学工作评估宣传网</title>
    {{--<link href="css/admin_login.css" rel="stylesheet" type="text/css" />--}}
    <link href="css/admin_login.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div class="admin_input">
    <input type="text">
</div>
<div class="container">
    <div class="header">
        <img class="title-img" src="/images/title.png" alt="">
        <div class="header-btns">
            <ul>
                <li>
                    <a href="/index">网站首页</a>
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
    <div class="main">
        <div class="news">
            <div class="news-header">
图片新闻
            </div>
            <div class="pic-news">
                <img src="/images/1.jpg" id="newsPic" alt="" class="pic">
            </div>
            <div class="pic-select">
                <div class="select-dot" style="background-color:white;"></div>
                <div class="select-dot"></div>
                <div class="select-dot"></div>
                <div class="select-dot"></div>
            </div>
            <a class="pic-info" href="detail_1.html" target="_blank" id="picTitle">我校召开本科教学工作审核评估校领导班子专题工作会</a>
        </div>
        <div class="recent">
            <div class="rec-header">评估动态</div>
            <div class="more"><a href="see?rout=show.dync&table=evadync">更多>></a></div>
            <ul class="rec-list">
<!--                --><?php
//                $con=mysqli_connect('localhost','root','jwc24681711')or die("数据库连接失败");//连接数据库
//                mysqli_set_charset( $con , "utf8" );//格式化字体
//                mysqli_select_db($con,'jiaowuEva');//选择数据库
//                $q="SELECT * FROM evaDync ORDER BY `evaDync`.`id` DESC LIMIT 7";//设置查询指令
//                $res=mysqli_query($con,$q);//执行查询
//                while($row=mysqli_fetch_assoc($res))//将result结果集中查询结果取出一条
//                {
//                    $id = $row['id'];
//                    $date = date('Y-m-d',strtotime($row['created_at']));
//                    echo "<li>"."<a href='look?table=evadync&id=$id'>".$row['title']."<span class='list-time'>".$date."</span>"."</a>"."</li>";
//                }
//                mysqli_close($con);
//                ?>
            </ul>
        </div>
        <div class="recent recent2">
            <div class="rec-header">评估政策</div>
            <div class="more"><a href="see?rout=show.poly&table=evapoly">更多>></a></div>
            <ul class="rec-list">
<!--                --><?php
//                $con=mysqli_connect('localhost','root','jwc24681711')or die("数据库连接失败");//连接数据库
//                mysqli_set_charset( $con , "utf8" );//格式化字体
//                mysqli_select_db($con,'jiaowuEva');//选择数据库
//                $q="SELECT * FROM evaPoly ORDER BY `evaPoly`.`id` DESC LIMIT 7";//设置查询指令
//                $res=mysqli_query($con,$q);//执行查询
//                while($row=mysqli_fetch_assoc($res))//将result结果集中查询结果取出一条
//                {
//                    $id = $row['id'];
//                    $date = date('Y-m-d',strtotime($row['created_at']));
//                    echo "<li>"."<a href='look?table=evapoly&id=$id'>".$row['title']."<span class='list-time'>".$date."</span>"."</a>"."</li>";
//                }
//                mysqli_close($con);
//                ?>
            </ul>
        </div>
        <div class="knowledge" style="background-color:white;"><a href="html/point.html"><img src="/images/point.png"></a></div>
        <div class="bottom">
            <span>沈阳理工大学评建办公室</span>
            <span>教务处琴理工作室&nbsp;承制</span>
            <span>评建工作邮箱：pingjianban@sylu.edu.cn</span>
        </div>
        </div>
        </div>
<script>
    var dotList = document.getElementsByClassName('select-dot');
    newsPic = document.getElementById('newsPic');
    picTitle = document.getElementById('picTitle');
    lengthOut = length = dotList.length;
    news = [
        {
            picSrc: "/images/1.jpg",
            title: "我校召开本科教学工作审核评估校领导班子专题工作会",
            href: "",
        },
        {
            picSrc: "/images/2.jpg",
            title: "我校召开教学单位本科教学工作审核评估工作推进会",
            href: "",
        },
        {
            picSrc: "/images3.jpg",
            title: "我校召开本科教学工作审核评估工作推进会",
            href: "",
        },
        {
            picSrc: "/images/4.jpg",
            title: "经济管理学院召开本科审核评估和2017届学生就业工作专题会议",
            href: "",
        },
    ]
    while(lengthOut) {
        lengthOut--;
        dotList[lengthOut].addEventListener('mouseover', (function (lengthOut) {
            return function () {

                newsPic.src = news[lengthOut].picSrc;
                picTitle.innerHTML = news[lengthOut].title;
                picTitle.href = news[lengthOut].href;
                lengthIn = length;
                while(lengthIn) {
                    lengthIn--;
                    dotList[lengthIn].style.backgroundColor = 'inherit';
                }
                this.style.backgroundColor = 'white';
            }
        })(lengthOut))
    }
</script>
</body>

</html>