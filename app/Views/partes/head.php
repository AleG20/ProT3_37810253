<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo($titulo);?></title>
    <link href="assets/css/bootstrap2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/miestilo.css" />

    <style>
        .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            /* Ajusta la imagen para cubrir el contenedor */
        }
        body,
        html {
          display: grid;
            min-height: 100vh;
grid-template-rows: auto 1fr auto;

        }
        
        .footer-icons img {
            width: 30px;
            height: 30px;
            margin: 0 5px;
        }

    
        
       
        
        @media (max-width: 768px) {
            footer {
                position: relative;
                bottom: 0;
                width: 100%;
                padding: auto;
            }
        }

        .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            /* Ajusta la imagen para cubrir el contenedor */
        }

        .bg-construction {
            background: url('') no-repeat center center;
            background-size: cover;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px #000000;
        }

        .cont-44{
            width: 90%;
            height: 90%;
           
          
        }

        .login{
            width: 90%;
            height: 90%;
           
        }
        
        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>