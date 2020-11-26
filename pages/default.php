<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
    <meta
            name="viewport"
            content="width=device-width,height=device-height,initial-scale=1"
    >
    <meta
            http-equiv="X-UA-Compatible"
            content="IE=9"
    >
    <meta
            name="keywords"
            content="Default, Template, Poor, Man, Content, Management"
    >
    <meta
            name="description"
            content="Default Demo for Poor Man's Content Management"
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
        default template
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
                                <em>Home</em>
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


        <div class="mainGroup extras">
            <main>
                <!--[if IE ]>
                <h2 style="color:red;">Error, Outdated Browser Detected</h2>
                <p>
                    <strong style="color:red;">You are recieving a vanilla version of this page because your browser is a decade or more out of date. For full / proper appearance, please revisit in a modern browser.</strong>
                </p>
                <![endif]-->
                <section class="jumbo">
                    <div class="inner">
                        <h2>Home Page</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla id dui nec euismod. Morbi vulputate elementum ante, in tempor purus congue ut. Proin ultrices cursus mi, vitae fermentum nibh tincidunt a. Curabitur venenatis neque sit amet metus egestas pellentesque. Etiam sagittis viverra lectus vel pretium. Maecenas consectetur nisl vel hendrerit consequat. Donec iaculis tristique molestie. Sed massa dolor, egestas ut congue a, placerat sit amet massa. Donec maximus sit amet nunc ut luctus. Quisque sit amet pharetra mauris.
                        </p>
                        <ul class="controls">
                            <li><a href="#" class="featured">Sample Featured Link</a></li>
                            <li><a href="#">Sample Normal Link</a></li>
                        </ul>
                        <!-- .inner --></div>
                    <!-- .jumbo --></section>
            </main>

            <div id="extras1">

                <section id="sample1">
                    <h2>Sample 1</h2>
                    <div><p>
                            Suspendisse volutpat porttitor massa, vestibulum commodo ligula ullamcorper a. Maecenas semper purus in suscipit fringilla. Proin auctor ligula sed mi sollicitudin sagittis. Aenean aliquet viverra odio sit amet sollicitudin. Mauris turpis urna, rutrum nec est et, laoreet accumsan eros. Suspendisse elementum placerat gravida. Sed non suscipit tellus, sed vestibulum purus.
                        </p>
                    </div>
                    <!-- #sample1 --></section>

                <section id="sample2">
                    <h2>Sample 2</h2>
                    <div><p>
                            Nullam pharetra tortor sem, in posuere nisi pellentesque eu. Praesent finibus metus quis orci tristique, eget pretium lorem tempus. In euismod nec lectus vel tincidunt. Nunc nec nisl vitae elit iaculis pretium sit amet ut arcu. Vivamus a turpis eleifend enim malesuada cursus. Morbi sapien metus, condimentum non purus a, tempor rhoncus mi. Integer id semper nulla. Donec dolor diam, ullamcorper sed odio vel, blandit consequat dui.
                        </p>
                    </div>
                    <!-- #sample2 --></section>
                <!-- #sample2 --></div>

            <div id="extras2">

                <section id="tallAdvert">
                    <h2>Advertisement</h2>
                    <div><img
                                src="images/skyscraperAdvertPlaceholder.png"
                                alt="advertisement placeholder"
                        >
                    </div>
                    <!-- #tallAdvert --></section>
                <!-- #tallAdvert --></div>

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
                <input type="hidden" name="contact_hash" value="7a7f5b8e9e970dd2a5c2e92f22a64f0a4cd17cf54f1283fe">
                <!-- .submitsAndHiddens --></div>
        </section></div>
    <!-- #contact.modal --></form>

<script src="/templates/default/scripts/default.template.js"></script>

</body></html>