<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <link href="owncss.css" rel="stylesheet">
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
</head>
<body>
<audio id="playAudio">
    <source src="hbd.mp3">
</audio>

<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" 
    fill-opacity="1" d="M0,256L15,266.7C30,277,60,299,90,261.3C120,224,150,128,180,85.3C210,43,240,53,270,85.3C300,
    117,330,171,360,208C390,245,420,267,450,240C480,213,510,139,540,106.7C570,75,600,85,630,106.7C660,128,690,160,720,160C750,160,780,
    128,810,106.7C840,85,870,75,900,85.3C930,96,960,128,990,128C1020,128,1050,96,1080,117.3C1110,139,1140,213,1170,208C1200,203,1230,117,
    1260,117.3C1290,117,1320,203,1350,240C1380,277,1410,267,1425,261.3L1440,256L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,
    0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,
    0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path></svg>
</div>

<img class="img-fluid mx-auto d-block" src="image/gif1.gif" width="500px" mx-auto>

<section class="container-fluid row">
    <div class="login">
        <h1 class="header1 display-1 mb-3">hey? who are you?! (＃°Д°)</h1><br>
        <img class="img-fluid mx-auto d-block" src="image/gif2.gif" width="500px" mx-auto>
        <h2 class="header1 display-4 mb-2">how can u get here?!!-_-</h2><br>
        <img class="img-fluid mx-auto d-block" src="image/gif3.gif" width="500px" mx-auto>
        <h3 class="header1 display-6 mb-5">only my bby can pass through this!! <br>confirm who you are first by pushing this button👇🏼👇🏼</h3>
    </div>

    <div class="d-flex justify-content-center">
        <button type="button" onclick="confirmIdentity()" class="header1 mb-4 btn btn-primary display-6 w-auto text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Confirm
        </button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title header1" id="exampleModalLabel">Confirm ur identity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="header1">
                        <label for="name">what I used to call you?</label>
                        <input type="text" id="name" placeholder="u have to know this"><br>
                    </div>
                    <div class="header1">
                        <label for="me">what u used to call me?</label>
                        <input type="text" id="me" placeholder="u have to know this">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,256L20,256C40,256,80,256,120,
        261.3C160,267,200,277,240,261.3C280,245,320,203,360,170.7C400,139,440,117,480,112C520,107,560,117,600,149.3C640,181,680,235,720,240C760,
        245,800,203,840,154.7C880,107,920,53,960,69.3C1000,85,1040,171,1080,197.3C1120,224,1160,192,1200,170.7C1240,149,1280,139,1320,133.3C1360,
        128,1400,128,1420,128L1440,128L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,
        320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,
        320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </div>
</footer>

<script>
    document.getElementById('saveBtn').addEventListener('click', function() {
        var name = document.getElementById('name').value.toLowerCase();  
        var me = document.getElementById('me').value.toLowerCase();     
        
        var expectedNames = ["bby", "sayang", "rui"]; 
        var expectedMes = ["babe", "sayang", "sinchan"]; 

        if ((expectedNames.includes(name)) && (expectedMes.includes(me))) {
            var audio = document.getElementById('playAudio');
            audio.play(); // Putar audio hbd.mp3
            window.location.href = "part2.php"; // Pindah ke halaman part2.php
        } else {
            alert("Access denied! You aren't my bby (►__◄).");
        }
    });
</script>

</body>
</html>
