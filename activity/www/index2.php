<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<?php
    require_once('db/conn.php'); 
    require_once('views/header2.php');
    //require_once('db/fetch-data.php');
    //$result = fetch_data();
    ?>
<div class="container">
<style>
@media only screen and (max-width: 990px) {
 .container.con {
    margin-top: 240px;
}
.about {
    background-image: url(images/about.jpg);
    -webkit-box-shadow: 0px 2px 25px -13px rgba(0, 0, 0, 0.26);
    -moz-box-shadow: 0px 2px 25px -13px rgba(0, 0, 0, 0.26);
    box-shadow: 0px 2px 25px -13px rgba(0, 0, 0, 0.26);
    width: 100%!important;
    height: 300px!important;
    border: 15px solid #fff;
    background-size: cover;
    background-position: inherit;
    position: absolute;
    /* bottom: 0; */
    right: 0!important;
}
}
.hero-wrap {
    width: 100%;
    height: 100%;
    position: inherit;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top center;
   
}
.ftco-navbar-light {
    background: transparent !important;
    position: absolute;
    top: -8px;
    left: 0;
    right: 0;
   
}
   
  .about {
    background-image: url(images/about.jpg);
   -webkit-box-shadow: 0px 2px 25px -13px rgba(0, 0, 0, 0.26);
    -moz-box-shadow: 0px 2px 25px -13px rgba(0, 0, 0, 0.26);
    box-shadow: 0px 2px 25px -13px rgba(0, 0, 0, 0.26); 
     width: 36%; 
    height: 400px;
	border:15px solid #fff;
    background-size: cover;
    background-position: inherit;
     position: absolute; 
    /* bottom: 0; */
     right: 126; 
}

.hero-wrap.js-fullheight {
	 background-image: url(images/bg_1.jpg);
    height: 413px;
	
    margin-top: 60px;
}
.col-md-5.form {
    margin-top: 100px;
    background: #ffffffd1;
    padding: 40px 40px 40px 40px;
    border-radius: 20px;
}

</style>

<div class="collapse navbar-collapse" id="ftco-nav">

</ul>
</div>
</div>
</nav>

<div class="hero-wrap js-fullheight" style="background-image: url(&quot;images/bg_1.jpg&quot;); height: 613px;">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true" style="height: 313px;">
<div class="col-md-7 ftco-animate fadeInUp ftco-animated">
<h1 class="mb-4">We Are Online Platform For Make Learn</h1>
<p class="caps">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>

</div>
<div class ="col-md-5 form">

        <div class="">
           
            <form method="POST" action="db/login.php" class=" p-5 border border-primary rounded">
                <h4 class="border border-primary text-center"> Sign in</h4>
                
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="john@doe.com" require>
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" require>
                </div>
                <div class="form-group text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                </div>
                <div class="form-group text-center">
                    Not registered yet? <a href="register.php">Sign up from here</a> 
                </div>
            </form>
        </div>
    </div>
    <!--/row-->
	
</div>
<!--/container-->

</div>

</div>
<div class="container con">
<div class ="row">
<h2 style="text-align:center;">
Who we are?
</h2>
<div class ="col-md-6">
<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>



It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<div  class="btn">
<a href="#" class="btn btn-lg btn-primary">Get in touch with us</a></div>
</div>
<div class ="col-md-6 about">
</div>
</div>

</div>
<?php ?>
</body>
<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>
</body>

<?php
   // require_once('db/conn.php'); 
    require_once('views/footer.php');
    //require_once('db/fetch-data.php');
    //$result = fetch_data();
    ?>





