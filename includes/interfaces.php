<?php

interface IDataBase {
    public function __construct(PDO $db);   // dependency injection

        // Tabel de users

    // Creates the "users" table
    public function createUsers();

    public function insertInUsers(User $user);

    public function getUsers();

        // Tabel de agenda asociat unui user

    public function createNotes($id);

    // ...
}
