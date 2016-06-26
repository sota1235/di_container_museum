<?php

/**
 * @copyright (c) sota1235
 */

namespace DIMuseum\Services;

use DIMuseum\Repositories\UserRepositoryInterface;

/**
 * Class UserService
 */
class UserService
{
    /** @var UserRepositoryInterface */
    protected $user;

    /**
     * @param UserRepositoryInterface  $user
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @return string[]
     */
    public function userNames()
    {
        return $this->user->getUserNames();
    }
}
