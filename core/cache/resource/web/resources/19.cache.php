<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 19,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'КаталогРоллы',
    'longtitle' => '',
    'description' => '',
    'alias' => 'sushirolls',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 10,
    'menuindex' => 6,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1495711190,
    'editedby' => 1,
    'editedon' => 1495721347,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1495711140,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'sushirolls/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Суши</title>

    <!-- Bootstrap -->
    <link href="assets/templates/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/templates/main.css" media="screen" >
    <link rel="stylesheet" type="text/css" href="assets/templates/fonts.css" media="screen" >
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
   <div class="top-block">
       <header>
         <div class="container">
           <div class="row">
             <div class="col-md-2 text-center"><a href="./index.html" class="logo" title="sushipedia"><img src="assets/img/logo.png" width="165" height="130" alt="sushipedia" style="pointer-events: none;"></a></div> 
             <div class="col-md-5">
               <nav>
                 <ul class="list-inline">
                   <li><a href="./glavnaya" title="link">Главная</a></li>
                   <li class="current"><a href="/sushirolls" title="link">Роллы</a></li>
                   <li ><a href="/sushi" title="link">Суши</a></li>
                   <li><a href="./delivery.html" title="link">Доставка</a></li>
                   <li><a href="./about-us.html" title="link">О нас</a></li>
                 </ul>
               </nav>
             </div>
             <div class="col-md-3">
              <a>[[!Shopkeeper3@params]]</a>
            </div>
             <div class="col-md-2">
              <div class="phone">
                <div class="phone-wrap">
                  +7 (999) 570 39 20
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  <div class="sushi-list">
    <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Суши</h1>
       </div>
       [[!getProducts?
       &parents=`19`
       &includeTVs=`1`
       &includeTVList=`image,info,name,price,weight`
       &limit=`20`
       &tpl=`product`
       &where=`{"template":7}`
       ]]
     </div>
   </div>
 </div>
 <div class="footer">
   <div class="container">
     <div class="row">
       <div class="col-md-2 text-center"><a href="./index.html" class="logo" title="sushipedia"><img src="/assets/img/logo.png" width="165" height="130" alt="sushipedia" style="pointer-events: none;"></a></div> 
       <div class="col-md-7">
         <nav>
           <ul class="list-inline">
                 <li><a href="#" title="link">Главная</a></li>
                 <li><a href="./sushirolls.html" title="link">Роллы</a></li>
                 <li><a href="./sushi.html" title="link">Суши</a></li>
                 <li><a href="./delivery.html" title="link">Доставка</a></li>
                 <li><a href="./about-us.html" title="link">О нас</a></li>
                 <li><a href="#" title="link">Корзина</a></li>
           </ul>
         </nav>
       </div>
       <div class="col-md-3 pull-center">
        <div class="phone">
          <div class="phone-wrap">
            <p> +7 (999) 570-39-20 </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/templates/bootstrap.min.js"></script>
    <scrips src="assets/templastes/jquery.magnific-popup.js"></scrips>
    <script>document.write(\'<script src="http://\' + (location.host || \'localhost\').split(\':\')[0] + \':35729/livereload.js?snipver=1"></\' + \'script>\')</script>
  </body>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Суши</title>

    <!-- Bootstrap -->
    <link href="assets/templates/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/templates/main.css" media="screen" >
    <link rel="stylesheet" type="text/css" href="assets/templates/fonts.css" media="screen" >
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>',
    '[[$footer]]' => '<div class="footer">
   <div class="container">
     <div class="row">
       <div class="col-md-2 text-center"><a href="./index.html" class="logo" title="sushipedia"><img src="/assets/img/logo.png" width="165" height="130" alt="sushipedia" style="pointer-events: none;"></a></div> 
       <div class="col-md-7">
         <nav>
           <ul class="list-inline">
                 <li><a href="#" title="link">Главная</a></li>
                 <li><a href="./sushirolls.html" title="link">Роллы</a></li>
                 <li><a href="./sushi.html" title="link">Суши</a></li>
                 <li><a href="./delivery.html" title="link">Доставка</a></li>
                 <li><a href="./about-us.html" title="link">О нас</a></li>
                 <li><a href="#" title="link">Корзина</a></li>
           </ul>
         </nav>
       </div>
       <div class="col-md-3 pull-center">
        <div class="phone">
          <div class="phone-wrap">
            <p> +7 (999) 570-39-20 </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>',
    '[[~20? &scheme=`abs`]]' => '/sushirolls/tovar-1.html',
    '[[~19? &scheme=`abs`]]' => '/sushirolls/',
    '[[~26? &scheme=`abs`]]' => '/sushirolls/filadelfiya-klassicheskaya.html',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Суши</title>

    <!-- Bootstrap -->
    <link href="assets/templates/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/templates/main.css" media="screen" >
    <link rel="stylesheet" type="text/css" href="assets/templates/fonts.css" media="screen" >
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Суши</title>

    <!-- Bootstrap -->
    <link href="assets/templates/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/templates/main.css" media="screen" >
    <link rel="stylesheet" type="text/css" href="assets/templates/fonts.css" media="screen" >
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="footer">
   <div class="container">
     <div class="row">
       <div class="col-md-2 text-center"><a href="./index.html" class="logo" title="sushipedia"><img src="/assets/img/logo.png" width="165" height="130" alt="sushipedia" style="pointer-events: none;"></a></div> 
       <div class="col-md-7">
         <nav>
           <ul class="list-inline">
                 <li><a href="#" title="link">Главная</a></li>
                 <li><a href="./sushirolls.html" title="link">Роллы</a></li>
                 <li><a href="./sushi.html" title="link">Суши</a></li>
                 <li><a href="./delivery.html" title="link">Доставка</a></li>
                 <li><a href="./about-us.html" title="link">О нас</a></li>
                 <li><a href="#" title="link">Корзина</a></li>
           </ul>
         </nav>
       </div>
       <div class="col-md-3 pull-center">
        <div class="phone">
          <div class="phone-wrap">
            <p> +7 (999) 570-39-20 </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '<div class="footer">
   <div class="container">
     <div class="row">
       <div class="col-md-2 text-center"><a href="./index.html" class="logo" title="sushipedia"><img src="/assets/img/logo.png" width="165" height="130" alt="sushipedia" style="pointer-events: none;"></a></div> 
       <div class="col-md-7">
         <nav>
           <ul class="list-inline">
                 <li><a href="#" title="link">Главная</a></li>
                 <li><a href="./sushirolls.html" title="link">Роллы</a></li>
                 <li><a href="./sushi.html" title="link">Суши</a></li>
                 <li><a href="./delivery.html" title="link">Доставка</a></li>
                 <li><a href="./about-us.html" title="link">О нас</a></li>
                 <li><a href="#" title="link">Корзина</a></li>
           </ul>
         </nav>
       </div>
       <div class="col-md-3 pull-center">
        <div class="phone">
          <div class="phone-wrap">
            <p> +7 (999) 570-39-20 </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Shopkeeper3' => 
      array (
        'fields' => 
        array (
          'id' => 44,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Shopkeeper3',
          'description' => 'Shopping cart',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-3.1.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).ready(function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'TVsaveList' => 
            array (
              'name' => 'TVsaveList',
              'desc' => 'prop_shk.TVsaveList',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список имён TV-параметров, которые нужно сохранить в БД при отправке заказа. Если пусто, сохраняются все TV.',
              'area_trans' => '',
            ),
            'additParamSource' => 
            array (
              'name' => 'additParamSource',
              'desc' => 'prop_shk.additParamSource',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID источника доп.параметров (ресурс MODX)',
              'area_trans' => '',
            ),
            'allowFloatCount' => 
            array (
              'name' => 'allowFloatCount',
              'desc' => 'prop_shk.allowfloatcount',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разрешить покупать дробное число товара',
              'area_trans' => '',
            ),
            'animCart' => 
            array (
              'name' => 'animCart',
              'desc' => 'prop_shk.animcart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Анимация изменения высоты корзины',
              'area_trans' => '',
            ),
            'cartRowTpl' => 
            array (
              'name' => 'cartRowTpl',
              'desc' => 'prop_shk.cartrowtpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@FILE shopCartRow.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон строки корзины',
              'area_trans' => '',
            ),
            'cartTpl' => 
            array (
              'name' => 'cartTpl',
              'desc' => 'prop_shk.carttpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@FILE shopCart.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон корзины',
              'area_trans' => '',
            ),
            'changePrice' => 
            array (
              'name' => 'changePrice',
              'desc' => 'prop_shk.changeprice',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Да',
                  'value' => '1',
                  'name' => 'Да',
                ),
                1 => 
                array (
                  'text' => 'Нет',
                  'value' => '0',
                  'name' => 'Нет',
                ),
                2 => 
                array (
                  'text' => 'replace',
                  'value' => 'replace',
                  'name' => 'replace',
                ),
              ),
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'При изменении параметров с ценой - изменяется цена товара, а индекс с плюсом не появляется',
              'area_trans' => '',
            ),
            'className' => 
            array (
              'name' => 'className',
              'desc' => 'prop_shk.className',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'modResource',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя класса (объекта) товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'counterField' => 
            array (
              'name' => 'counterField',
              'desc' => 'prop_shk.counterfield',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара стрелки больше/меньше',
              'area_trans' => '',
            ),
            'counterFieldCart' => 
            array (
              'name' => 'counterFieldCart',
              'desc' => 'prop_shk.counterFieldCart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Добавить ко всем полям кол-ва товара в корзине стрелки больше/меньше',
              'area_trans' => '',
            ),
            'currency' => 
            array (
              'name' => 'currency',
              'desc' => 'prop_shk.currency',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'руб.',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Валюта по умолчанию',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_shk.debug',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим отладки',
              'area_trans' => '',
            ),
            'excepDigitGroup' => 
            array (
              'name' => 'excepDigitGroup',
              'desc' => 'prop_shk.excepdigitgroup',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Разделять числа цен в корзине на разряды',
              'area_trans' => '',
            ),
            'fieldPrice' => 
            array (
              'name' => 'fieldPrice',
              'desc' => 'prop_shk.pricetv',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'price',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя TV параметра цены',
              'area_trans' => '',
            ),
            'flyToCart' => 
            array (
              'name' => 'flyToCart',
              'desc' => 'prop_shk.flytocart',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'helper',
                  'value' => 'helper',
                  'name' => 'helper',
                ),
                1 => 
                array (
                  'text' => 'image',
                  'value' => 'image',
                  'name' => 'image',
                ),
                2 => 
                array (
                  'text' => 'scrollimage',
                  'value' => 'scrollimage',
                  'name' => 'scrollimage',
                ),
                3 => 
                array (
                  'text' => 'nofly',
                  'value' => 'nofly',
                  'name' => 'nofly',
                ),
              ),
              'value' => 'helper',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Эффект добавления товара в корзину',
              'area_trans' => '',
            ),
            'fromParentHeight' => 
            array (
              'name' => 'fromParentHeight',
              'desc' => 'prop_shk.fromParentHeight',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Сколько уровней родителей учитывать при использовании параметра fromParentList',
              'area_trans' => '',
            ),
            'fromParentList' => 
            array (
              'name' => 'fromParentList',
              'desc' => 'prop_shk.fromParentList',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список полей через запятую, которые нужно добавить товарам от родителей',
              'area_trans' => '',
            ),
            'goToOrderFormPage' => 
            array (
              'name' => 'goToOrderFormPage',
              'desc' => 'prop_shk.gotoorderformpage',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Переходить на страницу оформления заказа сразу после добавлении товара в корзину',
              'area_trans' => '',
            ),
            'groupBy' => 
            array (
              'name' => 'groupBy',
              'desc' => 'prop_shk.groupBy',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя поля для группировки товаров в корзине',
              'area_trans' => '',
            ),
            'hideOn' => 
            array (
              'name' => 'hideOn',
              'desc' => 'prop_shk.hideon',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не выводить корзину на страницах (id через запятую)',
              'area_trans' => '',
            ),
            'jsScript' => 
            array (
              'name' => 'jsScript',
              'desc' => 'prop_shk.nojavascript',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Работать без JavaScript',
              'area_trans' => '',
            ),
            'lang' => 
            array (
              'name' => 'lang',
              'desc' => 'prop_shk.lang',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ru',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Язык',
              'area_trans' => '',
            ),
            'noConflict' => 
            array (
              'name' => 'noConflict',
              'desc' => 'prop_shk.noconflict',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Включить режим noConflict для jQuery. Используется, если на сайте уже используется другая JS-библиотека (не jQuery)',
              'area_trans' => '',
            ),
            'noCounter' => 
            array (
              'name' => 'noCounter',
              'desc' => 'prop_shk.nocounter',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать стрелки изменения кол-ва товара',
              'area_trans' => '',
            ),
            'noJQuery' => 
            array (
              'name' => 'noJQuery',
              'desc' => 'prop_shk.nojquery',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не подгружать jquery.js',
              'area_trans' => '',
            ),
            'noLoader' => 
            array (
              'name' => 'noLoader',
              'desc' => 'prop_shk.noloader',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Не показывать прелоадер',
              'area_trans' => '',
            ),
            'orderDataTpl' => 
            array (
              'name' => 'orderDataTpl',
              'desc' => 'prop_shk.orderdatatpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@FILE orderData.tpl',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Шаблон для содержимого заказа',
              'area_trans' => '',
            ),
            'orderFormPageId' => 
            array (
              'name' => 'orderFormPageId',
              'desc' => 'prop_shk.orderformpage',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '23',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'ID страницы с формой оформления заказа',
              'area_trans' => '',
            ),
            'packageName' => 
            array (
              'name' => 'packageName',
              'desc' => 'prop_shk.packageName',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Имя пакета класса товаров (можно несколько через запятую)',
              'area_trans' => '',
            ),
            'pluralWords' => 
            array (
              'name' => 'pluralWords',
              'desc' => 'prop_shk.pluralWords',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Слова для склонения в зависимости от количества товара в корзине',
              'area_trans' => '',
            ),
            'processParams' => 
            array (
              'name' => 'processParams',
              'desc' => 'prop_shk.processParams',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Просчитывать дополнительные параметры перед добавлением товара в корзину',
              'area_trans' => '',
            ),
            'prodCont' => 
            array (
              'name' => 'prodCont',
              'desc' => 'prop_shk.prodcont',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'div.shk-item',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'CSS-селектор элемента, внутри которого находится информация о товаре',
              'area_trans' => '',
            ),
            'savePurchasesFields' => 
            array (
              'name' => 'savePurchasesFields',
              'desc' => 'prop_shk.savePurchasesFields',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Список названий полей товаров, которые нужно сохранять при заказе',
              'area_trans' => '',
            ),
            'style' => 
            array (
              'name' => 'style',
              'desc' => 'prop_shk.style',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'default',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Стиль корзины',
              'area_trans' => '',
            ),
            'tplPath' => 
            array (
              'name' => 'tplPath',
              'desc' => 'prop_shk.tplpath',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'core/components/shopkeeper3/elements/chunks/ru/',
              'lexicon' => 'shopkeeper3:properties',
              'area' => '',
              'desc_trans' => 'Путь до папки с чанками сниппета',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Shopkeeper
 * 
 * Shopping cart for MODx Revolution
 *
 * @package shopkeeper3
 * @category 	   snippet
 * @version 	   3.x
 * @license 	   http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	   @properties
 * @internal	   @modx_category Shop
 */

if(isset($hideOn) && preg_match(\'/(^|\\s|,)\'.$modx->resource->get(\'id\').\'(,|$)/\',$hideOn)) return \'\';

$modx->placeholders[\'SHK_callCount\'] = isset($modx->placeholders[\'SHK_callCount\']) ? $modx->placeholders[\'SHK_callCount\']+1 : 1;
$SHK_callCount = $modx->placeholders[\'SHK_callCount\'];
if( !defined( \'SHOPKEEPER_URL\' ) ) define( \'SHOPKEEPER_URL\', $modx->getOption(\'assets_url\') . "components/shopkeeper3/" );

$output = \'\';

require_once $modx->getOption(\'core_path\') . "components/shopkeeper3/model/shopkeeper.class.php";

$shopCart = new Shopkeeper($modx, $scriptProperties, true);
$noJavaScript = $modx->getOption( \'noJavaScript\', $scriptProperties, false );
$optStyles = $modx->getOption(\'style\', $scriptProperties, 1);
$optJsScripts = $modx->getOption(\'jsScript\', $scriptProperties, 1);

if( $SHK_callCount === 1 ){
    
    if( $optStyles ){
        $modx->regClientCSS( SHOPKEEPER_URL . "web/css/".$modx->getOption( \'style\', $scriptProperties, \'default\' ) . "/style.css" );
    }

    if( !$modx->getOption(\'noJQuery\', $scriptProperties, false) ){
        $modx->regClientScript(SHOPKEEPER_URL . "web/js/jquery-3.1.1.min.js");
    }

    if( $optJsScripts ) {

        if( $optJsScripts != 2 ) {

            $modx->regClientScript(SHOPKEEPER_URL . "web/js/lang/" . $modx->getOption(\'lang\', $scriptProperties, \'ru\') . ".js?v=" . $shopCart->getVersion());
            $modx->regClientScript(SHOPKEEPER_URL . "web/js/shopkeeper.js?v=" . $shopCart->getVersion());

        }

        $shk_opts = array(
            \'prodCont\' => $modx->getOption(\'prodCont\', $scriptProperties, \'div.shk-item\'),
            \'site_base_url\' => $modx->config[\'base_url\'],
            \'counterField\' => $modx->getOption(\'counterField\', $scriptProperties, false),
            \'counterFieldCart\' => $modx->getOption(\'counterFieldCart\', $scriptProperties, true),
            \'changePrice\' => $modx->getOption(\'changePrice\', $scriptProperties, true),
            \'flyToCart\' => $modx->getOption(\'flyToCart\', $scriptProperties, \'helper\'),
            \'noLoader\' => $modx->getOption(\'noLoader\', $scriptProperties, false),
            \'allowFloatCount\' => $modx->getOption(\'allowFloatCount\', $scriptProperties, false),
            \'animCart\' => $modx->getOption(\'animCart\', $scriptProperties, true),
            \'goToOrderFormPage\' => $modx->getOption(\'goToOrderFormPage\', $scriptProperties, false),
            //\'orderFormPage\' => $modx->getOption(\'orderFormPage\',$scriptProperties,0),
            \'orderFormPageUrl\' => $modx->makeUrl($modx->getOption(\'orderFormPageId\', $scriptProperties, 1), \'\', \'\', \'abs\'),
            \'debug\' => $modx->getOption(\'debug\', $scriptProperties, false)
        );

        $delivery_price = !empty($shopCart->delivery[\'price\']) ? number_format($shopCart->delivery[\'price\'], 2, \'.\', \'\') : 0;
        $delivery_name = !empty($shopCart->delivery[\'label\']) ? $shopCart->delivery[\'label\'] : \'\';

        $shk_data = array(
            \'price_total\' => number_format(Shopkeeper::$price_total, 2, \'.\', \'\'),
            \'items_total\' => Shopkeeper::$items_total,
            \'items_unique_total\' => Shopkeeper::$items_unique_total,
            \'delivery_price\' => $delivery_price,
            \'delivery_name\' => $delivery_name,
            \'ids\' => $shopCart->getProdIds()
        );

        $shk_data_str = json_encode($shk_data);
        $options_obj_str = json_encode($shk_opts);

        //create script
        $headHtml = "\\t<script type=\\"text/javascript\\">";
        $headHtml .= "
        SHK.data = " . $shk_data_str . ";
        jQuery(document).ready(function(){
            SHK.init( " . $options_obj_str . " );
        });" . PHP_EOL;

        $headHtml .= "\\t</script>" . PHP_EOL;

        $modx->regClientScript($headHtml);

    }
    
}

//вывод корзины
$output .= $shopCart->getCartContent();

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getProducts' => 
      array (
        'fields' => 
        array (
          'id' => 43,
          'source' => 1,
          'property_preprocess' => true,
          'name' => 'getProducts',
          'description' => '',
          'editor_type' => 0,
          'category' => 9,
          'cache_type' => 0,
          'snippet' => '/**
 * getProducts 1.4rc2
 *
 * Snippet for a print list of resources and objects from any tables. For MODX 2.x.
 *
 * @author Andchir <andchir@gmail.com>
 * @copyright Copyright 2015 http://modx-shopkeeper.ru/
/

/*

getProducts + getPage:

[[!getPage?
&elementClass=`modSnippet`
&element=`getProducts`
&parents=`10`
&limit=`20`
&tvFilters=`{"param":"value"}`
&where=`{"param":"value"}`
&includeTVs=`1`
&includeTVList=`price,image,width,inventory`
&tpl=`product`
&pageFirstTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Первая</a></li>`
&pageLastTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Последняя</a></li>`
]]
<br class="clear" />
<ul class="pages">
[[!+page.nav]]
</ul>
[[+total]]

*/

if( !empty( $scriptProperties[\'debug\'] ) ){
    ini_set(\'display_errors\',1);
    error_reporting(E_ALL);
}

$cached = array();

//Настройки кэширования
if(!empty($scriptProperties[\'gp_cache\'])){
    
    if(empty($scriptProperties[\'cache_key\'])) $scriptProperties[\'cache_key\'] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
    if(empty($scriptProperties[\'cache_checkURL\'])) $scriptProperties[\'cache_checkURL\'] = false;//Не рекомендуется менять значение
    if(empty($scriptProperties[\'cacheId\'])) $scriptProperties[\'cacheId\'] = \'gpCache\';
    if(empty($scriptProperties[\'cache_handler\'])) $scriptProperties[\'cache_handler\'] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
    if(empty($scriptProperties[\'cache_expires\'])) $scriptProperties[\'cache_expires\'] = 0;
    
    if($scriptProperties[\'cache_checkURL\']){
        $scriptProperties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $scriptProperties[\'cacheId\'] . md5(http_build_query($modx->request->getParameters()));
    }else{
        $scriptProperties[\'cachePageKey\'] = $scriptProperties[\'cacheId\'];
    }
    $scriptProperties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $scriptProperties[\'cache_key\'],
        xPDO::OPT_CACHE_HANDLER => $scriptProperties[\'cache_handler\'],
        xPDO::OPT_CACHE_EXPIRES => $scriptProperties[\'cache_expires\'],
    );
    
    $cached = $modx->cacheManager->get($scriptProperties[\'cachePageKey\'], $scriptProperties[\'cacheOptions\']);
    
    //Если есть в кэше, выводим его содержимое
    if(!empty($cached) && isset($cached[\'placeholders\']) && isset($cached[\'output\'])){
        
        $output = $cached[\'output\'];
        $modx->setPlaceholders($cached[\'placeholders\']);
        
        if($toPlaceholder){
            $modx->setPlaceholder($toPlaceholder,$output);
            $output = \'\';
        }
        
        return $output;
        
    }else{
        
        $cached = array();
        
    }
    
}

$output = \'\';

$checkPlaceholders = $modx->placeholders;

require_once MODX_CORE_PATH.\'components/getproducts/model/getproducts.class.php\';
$getProducts = new getProducts($modx,$scriptProperties);

$noResults = $modx->getOption(\'noResults\',$scriptProperties,\'\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,\'\');
$returnIDs = $modx->getOption(\'returnIDs\',$scriptProperties,false);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$debug = $modx->getOption(\'debug\', $scriptProperties, false);

$parents_data = array();

//Ищем товары по заданным условиям
$getProducts->searchProducts();

$total = $getProducts->getTotal();
$modx->setPlaceholder( $totalVar, $total );
if( !$total ) return $noResults;
if( $returnIDs ) return implode( \',\', $getProducts->ids_arr );

//Собираем TV
$getProducts->appendTVs();

//Вытаскиваем данные от родителей, если нужно
$getProducts->appendFromParents();

//Создаём HTML код по шаблону
$output .= $getProducts->getHTMLOutput();

//Кэшируем
if(!empty($scriptProperties[\'gp_cache\'])){
    
    $cached = array(
        \'output\' => $output,
        \'placeholders\' => array_diff_assoc($modx->placeholders, $checkPlaceholders)
    );
    unset($checkPlaceholders);
    
    $modx->cacheManager->set($scriptProperties[\'cachePageKey\'], $cached, $scriptProperties[\'cache_expires\'], $scriptProperties[\'cacheOptions\']);
    
}

if($toPlaceholder){
    $modx->setPlaceholder($toPlaceholder,$output);
    $output = \'\';
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'activeClass' => 
            array (
              'name' => 'activeClass',
              'desc' => 'Имя CSS-класса для активного ресурса.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя CSS-класса для активного ресурса.',
              'area_trans' => '',
            ),
            'activeParentSnippet' => 
            array (
              'name' => 'activeParentSnippet',
              'desc' => '',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'Сниппет для активного контейнера-ресурса',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => '',
              'area_trans' => '',
            ),
            'addSubItemCount' => 
            array (
              'name' => 'addSubItemCount',
              'desc' => 'В чанке сниппета будет доступен плейсхолдер [[+subitemcount]] - число дочерних ресурсов.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'В чанке сниппета будет доступен плейсхолдер [[+subitemcount]] - число дочерних ресурсов.',
              'area_trans' => '',
            ),
            'className' => 
            array (
              'name' => 'className',
              'desc' => 'Имя класса (объекта) элементов таблицы БД.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'modResource',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя класса (объекта) элементов таблицы БД.',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'Режим отладки (1|0). В журнал ошибок будут писаться SQL запросы, полученные в сниппете.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Режим отладки (1|0). В журнал ошибок будут писаться SQL запросы, полученные в сниппете.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'Глубина поиска родителей. По умолчанию 1.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Глубина поиска родителей. По умолчанию 1.',
              'area_trans' => '',
            ),
            'fromParentList' => 
            array (
              'name' => 'fromParentList',
              'desc' => 'список полей через запятую, которые нужно добавить товарам от родителей.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'список полей через запятую, которые нужно добавить товарам от родителей.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'Включать в выборку из БД значение поля "content" (1|0).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Включать в выборку из БД значение поля "content" (1|0).',
              'area_trans' => '',
            ),
            'includeTVList' => 
            array (
              'name' => 'includeTVList',
              'desc' => 'Список имён TV, которые нужно добавить через запятую.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Список имён TV, которые нужно добавить через запятую.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'Добавить плейсхолдеры значений TV для ресурсов (1|0). Префикс для TV: "tv.".',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Добавить плейсхолдеры значений TV для ресурсов (1|0). Префикс для TV: "tv.".',
              'area_trans' => '',
            ),
            'noResults' => 
            array (
              'name' => 'noResults',
              'desc' => 'Текст, который будет выводиться, если по запросу ничего не найдено.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Текст, который будет выводиться, если по запросу ничего не найдено.',
              'area_trans' => '',
            ),
            'orderby' => 
            array (
              'name' => 'orderby',
              'desc' => 'JSON строка сортировки.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'JSON строка сортировки.',
              'area_trans' => '',
            ),
            'packageName' => 
            array (
              'name' => 'packageName',
              'desc' => 'Имя пакета элементов таблицы БД.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя пакета элементов таблицы БД.',
              'area_trans' => '',
            ),
            'processTVList' => 
            array (
              'name' => 'processTVList',
              'desc' => 'Список TV через запятую, для которых применять processTVs.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Список TV через запятую, для которых применять processTVs.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'Применять параметр "Параметры ввода" для TV.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Применять параметр "Параметры ввода" для TV.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'Список ID ресурсов (товаров) через запятую.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Список ID ресурсов (товаров) через запятую.',
              'area_trans' => '',
            ),
            'returnIDs' => 
            array (
              'name' => 'returnIDs',
              'desc' => 'Возвращать только ID рессурсов (1|0).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Возвращать только ID рессурсов (1|0).',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'Поле для сортировки (только поля ресурсов, без TV).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Поле для сортировки (только поля ресурсов, без TV).',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'Сортировка по TV. Указать имя TV.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Сортировка по TV. Указать имя TV.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'Тип значения TV (string|integer).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'string',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Тип значения TV (string|integer).',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'Направление сортировки.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ASC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Направление сортировки.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'Направление сортировки по TV (ASC|DESC).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ASC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Направление сортировки по TV (ASC|DESC).',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'Имя плейсхолдера, в который нужно отправить результат работы сниппета. По умолчанию не используется.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера, в который нужно отправить результат работы сниппета. По умолчанию не используется.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'Имя плейсхолдера с общим количеством ресурсов.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера с общим количеством ресурсов.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'Имя чанка шаблона для вывода ресурса.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Имя чанка шаблона для вывода ресурса.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'JSON строка фильтрации по ТВ.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'JSON строка фильтрации по ТВ.',
              'area_trans' => '',
            ),
            'useSmarty' => 
            array (
              'name' => 'useSmarty',
              'desc' => 'Использовать в чанке шаблонизатор Smarty (1|0).',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Использовать в чанке шаблонизатор Smarty (1|0).',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'JSON строка для условия WHERE в SQL запросе.',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'JSON строка для условия WHERE в SQL запросе.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => true,
          'static_file' => 'core/components/getproducts/snippet.getproducts.php',
          'content' => '/**
 * getProducts 1.4rc2
 *
 * Snippet for a print list of resources and objects from any tables. For MODX 2.x.
 *
 * @author Andchir <andchir@gmail.com>
 * @copyright Copyright 2015 http://modx-shopkeeper.ru/
/

/*

getProducts + getPage:

[[!getPage?
&elementClass=`modSnippet`
&element=`getProducts`
&parents=`10`
&limit=`20`
&tvFilters=`{"param":"value"}`
&where=`{"param":"value"}`
&includeTVs=`1`
&includeTVList=`price,image,width,inventory`
&tpl=`product`
&pageFirstTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Первая</a></li>`
&pageLastTpl=`<li class="control"><a [[+classes]] href="[[+href]]">Последняя</a></li>`
]]
<br class="clear" />
<ul class="pages">
[[!+page.nav]]
</ul>
[[+total]]

*/

if( !empty( $scriptProperties[\'debug\'] ) ){
    ini_set(\'display_errors\',1);
    error_reporting(E_ALL);
}

$cached = array();

//Настройки кэширования
if(!empty($scriptProperties[\'gp_cache\'])){
    
    if(empty($scriptProperties[\'cache_key\'])) $scriptProperties[\'cache_key\'] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
    if(empty($scriptProperties[\'cache_checkURL\'])) $scriptProperties[\'cache_checkURL\'] = false;//Не рекомендуется менять значение
    if(empty($scriptProperties[\'cacheId\'])) $scriptProperties[\'cacheId\'] = \'gpCache\';
    if(empty($scriptProperties[\'cache_handler\'])) $scriptProperties[\'cache_handler\'] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
    if(empty($scriptProperties[\'cache_expires\'])) $scriptProperties[\'cache_expires\'] = 0;
    
    if($scriptProperties[\'cache_checkURL\']){
        $scriptProperties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $scriptProperties[\'cacheId\'] . md5(http_build_query($modx->request->getParameters()));
    }else{
        $scriptProperties[\'cachePageKey\'] = $scriptProperties[\'cacheId\'];
    }
    $scriptProperties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $scriptProperties[\'cache_key\'],
        xPDO::OPT_CACHE_HANDLER => $scriptProperties[\'cache_handler\'],
        xPDO::OPT_CACHE_EXPIRES => $scriptProperties[\'cache_expires\'],
    );
    
    $cached = $modx->cacheManager->get($scriptProperties[\'cachePageKey\'], $scriptProperties[\'cacheOptions\']);
    
    //Если есть в кэше, выводим его содержимое
    if(!empty($cached) && isset($cached[\'placeholders\']) && isset($cached[\'output\'])){
        
        $output = $cached[\'output\'];
        $modx->setPlaceholders($cached[\'placeholders\']);
        
        if($toPlaceholder){
            $modx->setPlaceholder($toPlaceholder,$output);
            $output = \'\';
        }
        
        return $output;
        
    }else{
        
        $cached = array();
        
    }
    
}

$output = \'\';

$checkPlaceholders = $modx->placeholders;

require_once MODX_CORE_PATH.\'components/getproducts/model/getproducts.class.php\';
$getProducts = new getProducts($modx,$scriptProperties);

$noResults = $modx->getOption(\'noResults\',$scriptProperties,\'\');
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,\'\');
$returnIDs = $modx->getOption(\'returnIDs\',$scriptProperties,false);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$debug = $modx->getOption(\'debug\', $scriptProperties, false);

$parents_data = array();

//Ищем товары по заданным условиям
$getProducts->searchProducts();

$total = $getProducts->getTotal();
$modx->setPlaceholder( $totalVar, $total );
if( !$total ) return $noResults;
if( $returnIDs ) return implode( \',\', $getProducts->ids_arr );

//Собираем TV
$getProducts->appendTVs();

//Вытаскиваем данные от родителей, если нужно
$getProducts->appendFromParents();

//Создаём HTML код по шаблону
$output .= $getProducts->getHTMLOutput();

//Кэшируем
if(!empty($scriptProperties[\'gp_cache\'])){
    
    $cached = array(
        \'output\' => $output,
        \'placeholders\' => array_diff_assoc($modx->placeholders, $checkPlaceholders)
    );
    unset($checkPlaceholders);
    
    $modx->cacheManager->set($scriptProperties[\'cachePageKey\'], $cached, $scriptProperties[\'cache_expires\'], $scriptProperties[\'cacheOptions\']);
    
}

if($toPlaceholder){
    $modx->setPlaceholder($toPlaceholder,$output);
    $output = \'\';
}

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'num_format' => 
      array (
        'fields' => 
        array (
          'id' => 47,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'num_format',
          'description' => 'Number format output filter',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '/*
 * numFormat snippet
 * example: [[*price:num_format]]
 */

if(strlen($input)==0) return \'\';

$input = floatval(str_replace(array(\' \',\',\'), array(\'\',\'.\'), $input));
return number_format($input,(floor($input) == $input ? 0 : 2),\'.\',\' \');',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/*
 * numFormat snippet
 * example: [[*price:num_format]]
 */

if(strlen($input)==0) return \'\';

$input = floatval(str_replace(array(\' \',\',\'), array(\'\',\'.\'), $input));
return number_format($input,(floor($input) == $input ? 0 : 2),\'.\',\' \');',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);