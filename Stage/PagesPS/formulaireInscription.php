<div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-form-group">
                        <label class="uk-form-label">Pseudo</label>
                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="uk-input" type="text" name="pseudo" placeholder="Votre pseudo" autofocus="" required="">
                        </div>
                    </div>

                    <div class="uk-form-group">
                        <label class="uk-form-label">Email</label>
                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input class="uk-input" type="email" name="email" placeholder="Votre adresse email" required="">
                        </div>
                    </div>

                    <div class="uk-form-group">
                        <label class="uk-form-label">Mot de passe</label>
                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input class="uk-input" type="password" name="mdp" placeholder="********" required="">
                        </div>
                    </div>

                    <div class="uk-form-group">
                        <div class="uk-position-relative w-100">
                            <label><input class="uk-checkbox" type="checkbox" name="newsletter"> Recevoir la newsletter (occasionnelle) du site</label><br>
                            <label><input class="uk-checkbox" type="checkbox" name="cgu" required=""> J'accepte les <a target="_blank" href="/mentions-legales-cgu/">Conditions Générales d'Utilisation</a></label>
                        </div>
                    </div>

                    <div class="uk-form-group" id="reCaptchaV2"></div>

                    <div class="uk-flex-middle uk-grid-small uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-width-expand@s uk-first-column">
                            <p><a href="/connexion/">Déjà un compte ?</a></p>
                        </div>
                        <div class="uk-width-auto@s uk-grid-margin uk-first-column">
                            <button type="submit" class="btn btn-primary">Je m'inscris</button>

                            <button class="btn btn-primary ajax-loader" style="display: none;" type="button" disabled="">
                                Je m'inscris
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>