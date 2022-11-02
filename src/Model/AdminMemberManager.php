<?php

namespace App\Model;

use PDO;

class AdminMemberManager extends AbstractManager
{
    public const TABLE = 'member';

    public function idPhoto(int $id): array
    {
        $statement = $this->pdo->prepare("SELECT photo FROM " . static::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }
}
