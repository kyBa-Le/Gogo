<?php

namespace app\validation;

class UserValidation
{
    public static function validateUserSignUp($requestSignUp) {
        // Khởi tạo mảng lỗi
        $errors = [];

        // Kiểm tra email
        if (empty($requestSignUp['email']) || !filter_var($requestSignUp['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'not valid'; // Email không hợp lệ
        }

        // Kiểm tra username
        if (empty($requestSignUp['username'])) {
            $errors['username'] = 'cannot be empty'; // Username không được để trống
        }

        // Kiểm tra password
        if (empty($requestSignUp['password']) || strlen($requestSignUp['password']) < 6) {
            $errors['password'] = 'must be at least 6 characters'; // Mật khẩu phải ít nhất 6 ký tự
        }

        // Kiểm tra fullName
        if (empty($requestSignUp['fullName'])) {
            $errors['fullName'] = 'cannot be empty'; // Họ và tên không được để trống
        }

        // Kiểm tra phone
        if (empty($requestSignUp['phone']) || !preg_match('/^\d{10}$/', $requestSignUp['phone'])) {
            $errors['phone'] = 'must be 10 digits'; // Số điện thoại phải có đúng 10 chữ số
        }

        // Trả về mảng lỗi (nếu có)
        return $errors;
    }
}