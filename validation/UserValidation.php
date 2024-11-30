<?php

namespace app\validation;

use app\model\UserModel;

class UserValidation
{
    private $model;

    public function validateUserSignUp($requestSignUp) {
        // Khởi tạo mảng lỗi
        $errors = [];
        $this->model = new UserModel();
        $isExistEmail =$this->model->getUsersByEmail($requestSignUp['email']);
        if($isExistEmail !== false) {
            $errors['email'] = "Already exist, please sign in!";
        }

        // Kiểm tra email
        if (empty($requestSignUp['email']) || !filter_var($requestSignUp['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Not valid'; // Email không hợp lệ
        }

        // Kiểm tra username
        if (empty($requestSignUp['username'])) {
            $errors['username'] = 'Must not be empty'; // Username không được để trống
        }

        // Kiểm tra password
        if (empty($requestSignUp['password']) || strlen($requestSignUp['password']) < 6) {
            $errors['password'] = 'Must be at least 6 characters'; // Mật khẩu phải ít nhất 6 ký tự
        }

        // Kiểm tra fullName
        if (empty($requestSignUp['fullName'])) {
            $errors['fullName'] = 'Must not be empty'; // Họ và tên không được để trống
        }

        // Kiểm tra phone
        if (empty($requestSignUp['phone']) || !preg_match('/^\d{10}$/', $requestSignUp['phone'])) {
            $errors['phone'] = 'Must be 10 digits'; // Số điện thoại phải có đúng 10 chữ số
        }

        // Trả về mảng lỗi (nếu có)
        return $errors;
    }
}