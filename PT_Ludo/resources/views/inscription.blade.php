<div id="inscription--modal" class="modal fade">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Inscription</h3>
      </div>
      <div class="modal-body">
        <form action="/inscription" method="post">
          <div class="form-group">
            <label>Nom</label>
            {{ csrf_field() }}
            <p><input class="form-control" type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}"></p>
            @if($errors->has('nom'))
              <p>{{ $errors->first('nom') }}</p>
            @endif
          </div>

          <div class="form-group">
            <label>Prénom</label>
            <p><input class="form-control" type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}"></p>
            @if($errors->has('prenom'))
              <p>{{ $errors->first('prenom') }}</p>
            @endif
          </div>

          <div class="form-group">
            <label>Adresse mail</label>
            <p><input class="form-control" type="mail" name="email" placeholder="Email" value="{{ old('email') }}"></p>
            @if($errors->has('email'))
              <p>{{ $errors->first('email') }}</p>
            @endif
          </div>

          <div class="form-group">
            <label>Mot de passe</label>
            <p><input class="form-control" type="password" name="password" placeholder="Mot de passe"></p>
            @if($errors->has('password'))
              <p>{{ $errors->first('password') }}</p>
            @endif
          </div>

          <p><input class="form-control" type="password" name="password_confirmation" placeholder="Confirmer Mot de passe"></p>
          @if($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
          @endif
          <p><input class="btn btn-primary" type="submit" value="M'inscrire"></p>
        </form>
      </div>
    </div>
  </div>
</div>
