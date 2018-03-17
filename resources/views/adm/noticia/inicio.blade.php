@extends('layouts.master')

@section('content')
<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"> </i>Noticias cadastrados</h4>
			</div>
			<div class="widget-body">
				<a href="{{route('adm.noticia.cadastrar')}}" class="btn btn-warning">
					<i class="icon-plus icon-white"></i> Nova Noticia
				</a>
				<br /><br />
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="table-grey-head">
							<th width="22%">Titulo</th>
							<th width="12%">Resumo</th>
							<th width="10%">Data</th>
							<th width="10%">Palavras-chaves</th>
							<th width="10%">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($noticia as $n)
						<tr class="odd gradeX">
							<td>{{$n->titulo}}</td>
							<td>{{$n->resumo}}</td>
							<td>{{$n->data}}</td>
							<td>{{$n->palavras_chaves}}</td>
							<td>
								<div class="btn-group">
									<a class="btn" href="javascript:;" data-toggle="dropdown"><i class="icon-cog"></i> Ações</a><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span> </a>
									<ul class="dropdown-menu">
										<li>
											<a href="{{route('adm.noticia.editar',$n->id)}}"><i class="icon-pencil"></i> Editar</a>
										</li>
										<li>
											<a href="{{route('adm.noticia.excluir',$n->id)}}"><i class="icon-remove"></i> Deletar</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="row-fluid">
					<div class="span6">
						<p style="padding-top:5px;">Total de noticias: {{$noticia->count()}}</p>
					</div>
					<div class="span6">
						<div class="pagination" style="text-align: right;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
