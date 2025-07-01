<nav class="navbar navbar-inverse navbar-fixed-top premium-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Trio Logo" style="max-width:30px; border-radius:50%; border:3px solid #fff; margin-right:8px;"> <span style="color:#fff;">TRIO</span></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="about.php">About Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="dashboard/">Upload Notes</a></li>
            </ul>
        </div>
    </div>
</nav>
<style>
.premium-navbar {
    background: #0d47a1 !important;
    border: none;
    box-shadow: none;
}
.premium-navbar .navbar-nav > li > a,
.premium-navbar .navbar-brand {
    color: #fff !important;
    font-weight: 500;
    letter-spacing: 0.5px;
}
.premium-navbar .navbar-nav > li > a:hover,
.premium-navbar .navbar-nav > li > a:focus {
    color: #bbdefb !important;
    text-decoration: underline;
    background: transparent !important;
}
.premium-navbar .navbar-brand img {
    border: 3px solid #fff;
}
img {
    max-width: 30px;
    margin-top: 0;
    margin-bottom: 0;
    border-radius: 50%;
    border: 3px solid #fff;
    margin-left: 0;
    margin-right: 8px;
    vertical-align: middle;
}
.navbar-brand {
    display: flex;
    align-items: center;
}
</style>