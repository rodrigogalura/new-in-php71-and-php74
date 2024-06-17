<?php

class NotFoundException extends Exception {}
class ServerErrorException extends Exception {}

class Page {
    public function home()
    {
        throw new NotFoundException('not found', 404);
        // throw new ServerErrorException('server error', 500);
    }
}

function flash($message) { var_dump($message); }

try {
    (new Page)->home();
} catch (NotFoundException) {
    flash($e->getCode());
} catch (ServerErrorException) {
    flash($e->getCode());
} catch (Exception) {
    flash($e->getCode());
}

# Multi Catch Exception Handling
// try {
//     (new Page)->home();
// } catch (NotFoundException | ServerErrorException | Exception $e) {
//     flash($e->getCode());
// }
