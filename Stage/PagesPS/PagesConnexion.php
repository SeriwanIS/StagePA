<div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-form-group">
                        <label class="uk-form-label">Pseudo</label>
                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="uk-input" type="text" name="pseudo" placeholder="Pseudo" autofocus="" required="">
                        </div>
                    </div>

                    <div class="uk-form-group">
                        <label class="uk-form-label">Mot de passe <small><a href="/mot-de-passe-oublie/">Mot de passe oublié ?</a></small></label>
                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input class="uk-input" type="password" name="mdp" placeholder="********" required="">
                        </div>
                    </div>

                    <div class="uk-form-group">
                        <label><input class="uk-checkbox" type="checkbox" name="rememberMe" checked=""> Se souvenir de moi</label>
                    </div>

                    <div class="uk-flex-middle uk-grid-small uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-width-expand@s uk-first-column">
                            <p><a href="/inscription/">Pas encore de compte ?</a></p>
                        </div>
                        <div class="uk-width-auto@s uk-grid-margin uk-first-column">
                            <button type="submit" class="btn btn-primary">Connexion</button>

                            <button class="btn btn-primary ajax-loader" style="display: none;" type="button" disabled="">
                                Connexion
                                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>