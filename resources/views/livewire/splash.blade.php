<div>
    <style>
        .splash-page {
            height: 100%;
            background-color: red;
            position: fixed;
            width: 100%;
        }
    
        .top-splash {
            height: 180px;
            padding: 25px;
            text-align: center;
            color: white;
            margin-bottom: -25%;
        }
    
        .bottom-splash {
            border-top-left-radius: 200px 150px;
            border-top-right-radius: 200px 150px;
            height: 80%;
            z-index: 9999;
            padding-top: 30%;
            background: #fff url("./images/asset/ornamen-igov.png") bottom right no-repeat;
        }
    
        .bottom-splash span img {
            max-width: 75px;
            margin-bottom: -5px;
            margin-left: -10px;
        }
    
        .bottom-splash p {
            font-size: 16px;
        }
    
    
        .logo-splash img {
            max-width: 60%;
            text-align: center;
            margin-bottom: -20%;
    
        }
    </style>
    
  
    
    <div class="bgsd-gradient splash-page">
        <div class="top-splash">
            <div class="splash-logo">
                <img src="./images/asset/igovlogo.png">
            </div>
        </div>
        <div class="logo-splash text-center mt-4">
            <img src="./images/asset/logo-splash.png">
        </div>
        <div class="bottom-splash  text-center">
            <p>Welcome To<span><img src="./images/asset/IGOV-merah.png"></span><br>Students Information Service <b>IGOV</b></p>
    
            <div class="font-12 mt-4 pt-4">igov.umy.ac.id</div>
            

        
            <a href="{{ url('login') }}" class="mt-3 btn btn-center-m btn-m bgsd-pink border-gray-dark color-white rounded-sm font-900 text-uppercase">SIGN IN</a>
    
        </div>
    </div>
    </div>
    