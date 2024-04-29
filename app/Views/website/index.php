<!-- app/Views/website.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeismicShield</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <style>
    
    .oval-button {
            background-color: #007bff; /* Blue color */
            color: white;
            border: none;
            border-radius: 30px; /* Makes the button oval */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            padding: 20px 40px; /* Adjust padding to make the button bigger */
            font-size: 24px; /* Adjust font size */
            cursor: pointer;
            outline: none; /* Removes default focus outline */
        }

        .oval-button:hover {
            background-color: #0056b3; /* Darker blue color on hover */
        }

        .oval-button:active {
            background-color: #003f7f; /* Even darker blue color on click */
        }

        .card-img-top {
            height: 350px; /* İstenilen yükseklik */
            object-fit: cover; /* Resmin içine sığacak şekilde boyutlandırılması */
        }

    </style>
</head>

<body>
   <section id="search2">
    <h1> Önlemler ve Hazırlık </h1>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
            <img src="https://hthayat.haberturk.com/im/2020/11/01/ver1707203283/1075263_620x360.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Deprem Öncesi</h5>
                <p class="card-text">En iyi şekilde hazırlanabilmek ve ailemizi de koruyabilmek için yapmamız gerekenler burada.</p>
            </div>
            <div class="card-footer">
            <button class="oval-button" onclick="window.location.href='/don'">Deprem Öncesi</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="https://dxcgs7v732qty.cloudfront.net/deprem-an%C4%B1nda-yap%C4%B1lmas%C4%B1-gerekenler.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Deprem Anında</h5>
                <p class="card-text">Depremle karşılaşırsan ne yapman gerektiğini öğrenmek istiyorsan buraya bas.</p>
            </div>
            <div class="card-footer">
            <button class="oval-button" onclick="window.location.href='/da'">Deprem Anında</button>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
            <img src="https://kadem.org.tr/wp-content/uploads/2024/02/altin-saat-nedir-deprem-sonrasi-altin-saat-72-altin-saat-.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Deprem Sonrası</h5>
                <p class="card-text">Olası bir afet sonrası en az zararla hayatta kalmak için öğrenmen gerekenler burada.</p>
            </div>
            <div class="card-footer">
            <button class="oval-button" onclick="window.location.href='/ds'">Deprem Sonrası</button>
            </div>
            </div>
        </div>
        </div>
  
</section>

  
</body>

</html>
