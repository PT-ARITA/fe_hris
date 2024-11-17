<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance | ARITA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets/logo_arita.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/jam.css">
</head>

<body>
    <div id="auth" style="padding-top: 0px">
        
        <div class="">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class=" pt-4">
                        <div class="card-body">
                            <div class="text-center ">
                                <img src="assets/logo_arita.png" height="80" class=''>
                                <p id="clock"></p>
                                <p></p>
                            </div>
                            <form action="index.html" hidden>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">NIP</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="username" value="">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="">Telepon</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="number" class="form-control" id="password" value="">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>                        
                            </form>
                            <div class="col-sm-12 mb-5">
                                    <a href="menu.php" class="btn btn-block mb-2 btn-info"><b>- MENU -</b></a>
                                </div>
                            <div class="divider">
                                <div class="divider-text" style="color: #113D6D;"><b>ABSEN KERJA</b></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-2">
                                    <button onclick="" class="btn btn-block mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal"><b>- IN -</b></button>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <button onclick="" class="btn btn-block mb-2 btn-danger" data-toggle="modal" data-target="#exampleModal"><b>- OUT -</b></button>
                                </div>
                            </div>

                            <div class="divider">
                                <div class="divider-text" style="color: #113D6D;"><b>ABSEN Hari Ini</b></div>
                            </div>
                            <div class="col-md-12" style="font-size:10px">
                                <div class="card">
                                    <div class="px-0 pb-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Masuk</th>
                                                        <th class="text-center">Pulang</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            01/10/2024 
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge bg-danger">08:15</span>  
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge bg-danger">16:10</span>  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Foto Untuk Presensi</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="d-flex justify-content-center">
                            <video id="videoElement" width="50%" muted autoplay playsinline></video>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <button type="button" class="btn btn-primary" id="captureButton">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"></path>
                                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <canvas id="canvas"></canvas>
                        </div>
                    </div>
                    <input type="hidden" id="nip" name="nip">
                    <input type="hidden" id="telepon" name="telepon">
                    <input type="hidden" id="absen" name="absen">
                    <input type="hidden" id="photo" name="photo" height="200">
                </div>
                <div class="modal-footer">
                    <div class="row">
                    <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Simpan Presensi</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Kembali</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
	   setInterval(customClock, 500);
	   function customClock() {
	       var time = new Date();
	       var hrs = time.getHours();
	       var min = time.getMinutes();
	       var sec = time.getSeconds();

           hrs = hrs < 10 ? "0" + hrs : hrs;
           min = min < 10 ? "0" + min : min;
           sec = sec < 10 ? "0" + sec : sec;
	       
	       document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
	   }

       function absen(id) {
        var nip = document.querySelector('#username').value;
        var tel = document.querySelector('#password').value;
        document.querySelector('#nip').value = nip;
        document.querySelector('#telepon').value = tel;
        document.querySelector('#absen').value = id;
       }
	</script>

    // <script>
    var video = document.getElementById("videoElement");

    navigator.mediaDevices.getUserMedia({ video: true, audio: false })
    .then(function(stream) {
        video.srcObject = stream;
        video.play();
    })
    .catch(function(err) {
        console.log("An error occurred: " + err);
    });

    document.getElementById("captureButton").addEventListener("click", function() {
        var canvas = document.getElementById("canvas");
        var context = canvas.getContext("2d");
        context.canvas.width = window.innerWidth;
        context.canvas.height = window.innerHeight;
        context.drawImage(video, 0, 0, window.innerWidth,window.innerHeight);
        document.getElementById("photo").value = canvas.toDataURL("image/png");
        canvas.style.width = "80%";
        
    });
    </script>
</body>

</html>
