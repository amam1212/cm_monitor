<html lang="en" class="gr__183_90_168_61"><head><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
    </style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
    </style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
    </style>
    <meta http-equiv="refresh" content="600">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Smarttaxi Monitor</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnfHDJzK9T62CHuSWuHdaikmL1werGrXk"></script> -->
    <style>
        #map {
            height: 100%;
            width: 100%;
        }
    </style>
    <style type="text/css">/* Chart.js */
        @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/map.js"></script><style type="text/css">.gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/onion.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/controls.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/marker.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/infowindow.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/31/8a/intl/th_ALL/stats.js"></script></head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" data-gr-c-s-loaded="true">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">ศูนย์ควบคุมระบบการเดินรถแบบอัจฉริยะแห่งจังหวัดเชียงใหม่</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="สัญญาณหาย">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">รถโดยสารประจำทาง</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="ถอดแบต">
                <a class="nav-link" href="/cm_monitor/CM_CAR/API/report.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">รายงาน</span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>

            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">รถโดยสารประจำทาง</li>

        </ol>
        <div class="btn-group">
            <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="btnStaion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                เลือกสถานี
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a class="dropdown-item" href="#" id="stationB1">B1</a></li>
                <li><a class="dropdown-item" href="#" id="stationB2">B2</a></li>
                <li><a class="dropdown-item" href="#" id="stationClear">Clear Station</a></li>
            </ul>
        </div>


        <div class="btn-group">
            <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="btnCar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                เลือกรถ
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a class="dropdown-item" href="#" id="bus">รถบัส</a></li>
                <li><a class="dropdown-item" href="#" id="redcar">รถแดง</a></li>
                <li><a class="dropdown-item" href="#" id="tuktuk">รถตุ๊กตุ๊ก</a></li>
                <li><a class="dropdown-item" href="#" id="allcar">รถทั้งหมด</a></li>
            </ul>
        </div>
        <div class="card-body">
            <!-- AIzaSyAnfHDJzK9T62CHuSWuHdaikmL1werGrXk -->
            <!-- <iframe width="1150" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAnfHDJzK9T62CHuSWuHdaikmL1werGrXk&q=13.829103,100.551702" allowfullscreen>
  </iframe> -->
            <div class="embed-responsive embed-responsive-16by9">
                <div id="map" class="embed-responsive-item" style="overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: -6px; top: -82px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 250px; top: -82px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 250px; top: 174px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -6px; top: 174px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 506px; top: -82px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 506px; top: 174px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -6px; top: -82px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 250px; top: -82px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 250px; top: 174px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -6px; top: 174px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 506px; top: -82px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 506px; top: 174px;"></div></div></div><div style="width: 20px; height: 24px; position: absolute; left: 1285px; top: -205px; z-index: -202;"><canvas width="22" height="26" draggable="false" style="width: 20px; height: 24px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 29px; height: 26px; position: absolute; left: 166px; top: 196px; z-index: 206;"><canvas width="31" height="28" draggable="false" style="width: 29px; height: 26px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 24px; height: 20px; position: absolute; left: 677px; top: 135px; z-index: 145;"><canvas width="26" height="22" draggable="false" style="width: 24px; height: 20px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 29px; height: 30px; position: absolute; left: 1271px; top: -203px; z-index: -195;"><canvas width="31" height="33" draggable="false" style="width: 29px; height: 30px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 20px; height: 24px; position: absolute; left: 775px; top: 161px; z-index: 182;"><canvas width="22" height="26" draggable="false" style="width: 20px; height: 24px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 26px; height: 23px; position: absolute; left: 821px; top: -338px; z-index: -325;"><canvas width="28" height="25" draggable="false" style="width: 26px; height: 23px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 30px; height: 30px; position: absolute; left: 1077px; top: 173px; z-index: 194;"><canvas width="33" height="33" draggable="false" style="width: 30px; height: 30px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 30px; height: 30px; position: absolute; left: 624px; top: 587px; z-index: 595;"><canvas width="33" height="33" draggable="false" style="width: 30px; height: 30px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 30px; height: 28px; position: absolute; left: 503px; top: -282px; z-index: -264;"><canvas width="33" height="30" draggable="false" style="width: 30px; height: 28px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 24px; height: 26px; position: absolute; left: 1121px; top: 394px; z-index: 398;"><canvas width="26" height="28" draggable="false" style="width: 24px; height: 26px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 30px; height: 29px; position: absolute; left: 465px; top: 226px; z-index: 246;"><canvas width="33" height="31" draggable="false" style="width: 30px; height: 29px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div><div style="width: 24px; height: 21px; position: absolute; left: 939px; top: 430px; z-index: 440;"><canvas width="26" height="23" draggable="false" style="width: 24px; height: 21px; position: absolute; left: 0px; top: 0px; user-select: none;"></canvas></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: -6px; top: -82px; transition: opacity 200ms ease-out;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i25391!3i14641!4i256!2m3!1e0!2sm!3i409107666!3m9!2sth-TH!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=50636" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 250px; top: -82px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i25392!3i14641!4i256!2m3!1e0!2sm!3i409107666!3m9!2sth-TH!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=112598" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 250px; top: 174px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i25392!3i14642!4i256!2m3!1e0!2sm!3i409107666!3m9!2sth-TH!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=72877" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -6px; top: 174px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i25391!3i14642!4i256!2m3!1e0!2sm!3i409107666!3m9!2sth-TH!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=10915" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 506px; top: -82px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i25393!3i14641!4i256!2m3!1e0!2sm!3i409107713!3m9!2sth-TH!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=36543" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 506px; top: 174px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i25393!3i14642!4i256!2m3!1e0!2sm!3i409107713!3m9!2sth-TH!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=127893" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.2s;"><p class="gm-style-pbt">กด Ctrl ค้างไว้ แล้วเลื่อนหน้าจอเพื่อซูมแผนที่</p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div class="gmnoprint" title="10-6808" style="width: 20px; height: 24px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 1285px; top: -205px; z-index: -202;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 20px; height: 24px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-6806" style="width: 29px; height: 26px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 166px; top: 196px; z-index: 206;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 29px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-6734" style="width: 24px; height: 20px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 677px; top: 135px; z-index: 145;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 24px; height: 20px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-6809" style="width: 29px; height: 30px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 1271px; top: -203px; z-index: -195;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 29px; height: 30px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-6735" style="width: 20px; height: 24px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 775px; top: 161px; z-index: 182;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 20px; height: 24px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-7045" style="width: 26px; height: 23px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 821px; top: -338px; z-index: -325;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 26px; height: 23px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="ก-3209" style="width: 30px; height: 30px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 1077px; top: 173px; z-index: 194;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 30px; height: 30px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-6328" style="width: 30px; height: 30px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 624px; top: 587px; z-index: 595;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 30px; height: 30px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-6928" style="width: 30px; height: 28px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 503px; top: -282px; z-index: -264;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 30px; height: 28px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-6525" style="width: 24px; height: 26px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 1121px; top: 394px; z-index: 398;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 24px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="30-4297" style="width: 30px; height: 29px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 465px; top: 226px; z-index: 246;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 30px; height: 29px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gmnoprint" title="10-4992" style="width: 24px; height: 21px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 939px; top: 430px; z-index: 440;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 24px; height: 21px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=18.792565,98.96618&amp;z=15&amp;t=m&amp;hl=th-TH&amp;gl=US&amp;mapclient=apiv3" title="คลิกเพื่อดูพื้นที่นี้ใน Google Maps " style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 132px; top: 68px;"><div style="padding: 0px 0px 10px; font-size: 16px;">ข้อมูลแผนที่</div><div style="font-size: 13px;">ข้อมูลแผนที่ ©2018 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 241px; bottom: 0px; width: 128px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">ข้อมูลแผนที่</a><span style="">ข้อมูลแผนที่ ©2018 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">ข้อมูลแผนที่ ©2018 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 135px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/th-TH_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">ข้อกำหนดในการใช้งาน</a></div></div><button draggable="false" title="สลับเป็นมุมมองแบบเต็มหน้าจอ" aria-label="สลับเป็นมุมมองแบบเต็มหน้าจอ" type="button" style="background: none; border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="รายงานข้อผิดพลาดในแผนที่ถนนหรือภาพถ่ายไปยัง Google" href="https://www.google.com/maps/@18.7925649,98.9661799,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">รายงานข้อผิดพลาดของแผนที่</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button draggable="false" title="ขยาย" aria-label="ขยาย" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="ย่อ" aria-label="ย่อ" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="การควบคุมเพ็กแมนสำหรับ Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="เพ็กแมนอยู่ด้านบนสุดของแผนที่" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="การควบคุมเพ็กแมนสำหรับ Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="หมุนแผนที่ 90 องศา" style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4_hdpi.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4_hdpi.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="แสดงแผนที่ถนน" aria-label="แสดงแผนที่ถนน" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 28px; font-weight: 500;">แผนที่</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 30px; text-align: left; display: none;"><div draggable="false" title="แสดงแผนที่ถนนพร้อมภูมิประเทศ" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">ภูมิประเทศ</label></div></div></div><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="แสดงภาพจากดาวเทียม" aria-label="แสดงภาพจากดาวเทียม" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 42px; border-left: 0px;">ดาวเทียม</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 30px; text-align: left; display: none;"><div draggable="false" title="แสดงภาพพร้อมชื่อถนน" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">ป้ายกำกับ</label></div></div></div></div></div></div></div>
            </div>
        </div>
    </div>
