<div id="cadFormO" class="overlay" style="display:none;" onclick="document.getElementById('cadForm').style.display = 'none'; document.getElementById('cadFormO').style.display = 'none';"></div>
                <div id="cadForm" class="modal" style="display:none;">
                    <form method="POST" onsubmit="return validaForm();" action="cadastra.php">
                        <fieldset>
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" />
                        </fieldset>
                        <fieldset>
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" />
                        </fieldset>
                        <fieldset>
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" name="senha"/>
                        </fieldset>                 
                       
                        <input type="submit" value="Cadastrar"/>
                         <div id="erro"></div>
                    </form>
                </div>