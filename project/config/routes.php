<?php
	use \Core\Route;
	
	return [
		new Route('/', 'chat', 'showAllMessages'),
        new Route('/message/:id', 'chat', 'showMessage'),
        new Route('/newMessage', 'chat', 'newMessage'),
        new Route('/message/newComment/:id', 'chat', 'newComment'),
        new Route('/editMessage/:id', 'chat', 'editMessage'),
        new Route('/saveMessage/:id', 'chat', 'saveMessage')
	];
	
