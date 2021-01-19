<?php

    $MessageSent = false;

    if(isset($_POST["email"]) && $_POST["email"] != "") {
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $username = $_POST["name"];
            $useremail = $_POST["email"];
            $messagesubject = "Buisness Enquiry From "+$_POST["name"];
            $message = $_POST["message"];

            $to = "business@noahbrostant.co.uk";
            $body = "";

            $body .= "From: ".$username. "\r\n";
            $body .= "Email: ".$seremail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to,$subject,$body);

            $MessageSent = true;
        }
        else {
            $InvalidClassName = "form-invalid";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noah Bradford Rostant</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="HomeBG">
        <div class="HomeHero"></div>
    </div>
    <nav class="underline-nav">
        <div class="nohighlight">
            <ul>
            <li><a class="Button" href="/index.html">Home</a></li>
                <li><a class="Button" href="/about.html">About</a></li>
                <li><a class="Button" href="/work.html">Work</a></li>
                <li><a class="Button">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class="Backdrop">
                    <div id="Contact" class="Section">
                        <h1 class="title">Get in Contact</h1>
                        <?php
                            if($MessageSent):
                        ?>
                        <H1>Thank You For Your Email</H1>
                        <h2>I will get back to you as soon as possible.</h2>
                        <?php
                            else:
                        ?>
                        <form style="width: 100%; text-align: center; padding-top: 50px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" target="_self" method=”POST” enctype=”multipart/form-data” name=”BuisnessEnquiry” autocomplete="on">
                            <div style="display: inline;">
                                <input class="FName" type=”text” size=”3″ name=”name” placeholder="Name...">
                                <input class="FName <?= $InvalidClassName ?? "" ?>" type=”email” size=”3″ name=”email” placeholder="Email...">
                            </div>
                            <br><br>
                            <textarea class="FMessage" name=”message” rows=”6″ cols=”20″ placeholder="Message..."></textarea>
                            <br><br>
                            <input class="FSubmit" type="submit" value="Submit">
                        </form>
                        <div class="emailsocial">
                            <p class="inner email">noah.b.rostant@gmail.com</p>
                            <div class="inner social">
                                <a href="">Instagram</a>
                                <a href="">YouTube</a>
                                <a href="">Twitter</a>
                                <a href="">Twitch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Branding"><p class="Name nohighlight nohover">Noah Bradford Rostant</p></div>
    <script src="/js/script.js"></script>
    <?php
        endif;
    ?>
</body>
</html>
