<?php

namespace Project\Controllers;
use project\models\Chat;
use project\models\Comment;


class ChatController extends \Core\Controller
{
    public function showAllMessages()
    {
        $this->title = 'Список сообщений';
        $messages = (new Chat) -> getAllMessages();

        return $this->render('chat/chat', [
            'messages' => $messages
        ]);
    }

    public function showMessage($params)
    {
        $message = (new Chat) ->getMessage($params['id']);
        $comments = (new Comment) -> getAllComments($params['id']);
        $this->title = "Сообщение $message[id]";

        return $this->render('chat/message', [
            'message' => $message,
            'comments' => $comments
        ]);
    }

    public function newMessage()
    {
        $newMessage = (new Chat) -> newMessage();
        header("Location: /");
    }

    public function newComment($params)
    {
        $message = (new Chat) ->getMessage($params['id']);
        $newComment = (new Comment) -> newComment($params['id']);
        header("Location: /message/$message[id]");
    }

    public function editMessage($params)
    {
        $this->title = "Редактор сообщения";
        $message = (new Chat) ->getMessage($params['id']);


        return $this->render('chat/editMessage', [
            'message' => $message
        ]);

    }

    public function saveMessage($params)
    {
        $editsMessage = (new Chat) -> saveMessage($params['id']);
        header("Location: /message/$params[id]");
    }
}