<div class="editMessage">
    <h2>Редактирование сообщения</h2>
    <form method="post" action="/saveMessage/<?= $message['id'] ?>">
        <label for="headline">Заголовок сообщения</label><br>
        <input type="text" name="headline" value="<?= $message['heading'] ?>"><br>
        <label for="author">Автор сообщения</label><br>
        <input type="text" name="author" value="<?= $message['author'] ?>"><br>
        <label for="summary">Краткое содержание</label><br>
        <textarea name="summary"><?= $message['summary'] ?></textarea><br>
        <label for="full">Полное содержание</label><br>
        <textarea name="full"><?= $message['full'] ?></textarea><br>
        <input type="submit" name="submit" value="Редактировать сообщение">
    </form>
</div>
