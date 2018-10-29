<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/23
 * Time: 8:58
 */
?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>大连海事大学废弃物再生工程技术研究中心</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<div class="container">
    <div class="header">
        <div style="padding:30px 0;">
            <img src="images/u27.png" alt="" style="width: 61px;">
            <span>大连海事大学废弃物再生工程技术研究中心</span>
        </div>
        <img src="images/组拷贝2.png" alt="" style="width:100%;">
        <div class="header-btns">
            <ul>
                <li>
                    <a href="#">主页</a>
                </li>
                <li>
                    <a href="submenushow?rout=show.researchDirection&table=researchDirection">研究方向</a>
                </li>
                <li>
                    <a href="VTMembermembers.php">团队成员</a>
                </li>
                <li>
                    <a href="scientificResearchProject.php">科研项目</a>
                </li>
                <li>
                    <a href="academySuccesses.php">学术成果</a>
                </li>
                <li>
                    <a href="laboratoryEquipment.php">实验设备</a>
                </li>
                <li>
                    <a href="studentWorld.php">学生天地</a>
                </li>
                <li>
                    <a href="contactWay.php">联系方式</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="news">
            <div class="news-header">
                图片新闻
            </div>
            <div class="pic-news">
                <img src="images/u48.jpg" id="newsPic" alt="" class="pic">
            </div>
            <div class="pic-select">
                <div class="select-dot" style="background-color:white;"></div>
                <div class="select-dot"></div>
                <div class="select-dot"></div>
            </div>
            <a class="pic-info" id="picTitle">图片新闻</a>
        </div>
        <div class="summary">
            <div class="rec-header">中心简介</div>
            <p>欢迎来到大连海事大学废弃物再生工程技术研究中心——李清波课题组，我们致力于研发工程技术措施，促使农业、工业和生产、生活废弃物得到再生，开发新技术使再生产品进入新产品生命周期中，促进废弃物化学元素的物质循环，并从中获取新的再生资源和能
                源，减少二氧化碳排放，从而消除农业废弃物秸秆燃烧造成的大气污染物问题、实现市政污泥减量化和无害化处理、使废旧轮胎得到有效处置和再生利用，助力企业经济效益和社会效益双提升。</p>
        </div>
        <div class="recent recent2">
            <div class="rec-header">近期新闻</div>
            <div class="more"><a href="policy.php">更多>></a></div>
            <ul class="rec-list">
                <?php
                $con=mysqli_connect('127.0.0.1','root','')or die("数据库连接失败");//连接数据库
                mysqli_select_db($con,'recycling_project');//选择数据库
                $q="SELECT * FROM recent_news ORDER BY `recent_news`.`id` DESC LIMIT 7";//设置查询指令
                $res=mysqli_query($con,$q);//执行查询
                while($row=mysqli_fetch_assoc($res))//将result结果集中查询结果取出一条
                {
                $id = $row['id'];
                 $date = date('Y-m-d',strtotime($row['date']));
                   echo "<li>"."<a href='policy_detail.php?id=$id'>".$row['title']."<span class='list-time'>".$date."</span>"."</a>"."</li>";
                }
                 mysqli_close($con);
                ?>
            </ul>

        </div>
        <div class="knowledge" style="background-color:white;">
            <span>合作单位</span>
            <ul>
                <li>
                    <img src="images/u=1151928717,3547391191&fm=26&gp=0.jpg" alt="">
                </li>
                <li>
                    <img src="images/562c11dfa9ec8a13bb1224f6fb03918fa0ecc098.jpg" alt="">
                </li>
                <li>
                    <img src="images/u0.jpg" alt="">
                </li>
                <li>
                    <img src="images/u=2557500812,1901937630&fm=26&gp=0.jpg" alt="">
                </li>
            </ul>
            <img src="images/下载.jpg" alt="" style="width:45%;">
            <img src="images/密苏里科技.jpg" alt="" style="width:20%;padding-left: 15%;padding-right: 10%">
        </div>
        <div class="bottom">
            <span>版权所有：大连海事大学李清波课题组</span>
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
            picSrc: "images/u44.png",
            title: "图片新闻",
            href: "",
        },
        {
            picSrc: "images/u46.jpg",
            title: "图片新闻",
            href: "",
        },
        {
            picSrc: "images/u48.jpg",
            title: "图片新闻",
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
