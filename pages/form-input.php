<input type="text" name="nome" placeholder="Nome Completo" required>
<input type="text" name="telefone" placeholder="Telefone" required>
<input type="text" name="email" placeholder="E-mail" required>
<input type="text" name="rua" placeholder="Rua" required>
<input type="text" name="n-casa" placeholder="Nº" required>
<input type="text" name="cpf" placeholder="CPF" required>
<input type="text" name="nascimento" placeholder="Data de Nascimento" required>
<select name="sexo" required>
    <option value="">Sexo</option>
    <option value="masculino">Masculino</option>
    <option value="feminino">Feminino</option>
    <option value="outro">Outro</option>
</select>
<select name="pagamento" required>
    <option value="">Forma de Pagamento</option>
    <option value="cartao de credito">Cartão de crédito (Todas as bandeiras)</option>
    <option value="credito recorrente">Crédito Recorrente (Não utiliza limite do cartão de crédito)</option>
    <option value="cheque">Cheque</option>
    <option value="boleto">Boleto Bancário (Em Condições Diferenciadas)</option>
</select>
<div id="resultado"></div>
<script src="<?php echo INCLUDE_PATH;?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH;?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH;?>js/form-planos.js"></script>