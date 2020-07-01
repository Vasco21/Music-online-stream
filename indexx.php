<?php include('server.php');

//if user not login , they can not access this page
if  (empty($_SESSION['username'])){
	header('location: login.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <!---Aplayer css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>

    <title>Online Music store</title>
    <style>
        body{
            background-color: #f7f7f7;
            font-family: Open sans;
        }
        img{
            width: 100%;
            min-height: 250px;
        }
        .main{
            padding: 40px 0;
        }
        
        .col-md-3{
            margin-bottom: 40px;
        }
        .album-poster
        {
            position: relative;
            display: block;
            border-radius: 7px;
            overflow: hidden;
            box-shadow: 0 15px 35px #3d2173a1;
            transition: all ease 0.4s;
        }
        .album-poster:hover
        {
            box-shadow: none;
            transform: scale(0.98)translateY(5px);
        }
        h3{
            font-size: 34px;
            margin-bottom: 34px;
            border-bottom: 4px solid #e6e6e6;
            padding-bottom: 15px;
        }
        p{
            font-size: 15px;
        }
        h4{
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 15px;
            font-weight: 700;
        }
        /*--defult is hide music player--*/
     #aplayer{
            position: fixed;
            bottom: -100%;
            left: 0;
            width: 100%;
            margin: 0;
            box-shadow: 0 -2px 2px #dadada;
            background-color: #fff;
            transition: all ease0.5s;
        }
        #aplayer.showPlayer{
            bottom: 0;

        }

        
        /*--Music player customizing style --*/
         span{ 
            color: #000;
            font-size: 16px;
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-loaded{
            background: #e0e0e0;
            height: 4px;
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played{
            height: 4px;
            background-color: #2196F3 !important;
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-bar-wrap .aplayer-bar .aplayer-played
         .aplayer-thumb{
             background-color: #2196F3 !important;
        }
        .aplayer .aplayer-icon{
            width: 20px;
            height: 20px;
        }
        .aplayer .aplayer-info .aplayer-controller .aplayer-time .aplayer-icon path{
            fill:#000
        }
        .aplayer .aplayer-info .aplayer-music{
            margin-bottom: 5px;
        }
        h1{
            text-align: center;
        }

    </style>
  </head>
  <body>
    <h1>Music online Store</h1>



<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>New Releaseess</h3>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster">
                    <img src="https://m.media-amazon.com/images/I/51A9BivEjFL._AA256_.jpg" alt="">
                </a>
                <h4>Norall Jones  $12</h4>
                <p>Noral Jones 2020</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster">
                    <img src="https://m.media-amazon.com/images/I/51A9BivEjFL._AA256_.jpg" alt="">
                </a>
                <h4>Norall Jones  $12</h4>
                <p>Noral Jones 2020</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster" data-switch="1">
                    <img src="https://i0.wp.com/qualitymixtape.com/wp-content/uploads/2020/03/QUALITYMIXTAPE.COM-1-4.jpg?resize=500%2C330&ssl=1" alt="">
                </a>
                <h4>King Monada   $10</h4>
                <p>King Monada  2020</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster" data-switch="2">
                    <img src="https://assets.audiomack.com/lebstar-motshwane/mozonkonko-amapiano-275-275-1545172397.jpg" alt="">
                </a>
                <h4>Lebster  $15</h4>
                <p>Lebster  2020</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster" data-switch="3">
                    <img src="https://www.bamoza.com/wp-content/uploads/2020/04/dj-sbu-%E2%80%93-mpambane-ft-gesh-bongane-sax-mapiano-papa-drumpope.jpg" alt="">
                </a>
                <h4>DJ Sbu $15</h4>
                <p>DJ Sbu  2020</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster" data-switch="4">
                    <img src="https://c.saavncdn.com/473/Afro-Mapiano-English-2019-20191124000847-500x500.jpg" alt="">
                </a>
                <h4>LUNA $15</h4>
                <p>LUNA  2020</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:void();" class="album-poster" data-switch="5">
                    <img src="https://pbs.twimg.com/profile_images/378800000562497260/59c7d7348ef3078e567cdd277eac0e12.jpeg" alt="">
                </a>
                <h4>Uhuru  $15</h4>
                <p>uhuru 2020</p>
            </div>
        </div>
        
    </div>
</div> 
<div class="main">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h3>Coming Soon</h3>
        </div>            
        <div class="col-md-2">
            <a href="#" class="album-poster">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRABrwpJNorscH4EfsYnlzG7Rgu1Hbdz7ZYNQ&usqp=CAU" alt="">
            </a>
            <h4>Amapiano</h4>
        </div>
        <div class="col-md-2">
                <img src="https://i.pinimg.com/564x/ee/10/11/ee10112a724bb8e11f73d8d1c3eed77f.jpg" alt="">
            </a>
            <h4>Tatiana manaois</h4>
        </div>
        <div class="col-md-2">
            <a href="#" class="album-poster">
                <img src="https://blog.xritephoto.com/wp-content/uploads/2017/12/Malike_Sidibe-2-1-768x1024.jpg" alt="">
            </a>
            <h4>Malike</h4>
        </div>
        <div class="col-md-2">
            <a href="#" class="album-poster">
                <img src="https://s3.amazonaws.com/broadtime_photo/418461111667" alt="">
            </a>
            <h4>Dj Regal</h4>
        </div>
        <div class="col-md-2">
            <a href="#" class="album-poster">
                <img src="https://i.pinimg.com/originals/3d/fe/1f/3dfe1ffb830e5c44586a2afd3bf67ded.jpg" alt="">
            </a>
            <h4>Osikdo</h4>
        </div>
        <div class="col-md-2">
            <a href="#" class="album-poster">
                <img src="https://static.qobuz.com/images/covers/na/n2/cf0jtgzrun2na_600.jpg" alt="">
            </a>
            <h4>DJ R-voonah</h4>
        </div>
        </div>
    </div>
    </div>
    
    <div id="aplayer"></div>
  
    <!-- jQuery link -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!---bootstrap link-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!---Aplayer Jquey link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>


    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class = "error success">
                <h3>
                    <?php  
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>

            </div>
        
        <?php endif ?>

         <?php if (isset($_SESSION["username"])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="indexx.php?logout='1" style="color: blue; text-align: right">Logout</a></p>
	<?php endif ?>

    </div>


    <script>

        //Now i Click album-poter to get current song ID
   $(".album-poster").on('click', function(e){
        var dataSwitchId = $(this).attr('data-switch');
       // console.log(dataSwitchId);

        //and now i use aplyer switch function see
        ap.list.switch(1);//this is static id but i use dynamic

        //aplayer play function
        // when you click song to play
        ap.play();

        //click to slideup player see
        $("#aplayer").addClass('showPlayer');

    });    

    const ap = new APlayer({
        container: document.getElementById('aplayer'),
        listFolded: true,
        audio: [
    {
        name: 'Ex-Ya-Drama',// song name
        artist: 'Artist Name',// artist name
        url: 'source/Ex-Ya-Drama.mp3',// path name and song
        cover: 'https://i0.wp.com/qualitymixtape.com/wp-content/uploads/2020/03/QUALITYMIXTAPE.COM-1-4.jpg?resize=500%2C330&ssl=1'// cover
    },
    {
        name: 'Helplessly',
        artist: 'Artist Name',
        url: 'source/Helplessly.mp3',
        cover: 'https://i.pinimg.com/564x/ee/10/11/ee10112a724bb8e11f73d8d1c3eed77f.jpg'
    },

    {
        name: 'phuma',
        artist: 'Artist Name',
        url: 'source/phuma.mp3',
        cover: 'https://assets.audiomack.com/lebstar-motshwane/mozonkonko-amapiano-275-275-1545172397.jpg'
    },
    
    {
        name: 'baby',
        artist: 'Artist Name',
        url: 'source/baby.mp3',
        cover: 'https://c.saavncdn.com/473/Afro-Mapiano-English-2019-20191124000847-500x500.jpg'
    },
    
    {
        name: 'ewe',
        artist: 'Artist Name',
        url: 'source/ewe.mp3',
        cover: 'https://www.bamoza.com/wp-content/uploads/2020/04/dj-sbu-%E2%80%93-mpambane-ft-gesh-bongane-sax-mapiano-papa-drumpope.jpg'
    },

    ]
});



    </script>


  </body>
</html>
