<?php
/**
 * Created by PhpStorm.
 * User: zhalnin
 * Date: 16/06/14
 * Time: 20:38
 */

namespace dmn\command;
error_reporting( E_ALL & ~E_NOTICE );

require_once( "dmn/command/Command.php" );
require_once( "dmn/mapper/PersistenceFactory.php" );
require_once( "dmn/mapper/DomainObjectAssembler.php" );
require_once( "dmn/domain/News.php" );

require_once( "dmn/base/Registry.php" );


class News extends Command {

    function doExecute( \dmn\controller\Request $request ) {

//        echo "<tt><pre>".print_r( $request, true )."</pre></tt>";
        $action     = $request->getProperty( 'act' ); // действие над позицией
        $id_news    = $request->getProperty( 'id_news' ); // id новости
        $page       = $request->getProperty( 'page' ); // номер страницы в постраничной навигации

        // в зависимости от действия вызываем метод с
        // определенными параметрами для выполнения действия над
        // позицией в блоке новостей
        if( ! empty( $action ) ) {
            \dmn\domain\News::position( $id_news, $action );
            $this->reloadPage( 0, "dmn.php?cmd=News&page={$page}" );
        }

        return self::statuses( 'CMD_OK' );
    }
}