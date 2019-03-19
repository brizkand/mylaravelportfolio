<!--Main Navigation-->
<header class="stickyTop">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark young-passion-gradient
    scrolling-navbar">
        <!-- Navbar brand -->
        <a class="navbar-brand animated rubberBand slower infinite" href="#">
            <img class="circle" src="/storage/briz_icon.png" alt="Kev Logo" style="width:40px;">
        </a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item @if($active === 'portfolio') active @endif">
                    <a class="nav-link" href="/portfolio">Portfolio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item @if($active === 'gallery') active @endif">
                    <a class="nav-link" href="/gallery">Gallery
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item @if($active === 'about') active @endif">
                    <a class="nav-link" href="/about">About
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <!--Left navigation-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if($active === 'contact') active @endif">
                    <a class="nav-link" href="/contact">Contact
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
</header>