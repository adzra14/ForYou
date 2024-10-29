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
    
    <style>
        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .block {
            animation: appear 0.8s ease-in-out;
        }

        .card-box {
            width: 500px;
            height: 700px;
            overflow-y: scroll;
            border-radius: 10px;
            padding: 10px;
            margin-top: 90px;

        }

        .background2 {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('image/bg.jpg'); 
            background-size: cover; 
            background-position: center; 
            z-index: -1; 
        }
    </style>
</head>
<body>
    
<div class="background2"></div>
    <div class="content-wrapper">
    <div class="view">
        
        <div class="d-flex justify-content-center align-items-center mt-3">
            <div class="card-box">
                
                
                <div class="d-flex justify-content-center align-items-center mt-3 card-container">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="image/gif4.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text">Hii bby ~ </h1>
                            <p class="card-text">Ohh!! it's really you?!! U know that this is your special day, right? So I'll give you this flower (づ> v <)づ♡</p>
                            <audio class="w-100 mt-2" src="hbd.mp3" controls autoplay></audio>
                        </div>
                    </div>
                </div>

                
                <div class="d-flex justify-content-center align-items-center mt-3 card-container">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="image/gif5.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text">Happy Birthday bby</h1>
                            <p class="card-text"> Ciee udh makin tuaa~
                            Semoga tahun ini bsa jadi lebih baik di banding tahun sebelumnya <br>
                            Semoga semua yang kamu mau bsa terpenuhi sesuai plan kamu<br>
                            Sehat terus yaa sayang~ jangan sakit sakit ＞︿＜<br>
                            Wish All the best for you(｡˃ ᵕ ˂ *) ｳ
                            </p>
                        </div>
                    </div>
                </div>

               
                <div class="d-flex justify-content-center align-items-center mt-3 card-container">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="image/kiss.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text">Sayaang</h1>
                            <p class="card-text"> Sayaang ku cintaku gantengku ~<br>
                            sumpah yaa.. aku sampai sekarang masih ngak nyangka
                            kalau orang random yang dulu aku temuin di game
                            sekarang udah jadi orang yang spesial banget di hidup aku<br>
                            I really hope that you will me my last
                            I already love you this much
                            I love you more than you think<br>
                            So I hope we can be together forever
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="d-flex justify-content-center align-items-center mt-3 card-container">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="image/sad.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text">Maaf</h1>
                            <p class="card-text"> Maaf ya Sayaang
                            aku ngak bisa ngucapin langsung ke kamu
                            dan cuman bisa ngasih hadiah kecil kyk gini
                            dan ini literally seadanya banget karna kemaren sibuk event dan kekurangan waktu baut bkin jdi lebih bagus lagi
                            walaupun begitu aku tetap mau hari ini jadi hari yang spesial banget buat kamu
                            semoga aku berhasil ngebuat kamu merasa begitu (⸝⸝๑﹏๑⸝⸝)
                            </p>
                        </div>
                    </div>
                </div>

               
                <div class="d-flex justify-content-center align-items-center mt-3 card-container">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="image/love.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-text">Seeya Next Year</h1>
                            <p class="card-text"> aku ga berharap banyak
                            aku cuman berharap kita bisa terus bareng
                            besok, minggu depan, bulan depan, tahun depan... ampe kapan pun pokonya
                            jangan bosen sama aku ya saayaang
                            ingat I'll always be here for you no matter what
                            </p>  
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('block');
                }
            });
        });

        document.querySelectorAll('.card-container').forEach(container => {
            observer.observe(container);
        });
    </script>

</body>
</html>