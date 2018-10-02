<?php

namespace App\Model;

use RuntimeException;
use Illuminate\Hashing\HashManager;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Authenticator
{
    /**
     * The hasher implementation.
     *
     * @var \Illuminate\Hashing\HashManager
     */
    protected $hasher;

    /**
     * Create a new repository instance.
     *
     * @param  \Illuminate\Hashing\HashManager  $hasher
     * @return void
     */
    public function __construct(HashManager $hasher)
    {
        $this->hasher = $hasher->driver();
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $provider
     * @return Authenticatable|null
     */
    public function attempt(
        string $username,
        string $password,
        string $provider
    ): ?Authenticatable {
        if (! $model = config('auth.providers.'.$provider.'.model')) {
            throw new RuntimeException('Unable to determine authentication model from configuration.');
        }

        /** @var Authenticatable $user */
        if (! $user = (new $model)->where('email', $username)->first()) {
            return null;
        }

        if (! $this->hasher->check($password, $user->getAuthPassword())) {
            return null;
        }

        return $user;
    }
}
