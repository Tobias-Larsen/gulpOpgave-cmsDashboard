<div class="topHeader">
    <div class="profilePicture"></div>
    <a href="#" class="websiteURL">www.<p>GardenShop</p>.dk</a>
</div>

<header class="stickyHeader">
    <div>
        <i class="fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </div>
    <i class="fas fa-bars"></i>
</header>

<div class="blurBackdrop hide"></div>
<section class="menu menuHidden">
    <div class="cross">
        <div></div>
        <div></div>
    </div>

    <nav>
        <a href="#" class="current"><i class="fas fa-tachometer-alt"></i>dashboard</a>
        <a href="#"><i class="fas fa-box-open"></i>produkter</a>
        <a href="#"><i class="fas fa-chart-area"></i>analytics</a>
        <a href="#"><i class="fas fa-money-bill-wave-alt"></i>salg</a>
        <a href="#"><i class="fas fa-cog"></i>indstillinger</a>
    </nav>

    <div class="user">
        <i class="fas fa-user-circle clickable"></i>
        <button class="clickable">Min profil</button>
        <button class="clickable">Log ud</button>
    </div>
</section class="menu">




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    $(function () {
        $(".fa-bars").click(function () {
            $(".menu").removeClass("menuHidden");
            $(".blurBackdrop").fadeIn(200);
            $("html").addClass("noScroll");
        });

        $(".cross, .blurBackdrop").click(function () {
            $(".menu").addClass("menuHidden");
            $(".blurBackdrop").fadeOut(200);
            $("html").removeClass("noScroll");
        })
    });

</script>
