<?php require("header.html"); ?>
<main class="contact">
    <section class="bandeau-img">
        <h1>CONTACT</h1>
    </section>
    <form method="POST" action="#">
        <h1>ME CONTACTER</h1>
        <hr class="under-title" />
        <p class="under-hr">Vous pouvez ici me contacter en remplissant ce formulaire, ou alors en m'écrivant directement à l'adresse suivante : <a href="mailto:florian.allione@gmail.com">florian.allione@gmail.com</a></p>
        <div class="input-container">
            <div class="input-col">
                <label class="label-form" for="email">E-mail*</label>
                <input type="mail" name="email" id="email" required />
            </div>
            <div class="input-col">
                <label class="label-form" for="message">Votre message*</label>
                <textarea name="message" id="message"></textarea>
            </div>
        </div>
        <div class="submit-container">
            <input type="submit" name="envoyer" value="Envoyer" />
        </div>
    </form>
</main>
<?php require("footer.html"); ?>