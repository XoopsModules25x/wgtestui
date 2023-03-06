<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * wgTestUI module for xoops
 *
 * @copyright    2023 XOOPS Project (https://xoops.org)
 * @license      GPL 2.0 or later
 * @package      wgtestui
 * @author       Goffy - XOOPS Development Team - Email:<webmaster@wedega.com> - Website:<https://xoops.wedega.com>
 */

require __DIR__ . '/header.php';
$templateMain = 'wgtestui_admin_about.tpl';
$GLOBALS['xoopsTpl']->assign('navigation', $adminObject->displayNavigation('about.php'));
$adminObject->setPaypal('6KJ7RW5DR3VTJ');
$GLOBALS['xoopsTpl']->assign('about', $adminObject->renderAbout(false));
require __DIR__ . '/footer.php';
