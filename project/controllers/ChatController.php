<?php

namespace Project\Controllers;
use project\models\Chat;
use project\models\Comment;
use project\controllers\Protect;


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
        if(strlen($_POST['headline']) > 0 &&
            strlen($_POST['author']) > 0 &&
            strlen($_POST['summary']) > 0 &&
            strlen($_POST['full']) > 0)
        {
            $newMessage = (new Chat) -> newMessage();
            header("Location: /");
        } else{
            header("Location: /");
        }

    }

    public function newComment($params)
    {
        if(strlen($_POST['addComment']) > 0)
        {
            $newComment = (new Comment) -> newComment($params['id']);
            header("Location: /message/$params[id]");
        } else{
            header("Location: /message/$params[id]");
        }
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
        if(strlen($_POST['headline']) > 0 &&
            strlen($_POST['author']) > 0 &&
            strlen($_POST['summary']) > 0 &&
            strlen($_POST['full']) > 0)
        {
            $editsMessage = (new Chat) -> saveMessage($params['id']);
            header("Location: /message/$params[id]");
        } else{
            header("Location: /message/$params[id]");
        }
    }
}