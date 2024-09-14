<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&family=Great+Vibes&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- <script
      src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"
      data-auto-a11y="true"
    ></script> -->
    <style>
        
        .lh img{
            margin-top: -50px;
            width: 500px;
            height: 350px;
            margin-top: 100px;
            margin-left: 100px;
        }
        .title{
            margin-top: -400px;
        }
        h1 {
            font-family: 'Dancing Script', cursive;
            text-align: center;
            /* margin-top: -400px; */
            margin-left: 580px;
            font-size: 50px;
        }
        
        #dc1 ul{
            margin: 0px;
            margin-left: 270px;
            font-size: 20px;
            

        }
        #dc1 ul li {
            list-style: none;
            float: left;
            padding: 0px 0px 0px 440px ;
        
        }
        #dc1 ul li a{
            text-decoration: none;
            font-family: 'Barlow Condensed', sans-serif;
            color: black;
            
        }
        #sdt1 ul{
            margin: 0px;
            margin-left: 750px;
            padding-right: 50px;
        }
        #sdt1 ul li {
            list-style: none;
            float: left;
            margin-top: 5px;
            
        }
        #sdt1 ul li a{
            text-decoration: none;
            color: black;
            font-size: 20px;
            font-family: 'Barlow Condensed', sans-serif;
        }
        /* hr {
            background: black;
            border: 0;
            height: 2px;
            margin-left: 800px;
            margin-top: 140px;
            width: 350px;
        }
         */
        #fb ul{
            margin: 0px;
            margin-left: 470px;
            margin-bottom: 60px;
        }
        #fb ul li {
            list-style: none;
            float: left;
        padding: 0px 27px 0px 290px;
        }
        #fb ul li a{
            color: blue;
            font-size: 30px;
        }
        #fb ul li a:hover{
        color: lime;
        
        }
        #twiter ul{
            margin: 0px;
            margin-bottom: 60px;
        }
        #twiter ul li {
            list-style: none;
            float: left;
        padding: 0px 40px;
        }
        #twiter ul li a{
            color: #00F5FF;
            font-size: 30px;
        }
        #twiter ul li a:hover{
        color: lime;
        }
        #gg ul{
            margin: 0px;
            margin-bottom: 60px;
        }
        #gg ul li {
            list-style: none;
            float: left;
        padding: 0px 30px;
        }
        #gg ul li a{
            color: #FF0000;
            font-size: 30px;
        }
        #gg ul li a:hover{
        color: lime;
        }
        #inst ul{
            margin: 0px;
            margin-bottom: 60px;
        }
        #inst ul li {
            list-style: none;
            float: left;
        padding: 0px 30px;
        }
        #inst ul li a{
            color: #FF00CC;
            font-size: 30px;
        }
        #inst ul li a:hover{
        color: lime;
        
        }

        h1{
        font-family: tahoma;
        }
        #ttin ul{
            margin: 0px;
            margin-left: 460px;
            margin-top: 50px;
            font-size: 20px;

        }
        #ttin ul li {
        list-style: none;
        float: left;
        padding: 20px 190px;
        margin-left: 120px;
        text-align:center;
        
        }
        #ttin ul li a{
        text-decoration: none;
        font-family: 'Barlow Condensed', sans-serif;
        color: black;   
        }
    </style>
</head>
<body>
    <div id="header">
        <?php include "./mvc/views/HG/header.php";?>
    </div>
   <div class="lh">
   <img src="/NYH/public/image/lh1.png" alt="">
   </div>
   <div class="title">
   	   <h1> LIÊN HỆ</h1>
       <p style="margin-left: 720px;font-size: 20px; font-family: 'Barlow Condensed', sans-serif;">Trực tiếp đến cửa hàng hoặc liên hệ thông qua các cổng thông tin dưới đây</p>
<!--DIA CHI -->
    <div id="dc1"> 
      <ul>
      	  <li><i class="fas fa-map-marker-alt" style="color:#8A2908; margin-right: 20px;"></i><a href="#" title="diachi">Đà Nẵng</a></li>
      </ul>
    </div>
    

<!--SO DIEN THOAI -->
    <div id="sdt1"> 
      <ul style="float:left;">
      	  <li> <i class="fas fa-phone-alt" style="margin-right:20px;"></i><a href="#" title="">18009191</a></li>
          
      </ul>
      <ul>
      <li><i class="fas fa-envelope" style="margin-right:20px;"></i><a href="#" title="Email:acc@gmail.com">nguyenvietthan123@gmail.com</a></li>
      </ul>
    </div> 
   
<!--FB-->
    <div id="fb"> 
      <ul>
      	   <li><a href="https://www.facebook.com/profile.php?id=100025214472078"><i class="fab fa-facebook"></i></a></li>
      </ul>
    </div>

<!--TWITER--> 
    <div id="twiter"> 
      <ul>
      	   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>

<!--GOOGLE--> 
    <div id="gg"> 
      <ul>
      	  <li><a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.
            google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.
            google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=ATuJsjzTcBpA-
            Mgsb38WdCaBnrT1KpBFa-u0nM5DKxodHRlTnJ4fYUnP_Sq5vGEidXRfttNnFRlcMQ&theme=mn&flowName=
            GlifWebSignIn&flowEntry=ServiceLogin"><i class="fab fa-google"></i></a></li>
      </ul>
    </div>

<!--INSTAGRAM--> 
    <div id="inst"> 
      <ul>
      	  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>    

<!--THONG TIN CHI TIET--> 
     <div id="ttin"> 
      <ul>
      	  <li><a href="#" title=" ">Nếu có bất cứ câu hỏi nào, Hãy đơn giản liên hệ với chúng tôi qua thông tin liên hệ bên trên nhân viên sẽ trả lời tới bạn sớm nhất có thể...  </a>
             <p>TRÂN TRỌNG CẢM ƠN</p>
          </li>
           
      </ul>
      
    </div>
</div>

<div id="footer">
    <?php include "./mvc/views/HG/footer.php";?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>

