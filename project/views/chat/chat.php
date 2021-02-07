<div class="wrapper container">
    <div class="messages">
        <h2>Сообщения</h2>
        <ul class="messages__list">
            <?php foreach ($messages as $message): ?>
                <li class="messages__item">
                    <a href="message/<?= $message['id'] ?>">
                        <h3 class="messages__headline"><?= htmlspecialchars($message['heading']) ?></h3>
                        <p class="messages__summary"><?= htmlspecialchars($message['summary']) ?></p>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="newMessage">
        <h2>Новое сообщение</h2>
        <form method="post" action="newMessage">
            <label for="headline">Заголовок сообщения</label><br>
            <input type="text" name="headline"><br>
            <label for="author">Автор сообщения</label><br>
            <input type="text" name="author"><br>
            <label for="summary">Краткое содержание</label><br>
            <textarea name="summary"></textarea><br>
            <label for="full">Полное содержание</label><br>
            <textarea name="full"></textarea><br>
            <input type="submit" name="submit" value="Новое сообщение">
        </form>
    </div>
</div>
