<?php


namespace Project\Models;
use project\controllers\Protect;

class Chat extends \Core\Model
{
    public function getAllMessages()
    {
        return $this->findMany("SELECT * FROM chat");
    }

    public function getMessage($id)
    {
        return $this->findOne("SELECT * FROM chat WHERE id = $id");
    }

    public function newMessage()
    {
        $this->create("INSERT INTO chat SET heading = '$_POST[headline]', author = '$_POST[author]', summary = '$_POST[summary]', full = '$_POST[full]'");
    }

    public function saveMessage($id)
    {
        $this->save("UPDATE chat SET heading = '$_POST[headline]', author = '$_POST[author]', summary = '$_POST[summary]', full = '$_POST[full]' WHERE id = $id");
    }
}