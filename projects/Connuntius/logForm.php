<div id="logFormO" class="overlay" style="display:none;" onclick="document.getElementById('logForm').style.display = 'none'; document.getElementById('logFormO').style.display = 'none';"></div>
                <div id="logForm" class="modal login-form" style="display:none;">
                    <form method="POST" onsubmit="return validaFormL();" action="loga.php">
                    <fieldset>
                        <label for="email">Email:</label>
                        <input type="text" id="emaill" name="email"/>
                    </fieldset>
                    <fieldset>
                        <label for="senha">Senha:</label>
                        <input type="password" id="senhal" name="senha"/>
                    </fieldset>
                    
                    <input type="submit" value="Entrar" />
                    <div id="errol"></div>
                </form>
                </div>