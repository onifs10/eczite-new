<template>
    <div>
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
                    <button class="ride-button" @click="book">Book A Ride</button><i></i>
                </div>
            </div>
            <div class="content-item item-2">
                <form-element/>
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
                    <img src="eczite/mobile-phone-chat-2652.svg" alt="">
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
    </div>
</template>

<script>
import FormElement from '@/components/Form'
export default {
    components : {
        FormElement
    },
    methods : {
        book() {
            window.open("https://wa.me/+2347064400337", "_blank");
        }
    }
}
</script>

<style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.header{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-content: space-around;
    height: 80px;
    background: #020000;
}
.logo {
    flex: 0 0 90%;
    margin-left: 5%;
    align-self: center;
    display: flex;
    justify-content: center;
    font-family: 'Dancing Script', "Times New Roman", serif;
}
.nav-btn{
    padding:  20px;
    outline: none;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-decoration: none;
    font-weight: 600;
}
.nav-btn:hover {
    color: lightgreen;
    border-bottom: 5px solid lightgreen;
}
.top-nav{
    flex: 0 0 90%;
    margin-left: 95%;
    display: none;
}
.logo{
    /*align-self: center;*/
    color: white;
    font-size: 2rem;
}
section[class ^= 'content-1']{
    display: grid;
    grid-template-columns: repeat( auto-fit, minmax(300px, 1fr));
    padding: 20px;
}
.content-1 .item-1{
    grid-row: 1/2;
}
.content-1 .item-2{
    grid-row: 2/3;
}
.content-1{
    background-image: url("/eczite/eczite-img-1.png");
    background-repeat: no-repeat;
    background-size: cover;
    min-height:90vh;
}
.content-1 > .content-item{
    display: flex;
    flex-flow: column;
    justify-content: center;
    /* align-content: center; */
    min-height: 250px;
}
.content-text{
    color:  white;
    font-size: 1em;
    text-align: center;
}
.reg-container{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-content: center;
}
.reg{
    flex: 0 0 80%;
    border: rgba(255, 255, 255, 0.5);
    box-shadow: 1px 1px 20px 1px rgba(2, 2, 2, 0.5);
    border-radius: 10px;
    background-color: rgba(255,255,255,0.8);
}
.reg-header{
    margin: 0px 25px;
    align-content: center;
    padding-top: 20px;
    margin-bottom: -20px;
}
.header-main{
    color: darkgreen;
}
.reg-form{
    margin: 0px 25px ;
    margin-bottom: 10px;
}
.inputGroup{
    margin-top: 20px;
    position: relative;
    height: 50px;
    background: none;
    overflow: hidden;
}

.ride-button{
    height: 50px;
    width: 200px;
    align-self: center;
    margin: 10px;
    border: none;
    border-radius: 20px;
    color : white;
    outline: none;
    font-weight: bold;
    background-color: rgba(124, 256, 0, 0.6);
}
.btn-signup{
    border: none;
    border-radius: 10px;
    color : white;
    padding: 10px;
    outline: none;
    height: 40px;
    font-weight: bold;
    background-color: darkgreen;;
}

.ride-button:hover , .ride-button:active {
    background-color: white;
    color: rgba(124, 256, 0, 1);
    outline: none;
}
.ride-button:focus{
    outline: none;
}
.inputGroup  input, .inputGroup select {
    border : none;
    outline: none;
    width: 100%;
    height: 100%;
    padding-top: 20px ;
    color: #070000;
    background: none;
}

.inputGroup label{
    position: absolute;
    bottom: 0px;
    left: 0%;
    width: 100%;
    height: 100%;
    border-bottom: 1px solid black;
    pointer-events: none;
    background: none;

}
.inputGroup label::after{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    border-bottom: 2px solid green;
    left: 0%;
    bottom: 0%;
    transform: translate(-100%);
    transition: all 0.5s ease;
    background: none;
}
.inputGroup .label-content{
    position: absolute;
    color: black;
    bottom: 5px ;
    font-size: 14px;
    left: 0px;
    transition: all 0.3s ease;
}
select + label {
    border-bottom: lawngreen;
}
.inputGroup input:focus + .label-name .label-content,
.inputGroup input:valid + .label-name .label-content,
.inputGroup select:focus + .label-name .label-content,
.inputGroup select:valid + .label-name .label-content{
    transform:  translateY(-150%);
    font-size: 12px;
    color: green;
}

.inputGroup input:focus + .label-name::after, .inputGroup input:valid + .label-name:after{
    transform: translateX(0%);
}
.inputGroup input:focus + .label-name, .inputGroup input:valid + .label-name{
    border-bottom: white;
}
.inputGroup-button{
    display: flex;
    margin-top: 20px;
    justify-content: center;
    flex-flow: column wrap;;
    align-content: center;
}

.content-3{
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-items: center;
    padding: 20px;
}
.content-3 .part-one{
    color: black;
    height: 100%;
    flex:0 0 100%;
}

.content-3 .part-one .content{
    /*background: #777777;*/
}
.content-3 .part-two{
    flex: 0 0 100%;
    display: flex;
    justify-content: center;
    animation: 2s ease 0s 1 slideInFromRight;
}
.content-3 .part-one .content ol{
    display: flex;
    flex-flow: column;
    justify-content: center;
    list-style: none;
}
.HIW{
    text-align: center;
    text-shadow: 2px 2px rgba(0,0,0,0.5);
    font-family: 'Dancing Script', "Times New Roman", serif;
    font-size: 2.5rem;
    font-weight: bold;
}
.content-3 .part-one .content li{
    display: block;
    margin: 20px 0px;
    padding: 20px;
    width: 100%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.content-3 .part-two .content {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    height: 100%;
    width: 100%;
}
.content-3 .content{
    width: 100%;
    height: 100%;
}
.eczite-section{
    background-color: rgba(146, 243, 146, 0.8)    ;
}
.why-grid{
    display: grid;
    grid-template-columns: repeat( auto-fit, minmax(300px, 1fr));
    padding: 20px;

}
.why-header{
    text-align: center;
    color: darkgreen;
    font-size: 2em;
}
.why-grid-item{
    box-shadow: 1px 1px 20px 1px rgba(8, 136, 47, 0.5);
    padding: 50px;
    background-color: white;
    margin: 10px;
    font-size: 1.5em;
    border-radius: 10px;
}
@media screen and (min-width: 1200px){
    .logo, .top-nav{
        flex: 0 0 42.5%;
        margin-left: 2.5%;
        margin-right: 2.5%;
        align-self: center;
        display: block;
    }

    .why-grid{
        display: grid;
        grid-template-columns: repeat( auto-fit, minmax(500px, 1fr));
        padding: 20px;
    }
    .content-text{
        font-size: 1.5em;
    }
    .top-nav{
        display: flex;
        flex-flow: row wrap;
        justify-content: flex-end;
        height: 100%;
    }
    .logo{
        display: flex;
        justify-content: flex-start;
    }
    .content-1{
        flex: 0 0 100%;
    }
    .body-btn{
        display: none;
    }
    .content-3 .part-two, .content-3 .part-one{
        flex: 0 0 50%;
    }
    .item li {
        background: rgba(144,238,144,0.1);
    }
    .content-1 .item-1{
        grid-row: 1/2;
        grid-column: 1/3;
    }
    .content-1 .item-2{
        grid-row: 1/2;
    }
}

</style>
