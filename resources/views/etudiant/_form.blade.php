@if (isset($etudiant))
{!! Form::model ($etudiant, ['route' => ['updateEtudiant', $etudiant->id], 'method'=>'put']) !!}
@else
{!! Form::open(['route'=> 'addEtudiant']) !!}
@endif

	<div class="form-group row">
		<div class="form-inline col-md-4">
			<label>nom</label>
			<input class="form-control" type="text" name="nom" value="@if (isset($etudiant)) {{$etudiant->nom}} @else {{old('nom')}} @endif">
		</div>

		<div class="form-inline col-md-4">
			<label>prenom</label>
			<input class="form-control" type="text" name="prenom" value="@if (isset($etudiant)) {{$etudiant->prenom}} @else {{old('prenom')}} @endif">
		</div>

		<div class="col-md-2" style="margin-top: 25px;">
			<button type="submit" class="btn btn-success">Valider</button>
		</div>
	</div>

{!! Form::close() !!}
