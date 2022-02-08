<?php
include("connection/connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Find Jobs Online</title>
        <link rel="stylesheet" href="css/styles_home.css" />
        <script src="https://kit.fontawesome.com/00cf8b631d.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .hc {
            position: fixed;
        }

        .hc,
        .hnavbar,
        .hcb3 {
            display: flex;
        }

        .hc {
            justify-content: space-around;
        height: 10vh;
        width: 100%;
        background-color: #124143;
        align-items: center;
        }

        .hcb2 {
            width: 50%;
            /* justify-ctent: center; */
        }

        .hcb1 {
            width: 25%;
        }

        .hcb1 img {
            /* width: 25%; */
            margin-left: 55px;
            height: 60px;
            width: 60px;
        }

        .image img {
            height: 60px;
            width: 60px;
        }

        .hnavbar {
            list-style: none;
            justify-content: center;
        }

        .hnavbarlink1 a {
            text-decoration: none;
            color: #f5f5f5;
            font-size: 25px;
            padding:0 10px;
            margin: 13px;
        }
        .hnavbarlink1 a:hover {
            /* color: #124143; */
            background-color: rgb(255,255,255,0.1);
            /* border:2px solid white; */
            border-radius: 5px;
            transition: 0.3s;
            cursor: pointer;
            /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
        }

        .hcb3 {
            width: 25%;
            justify-content: center;
            align-items: center;
        }

        .hbtn {
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 10px;
            background-color: #f5f5f5;
            font-size: 16px;
        }

        .heplogin,
        .huser {
            color: white;
        }

        .links-items {
            padding: 15px;
            font-size: 25px;
            color: white;
        }

        .hc2 {
            padding-top: 10vh;
            /* position:static; */
        }

        .hc2 img {
            width: 100%;
            height: 45vh;
        }

        .hc3 {
            display:flex;
            /* height: 45vh; */
            background-color: #124143;
            border-radius: 10px 10px 0 0;
            flex-direction:column;
            flex-wrap:wrap;
            overflow:hidden;
        }

        .hc3b1 {
            display: flex;
            text-align: center;
            color: #f5f5f5;
            font-size: 20px;
            padding:0 40px;
        }
        .hc3b1p1{
            width: 25%;
            padding-top: 20px;
            width:100%;
        }
        .p1ctent{
            font-size: 18px;
            padding: 35px;
            text-align: justify;
        }
        .hc3b1p1-list{
            padding:10px 0 10px 90px;
            list-style:none;
            text-align:left;
        }
        .p1head{
            font-size:30px;
        }
        .link-item{
            padding: 10px;
            font-size: 25px;
            color: white;
            text-decoration:none;
        }
        .hcopyright{
            font-size: 25px;
            text-align: center;
            width: 100%;
            padding:10px;
        }
        .hc4,.hc5{
            padding:0px 0 20px 0;
            display:flex;
            /* width:80%; */
            justify-content:center;
            /* border:2px solid black; */
        }
        .hc4box1{
            width:20%;
            padding:20px;
        }
        .hc4box2{
            display:flex;
            flex-direction:column;
            width:60%;
        }
        .hc4box1 img{
            height:300px;
            width:300px;
        }
        .hc4box2heading{
            font-size:40px;
            padding:30px;
            /* font-weight:500; */
        }
        .hc4box2boxes{
            justify-content: space-between;
            display:flex;
            padding:0 30px;
        }
        .hstatus{
            padding:20px;
            display: flex;
            border: 1px solid black;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height:140px;
            width:140px;
        }
        .hstatus-icon img{
            height:60px;
            width:60px;
        }
        .hstatus-title{
            font-size:28px;
        }
        .hstatus-number{
            font-size:25px;
        }
        .hstatus-number,.hstatus-title,.hstatus-icon{
            padding-bottom:10px;
        }
        .hc5box1{
            width:22%;
            padding:20px 0;
            background-color:#124143;
            border-radius:0 20px 20px 0;
        }
        .hc5box2{
            width:60%;
        }
        .hc5heading{
            font-size:40px;
            padding:0px 33px;
        }
        .hc5content{
            padding:0 33px;
            font-size:25px;
        }
        .hc5btn1{
            /* background-color:black; */
            padding:10px 0;
            display:flex;
            justify-content:center;
        }
        .hc5hbtn{
            width:250px;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #f5f5f5;
            font-size: 20px;
        }
    </style>
   <div class="hc">
        <div class="hcb1">
            <img src="./images/logo.png" alt="">
        </div>
        <div class="hcb2">
            <ul class="hnavbar">
                <li class="hnavbarlink1"><a href="#">Home</a></li>
                <li class="hnavbarlink1"><a href="#">About Us</a></li>
                <li class="hnavbarlink1"><a href="jobs.php">Jobs</a></li>
                <li class="hnavbarlink1"><a href="#">Blog</a></li>
                <li class="hnavbarlink1"><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="hcb3">
            <!-- <div class="hpaj">
                <button class="hbtn">
                    Post a Job
                </button>
            </div>
            <div class="hlogin">
                <a href="https://www.instagram.com" class="fa fa-bell links-items" target="_blank"></a>
            </div> -->
            <div class="huser">
                <a href="https://www.instagram.com" class="fa fa-user links-items" target="_blank"></a>
            </div>
        </div>
    </div>
        <!-- <nav>
            <ul id="navbar-list">
                <li id="logo">Logo</li>
                <span>
                    <li>Home</li>
                    <li>About</li>
                    <li>Jobs</li>
                    <li>Contact Us</li>
                </span>
                <li id="account-icon"><i class="fa fa-user icon"></i></li>
            </ul>
        </nav> -->

        <div id="main"> <!--Maid Available Online-->
            <h1 id="main-h1">Job Available Online</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio earum eveniet quasi voluptatem enim sint praesentium magnam eaque aliquid fugiat. Dignissimos dolores iure at animi atque. Beatae nihil nemo perferendis?<br>
            <div>
                <a href="EmpReg.php" class="employee-reg">Employee</a>
                <a href="JobReg.php" class="job-seeker-reg">Job Seeker</a>
            </div>
        </div>

        <div id="background">
        </div>

        <div id="maid-image">
            <img src="images/maid-pic-removebg-preview.png">
        </div>
        
        <div class="how-it-works-block"> <!--How it Works?-->
            <h1>How it works?</h1>
            <hr>
            <div style="display: inline-block;">
                <div class="how-it-works-image">
                    <img src="images/inspection-removebg-preview.png" >
                </div><br>
                Inspection
            </div>
            <div class="arrow">
                &#x2192;
            </div>
            <div style="display: inline-block">
                <div class="how-it-works-image">
                    <img src="images/verification-removebg-preview.png" >
                </div><br>
                Verification
            </div>
            <div class="arrow">
                &#x2192;
            </div>
            <div style="display: inline-block">
                <div class="how-it-works-image">
                    <img src="images/selected-removebg-preview.png" >
                </div><br>
                Selection
            </div>
        </div>

        <div class="block"> <!--Why Choose Us?-->
            <h1>Why Choose Us?</h1>
            <hr>
            <div style="padding: 1%;">
                <div class="block-row"> <!--row-->
                    <div  class="choose-block">
                        <img src="images/validation-pic-removebg-preview.png">
                        <h3>Verified and Trained Professionals</h3><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat facilis officiis perferendis quod enim sunt. Aspernatur quidem iste ratione, iusto cupiditate necessitatibus nisi dicta labore quos omnis doloremque perspiciatis, nulla vitae repellat quis eveniet, quisquam delectus neque quo debitis voluptatum.
                    </div>
                    <div class="choose-block">
                        <img src="images/validation-pic-removebg-preview.png">
                        <h3>Affordable Charges</h3><br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, aspernatur quasi! Error suscipit laborum dolorem eos possimus voluptatem dolores iusto. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis porro quia facere iusto quo corporis corrupti excepturi asperiores nemo beatae.
                    </div>
                </div>
                <div class="block-row"> <!--row-->
                    <div class="choose-block">
                        <img src="images/validation-pic-removebg-preview.png">
                        <h3>Customer Support</h3><br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut illum atque, labore corporis dolores consectetur blanditiis ipsum distinctio, corrupti maxime officia facilis debitis. Aperiam, at adipisci aliquid sapiente reprehenderit, unde nemo animi sint ea necessitatibus molestias. Veniam est a ex?
                    </div>
                    <div class="choose-block">
                        <img src="images/validation-pic-removebg-preview.png">
                        <h3>Committed Services</h3><br>
                        Lorem ipsum dolor jojasos jaosoas sit amet consectetur, adipisicing elit. Molestias suscipit porro ut ipsam officiis? Quia esse a quaerat officiis earum amet, labore atque ullam sit! Magni iste, labore mollitia sequi reprehenderit, accusamus placeat officia atque facilis a suscipit, djosdjo ojsod istinctio minus.
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin: auto;" class="block"> <!--Success Stories-->
            <h1>Success Stories</h1>
            <hr>
            <div class="review-parent">
                <div class="review">
                    <img src="images/female-face.webp">
                    <h3>Name:</h3>XYZ
                    <h3>Experience</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aliquam quibusdam, veritatis, nostrum repellat fuga voluptate id numquam odio explicabo a exercitationem, debitis doloremque amet eligendi nam distinctio modi provident.
                </div>
                <div class="review">
                    <img src="images/female-face.webp">
                    <h3>Name:</h3>XYZ
                    <h3>Experience</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aliquam quibusdam, veritatis, nostrum repellat fuga voluptate id numquam odio explicabo a exercitationem, debitis doloremque amet eligendi nam distinctio modi provident.
                </div>
                <div class="review">
                    <img src="images/female-face.webp">
                    <h3>Name:</h3>XYZ
                    <h3>Experience</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus molestiae beatae temporibus. Optio placeat quibusdam fugiat quae. Enim dignissimos ipsa totam voluptas ea ducimus repellendus tempora. Deleniti esse molestias officia sint, officiis aspernatur animi atque aut sit illum odio maxime!
                </div>
            </div>
        </div>

        <div class="hc3">
        <div class="hc3b1">
            <div class="hc3b1p1">
                <div class="image">
                    <img src="./images/logo.png" alt="">
                </div>
                <div class="p1ctent">
                    Lorem ipsum dolor sit, amet csectetur adipisicing elit. Ex veniam impedit repellendus neque magni accusamus beatae cumque, natus nostrum molestias quia facere atque tenetur! Corrupti inventore recusandae quam mollitia illo!
                </div>
            </div>
            <div class="hc3b1p1">
                <div class="p1head">
                    About Us
                </div>
                <ul class="hc3b1p1">
                    <li class="hc3b1p1-list">Our Team</li>
                    <li class="hc3b1p1-list">Our Mission</li>
                    <li class="hc3b1p1-list">Our Vision</li>
                </ul>
            </div>
            <div class="hc3b1p1">
                <div class="p1head">
                    Contact Us
                </div>
                <ul class="hc3b1p1">
                    <li class="hc3b1p1-list">Our Team</li>
                    <li class="hc3b1p1-list">Our Mission</li>
                    <li class="hc3b1p1-list">Our Vision</li>
                </ul>
            </div>
            <div class="hc3b1p1">
                <div class="p1head">
                    Follow us on
                </div>
                <ul class="hc3b1p1">
                <a href="#" class="fa fa-instagram link-item"></a>
                <a href="#" class="fa fa-facebook link-item"></a>
                <a href="#" class="fa fa-twitter link-item"></a>
                <a href="#" class="fa fa-linkedin link-item"></a>
                </ul>
            </div>
        </div>
        <div class="hc3b1">
            <div class="fa fa-copyright hcopyright">All rights reserved</div>
        </div>
    </div>
    </body>
</html>