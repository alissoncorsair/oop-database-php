<?php


class UsersController extends Users {

    public function createUser($firstName, $lastName, $dateofbirth) {
        $this->setUser($firstName, $lastName, $dateofbirth);
    }

}
