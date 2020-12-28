<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/eczite/home2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eczite - home</title>
</head>
<body>
<body class="main-body">
<header class="header">
    <div class="logo">
        Eczite
    </div>
    <div class="top-nav">
        <a class="nav-btn  " href="/">login</a>
        <a href="" class="nav-btn">sign up</a>
    </div>
</header>
<section class="content-1 ">
    <div class=" content-text content-item item-1">
        <h1 class="content-1-head">Get a ride at your convenience</h1>
        <span class="quotes">Eczite is fueled for your movement</span>
        <div class="button-container">
            <button class="ride-button" onclick="Book()">Book A Ride</button><i></i>
        </div>
    </div>
    <div class="content-item item-2">
        <div class="reg-container">
            <div class="reg">
                <div class="reg-header">
                    <div class="header-main">
                        <h1>Register</h1>
                    </div>
                    <div class="header-p"><small>to get updates from us, please kindly register here</small></div>
                </div>
                <form class="reg-form">
                    <div class="inputGroup">
                        <input type="text"  name="name" id="name" required>
                        <label for="name" class="label-name"><span class="label-content">Full Name</span></label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" required="required" id="number" name="phone_no">
                        <label for="number" class="label-name"><span class="label-content">Phone Number</span></label>
                    </div>
                    <div class="inputGroup">
                        <select name="type" id="type">
                            <option value="---">
                                ....
                            </option>
                            <option value="passenger">
                                passenger
                            </option>
                            <option value="driver">
                                driver
                            </option>
                        </select>
                        <label for="type" class="label-name"><span class="label-content">Account type</span></label>
                    </div>
                    <div class="submit inputGroup-button">
                        <input class="btn-signup " type="submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="content-3">
    <div class="part-one">
        <div class="content">
            <h1 class="HIW">How it works?</h1>
            <ol class="item">
                <li class="i01">
                    <h2>Register</h2>
                    <p>Quick and easy sign up</p>
                </li>
                <li class="i01">
                    <h2>Save Contact</h2>
                    <p>Save the eczite whatsapp number +2347064400337 on your mobile phone</p>
                </li>
                <li class="i03">
                    <h2>Get Location</h2>
                    <p>Send your pickup location to Eczite on Whatsapp</p>
                </li>
                <li class="i04">
                    <h2>Ready? </h2>
                    <p>Wait for your driver. Rate your ride after dropoff.</p>
                </li>
            </ol>
        </div>
    </div>
    <div class="part-two">
        <div class="content">
            <img src="mobile-phone-chat-2652.svg" alt="">
        </div>
    </div>
</section>
<section class="eczite-section eczite-section-four">
    <h1 class="why-header">Why Eczite?</h1>
    <div class="why-grid">
        <div class="why-grid-item"> <i class="fa fa-bolt" aria-hidden="true"></i> Fast Pick Up</div>
        <div class="why-grid-item"> <i class="fa fa-life-ring" aria-hidden="true"></i> Reliable</div>
        <div class="why-grid-item"> <i class="fa fa-phone" aria-hidden="true"></i> Easy communication</div>
        <div class="why-grid-item"> <i class="fa fa-level-down" aria-hidden="true"></i> <i class="fa fa-level-up" aria-hidden="true"></i> Flexible Price</div>
        <div class="why-grid-item"> <i class="fa fa-car" aria-hidden="true"></i> Riders Support</div>
        <div class="why-grid-item"> <i class="fa fa-handshake-o" aria-hidden="true"></i> Tested and Trusted </div>
    </div>
</section>
<script>
    function Book() {
        window.open("https://wa.me/+2347064400337", "_blank");
    }
</script>
</body>
</body>
</html>
