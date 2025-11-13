<?php
class Database {
    private static array $users = [];
    private static array $cars = [];

    public static function addUser(Users $user): void {
        self::$users[] = $user;
    }

    public static function addCar(Car $car): void {
        self::$cars[] = $car;
    }

    public static function getUsers(): array {
        return self::$users;
    }

    public static function findUserByNickname($nickName): Users | null {
        foreach (self::$users as $user) {
            if ($user->getNickName() === $nickName) {
                return $user;
            }
        }
        return null;
    }


    public static function findUserByEmail($email): Users | null {
        foreach (self::$users as $user) {
            if ($user->getEmail() === $email) {
                return $user;
            }
        }
        return null;
    }

    public static function verifyLogin($nickOrEmail, $password): bool {
        foreach (self::$users as $user) {
            if (($user->getNickName() === $nickOrEmail || $user->getEmail() === $nickOrEmail)
                && $user->getPassword() === $password) {
                echo "Inicio de sesión exitoso";
                return true;
            }
        }
        echo "No se pudo iniciar sesión";
        return false;
    }

}