</div>
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © iMax Rider 2017          Demo : V 1.0</small>
        </div>
    </div>
</footer>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">ยืนยันการออกจากระบบ</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<script>
    var map;
    var info;
    var markers = [];
    var carMark = [];
    var sB1 = 'image/icon_station/b1_beenhere.png';
    var sB2 = 'image/icon_station/b2_beenhere.png';
    var changeStation = document.getElementById("btnStaion");
    var changeCar = document.getElementById("btnCar");
    function initMap() {

        var location = {
            lat: 18.795635,
            lng: 98.952683
        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: location
        });

        $.getJSON("CM_CAR/API", function(jsonBus1) {

            $.each(jsonBus1, function(i, carB1) {
                if(carB1.Type == "รถบัส") {
                    var color = "#0d0c55";
                }
                if(carB1.Type == "รถแดง") {
                    var color = "#550307";
                }
                if(carB1.Type == "รถตุ๊กตุ๊ก") {
                    var color = "#055500";
                }
                var markBusB1 = new google.maps.Marker({
                    position: new google.maps.LatLng(carB1.LaGoogle, carB1.LongGoogle),
                    map: map,
                    title: carB1.Registerid,
                    icon: {
                        path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                        strokeColor: color,
                        scale: 4,
                        rotation: parseFloat(carB1.Direction)
                    }
                });
                carMark.push(markBusB1);
                info = new google.maps.InfoWindow();
                google.maps.event.addListener(markBusB1, 'click', (function(markBusB1, i) {
                    return function() {
                        info.setContent('<div id="content"><h5>'+carB1.Registerid+'</h5></div><br>'+carB1.Type);
                        info.open(map, markBusB1);
                    }
                })(markBusB1, i));
            });
        });

    }
    $('#bus').click(function() {
        clearMarkers();
        markers = [];
        getCar("รถบัส");
        changeCar.innerHTML = "เลือก รถบัส";
    });
    $('#redcar').click(function() {
        clearMarkers();
        markers = [];
        getCar("รถแดง");
        changeCar.innerHTML = "เลือก รถแดง";
    });
    $('#tuktuk').click(function() {
        clearMarkers();
        markers = [];
        getCar("รถตุ๊กตุ๊ก");
        changeCar.innerHTML = "เลือก รถตุ๊กตุ๊ก";
    });
    $('#allcar').click(function() {
        clearMarkers();
        markers = [];
        getCar(null);
        changeCar.innerHTML = "เลือก ทั้งหมด";
    });
    $('#stationB1').click(function() {
        clearMarkers();
        markers = [];
        addB1();
    });
    $('#stationB2').click(function() {
        clearMarkers();
        markers = [];
        addB2();
    });
    $('#stationClear').click(function() {
        clearMarkers();
        markers = [];
    });
    // google.maps.event.addDomListener(window, 'load', initMap);

    function addB1() {

        changeStation.innerHTML = "เลือกสถานี B1";
        $.getJSON("json_station/cm_stations_b1.json", function(jsonCM1) {
            $.each(jsonCM1, function(i, station1) {
                var marker1 = new google.maps.Marker({
                    position: new google.maps.LatLng(station1.lat, station1.lng),
                    map: map,
                    title: station1.station_name,
                    icon: sB1
                });
                markers.push(marker1);
                info = new google.maps.InfoWindow();
                google.maps.event.addListener(marker1, 'click', (function(marker1, i) {
                    return function() {
                        info.setContent(station1.station_name);
                        info.open(map, marker1);
                    }
                })(marker1, i));

            });
        });

    }

    function addB2() {
        changeStation.innerHTML = "เลือกสถานี B2";
        $.getJSON("json_station/cm_stations_b2.json", function(jsonCM2) {
            $.each(jsonCM2, function(i, station2) {
                var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(station2.lat, station2.lng),
                    map: map,
                    title: station2.station_name,
                    icon: sB2
                });
                markers.push(marker2);
                info = new google.maps.InfoWindow();
                google.maps.event.addListener(marker2, 'click', (function(marker2, i) {
                    return function() {
                        info.setContent(station2.station_name);
                        info.open(map, marker2);
                    }
                })(marker2, i));
            });
        });
    }

    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    function setMapOnCar(map) {
        for (var i = 0; i < carMark.length; i++) {
            carMark[i].setMap(map);
        }
    }

    function clearMarkers() {
        setMapOnAll(null);
    }

    function clearMarkCar() {
        setMapOnCar(null);
    }


    var Interval;
    var IntervalBegin = setInterval(function () {
        getCarlocation();
    }, 5000);

    function getCar(type) {
        clearInterval(IntervalBegin);
        clearMarkCar();
        if(Interval == null) {
            getCarlocation(type);
            clearInterval(Interval);
            Interval = setInterval(function () {
                getCarlocation(type);
            }, 5000);
        }
        else{
            clearInterval(Interval);
            getCarlocation(type);
            Interval = setInterval(function () {
                getCarlocation(type);
            }, 5000);
        }

    }



    function getCarlocation(type) {


        $.getJSON("CM_CAR/API", function(jsonBus1) {
            clearMarkCar();
            carMark = [];
            $.each(jsonBus1, function(i, carB1) {
                if(type == "รถบัส") {
                    var color = "#0d0c55";
                }
                if(type == "รถแดง") {
                    var color = "#550307";
                }
                if(type == "รถตุ๊กตุ๊ก") {
                    var color = "#055500";
                }
                if(carB1.Type == type) {
                    var markBusB1 = new google.maps.Marker({
                        position: new google.maps.LatLng(carB1.LaGoogle, carB1.LongGoogle),
                        map: map,
                        title: carB1.Registerid,
                        icon: {
                            path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                            strokeColor: color,
                            scale: 4,
                            rotation: parseFloat(carB1.Direction)
                        }
                    });
                    carMark.push(markBusB1);
                    info = new google.maps.InfoWindow();
                    google.maps.event.addListener(markBusB1, 'click', (function (markBusB1, i) {
                        return function () {
                            info.setContent('<div id="content"><h5>' + carB1.Registerid + '</h5></div><br>' + carB1.Type);
                            info.open(map, markBusB1);
                        }
                    })(markBusB1, i));
                }
                if(type ==null) {
                    if(carB1.Type == "รถบัส") {
                        var color = "#0d0c55";
                    }
                    if(carB1.Type == "รถแดง") {
                        var color = "#550307";
                    }
                    if(carB1.Type == "รถตุ๊กตุ๊ก") {
                        var color = "#055500";
                    }
                    var markBusB1 = new google.maps.Marker({
                        position: new google.maps.LatLng(carB1.LaGoogle, carB1.LongGoogle),
                        map: map,
                        title: carB1.Registerid,
                        icon: {
                            path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                            strokeColor: color,
                            scale: 4,
                            rotation: parseFloat(carB1.Direction)
                        }
                    });
                    carMark.push(markBusB1);
                    info = new google.maps.InfoWindow();
                    google.maps.event.addListener(markBusB1, 'click', (function (markBusB1, i) {
                        return function () {
                            info.setContent('<div id="content"><h5>' + carB1.Registerid + '</h5></div><br>' + carB1.Type);
                            info.open(map, markBusB1);
                        }
                    })(markBusB1, i));
                }
            });
        });
    }
    // setInterval(getCarlocation, 10000);


</script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzQ873hhqF25lUgjeJlQ8YnHnSDKeuUC8&amp;callback=initMap"></script>



</body></html>