<?php
class UsersView extends Users {
    public function showUser($firstName) {
        $result = $this->getUser($firstName);
        echo "Full name: " . $result[0]['users_firstname'] . ' ' . $result[0]['users_lastname'];
    }

    public function showUsers() {
        $results = $this->getUsers();
        foreach ($results as $result) {
        echo "Full name: " . $result['users_firstname'] . ' ' . $result['users_lastname'] . '<br>';
        }
    }
}

