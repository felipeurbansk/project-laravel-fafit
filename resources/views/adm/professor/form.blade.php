@extends('layouts.master')

@section('content')

<div class="row-fluid">
	<div class="span12">
		<div class="widget">
			<div class="widget-title">
				@isset($professor)
				<h4><i class="icon-pencil"> </i>Alterar Professor</h4>
				@else
				<h4><i class="icon-plus"> </i>Cadastrar Professor</h4>
				@endisset

			</div>
			<div class="widget-body">

				<form action="@isset($professor) {{route('adm.professor.atualizar')}} @else {{route('adm.professor.salvar')}} @endisset" method="post" class="form-horizontal" enctype="multipart/form-data" >
					{{csrf_field()}}
					@isset($professor)
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="id" value="{{$professor->id}}">
					@endisset
					<div class="control-group {{$errors->has('nome') ? 'error' : ''}}">
						<label class="control-label" for="nome">Nome:</label>
						<div class="controls">
							<input type="text" class="span5" name="nome" id="nome" value="@isset($professor){{$professor->nome}}@else{{old('nome')}}@endisset"/>
							<br>
							<span class="help-inline">{{$errors->first('nome')}}</span>
						</div>
					</div>
					<div class="control-group {{$errors->has('titulacao') ? 'error' : ''}}">
						<label class="control-label" for="titulacao">Titulação:</label>
						<div class="controls">
							<input type="text" class="span5" name="titulacao" id="titulacao" value="@isset($professor){{$professor->titulacao}}@else{{old('titulacao')}}@endisset"/>
							<br>
							<span class="help-inline">{{$errors->first('titulacao')}}</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Foto:</label>
						<div class="controls">
							<input type="file" name="img">
						</div>
					</div>
					<div class="control-group {{$errors->has('descricao') ? 'error' : ''}}">
						<label class="control-label">Descrição:</label>
						<div class="controls">
							<textarea class="span5" rows="6" name="descricao" id="descricao">@isset($professor){{$professor->descricao}}@else{{old('descricao')}}@endisset</textarea>
							<br>
							<span class="help-inline" >{{$errors->first('descricao')}}</span>
						</div>
					</div>
					<div class="control-group {{$errors->has('facebook') ? 'error' : ''}}">
						<label class="control-label" for="facebook">Facebook:</label>
						<div class="controls">
							<input type="text" class="span5" name="facebook" id="facebook" value="@isset($professor){{$professor->facebook}}@else{{old('facebook')}}@endisset"/>
							<br>
							<span class="help-inline">{{$errors->first('facebook')}}</span>
						</div>
					</div>
					<div class="control-group {{$errors->has('linkedin') ? 'error' : ''}}">
						<label class="control-label" for="linkedin">Linkedin:</label>
						<div class="controls">
							<input type="text" class="span5" name="linkedin" id="linkedin" value="@isset($professor){{$professor->linkedin}}@else{{old('linkedin')}}@endisset"/>
							<br>
							<span class="help-inline">{{$errors->first('linkedin')}}</span>
						</div>
					</div>
					<div class="control-group {{$errors->has('google') ? 'error' : ''}}">
						<label class="control-label" for="google">Google:</label>
						<div class="controls">
							<input type="text" class="span5" name="google" id="google" value="@isset($professor){{$professor->google}}@else{{old('google')}}@endisset"/>
							<br>
							<span class="help-inline">{{$errors->first('google')}}</span>
						</div>
					</div>
					<div class="control-group {{$errors->has('coordenador') ? 'error' : ''}}">
						<label class="control-label">Coordenador:</label>
						<div class="controls">
							<select name="coordenador" id="coordenador">
								<option value="0">Não</option>
								<option value="1" {{isset($professor) && $professor->coordenador == 1 ? 'selected' : ''}}>Sim</option>
							</select>
							<br>
							<span class="help-inline">{{$errors->first('coordenador')}}</span>
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" class="btn blue"><i class="icon-ok"></i> Salvar</button>
						<a href="{{route('adm.professor')}}">ou cancelar</a>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection
