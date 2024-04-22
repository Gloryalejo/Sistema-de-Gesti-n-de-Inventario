<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'last_name',
        'role_id',
        'email',
        'password',
    ];

    public static function jwtSecret(): string
    {
        return env('JWT_SECRET') ?? "secret";
    }

    public function encodeToken(): string
    {
        $payload = ["user_id" => $this->id];
        return JWT::encode($payload, $this->jwtSecret(), "HS256");
    }

    public static function decodeToken(string $token): object
    {
        return JWT::decode($token, new Key(User::jwtSecret(), 'HS256'));
    }

    public static function fromToken(string $token): User|null
    {
        if (User::validateToken($token) === false) {
            return null;
        }

        $decoded = User::decodeToken($token);
        return User::find($decoded->user_id);
    }

    public static function validateToken(string $token): bool
    {
        try {
            User::decodeToken($token);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
