<?php

namespace app\utils;
use yii\base\Component;

  class Constants extends Component{
        
    //Role Type IDs
    const CUSTOMER_ID = 101;
    const ADMIN_ID = 202;
    const VENDOR_ID = 303;
    const GUEST_ID = 404;
    const TEST_USER_ID = 505;

    //App Web User
    const WEB_USER = "WEBAPP";
    
    //User Status IDs
    const ACTIVE = 5;
    const DISABLED = 7;
    const LIMITED = 9;
    const INACTIVE = 10;
  }