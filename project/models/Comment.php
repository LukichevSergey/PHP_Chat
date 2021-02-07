<?php


namespace Project\Models;


class Comment extends \Core\Model
{
    public function getAllComments($id)
    {
        return $this->findMany("SELECT * FROM chat_comments LEFT JOIN chat ON chat.id = chat_comments.message_id WHERE chat.id = $id");
    }

    public function newComment($id)
    {
        $this->create("INSERT INTO chat_comments SET message_id = '$id', comment = '$_POST[addComment]'");
    }

}