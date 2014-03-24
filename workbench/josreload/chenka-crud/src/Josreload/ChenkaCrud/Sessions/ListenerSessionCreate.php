<?php namespace Josreload\ChenkaCrud\Sessions;


interface ListenerSessionCreate {

    public function sessionCreationSucceeds();

    public function sessionCreationFails();


} 