<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Setter customizado da senha
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value.config('app.key'));
    }

    /**
     * Find atualizado
     * @param string|int $search Caso numérico usa para buscar o usuário pelo id,
     * caso string usa para buscar o usuario por e-mail
     * @return User|null Retorna o resultado da busca
     */
    public static function find($search)
    {
        if(is_numeric($search))
            return self::where('id', $search)->first();
        else
            return self::where('email', $search)->first();
    }    

    /**
     * Find or fail atualizado, caso não obtenha resultado do find
     * aborta com o código especificado
     * @param string|int $search Caso numérico usa para buscar o usuário pelo id,
     * caso string usa para buscar o usuario por e-mail
     * @param int $code O código do erro a ser exibido caso não seja encontrado o registro
     * @return User O usuário buscado
     */
    public static function findOrFail($search, int $code = 404)
    {
        $result = self::find($search);
        abort_if(empty($result), $code);
        return $result;
    }

    /**
     * Checa se os dados de login são válidos
     * @param string $email O email do usuário
     * @param string $password A senha do usuário
     * @return bool 
     */
    public static function check(string $email, string $password) : bool
    {
        $user = self::find($email);
        if(!empty($user)) {
            return Hash::check($password.config('app.key'), $user->password);
        }
        return false;
    }
}
