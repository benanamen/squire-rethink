<footer id="bottom">
    <hr>
    Powered by Squire 3.0<br>
    Jason M. Knight, November 2020
</footer>

<!-- #fauxInner, #fauxBody --></div></div>
<form action="<?= ROOT_HTTP ?>contact" method="post" id="contact" class="modal">
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
                <input type="hidden" name="contact_hash" value="<?= hashCreate() ?>">
                <!-- .submitsAndHiddens --></div>
        </section></div>
    <!-- #contact.modal --></form>

<script src="<?= ROOT_HTTP ?>js/default.template.js"></script>

</body></html>