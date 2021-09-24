<section class="abest">

</section>
<div class="container-best container-form">
    <div class="box-title form-title">
    	<h1>NATAÇÃO 1X/SEMANA.</h1>
    </div><!--box-title--> <div class="first-form form-first">
            <p>
Preencha os campos abaixo informando os dados solicitados para que possamos efetivar a sua matricula em nossa Academia.
Após envio aguarde nosso contato para finalização e aprovação de sua matricula..</p>
    </div><!--first-planos-->
    <div class="wrap-form form-planos">
        <form method="POST">
            <input type="hidden" name="identificador" value="Natação 1X/Semana." />
            <select name="plano">
                <option value="anual 12X 165,00R$">Plano Anual 12X R$165,00 </option>
                <option value="semestral 6X 189,00R$">Plano Semestral 6X R$189,00</option>
                <option value="mensal 1X 210,00R$">Plano Mensal 1X 210,00</option>
            </select>
           <?php include('form-input.php')?>
            <input type="submit" name="acao" value="ENVIAR">
        </form>
    </div><!--wrap-form-->
</div><!--container-best-->
<?php include('footer.php')?>