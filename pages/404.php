<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width,height=device-height,initial-scale=1"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=9"
    >
    <link
        rel="shortcut icon"
        href="/favicon.ico"
    >
    <!--[if !IE]>-->
    <link
        rel="stylesheet"
        href="/templates/default/vars.screen.css"
        media="screen,projection,tv"
    >
    <link
        rel="stylesheet"
        href="/templates/default/layout.screen.css"
        media="screen,projection,tv"
    >
    <link
        rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
        crossorigin="anonymous"
        media="screen,projection,tv"
    >
    <link
        href="//fonts.googleapis.com/css2?family=Poppins" rel="stylesheet"
        media="screen,projection,tv"
    >
    <!--<![endif]-->
    <title>
        404 - Not Found - default template
    </title>
</head><body>

<input
    type="checkbox"
    id="toggle_darkMode"
    class="toggle remember"
    hidden
    aria-hidden="true"
>

<input
    type="checkbox"
    id="toggle_stickyTop"
    class="toggle remember"
    hidden
    aria-hidden="true"
>

<div id="fauxBody"><div id="fauxInner">

        <header id="top">
            <h1><a href="/">Default Template</a></h1>
            <div id="mainMenu">
                <a href="#" class="modalClose" hidden aria-hidden="true"></a>
                <div><nav>
                        <a href="#" class="modalClose" hidden aria-hidden="true"></a>
                        <ul>
                            <li>
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="/aBunchOFGobbledegook">
                                    404
                                </a>
                            </li>
                            <li>
                                <a href="/static/test">
                                    Test
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </nav></div>
                <!-- #mainMenu --></div>

            <a href="#mainMenu" class="mainMenuOpen" hidden aria-hidden="true"></a>

            <label for="toggle_darkMode" class="label_darkMode" hidden aria-hidden="true">
                <i><!-- day/night icon --></i>
                <span>
					Switch to
					<span>Light<span>/</span></span>
					<span>Dark</span>
					Theme
				</span>
            </label>

            <label for="toggle_stickyTop"></label>

        </header>


        <div class="mainGroup noExtras">
            <main>
                <!--[if IE ]>
                <h2 style="color:red;">Error, Outdated Browser Detected</h2>
                <p>
                    <strong style="color:red;">You are recieving a vanilla version of this page because your browser is a decade or more out of date. For full / proper appearance, please revisit in a modern browser.</strong>
                </p>
                <![endif]-->

                <section class="httpError">
                    <div>
                        <h2>404 - Not Found</h2>
                        <p>
                            Your request
                            "<em>/aBunchOFGobbledegook</em>"
                            could not be served at this time.
                        </p>
                    </div>
                </section>
            </main>

            <!-- .mainGroup --></div>

        <footer id="bottom">
            <hr>
            Powered by Squire 3.0<br>
            Jason M. Knight, November 2020
        </footer>

        <!-- #fauxInner, #fauxBody --></div></div>
<form action="/contact" method="post" id="contact" class="modal">
    <a href="#" class="modalClose" hidden aria-hidden="true"></a>
    <div><section>
            <a href="#" class="modalClose" hidden aria-hidden="true"></a>
            <h2>Contact Us</h2>
            <fieldset>
                <label>
                    Your Name:<br>
                    <input type="text" name="name" required><br>
                </label><label>
                    Your E-mail Address:<br>
                    <input type="email" name="email" required><br>
                </label><label>
                    Subject:<br>
                    <input type="text" name="subject" required><br>
                </label><label>
                    Message:<br>
                    <textarea name="message" required></textarea><br>
                </label>
            </fieldset>
            <div class="submitsAndHiddens">
                <button>Send Message</button>
                <input type="hidden" name="contact_hash" value="1ca951af768895d5b6950eb11599834b1fd737c8debe9995">
                <!-- .submitsAndHiddens --></div>
        </section></div>
    <!-- #contact.modal --></form>

<script src="/templates/default/scripts/default.template.js"></script>

</body></html>