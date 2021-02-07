<a href="/">Назад</a>
<div class="message">
    <h2><?= htmlspecialchars($message['heading'])  ?></h2>
    <p><?= htmlspecialchars($message['full']) ?></p>
</div>
<a href="/editMessage/<?= $message['id'] ?>">Редактировать сообщение</a>
<div class="comments">
    <ul class="comments__list">
        <?php foreach ($comments as $comment): ?>
            <li class="comments__item"><?= htmlspecialchars($comment['comment']) ?></li>
        <?php endforeach; ?>
    </ul>
    <form method="post" action="newComment/<?= $message['id'] ?>">
        <label for="addComment">Добавить комментарий</label><br>
        <input type="text" name="addComment"><br>
        <input type="submit" value="Добавить комментарий" name="submit">
    </form>
</div>