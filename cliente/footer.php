				
			</div><!-- wrap-content -->
			<div id="footer">
					
					<p>Painel Administrador | Desenvolvido por Alunos da ETEC JARDIM ANGELA</p>
					
			</div>
		</div><!-- wrapper -->
	</div>
	</div>
	</body>
    <script type="text/javascript">// <![CDATA[
jQuery(function($) {
    $.mask.definitions['~']='[+-]';
    //Inicio Mascara Telefone
	$('input[type=tel]').mask("(99) 9999-9999?9").ready(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		phone = target.value.replace(/\D/g, '');
		element = $(target);
		element.unmask();
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	});
	//Fim Mascara Telefone
	$("#cep").mask("99999-999");
  	$("#cpf").mask("999.999.999-99");
	
	
	
   });
// ]]>
</script>
</html>