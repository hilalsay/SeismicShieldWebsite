<!-- navbar.php -->

<nav id="navbar">
    <div class="container">
        <div class="logo">
            <img src="https://i.etsystatic.com/30478518/r/il/c8a017/3603054990/il_1588xN.3603054990_rv02.jpg" alt="SeismicShield" width="40" height="40">
            <a href="<?php echo base_url('website'); ?>">SEISMICSHIELD</a>
        </div>

        <ul class="header_ul">
            <li class="header_li"><a href="/about">Hakkında</a></li>
            <li><a href="/projeler">Projeler</a></li>
            <li><a href="/about">İletişim</a></li>
            <li><a class="daha_fazla" href="/about">Daha Fazla +</a></li>
        </ul>
    </div>
</nav>

<style>
    /* Navbar Styles */
    #navbar {
        background: #ffffff;
        color: black;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
        overflow: auto;
    }

    .logo {
        float: left;
        font-size: 24px;
        margin-right: 20px;
    }

    .logo img {
        width: 40px;
        height: auto;
        vertical-align: middle;
    }

    .logo a {
        text-decoration: none;
        color: #333;
        vertical-align: middle;
    }

    .header_ul {
        list-style: none;
        float: right;
    }

    .header_ul li {
        display: inline-block;
        margin-left: 20px;
    }

    .header_ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .header_ul li a:hover {
        color: #007bff;
    }

    .daha_fazla {
        background-color: #007bff;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .daha_fazla:hover {
        background-color: #0056b3;
    }
</style>
