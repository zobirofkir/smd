<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMD 2024</title>
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/reduffusion/main.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/reduffusion/css/css1.css">
    <!-------------La chatgraphi------------------>
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/reduffusion/css/GlobaleColor.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/live.css">

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://smd2024.sourcedart.org/css/photos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<style>
    @media (max-width: 1500px ) and (min-width: 1000px) {
    .iframe {
		min-height: 650px;
        background: gree;
    }
    .contest {
        background: green
    }
    @media only screen and (max-width: 768px) {
        .affiche{
       width: 100%;
       height: 100%;
    }
}
}

</style>

<body style="background: #ffffff;  overflow: hidden; padding: 0; margin: 0; flex-direction: column;">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background: #D1EAF1">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{url('/')}}"><i class="fa-solid fa-house fa-xl" style="color: #ffffff;"></i> Accueil</a>
        </div>
    </nav>

    <!-- Video Section -->
    <div class="affiche" style="display: flex; justify-content: center; align-content: center; margin-top: 30px;">
        <div class="video-container text-center" id="contest" style="width: 70%; ; background-repeat: no-repeat; height: 100%; ">
            <div class="container" style="">
                <img src="images/pc0.jpg" alt="" width="100%" height="100%" id="affiche">
                
            </div>
        </div>
    </div>
    <script src="js/js/js/js.js"></script>
    <!-- lien de live -->
    <a hidden id="cmclive" class="glightbox"></a>
    <script src="https://smd2024.sourcedart.org/js/js/js/jquery.js"></script>
    <script src="https://smd2024.sourcedart.org/js/js/js/bootstrap.bundle.min.js"></script>
    <script src="https://smd2024.sourcedart.org/js/js/js/glightbox.min.js" id="glightbox"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        window.addEventListener('load', function () {
            const hiddenLink = document.querySelector('.privideo');
            hiddenLink.click();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>

</body>

</html>
