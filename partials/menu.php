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
            <h1><a href="<?= ROOT_HTTP ?>">Default Template</a></h1>
            <div id="mainMenu">
                <a href="#" class="modalClose" hidden aria-hidden="true"></a>
                <div><nav>
                        <a href="#" class="modalClose" hidden aria-hidden="true"></a>
                        <ul>
                            <li>
                                <a href="<?= ROOT_HTTP ?>">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?= ROOT_HTTP ?>aBunchOFGobbledegook">
                                    404
                                </a>
                            </li>
                            <li>
                                <a href="<?= ROOT_HTTP ?>test">
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