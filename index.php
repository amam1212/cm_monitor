<html>
<head>
    <meta http-equiv="refresh" content="600">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CM Monitor</title>
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

<body class="fixed-nav sticky-footer bg-dark" id="page-top" data-gr-c-s-loaded="true">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">ศูนย์ควบคุมระบบการเดินรถแบบอัจฉริยะแห่งจังหวัดเชียงใหม่</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
            <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="btnStaion" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                เลือกสถานี
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a class="dropdown-item" href="#" id="stationB1">B1</a></li>
                <li><a class="dropdown-item" href="#" id="stationB2">B2</a></li>
                <li><a class="dropdown-item" href="#" id="stationClear">Clear Station</a></li>
            </ul>
        </div>


        <div class="btn-group">
            <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="btnCar" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
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
            <div class="embed-responsive embed-responsive-16by9">
                <div id="map" class="embed-responsive-item" style="overflow: hidden;">
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © CM-Monitor 2017</small>
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
    var car = "M17.402,0H5.643C2.526,0,0,3.467,0,6.584v34.804c0,3.116,2.526,5.644,5.643,5.644h11.759c3.116,0," +
        "5.644-2.527,5.644-5.644 V6.584C23.044,3.467,20.518,0,17.402,0z M22.057,14.188v11.665l-2.729," +
        "0.351v-4.806L22.057,14.188z M20.625,10.773 c-1.016,3.9-2.219,8.51-2.219,8.51H4.638l-2.222-8.51C2.417," +
        "10.773,11.3,7.755,20.625,10.773z M3.748,21.713v4.492l-2.73-0.349 V14.502L3.748,21.713z M1.018," +
        "37.938V27.579l2.73,0.343v8.196L1.018,37.938z M2.575,40.882l2.218-3.336h13.771l2.219,3.336H2.575z M19.328," +
        "35.805v-7.872l2.729-0.355v10.048L19.328,35.805z";

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
                    var color = "#bb110a";
                }
                if(carB1.Type == "รถตุ๊กตุ๊ก") {
                    var color = "#055500";
                }
                if(carB1.Type == "รถตู้") {
                    var color = "#FF69B4";
                }

                var markBusB1 = new google.maps.Marker({
                    position: new google.maps.LatLng(carB1.LaGoogle, carB1.LongGoogle),
                    map: map,
                    title: carB1.Registerid,
                    icon: {
                        path: car,
                        scale: .7,
                        strokeColor: 'white',
                        strokeWeight: .01,
                        fillOpacity: 1,
                        fillColor: color,
                        offset: '5%',
                        rotation: parseFloat(carB1.Direction - 90),
                        anchor: new google.maps.Point(10, 25)
                    }
                });


                carMark.push(markBusB1);
                info = new google.maps.InfoWindow();

                google.maps.event.addListener(markBusB1, 'click', (function(markBusB1, i) {
                    return function() {
                        getInfo(carB1);
                        info.open(map, markBusB1);
                    }
                })(markBusB1, i));
            });
        });
    }

    function getInfo(carB1) {
        if(carB1.StatusLogInOut == 'I'){
            carB1.StatusLogInOut = 'Login';
        }
        else{
            carB1.StatusLogInOut = 'Logout';
        }

        if(carB1.CM_Engine == 1){
            carB1.CM_Engine = 'ปกติ';
        }
        else{
            carB1.CM_Engine = 'ดับเครื่องยนต์';
        }

        if(carB1.CM_Battery == 1){
            carB1.CM_Battery = 'ปกติ';
        }
        else{
            carB1.CM_Battery = 'ไม่ปกติ';
        }

        if(carB1.SignalFall == 0){
            carB1.SignalFall = 'สัญญาณปกติ ข้อมูลถูกต้อง';
        }
        else if(carB1.SignalFall == 1){
            carB1.SignalFall = 'สัญญาณขาดหาย';
        }

        else if(carB1.SignalFall == 2){
            carB1.SignalFall = 'ตำแหน่งคลาดเคลื่อน';
        }
        else if(carB1.SignalFall == 3){
            carB1.SignalFall = 'เฝ้าระวัง';
        }
        else if(carB1.SignalFall == 'F'){
            carB1.SignalFall = 'สัญญาณขาดหายเกิน 12 ชั่วโมง';
        }

        info.setContent('' +
            '<div id="content">' +
            '<h2 style="color: blue">' + carB1.Registerid + '</h2>' +
            '</div> <hr> ข้อมูลล่าสุด:' + carB1.Date +'<=>' + carB1.Time +'<br>' +
            'ข้อมูลผู้ขับ: '+ carB1.DriverName + ' สถานะ: '+ carB1.StatusLogInOut + '<br> <hr>'+
            'เครื่องยนต์: '+ carB1.CM_Engine + '<br>'+
            'แบตเตอร์รี่: '+ carB1.CM_Battery + '<br>'+
            'น้ำมัน: '+ carB1.Fuel + '<br>'+
            'อุณหภูมิ: '+ '' + '<br>'+
            'เซ็นเซอร์ฝุ่นละออง: '+ carB1.SensorPM + '<br> <hr>'+
            'GSM: '+ '' + '<br>'+
            'GPS: '+ '' + '<br>'+
            'สถานะ: '+ carB1.SignalFall + '<br> <hr>'+
            'ตำแหน่ง: '+ '' + '<br>'+
            'พิกัด: ('+ carB1.LaGoogle +','+ carB1.LongGoogle +')<br> <hr>'+ carB1.Type);
    };

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
                    var color = "#bb110a";
                }
                if(type == "รถตุ๊กตุ๊ก") {
                    var color = "#055500";
                }
                if(type == "รถตู้") {
                    var color = "#FF69B4";
                }

                if(carB1.Type == type) {
                    var markBusB1 = new google.maps.Marker({
                        position: new google.maps.LatLng(carB1.LaGoogle, carB1.LongGoogle),
                        map: map,
                        title: carB1.Registerid,
                        icon: {
                            path: car,
                            scale: .7,
                            strokeColor: 'white',
                            strokeWeight: .01,
                            fillOpacity: 1,
                            fillColor: color,
                            offset: '5%',
                            rotation: parseFloat(carB1.Direction - 90),
                            anchor: new google.maps.Point(10, 25)
                        }
                    });
                    carMark.push(markBusB1);
                    info = new google.maps.InfoWindow();
                    google.maps.event.addListener(markBusB1, 'click', (function (markBusB1, i) {
                        return function () {
                            getInfo(carB1);
                            info.open(map, markBusB1);
                        }
                    })(markBusB1, i));
                }

                if(type == null) {
                    if(carB1.Type == "รถบัส") {
                        var color = "#0d0c55";
                    }
                    if(carB1.Type == "รถแดง") {
                        var color = "#bb110a";
                    }
                    if(carB1.Type == "รถตุ๊กตุ๊ก") {
                        var color = "#055500";
                    }

                    var markBusB1 = new google.maps.Marker({
                        position: new google.maps.LatLng(carB1.LaGoogle, carB1.LongGoogle),
                        map: map,
                        title: carB1.Registerid,
                        icon: {
                            path: car,
                            scale: .7,
                            strokeColor: 'white',
                            strokeWeight: .01,
                            fillOpacity: 1,
                            fillColor: color,
                            offset: '5%',
                            rotation: parseFloat(carB1.Direction - 90),
                            anchor: new google.maps.Point(10, 25)
                        }
                    });

                    carMark.push(markBusB1);
                    info = new google.maps.InfoWindow();
                    google.maps.event.addListener(markBusB1, 'click', (function (markBusB1, i) {
                        return function () {
                            getInfo(carB1);
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
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzQ873hhqF25lUgjeJlQ8YnHnSDKeuUC8&amp;callback=initMap"></script>



</body></html>