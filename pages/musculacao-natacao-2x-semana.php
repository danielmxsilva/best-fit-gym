<section class="abest">

</section>
<div class="container-best container-form">
    <div class="box-title form-title">
    	<h1>MUSC+NAT. 2X/SEMANA.</h1>
    </div><!--box-title--> <div class="first-form form-first">
            <p>
Preencha os campos abaixo informando os dados solicitados para que possamos efetivar a sua matricula em nossa Academia.
Após envio aguarde nosso contato para finalização e aprovação de sua matricula..</p>
    </div><!--first-planos-->
    <div class="wrap-form form-planos">
        <form method="POST">
            <input type="hidden" name="identificador" value="Musc+Nat. 2X/Semana" />
            <select name="plano">
                <option value="anual 12X 298,00R$">Plano Anual 12X R$298,00 </option>
                <option value="semestral 6X 344,00R$">Plano Semestral 6X R$344,00</option>
                <option value="mensal 1X 395,00R$">Plano Mensal 1X 395,00</option>
            </select>
           <?php include('form-input.php')?>
            <input type="submit" name="acao" value="ENVIAR">
        </form>
    </div><!--wrap-form-->
</div><!--container-best-->
<?php include('footer.php')?>