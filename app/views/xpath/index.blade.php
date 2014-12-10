@extends('layout.application')
@section('title', 'Cadastro de Xpath')
@section('content')


<h1>Cadastre os Xpaths</h1>
	<div>
		{{Form::open(['url' => 'xpath'])}}
		{{Form::label('sku', "Sku: ")}}
		{{Form::text('sku')}}

		{{Form::label('imagem', "Imagem: ")}}
		{{Form::text('imagem')}}

		{{Form::submit('Enviar')}}
	{{Form::close()}}
	</div>







<script>
		var $selects = $('select');
		$('select').change(function () {
		    $('option:hidden', $selects).each(function () {
		        var self = this,
		            toShow = true;
		        $selects.not($(this).parent()).each(function () {
		            if (self.value == this.value) toShow = false;
		        })
		        if (toShow) $(this).show();
		    });
		    if (this.value != 0) 
		      $selects.not(this).children('option[value=' + this.value + ']').hide();
		});

		//alert($("#form option:selected").text());
		$("#form").change(function() {
		  var action = $(this).val() == "sku" ? "site" : "sku";
		  $("#site").attr("id", action);
		});
</script>
@stop
