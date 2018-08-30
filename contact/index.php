<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Site</title>
    <!--<link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
    <header class="header header--plain">
        <div class="opaque-background">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/"><img class="logo-img" src="../img/logo.png" alt="Gregory Cusick"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/buckinghamshire-wedding-photography-portfolio/">Weddings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/photobooth/">Photo Booth</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/moor-park-weddings/">Moor Park</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/family/">Family</a>
                        </li>                                                                                             
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Information
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/buckinghamshire-wedding-photographer-gregory-cusick/">About</a>
                            <a class="dropdown-item" href="/choosing-a-buckinghamshire-wedding-photographer/">Choosing a Buckinghamshire Wedding Photographer</a>
                            <a class="dropdown-item" href="/buckinghamshire-wedding-photography/">Buckinghamshire Wedding Photography</a>
                            </div>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="/testimonials/">Testimonials</a>
                        </li>  
                        -->
                        <li class="nav-item">
                            <a class="nav-link" href="/wedding-suppliers/">Suppliers</a>
                        </li>  
                        <li class="nav-item contact-item">
                            <a class="nav-link contact-link" href="/contact/">Contact </a>
                        </li>
                    </ul>
                </div>
            </nav>  
        </div>      
    </header>

    <div class="container">
        <section class="section large-padding">
            <h1 class="main-heading main-heading--content">Contact Us</h1>
            <p>For bookings and enquiries, please use the form below. I specialise in wedding photography and offer services all over the U.K.</p>    
            <?php
            $action=$_REQUEST['action'];
            if ($action=="")    /* display the contact form */
                {
                ?>                
            
            <form  class="form" action="#contact" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="input" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>                    
                </div>                
                <div class="form-group">
                    <label for="telephone">Telephone Number *</label>
                    <input type="input" class="form-control form-control-lg" name="telephone" id="telephone" placeholder="Enter telephone number" required>
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                    </div>                
                <div class="button-container">
                    <button type="submit" class="button button--black">Send Message</button>
                </div>
            </form>

            <?php 
                } 
            else                /* send the submitted data */
                {
                $name=$_REQUEST['name']; 
                $email=$_REQUEST['email'];
                $telephone=$_REQUEST['telephone'];
                $message=$_REQUEST['message'];

                if (($name=="")||($email=="")||($telephone=="")||($message==""))
                    {
                    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                    }
                else{	
                    $subject="Message sent using your contact form";
                    $body="Telephone: $telephone\r\n Message: $message";     
                    $from="From: $name<$email>\r\nReturn-path: $email";                                    
                    mail("info@gregorycusickphotography.co.uk,gregory_cusick@outlook.com", $subject, $body, $from);
                    echo '<p class="paragraph form-feedback">Thank you! <br>Your message has been sent. <br>I will be in touch shortly.</p>';
                    }
                }  
            ?>  
        </section>
    </div>

    <section class="section--social">
        <ul class="social-list">
            <li class="social-list__icon"><a class="social-list__link" href="https://www.facebook.com/gregorycusickphotography" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-list__icon"><a class="social-list__link" href="https://www.instagram.com/gregorycusickphotography/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="social-list__icon"><a class="social-list__link" href="https://www.pinterest.co.uk/gregorycusick/" target="_blank"><i class="fab fa-pinterest"></i></a></li>                         
        </ul>
    </section>
 
    <footer class="footer">
        <ul class="footer-list">
            <li class="footer-list__item">07515882112</li>
            <li class="footer-list__item">Wedding Photography &bull; Family Photography &bull; Portraits</li>
            <li class="footer-list__item">Buckinghamshire and all over the UK</li>
            <li class="footer-list__item"><a class="footer-list__link" href="/privacy-policy/">Privacy Policy</a></li>   
        </ul>           
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>        
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



  
        
        
        
        
        
        
            
            
            
 
