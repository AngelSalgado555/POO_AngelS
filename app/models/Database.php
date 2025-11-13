<?php
class Database {
    private static array $users = [];

    public static function addUser(Users $user): void {
        self::$users[] = $user;
    }


    public static function findUserByNick(string $nick): ?Users {
        foreach (self::$users as $user) {
            if ($user->getNickName() === $nick) {
                return $user;
            }
        }
        return null;
    }


    public static function findUserByEmail(string $email): ?Users {
        foreach (self::$users as $user) {
            if ($user->getEmail() === $email) {
                return $user;
            }
        }
        return null;
    }

    public static function verifyLogin(string $nickOrEmail, string $password): bool {
        foreach (self::$users as $user) {
            if (($user->getNickName() === $nickOrEmail || $user->getEmail() === $nickOrEmail)
                && $user->getPassword() === $password) {
                return true;
            }
        }
        return false;
    }

}
