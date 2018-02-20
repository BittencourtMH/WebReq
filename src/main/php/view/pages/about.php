<?php
$section='unlogged';
$root=filter_input(INPUT_SERVER, 'DOCUMENT_ROOT').'/webreq/src/main/php/';
require_once $root.'view/templates/language.php';
$title=ABOUT;
$nav=[''=>ABOUT];
require_once $root.'view/templates/header.php';
setlocale(LC_TIME, $language);
?>
<div class="my-4 px-5">
    <h1 class="text-center mb-4">WebReq</h1>
    <dl>
        <dt class="mt-3"><?php echo VERSION?></dt>
        <dd>1.0 Beta</dd>
        <dt class="mt-3"><?php echo UPDATE?></dt>
        <dd><?php echo strftime(DATE_FORMAT, mktime(0, 0, 0, 2, 19, 2018))?></dd>
        <dt class="mt-3"><?php echo DEVELOPERS?></dt>
        <dd>Marcelo Henrique Bittencourt<br />Sergio Souza Novak</dd>
        <dt class="mt-3"><?php echo LICENSE?></dt>
        <dd><a href="https://github.com/marcelohbittencourt/WebReq/blob/master/LICENSE">GNU Affero General Public License</a></dd>
        <dt class="mt-3"><?php echo SOURCE_CODE?></dt>
        <dd><a href="https://github.com/marcelohbittencourt/WebReq">GitHub</a></dd>
        <dt class="mt-3"><?php echo THIRD_PARTY_LIBRARIES?></dt>
        <dd>
            <ul>
                <li>Bootstrap: <a href="https://getbootstrap.com/docs/4.0/about/license">MIT License</a></li>
                <li>jQuery: <a href="https://jquery.org/license">MIT License</a></li>
                <li>Popper.js: <a href="https://github.com/FezVrasta/popper.js/blob/master/LICENSE.md">MIT License</a></li>
            </ul>
        </dd>
    </dl>
</div>
<?php
require_once $root.'view/templates/footer.php';
