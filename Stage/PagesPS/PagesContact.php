<div class="page-content-inner">

        <!-- Intro banner container  -->
        <h1 class="mb-0">Contact</h1>
        <p class="mt-2">Une demande ? Vous rencontrez un problème technique ? Autre ? N'hésitez pas à nous contacter !</p>

        <div class="uk-child-width-1-2@m uk-flex-middle uk-grid uk-grid-stack" uk-grid="">

            <div class="uk-first-column">
                <form uk-grid="" class="uk-grid default-ajax" method="POST" action="/contact/traitement">
                    <input type="hidden" name="token" value="08c967227442b34f53750641451f8fc1767b73565b786c8dc71d69b05339c895">
                    <div class="uk-width-1-1@s uk-first-column">
                        <label class="uk-form-label">Objet de votre demande</label>
                        <select class="uk-select" name="sujet" autofocus="" required="">
                            <option>Demande de partenariat</option>
                            <option>Demande de services informatiques</option>
                            <option>Je rencontre un problème technique sur le site</option>
                            <option>Autre demande</option>
                        </select>
                    </div>
                    <div class="uk-width-1-2@s uk-first-column uk-grid-margin">
                        <label class="uk-form-label">Votre nom</label>
                        <input class="uk-input" type="text" placeholder="Nom" name="nom" required="">
                    </div>
                    <div class="uk-width-1-2@s uk-grid-margin">
                        <label class="uk-form-label">Votre adresse email</label>
                        <input class="uk-input" type="email" placeholder="Email" name="email" required="">
                    </div>
                    <div class="uk-width-1-1@s uk-grid-margin uk-first-column">
                        <label class="uk-form-label">Message</label>
                        <textarea class="uk-textarea" placeholder="Entrez votre message ici..." style=" height:160px" name="message" required=""></textarea>
                    </div>
                    
                    <div class="uk-width-1-1@s uk-grid-margin uk-first-column">
                        <div class="g-recaptcha" data-sitekey="6LccaEQUAAAAAAkyji29WnO5dyqrcWu3Tcu2Ox0u"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LccaEQUAAAAAAkyji29WnO5dyqrcWu3Tcu2Ox0u&amp;co=aHR0cDovL3d3dy5wcmltZnguY29tOjgw&amp;hl=fr&amp;v=UFwvoDBMjc8LiYc1DKXiAomK&amp;size=normal&amp;cb=179tcnv0uc96" width="304" height="78" role="presentation" name="a-un9ddxje3m8m" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                    </div>

                    <div class="uk-grid-margin uk-first-column">
                        <button type="submit" class="btn btn-success">Envoyer</button>
                        <button class="btn btn-success ajax-loader" style="display: none;" type="button" disabled="">
                            <span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>
                            Chargement...
                        </button>
                    </div>
                </form>

            </div>
            <div class="uk-grid-margin uk-first-column">

                <iframe width="100%" height="450" src="https://maps.google.com/maps?width=100%&amp;height=450&amp;hl=en&amp;q=3%20place%20Jean%20Nouzille%2C%2014000%20Caen+(PrimFX.com%20-%20Micro-entreprise%20Boris%20Flesch)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0;" allowfullscreen=""></iframe>

            </div>

        </div>


    </div>