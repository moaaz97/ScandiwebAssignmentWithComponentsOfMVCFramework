<?php

class NotFoundException extends Exception
{
    protected $message = 'Page Not Found';
    protected $code = 404;
}