<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class Utilisateur extends Model implements Authenticatable
{

  use BasicAuthenticatable;

  public $timestamps = false;

  protected $fillable = ['nom','prenom','email','mdp'];

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
      return $this->mdp;
  }

  /**
   * Get the column name for the "remember me" token.
   *
   * @return string
   */
  public function getRememberTokenName()
  {
      return '';
  }
}
