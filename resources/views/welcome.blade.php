<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JIPT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
.image {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-image: url('../../images/pc0.jpg');
        
}

@media only screen and (max-width: 768px) {
    .image {
        background-size: cover;
        background-position: center;
        background-image: url('../../images/tele0.jpg');
    }
}


#styleC {
    width: 150%;
    text-align: right;
    margin-top: 25%;
}

@media only screen and (max-width: 768px) {
    #styleC {
        /* Center alignment */
        text-align: center;
        margin-right: auto;
        margin-left: auto;
        margin-top: 150%; /* Adjusted margin-top as per your requirement */
    }
}


@media only screen and (max-width: 768px) {
    .image-bg {
		text-align:end;
        width: 50%;
    }
}


@media only screen and (max-width: 883px) {
    .image-bg {
		text-align:end;
        width: 50%;
    }
}



</style>
    
</head>
<body>
    <div class="image" style="">
        <div class="container">
            <div class="row">
                <div id="styleC">
                    <a href="https://smd2024.sourcedart.org/programme" class="">
                        <img src="images/programme.png" style="" width="30%" alt="" class="image-bg">
                    </a>
                    <br>
                    <a href="#" class="">
                        <img src="images/Inscription.png" alt="" width="30%" class="image-bg">
                    </a>
                    <br>
                    <a href="https://smd2024.sourcedart.org/live" class="">
                        <img src="images/live.png" alt="" width="30%" class="image-bg">
                        
                    </a>
                </div>
            </div>
        </div>
    </div>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
