<?php

namespace app\controller;

use app\core\Response;

class MiddleWare
{
    private $response;

    public static function isSignedIn() {
        session_start();
        if (!isset($_SESSION['user']) || !isset($_SESSION['login_time'])) {
            return false;
        }
        $currentTime = time();
        if ($currentTime - $_SESSION['login_time'] > 5 * 24 * 60 * 60) {
            session_unset();
            session_destroy();
            return false;
        }
        return true;
    }

    public function getIsSignedIn(): void
    {
        $isLoggedIn = ['isSignedIn' => self::isSignedIn()];
        if ($isLoggedIn) {
            $this->response = new Response($isLoggedIn);
        } else {
            $this->response = new Response($isLoggedIn, 401);
        }
        $this->response->send();
    }
}