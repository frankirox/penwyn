<?php
/**
 * Entry point script for backend.
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * @author: mark safronov <hijarian@gmail.com>
 */

# Loading project default init code for all entry points.
require __DIR__.'/../../common/bootstrap.php';

# Setting up the frontend-specific aliases
Yii::setPathOfAlias('superbackend', ROOT_DIR .'/superbackend');
Yii::setPathOfAlias('www', ROOT_DIR . '/superbackend/www');

# As we are using BootstrapFilter to include Booster, we have to define 'bootstrap' alias ourselves
# Note that we are binding to Composer-installed version of YiiBooster
Yii::setPathOfAlias('bootstrap', ROOT_DIR . '/vendor/clevertech/yii-booster/src');

# We use our custom-made WebApplication component as base class for backend app.
require_once ROOT_DIR.'/superbackend/components/SuperBackendWebApplication.php';

# For obvious reasons, backend entry point is constructed of specialised WebApplication and config
Yii::createApplication(
    'SuperBackendWebApplication',
    ROOT_DIR.'/superbackend/config/main.php'
)->run();

