<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script> src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet"> 
</head>
<style>
    .gt{
       margin-top: 50px;
       margin-left: 50px;
    }
    .gt h1{
        font-size: 20px;
    }
    .gt h2{
        font-size: 15px;
    }
    .content .row{
        margin-top: 20px;
        margin-left: 100px;
    }
    /* .content .row .col-5{
        background: blueviolet;
        
    } */
    .content .row .col-5 img{
        width: 300px;
        height: 400px;
        float: left;
        padding-right: 20px;
    }
    .row .col-5 .haianh img{
        width: 190px;
        height: 150px;
        margin-top: 20px;
        margin-bottom: 20px;  
    }
    .haianh img{
        width: 200px;
        height: 150px;
         
    }
    .content .row .col-6{
        margin-left: 20px;
        /* font-family: 'Odibee Sans', cursive;     */
    }
    
    .container {
        margin-top: 50px;
        width: 950px;
        /* height: 500px; */
    }

    .card {
        border: 2px solid blue;
        border-radius: 50px;
        box-shadow: 8px -5px 5px #3A01DF;
    }

    @media(max-width:767px) {
        .card {
            margin: 1rem 0.7rem 1rem;
            max-width: 80vw;
        }
    }

    .card-image img {
        width: 8rem;
        border-radius: 4rem;
        margin: 1.3rem auto 1rem auto;
        width: 300px;
        height: 200px;
    }

    .row .col-md-4 {
        width: 400px;
        height: 600px;
        padding: 0 0.5rem;
    }
    .card-image{
    display: block;
    /* max-width:100%;
    max-height:100%; */
    
    }

    .card-title {
        font-size: 22px;
        margin-bottom: 0;
        font-weight: bold;
        font-family: 'IM Fell French Canon SC';
    }

    .card-text {
        text-align: center;
        padding: 1rem 2rem;
        font-size: 18px;
        color: rgb(82, 81, 81);
        line-height: 1.4rem;
    }
    
    p{
        font-size: 15px;
        
    }
    

    .dm {
        border-top: none;
        text-align: center;
        line-height: 1.2rem;
        padding: 2rem 0 1.4rem 0;
        font-family: 'Varela Round';
        color: blue;
    }

    #name {
        font-size: 1rem;
        font-weight: bold;
    }

    #position {
        font-size: 0.7rem;
    }

    
</style>
<body>
    <div id="header">
            <?php include "./mvc/views/HG/header.php";?>
    </div>
    <div class="gt">
        <h1><strong>GIỚI THIỆU THAN STORE</strong></h1>
        <h2>THÔNG TIN GIỚI THIỆU VỀ CỬA HÀNG THAN STORE</h2>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-5">
                <img src="/NYH/public/image/hinhbia/002.jpg" alt="">
                <div class="haianh">
                    <img src="/NYH/public/image/hinhbia/000.jpg" alt="">
                    <img src="/NYH/public/image/hinhbia/001.jpg" alt="">
                </div>
            </div>
            <div class="col-6 textgt">
            <p>Mặt hàng kinh doanh: máy tính bao gồm các thương hiệu như DELL, ASUS, LENOVO, MACBOOK , HP,...
                <br>ASUS là thương hiệu laptop nổi tiếng và được nhiều người tin dùng nhờ thiết kế tinh tế, sang trọng đi kèm nhiều tính nâng cao cấp và hiệu năng hoạt động cao.</br>
                <br>DELL Là một trong những thương hiệu nổi tiếng trên thị trường laptop, Dell luôn làm hài lòng người dùng khi liên tục cho ra mắt các dòng máy tính có độ bền cao cùng nhiều tính năng vượt trội.</br>
                <br>LENOVO đa dạng mẫu mã, thiết kế đẹp, độ bền cao, có hiệu năng ổn định mạnh mẽ, máy sử dụng bền bỉ, lâu chai pin, nhiều phần mềm tích hợp và giá khá rẻ so với mặt bằng chung.</br>
                <br>MACBOOK máy thiết kế đẹp, gọn nhẹ, thời lượng pin ổn định, cấu hình máy từ khá đến mạnh, dễ dàng kết nối với các thiết bị Apple khác, bảo mật tốt, bảo hành tốt.</br>
                <br>HP giá thành vừa phải, có nhiều phân khúc cho người dùng lựa chọn, sản phẩm đa dạng, phù hợp với nhu cầu của những đối tượng người dùng riêng biệt, độ bền tốt, chất lượng máy ổn định, thiết kế những dóng máy mới rất ấn tượng và sáng tạo.</br>
                <br>THAN STORE là một cửa hàng quy mô nhỏ chuyên bán các loại máy tính, nhưng lại cung cấp đầy đủ, đa dạng các loại sản phẩm. Ưu thế lơn nhất của cửa hàng là phục vụ khách hàng 24/24, đây được xem là điểm cộng có thể đáp ứng được nhu cầu khách hàng.</br>
                <br>THAN STORE cam kết bán hàng chính hãng, sản phẩm vô cùng phong phú, đa dang
            </p>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card d-flex mx-auto">
                <div class="card-image"> <img class="img-fluid d-flex mx-auto" src="/NYH/public/image/anhlaptop/gioithieu2.jpeg"> </div>
                <div class="card-text">
                    <div class="card-title">Sự ra đời</div>
                        <p>Nhằm mang lại những sản phẩm chất lượng</p>
                        <p>Khởi đầu các bước tiến về công nghệ</p>
                        <p>Giá trị và sự cần thiết trong thời đại 4.0</p>
                </div>
                <div class="dm"> <span id="name">THAN STORE<br></span> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card d-flex mx-auto">
                <div class="card-image"> <img class="img-fluid d-flex mx-auto" src="/NYH/public/image/anhlaptop/gioithieu3.jpeg"> </div>
                <div class="card-text">
                    <div class="card-title">Lợi ích</div>
                         <p>Tốc độ, độ chính xác cao</p>
                         <p>Dung lượng lưu trữ lớn</p>
                         <p>Tiết kiệm chi phí</p>
                         <p>Tính đa năng</p>
                </div>
                <div class="dm"> <span id="name">THAN STORE<br></span> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card d-flex mx-auto ">
                <div class="card-image"> <img class="img-fluid d-flex mx-auto" src="/NYH/public/image/anhlaptop/gioithieu4.jpeg"> </div>
                <div class="card-text">
                    <div class="card-title">THAN STORE</div> 
                        <p>Giao diện thân thiện, dễ sử dụng</p>
                        <p>Website thông minh</p>
                        <p>An toàn, bảo mật</p>
                </div>
                <div class="dm"> <span id="name">THAN STORE<br></span> </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
        <?php include "./mvc/views/HG/footer.php";?>
</div>
</body>

</html>