@extends('layouts.dashboard')
@section('page_heading','Teste Turma Turno')
@section('section')
<table class="table">
	@foreach ($turnos as $t)
		<tr>
			<td> {{$t->id}} </td>
			<td> {{$t->nome}} </td>
			<td> {{$t->ativo}} </td>
			<td>
				<a href="/produtos/mostra/{{$t->id}}">
				  <span class="glyphicon glyphicon-search"></span>
				</a>
			</td>
			<td>
				<a href="/produtos/remove/{{$t->id}}">
				  <span class="glyphicon glyphicon-trash"></span>
				</a>
			</td>
		</tr>
	@endforeach
</table>
@stop
