<?php
namespace app\controller;

session_start();
use app\core\Response;
use app\model\UserModel;
use app\thirdPartiesService\EmailSender;
use app\thirdPartiesService\SignUpEmail;
use app\validation\UserValidation;

class UserController
{
    private UserModel $userModel;
    private Response  $response;
    private UserValidation $userValidation;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userValidation = new UserValidation();
    }

    public function signUp($data) {
        $emailSender = new EmailSender();

        $errors = $this->userValidation->validateUserSignUp($data);
        $responseMessage = [];
        if (!empty($errors)) {
            $responseMessage['success'] = false;
            $responseMessage['errors'] = $errors;
            $this->response = new Response(json_encode($responseMessage), 400);
            $this->response->addHeader('Content-Type', 'application/json');
            $this->response->send();
            exit;
        }

        $this->userModel->createUser(
            $data['email'],
            $data['username'],
            $data['password'],
            $data['fullName'],
            $data['phone']);

        $signUpEmail = new SignUpEmail($data['username']);
        $emailSender->sendEmail(
            $data['email'],
            $data['username'],
            $signUpEmail->subject,
            $signUpEmail->emailContent );

        $responseMessage['success'] = true;
        $responseMessage['message'] = "User created";
        $this->response = new Response(json_encode($responseMessage));
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }

    public function signIn($data) {
        $email = $data['email'];
        $password = $data['password'];
        $user = $this->userModel->getUserByEmailAndPassword($email, $password);
        if(!$user) {
            $responseMessage['success'] = false;
            $responseMessage['message'] = 'Email or password is incorrect';
            $this->response = new Response(json_encode($responseMessage), 404);
        }else {
            $responseMessage['success'] = true;
            $responseMessage['message'] = "Sign in successfully";
            $this->response = new Response(json_encode($responseMessage));
            $_SESSION['user'] = $user;
            $_SESSION['login_time'] = time(); // Lưu thời gian đăng nhập
        }
        $this->response->addHeader('Content-Type', 'application/json');
        $this->response->send();
    }
}