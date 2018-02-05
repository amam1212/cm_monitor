<!DOCTYPE html>
<html lang="en">

<head>
    <title>Report</title>
    <script data-require="jquery@*" data-semver="2.0.3"
            src="http://code.jquery.com/jquery-2.0.3.min.js">

    </script>
    <script data-require="bootstrap@*" data-semver="3.1.1"
            src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">

    </script>
    <script src="/cm_monitor/js/sb-admin-datatables.min.js"></script>
    <script src="/cm_monitor/js/datatables/jquery.dataTables.js"></script>
    <script src="/cm_monitor/js/datatables/dataTables.bootstrap4.js"></script>
</head>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">News & Events Management</li>
        </ol>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> News & Events Management</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>NO.</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>HeaderCenter</th>
                            <th>IDCar</th>
                            <th>CM_Battery</th>
                            <th>SignalGPS</th>
                            <th>LaGoogle</th>
                            <th>LongGoogle</th>
                            <th>Fast</th>
                            <th>Direction</th>
                            <th>PhoneGPS</th>
                            <th>IpGPS</th>
                            <th>SignalFall</th>
                            <th>Correct_Date</th>
                            <th>DriverName</th>
                            <th>DriverIDCard</th>
                            <th>DriverDateTimeLogInOut</th>
                            <th>StatusLogInOut</th>
                            <th>LogIn</th>
                            <th>LogOut</th>
                            <th>SensorPM</th>
                            <th>Registerid</th>
                            <th>Type</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Color</th>
                            <th>YearCar</th>
                            <th>Carbodyno</th>
                            <th>Motorid</th>
                            <th>Detail</th>
                            <th>User</th>
                            <th>DateTimeUse</th>
                            <th>Trackingtransport</th>
                            <th>Drivertitle</th>
                            <th>Drivername</th>
                            <th>DriverSername</th>
                            <th>Detail2</th>
                            <th>Province</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $url = 'http://183.90.168.61/cmcar/';
                        $content = file_get_contents($url);
                        $json = json_decode($content, true);
                        $no = 1;
                        foreach($json as $i)
                        {
                        ?>
                            <tr>
                                <td> <?=$no?></td>
                                <td><?=$i['Date']?></td>
                                <td><?=$i['Time']?></td>
                                <td><?=$i['HeaderCenter']?></td>
                                <td><?=$i['IDCar']?></td>
                                <td><?=$i['CM_Battery']?></td>
                                <td><?=$i['SignalGPS']?></td>
                                <td><?=$i['LaGoogle']?></td>
                                <td><?=$i['LongGoogle']?></td>
                                <td><?=$i['Fast']?></td>
                                <td><?=$i['Direction']?></td>
                                <td><?=$i['PhoneGPS']?></td>
                                <td><?=$i['IpGPS']?></td>
                                <td><?=$i['SignalFall']?></td>
                                <td><?=$i['Correct_Date']?></td>
                                <td><?=$i['DriverName']?></td>
                                <td><?=$i['DriverIDCard']?></td>
                                <td><?=$i['DriverDateTimeLogInOut']?></td>
                                <td><?=$i['StatusLogInOut']?></td>
                                <td><?=$i['LogIn']?></td>
                                <td><?=$i['LogOut']?></td>
                                <td><?=$i['SensorPM']?></td>
                                <td><?=$i['Registerid']?></td>
                                <td><?=$i['Type']?></td>
                                <td><?=$i['Brand']?></td>
                                <td><?=$i['Model']?></td>
                                <td><?=$i['Color']?></td>
                                <td><?=$i['YearCar']?></td>
                                <td><?=$i['Carbodyno']?></td>
                                <td><?=$i['Motorid']?></td>
                                <td><?=$i['Detail']?></td>
                                <td><?=$i['User']?></td>
                                <td><?=$i['DateTimeUse']?></td>
                                <td><?=$i['Trackingtransport']?></td>
                                <td><?=$i['Drivertitle']?></td>
                                <td><?=$i['Drivername']?></td>
                                <td><?=$i['DriverSername']?></td>
                                <td><?=$i['Detail2']?></td>
                                <td><?=$i['Provice']?></td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</body>

</html>
