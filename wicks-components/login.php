<?php 

//Start session and check logon status
session_start();
if (isset($_SESSION['loggedon'])) {
    $loggedon = $_SESSION['loggedon'];
    //header("Location: ./home.php");
}
else {
	$loggedon = FALSE;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Title goes here">
    <meta name="keywords"
        content="Keywords go here">
    <meta name="description"
        content="Description goes here">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta property="og:image" content="./images/thumbnail.png" />
    <meta property="og:title" content="Title" />
    <meta property="og:description"
        content="Description" />

    <title>Login | Events-4-All</title>

    <link rel="icon" href="./images/heyHand.png">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|PT+Serif:700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <!-- <script src="./vendor/smoothScroll.js"></script> -->

</head>

<body>

    <!-- <Navbar File> -->
    <?php require './navbar.php'; ?>

<!-- <LoginForm -->
    <section class="section">
        <div class="container">
            <form class="form" action="<?php echo htmlspecialchars("./methods/processLogin.php");?>" method="POST" >
            <h2 class="is-size-2 has-text-weight-bold has-text-centered">Login</h2>
                <div class="field">
                    <label id="usernameOrEmailLogin" class="label is-size-6">Login with Username or Email</label>
                    <div class="control has-icons-left">
                        <input id="userLogin" name="userLogin" class="input" required type="text" placeholder="Name">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>

                    </div>
                </div>

                <div class="field">
                    <label class="label is-size-6">Password</label>
                    <div class="control has-icons-left has-icons-right">
                        <input id="passwordLogin" name="passwordLogin" required class="input" type="password" placeholder="Password" value="">
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <!-- If we want icons on the righthand side of the input field, uncomment below -->
                            <!-- <i class="fas fa-exclamation-triangle"></i> -->
                        </span>
                    </div>

                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button value="submit" type="submit" class="button is-info">Login</button>
                    </div>
                    <div class="control">
                        <button class="button is-danger is-light">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- </LoginForm -->

  
    

    <!-- <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            updateURL: false, // Update the URL on scroll
            emitEvents: true, // Emit custom events
            speed: 175 // 1.75 seconds to scroll to anchor point
        });
    </script> -->

    <script src="./js/scripts.js"></script>
</body>

</html>