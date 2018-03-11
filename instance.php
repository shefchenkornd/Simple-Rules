<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 11.03.18
 * Time: 19:58
 */
class UserController
{
    protected $userService;
    protected $userRepository;
    protected $mailer;
    protected $logger;

    public function __construct(
        Mailer $mailer,
        UserService $userService,
        UserRepository $userRepository,
        Logger $logger
    )
    {
        $this->mailer = $mailer;
        $this->userService = $userService;
        $this->userRepository = $userRepository;
        $this->logger = $logger;
    }
}
