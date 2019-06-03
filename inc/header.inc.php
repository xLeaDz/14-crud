<?php include 'inc/init.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="view/css/base.css">
    <link rel="stylesheet" href="view/css/vendor.css">
    <link rel="stylesheet" href="view/css/main.css">

    <!-- script
    ================================================== -->
    <script src="view/js/modernizr.js"></script>
    <script src="view/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body>
    <!-- header
    ================================================== -->
    <header class="s-header">

        <div>
            <a class="blason" href="#home">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEhMPEhESDw8VFxEQEBAPEBYQEBAQFRUXFxURFhMYKCggGBolGxMVITEhJSkrLy4uFx8zODMsNyguLisBCgoKDg0OFxAQGisfHR0tKysrLS0rLTcvLS4tKy0tLSstKy0tLS0tLS0tLS0tKy0rLSstLS0tLS0tLS0tLTctLf/AABEIAMIBAwMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQQCBQYHAwj/xABEEAACAQECDAUBBAgCCwAAAAAAAQIDBBEFEhMhMTJSYXGBkbEGByJBUaEjQnLBCBQkM2KSs9Fz4RU0Q1NkdISistLx/8QAGwEBAQADAQEBAAAAAAAAAAAAAAECBQYEAwf/xAAuEQEAAQMEAAMGBgMAAAAAAAAAAQIDEQQFITESMkETIkJRYYEGI1JxkaEUFTP/2gAMAwEAAhEDEQA/APEajzvP7vuBjjb2Axt7AY29gMbewGNvYDG3sBjb2Axt7AY29gMbewGNvYDG3sBjb2Axt7AY29gMbewGNvYDG3sBjb2Axt7AY29gMbewGNvYDG3sBjb2Axt7AY29gMbewGNvYDG3sBjb2BboPMufcCrV0vi+7AwAAAAAAAAAAAAABlcRS4HBcVDFAXEOC4q4QwiAAAAAAAAAAAAAlAXKGqufcCrV0vi+7AwAAAAAAAAAAJuAJEyq3ZsG1amrF3fLzIZeqxob97y0tnRwA/vTu3RV/wBWRt7Ow1T56v4WoYGorSpPjL+xHvo2PTx3mX1WC6GwubbGX3jaNLHwp/0ZQ/3a+oyv+p0v6Xzngii/utcJMPjXsunnpXq4Bi9WbW5q9Fy8d3YI7oqlr7VgarDOljr+F3/QsS1V/atRb5xmGulBrM8z3la6aZicTwi4IgAAAAAAAAAAlAXKGqufcCrV0vi+7AwAAAAAAAAATcBcsOD51dCuj7yegky9ul0N7UTimOPm6Gx4KpU87WPL5fsYzLqNNtFizGao8VS7eRtIiIjHoFXlAAAAAm8LHHReE5nt8LVYqdVXSS4rM0MvFqNvs34mJj7tBb8EypepeqHytK4ouXL63bLun96nmlqzJqkAAAAAAAAAJQFyhqrn3Aq1dL4vuwMAAAAAAAAJSBHLc4KwVj+upmh7L3l/kYZbzbtqm771zyugUUlclcloSzB1Vu3TRHhojEAfQAAAAAAAAASgpuYYVU01U+GqGhwxgq6+pBZvvRXtvQiXL7ptc2/zbUcNHIzhz6AAAAAAAAJQFyhqrn3Aq1dL4vuwMAAAAAAASgNvgTB+O8eS9C0LaZjMt1tO3+2q8dXlj+3REdfTTFMYgDICAAAAAAAAAAAvCp3ewYzTFUTTV05jDNhVOV61JX3bn8FiXFbpov8AGrzHVTWyMmsliEAAAAAAlAXKGqufcCrV0vi+7AwAAAAACUgLFjszqTUF7/TeYzL76ezN27FEOwpQUIqKVyWZGLvbFqmzbpophJX2AAAAAAAAAAAAAALwd9q+ELOqlOUfe6+PFEeHcdPF6xVHrHTkJxu/zM4cJMY49WBUAAAAAAlAXKGqufcCrV0vi+7AwAAAAACUD0dB4bs+aVR/hj+ZjLpNhsea7P2bojpvqgAAAAAAAAAAAAAAABMQnHOXJ4Zo4lWS9m8ZcHnMocJuVn2Worj7qBXhAAAAAAlAXKGqufcCrV0vi+7AwAAAAACUFh2GCoYtGC+Vjdc5g7jarcUaan68rIbEAAAAAAAAAAAAAAAASgk/Jz/iWHqjL5V3T/6WHKb9bxdpr+cNIZNCAAAAABKAuUNVc+4FWrpfF92BgAAAAAGUQsOzsn7uH4Yf+KMH6Boo/Io/aH1D0gAAAAFEkPsXAxMdgQuDLEoCAAAAAlAaTxMvTDi0WHNfiD4HPmTmgAAAAAJQFyhqrn3Aq1dL4vuwMAAAAAAyQHY4PlfSg/4Y9rjB3u3VxVpqJ+j7h7QABKQM47fG0WmnTzykl36B5b+ss2ea6murYdgtWLlx9JWpvb9bj/nGf3U6uHqj1VGPK8Ya+5vl+rrEPg8NV9pLhFFw807rqf1JhhuvtJ8YoYZRu+qj4lmlh2f3oxfD0mOHpt77epn3qcrtDDdJ5pJwfVBsrO+2auK4mGwpVYTzxkpLc/yDa29TaueWqGdwegCROUASgT6NF4mlqL8TLDmPxBVGaIaEyc4AAAAABKAuUNVc+4FWrpfF92BgAAAAAEoDp/D1bGpYvvF/RmEut2O9FVmaPWGyDepSIqva7bCkvU8+ytL5FeHU6+1p4zM8tJbMM1J3qPoW7TdvZcOZ1W8XrvFM4htPDngHCmELpUrPKNN58vX+ypvepSzy5Jlw1MzMzme3pOBvIeGaVrtkpPNfCywUUvlZSd9/QDssH+VOBqOf9UVV/NepOp9L7voVG4peDcFw1bBZF/08P7ARX8FYLnrWCyvfkIJ9UBosIeUeBq191nlQl80Ks43b8Vtr6FHGYb8h2k5WS2Xv2p2qF1+7KQ/9SHfbznD/AIJwng541azVFBf7al9pS/njo53EwyprqonNM4a+yYbnG5S9a+dDJhuNNvN63iK+W7sttp1dV59l5miOi024Wb8cTy+5MvclDKT1LmfENXGq3bKS5+5nDjN5uxXqZiPRqitSAAAAABKAuUNVc+4FWrpfF92BgAAAAAEoh6NngS04lRJ6ssz/ACJLZ7VqPY6iInqXTvNn5kdrVVTERVLS4RwzdfGnn9nL+wiHOa/ecTNFn+Vvwj4Jt+FZX0YNUr7p2ms2qUflJ6ZPcvoZYc5XVVXOapy908IeVeD7BdOcFbLQrnlbRFShGXzClojn93e95WM9u7SAkAAAAAAENX5nnW/OBw3ivyqwbbr5xp/qdd3vKWZKEXJ7dPVl9HvA8T8YeXeEMFt1JRdazrOrTQvcUv446YPNw3kZUVzTPu8S09gw016anqW37rj8mOG+0W81URFF7mn5+rcztEVB1E74pN3rQxh0Fert02Zu0zxhx1om5Nyeltsyhwdyua6prn4uXxK+YAAAAAEoC5Q1Vz7gVaul8X3YGAAAAAAAMoMHPo2NpwpOpBQ0JK6T2jDDZajcbt21FuZ6en+WflI66hbLfFwoP1U7K74zqrM1Ko9MY/w6XuM2te62WzwpQjTpxjTpxSjCEFixil7JID6gAAAAAAAAAACJJNNNJp5mmr018MDyjzC8oKNoUrTYFGz2jPKdn0Uazu+77U5fR7tIHg9oytLGs88aDjJxqU5K5xnF3NPneR9Yu1+HwZ4VGV8kAAAAAAAlAXKGqufcCrV0vi+7AwAAAAAABKAu4Gt36vXpWjEhVyc4VMnUScJqLvxWgP19gHDFG22enaqMsalUipLPni/eD+Gnma3AbAAAAAAAAAAAAAAHJ+Y/jGngqyupfF2monCzU788p5r5tbMb02+C9wPyraq0pzlUlJznJuc5N3uUm723zA+IAAAAAAAEoC5Q1Vz7gVaul8X3YGAAAAAAAAADvvKzzBlgqrkqt87DVaysVndGWZZaC4aV7regP0xY7VTrQjVpzjUpzSnCcHfGUWr00wPsAAAAAAAAAAAND4w8V2bBdB168r5O9UqMX9pWnsxXsvl6EB+W/FviW0YStErTXfqeaEE/RSh7Qivb83ewNKAAAAAAAAAlAXKGqufcCrV0vi+7AwAAAAAAAAASmB2nl/5iWnBMsRfb2STvqWeTuuv0ypy+7L6MD9E+FvF1iwlDHs1VSkl66MvTWp/ig+6vQG+AAAAAAAAMDznx35s2SwKVGzuNrtazXRf2NJ/M5rS1sr6AfnzxBhy0W6tK0Wiq6tSXvojGN+aEY6IxXwBrAAAAAAAAAACUBcoaq59wKtXS+L7sDAAAAAAAAAAAAfezWupSlGpTnKnUi74zpycZxe6S0AeleGvOvCFDFhaYQttJZnKV9O0fzrM+a5gejYG85sE17lUlVsk9F1enjQ5Thfm43AdXYfFmDq/7q3WWo9lV4KX8rd4G2o1oTzxlGa+YyUl9AIq2mnHWnCPzjTUbuoGjwj44wXZ71Ut1nTWmMaqqT/lhewOJw755WGnfGy0atqn7SmlRpX8XfJ9EB5Z4q8ysJ4QvhUq5Gi9NGz304NfEnfjS5u4DjmwIAAAAAAAAAAAEoC5Q1Vz7gVaul8X3YGAAAAAAAAAAAAAAAAD2z9Gyo8a3x9rrNK7e3UT/ACA8u8a1pTt9tbbf7Tabr3oSqyS+iA0gAAAAAAAAAAAAAAACUBcoaq59wKtXS+L7sDAAAAAAAAAAAAAAAAB7X+jX+8t/4bN3qgeUeKnfbbW/+ItH9WQGrAAAAAAAAAAAAAAAASgLlDVXPuBVq6XxfdgYAAAAAAAAAAAAAAAAPcP0bIf68/8Al1/U/uB5F4mf7Zav8e0f1JAawAAAAAAAAAAAAAAABKAuUNVc+4FWrpfF92BgAAAAAAAAAAAAAAAA92/Rtj9nbX/HRX/bIDxrxG/2u0/41f8AqSA1wAAAAAAAAAAAAAAACUBcoaq59wKtXS+L7sDAAAAAAAAAAAAAAAABu/D/AIst1gU1ZbROgp3OaioyUmsyd0k8+fSBp69VzlKcnfKTcpN6XJ52+oGAAAAAAAAAAAAAAAACUBcoaq59wKtTS+L7sDAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEoC3Q1Vz7gWpUo3v0rS/ZfIDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2Y9EAyUdmPRAMlHZj0QDJR2V0QH3o043aF7+y+QP//Z" alt="Home">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Accueil</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">À propos de moi</a></li>
                    <li><a class="smoothscroll" href="#clients" title="clients">Projet Réalisé</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
                    <?php if (userConnect()) { ?>
                        <li><a class="" href="<?= URL ?>connexion.php?action=deconnexion" title="contact">Deconnexion</a></li>
                    <?php } else {
                    ?> <li><a class="" href="<?= URL ?>connexion.php" title="contact">connexion</a></li>
                    <?php }?>
                    </ul>
                    <ul class="header-nav__social">
                        <li>
                            <a href="https://www.facebook.com/leejockerr" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/LeeJocker3" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/killeurr93/?hl=fr" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>

                </div> <!-- end header-nav__content -->

            </nav> <!-- end header-nav -->

            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-text">Menu</span>
                <span class="header-menu-icon"></span>
            </a>

        </header> <!-- end s-header -->