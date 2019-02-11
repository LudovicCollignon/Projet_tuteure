<div id="connexion--modal" class="modal fade">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Connexion</h3>
      </div>
      <div class="modal-body">
        <form action="/connexion" method="post">
          {{ csrf_field() }}
          <p><input type="mail" name="email" placeholder="Email" value="{{ old('email') }}"></p>
          @if($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
          @endif
          <p><input type="password" name="password" placeholder="Mot de passe"></p>
          @if($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
          @endif
          <p><input id="seConnecter" type="submit" value="Se connecter"></p>
        </form>
      </div>
    </div>
  </div>
</div>
