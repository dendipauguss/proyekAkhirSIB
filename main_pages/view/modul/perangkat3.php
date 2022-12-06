<div class="container-fluid bg-gradient-light">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Device 3</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Tampilan Chart Suhu -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Suhu</h6>
                </div>
                <div class="card-body text-center">
                    <iframe width="80%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1964269/charts/1?api_key=KEUTWRUZTMWIWFCT&bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Data+Suhu+Device+3&type=line"></iframe>
                </div>
            </div>
        </div>
        <!-- Tampilan Chart Kelembapan -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kelembapan</h6>
                </div>
                <div class="card-body text-center">
                    <iframe width="80%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1964269/charts/2?api_key=KEUTWRUZTMWIWFCT&bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Data+Kelembapan+Device+3&type=line"></iframe>
                </div>
            </div>
        </div>
        <!-- Tampilan Chart CO2 -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">CO2</h6>
                </div>
                <div class="card-body text-center">
                    <iframe width="80%" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1964269/charts/3?api_key=KEUTWRUZTMWIWFCT&bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Data+CO2+Device+3&type=line"></iframe>
                </div>
            </div>
        </div>
        <!-- Tampilan Lokasi Google Maps -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lokasi Perangkat</h6>
                </div>
                <div class="card-body text-center">
                    <div id="googleMap" style="width:100%; height:300px;"></div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>