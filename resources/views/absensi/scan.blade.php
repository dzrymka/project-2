@extends('layout._default.dashboard')
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                </div>
                <style>
                    body,
                    html {
                        height: 100%;
                        margin: 0;
                        background-color: #f8f9fa;
                    }

                    .container {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        width: 90%;
                        max-width: 1200px;
                        margin-top: 40px;
                        /* Increased margin-top for more space */
                    }

                    #title {
                        margin-bottom: 20px;
                        background-color: red;
                        /* Red background */
                        color: white;
                        /* White font */
                        padding: 10px 20px;
                        border-radius: 5px;
                    }

                    .content {
                        display: flex;
                        flex-direction: row;
                        justify-content: center;
                        align-items: flex-start;
                        width: 100%;
                        margin-top: 40px;
                        /* Increased margin-top for more space */
                    }

                    #preview {
                        flex: 1;
                        max-width: 720px;
                        max-height: 540px;
                        object-fit: cover;
                        border: 2px solid #000;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        margin-right: 20px;
                    }

                    .table-container {
                        flex: 2;
                        background-color: #fff;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    }

                    .table-container h2 {
                        margin-bottom: 20px;
                    }

                    table {
                        width: 100%;
                        table-layout: fixed;
                        word-wrap: break-word;
                    }

                    th,
                    td {
                        text-align: center;
                    }

                    #my_result img {
                        max-width: 100%;
                        height: auto;
                        margin-top: 20px;
                    }

                    .btn-group {
                        display: flex;
                        justify-content: center;
                        margin: 20px 0;
                    }

                    .btn-group .btn {
                        margin: 0 10px;
                    }
                </style>
                </head>

                <body>
                    <div class="container">
                        <h1 id="title">Absen Pegawai PMI</h1>
                        <div class="content">
                            <div>
                                <video id="preview"></video>
                                <div class="btn-group">
                                    <button id="freezeBtn" class="btn btn-primary">Freeze</button>
                                    <button id="unfreezeBtn" class="btn btn-danger" disabled>Unfreeze</button>
                                </div>
                                <div id="my_result"></div>
                            </div>
                            <div class="table-container">
                                <h2>Daftar Absensi</h2>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Waktu Absen</th>
                                            <th>Nama Pegawai</th>
                                        </tr>
                                    </thead>
                                    <tbody id="attendanceTable">
                                        <!-- Entries will be added here dynamically -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                    <script type="text/javascript">
                        let scanner = new Instascan.Scanner({
                            video: document.getElementById('preview'),
                            scanPeriod: 5,
                            mirror: false
                        });

                        scanner.addListener('scan', function(content) {
                            console.log(content); // Log the scanned content (QR code data)
                            alert('QR Code Content: ' + content); // Show an alert with the scanned content
                            addAttendanceRecord(content); // Add attendance record to the table
                        });

                        Instascan.Camera.getCameras().then(function(cameras) {
                            if (cameras.length > 0) {
                                let selectedCamera = cameras[0];
                                scanner.start(selectedCamera);
                            } else {
                                console.error('No cameras found.');
                            }
                        }).catch(function(e) {
                            console.error(e);
                        });

                        function addAttendanceRecord(employeeName) {
                            const table = document.getElementById('attendanceTable');
                            const newRow = table.insertRow();
                            const timeCell = newRow.insertCell(0);
                            const nameCell = newRow.insertCell(1);

                            const now = new Date();
                            const formattedTime = now.toLocaleTimeString();

                            timeCell.textContent = formattedTime;
                            nameCell.textContent = employeeName;
                        }

                        document.getElementById('freezeBtn').addEventListener('click', function() {
                            scanner.stop(); // Stop scanning
                            document.getElementById('freezeBtn').disabled = true;
                            document.getElementById('unfreezeBtn').disabled = false;
                        });

                        document.getElementById('unfreezeBtn').addEventListener('click', function() {
                            scanner.start(scanner.camera); // Resume scanning
                            document.getElementById('freezeBtn').disabled = false;
                            document.getElementById('unfreezeBtn').disabled = true;
                        });
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-u10knCvxwvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbzlHgTPOOmMi466C8" crossorigin="anonymous">
                    </script>
                </body>
            </div>
        </div>
    </div>
@endsection
