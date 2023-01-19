@vite(['resources/less/components/header.css'])

<header class="header-container">
    <div class="header-top">
        <div class="inner-content">
            <ul class="emails-time">
                <li><a href="#">@svg('email')info@gmail.com</a></li>
                <li><a>@svg('clock', 'black') Mon-Sat 8:00-5:00 Sunday CLOSED</a></li>
            </ul>

            <ul class="user-authentication">
                <li><a href="#">LOGIN</a></li>
                <li><a href="#">REGISTER</a></li>
                <li><a href="#">ADMIN</a></li>
            </ul>

        </div>
    
    </div>
    <nav class="header">
        <a class="logo"><img alt="" src="{{ asset('/images/logo.png') }}" /></a>
        <ul class="nav-menu">
            <li><a href="/">HOME</a></li>
            <li><a href="#">BUY A CAR</a></li>
            <li><a href="#">SELL A CAR</a></li>
            <li><a href="#">RENT A CAR</a></li>
            <li><a href="#">SERVICES & TOOLS</a></li>
        </ul>
    </nav>
</header>

<script>
   window.addEventListener('load', loadShow);
    function loadShow(){
        setTimeout(() => {
            document.querySelector('.header-container').classList.add('show');
        }, 400);
    }
</script>