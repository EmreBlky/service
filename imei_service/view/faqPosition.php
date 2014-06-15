<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhalnin
 * Date: 12/06/14
 * Time: 15:10
 * To change this template use File | Settings | File Templates.
 */

namespace imei_service\view;
error_reporting( E_ALL & ~E_NOTICE );

require_once( "imei_service/view/ViewHelper.php" );

try {

    $request = \imei_service\view\VH::getRequest();
    $position = $request->getObject( 'faqPosition' );
//    $title = $catalog->getName();
//    $keywords = $catalog->getKeywords();
//    $description = $catalog->getDescription();
    require_once("imei_service/view/templates/top.php");
?>

    <div id="header">
        <ul id="navigation" role="navigation">
            <li id="nav-home"><a href="?cmd=News"><span>Главная</span></a></li>
            <li id="nav-unlock"><a href="?cmd=Unlock"><span>Официальный Анлок iPhone</span></a></li>
            <li id="nav-udid"><a href="?cmd=Udid"><span>Регистрация UDID</span></a></li>
            <li id="nav-carrier"><a href="?cmd=CarrierCheck"><span>Проверка оператора по IMEI</span></a></li>
            <li id="nav-fast_check"><a href="?cmd=FastCheck"><span>Быстрая проверка</span></a></li>
            <li id="nav-blacklist"><a href="?cmd=BlacklistCheck"><span>Blacklist</span></a></li>
            <li id="nav-faq"><a  class="selected" href="?cmd=Faq"><span>Вопросы</span></a></li>
        </ul>
    </div>
    <div id="main" class="">
        <div id="main-slogan" class="main-content">
            <div id="slogan">Быстро - Качественно - Надежно</div>
        </div>
        <!--        End of main-slogan-->

        <div id="news-main" class="main-content">
            <div id="" class="news-content clear-fix">
                <div id='' class="news-header">
                    <h2  class="h2">FAQ</h2>
                </div>
                <div class='news-container'>
                    <div class='faq-body'>

<?php
//                    Если передан id_position
//                    значит переходим для детального просмотра статьи или ссылки
                            echo "<div class='faq-title'>
                                    <h1 class=h2>".$position->getName()."</h1>
                                </div>
                                <div class='faq-image'>

                                </div>";
                            echo "<div class='faq-all-info'>";
    //                        require_once("article_print.php");
                            echo "</div> ";
?>
                    </div>  <!-- End of faq-body -->
                </div>  <!--   End of news-container -->
            </div> <!-- End of news-content clear-fix -->
            <div class="news-footer"></div>
        </div><!--     End of news-content -->
    </div><!--        End of news-main-->

    <!--    <div id="main-guestbook"></div>-->
<?php
    require_once("imei_service/view/templates/bottom.php");

} catch( \imei_service\base\AppException $exc ) {
    require_once( "imei_service/base/Exceptions.php" );
} catch( \imei_service\base\DBException $exc ) {
    require_once( "imei_service/base/Exceptions.php" );
}
?>