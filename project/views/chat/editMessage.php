<div class="editMessage">
    <h2>Редактирование сообщения</h2>
    <form method="post" action="/saveMessage/<?= $message['id'] ?>">
        <label for="headline">Заголовок сообщения</label><br>
        <input type="text" name="headline" value="<?= htmlspecialchars($message['heading']) ?>"><br>
        <label for="author">Автор сообщения</label><br>
        <input type="text" name="author" value="<?= htmlspecialchars($message['author']) ?>"><br>
        <label for="summary">Краткое содержание</label><br>
        <textarea name="summary"><?= htmlspecialchars($message['summary']) ?></textarea><br>
        <label for="full">Полное содержание</label><br>
        <textarea name="full"><?= htmlspecialchars($message['full']) ?></textarea><br>
        <input type="submit" name="submit" value="Редактировать сообщение">
    </form>
</div>
