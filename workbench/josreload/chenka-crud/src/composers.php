<?php

/*
|---------------------------------------------------------------------
| Composer Global
|---------------------------------------------------------------------
*/
View::composer('chenka-crud::*',
               'Josreload\ChenkaCrud\Composers\AppSettingsComposer');

/*
|---------------------------------------------------------------------
| Composer para el menu top
|---------------------------------------------------------------------
*/
View::composer('chenka-crud::layouts.partials.menu_top',
               'Josreload\ChenkaCrud\Composers\MenuTopComposer');

