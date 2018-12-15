<?php

use command\command\DeletePageCommand;

$invoker =  new Invoker();

$command = new DeletePageCommand();

$invoker->setCommand($command);

$invoker->action();

?>