<?php

/**
 * @copyright (c) sota1235
 */

namespace DIMuseum\Repositories;

use DIMuseum\DataAccess\User;

/**
 * Class UserRepository
 */
class UserRepository implements UserRepositoryInterface
{
    /** @var User */
    protected $user;

    /**
     * @param User  $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return string[]
     */
    public function getUserNames()
    {
        return $this->user->getAll();
    }
}
