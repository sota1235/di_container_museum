<?php

/**
 * @copyright (c) sota1235
 */

namespace DIMuseum\Controllers;

use DIMuseum\Services\UserService;

/**
 * Class IndexController
 */
class IndexController
{
    /** @var UserService */
    protected $userService;

    /**
     * @param UserService  $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return string
     */
    public function index()
    {
        $userNames = $this->userService->userNames();

        // TODO: return HTML
        return 'view';
    }
}
