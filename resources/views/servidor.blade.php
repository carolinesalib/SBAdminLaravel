@extends('layouts.dashboard')
@section('page_heading','Módulo servidor')

@section('section')
<div class="row">
	<div class="col-sm-12">
		@section ('5button_panel_title','Painel de controle')
		@section ('5button_panel_body')
			@include('widgets.button', array('class'=>'primary', 'value'=>'Novo servidor'))
			@include('widgets.button', array('class'=>'success', 'value'=>'Escolaridade'))
			@include('widgets.button', array('class'=>'warning', 'value'=>'Função'))
			@include('widgets.button', array('class'=>'danger', 'value'=>'Motivo de afastamento'))
			@include('widgets.button', array('class'=>'primary', 'value'=>'Quadro de horários'))
		@endsection
		@include('widgets.panel', array('as'=>'5button', 'header'=>true))
	</div>

	<div class="col-sm-12">
		@section ('cotable_panel_title','Lista de servidores')
		@section ('cotable_panel_body')
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Tipo</th>
					<th>Situação</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($servidores as $s)
				<tr>
					<td>{{$s->cod_servidor}}</td>
					<td>{{$s->nome}}</td>
					<td> - </td>
					<td>{{$s->tipo}}</td>
					<td>{{$s->situacao}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
	</div>
</div>
</div>
@stop