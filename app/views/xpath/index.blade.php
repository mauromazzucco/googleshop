@extends('layout.application')
@section('title', 'Cadastro de Xpath')
@section('content')


<h1>Cadastre os Xpaths</h1>

	{{ Form::open(array('url' => url('xpath'), 'role'=>'form')) }}

	<div class="form-group">	
		{{Form::label('sku', "Sku: ")}}
		{{Form::text('sku')}}
	</div>

	<div class="form-group">	
		{{Form::label('nome', "Nome: ")}}
		{{Form::text('nome')}}
	</div>

	<div class="form-group">	
		{{Form::label('preco_de', "Preço De: ")}}
		{{Form::text('preco_de')}}
	</div>

	<div class="form-group">	
		{{Form::label('preco_por', "Preço Por: ")}}
		{{Form::text('preco_por')}}
	</div>

	<div class="form-group">	
		{{Form::label('imagem', "Imagem: ")}}
		{{Form::text('imagem')}}
	</div>
		{{Form::hidden('id_site' , Session::get('id_site'))}}
		{{Form::submit('Enviar', ['class'=>'btn btn-default'])}}
	{{Form::close()}}







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
