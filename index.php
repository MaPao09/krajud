<!DOCTYPE html>
<html>

<head>
    <title>Work</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./Style/style.css" rel="stylesheet">
    <link href="./Style/slide.css" rel="stylesheet">


</head>


<body>
    <!-- contrain -->

    <div class="constrain">
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to Learning Website</h1>
                <p>Explore the wonders of nature and expand your knowledge.</p>
                <a href="#" class="btn">Get Started</a>
            </div>
        </section>


        <!-- -------------------Navbar------------------- -->
        <?php
        include './component/navbar.php';
        ?>
        <!-- -------------------Roll picture------------------- -->

        <div class="gal">
            <br>
            <?php
            include 'roll.php';
            ?>
        </div>

        <!-- -------------------News------------------- -->


        <hr>
        <h1 class="text-center">News</h1>

        <div class="news-grid">
            <div class="Column">
                <div class="news">
                    <img src="https://via.placeholder.com/800x400" alt="เนื้อหาที่ 1">
                    <div class="vertical-line"></div>
                    <div class="news-content">
                        <h2>เนื้อหาที่ 1</h2>
                        <p>เนื้อหาที่ 1</p>
                    </div>
                </div>

                <div class="news">
                    <img src="https://via.placeholder.com/800x400" alt="เนื้อหาที่ 2">
                    <div class="vertical-line"></div>
                    <div class="news-content">
                        <h2>เนื้อหาที่ 2</h2>
                        <p>เนื้อหาที่ 2</p>
                    </div>
                </div>

                <div class="news">
                    <img src="https://via.placeholder.com/800x400" alt="เนื้อหาที่ 3">
                    <div class="vertical-line"></div>
                    <div class="news-content">
                        <h2>เนื้อหาที่ 3</h2>
                        <p>เนื้อหาที่ 3</p>
                    </div>
                </div>

                <div class="news">
                    <img src="https://via.placeholder.com/800x400" alt="เนื้อหาที่ 4">
                    <div class="vertical-line"></div>
                    <div class="news-content">
                        <h2>เนื้อหาที่ 4</h2>
                        <p>เนื้อหาที่ 4</p>
                    </div>
                </div>

                <div class="news">
                    <img src="https://via.placeholder.com/800x400" alt="เนื้อหาที่ 5">
                    <div class="vertical-line"></div>
                    <div class="news-content">
                        <h2>เนื้อหาที่ 5</h2>
                        <p>เนื้อหาที่ 5</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="pagination">
            <button id="prevButton" disabled>ก่อนหน้า</button>
            <button class="active">1</button>
            <button>2</button>
            <button id="nextButton">ถัดไป</button>
        </div>
        <script src="./javascript/News.js"></script>
        <br>




        <div class="gal">
            <?php
            include 'test.php';
            ?>

        </div>
        <br>

        <!-- -------------------Footer------------------- -->
        <?php
        include './component/footer.php';
        ?>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>