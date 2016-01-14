<?php
App::uses('AppController', 'Controller');
class KuruchokiController extends AppController{
    public function index(){
        ////////////////////////////////////////////////////////////
        //////////////    テスト用セット   ////////////////////////////
        ////////////////////////////////////////////////////////////
                                                                  //
          Configure::write ('debug', 2);                          //
          error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);     //
          ini_set('display_errors', 0);                           //
          ini_set('log_errors', 1);                               //
          ini_set('error_log', LOGS . DS . 'php_error.log');      //
                                                                  //
          ini_set('xdebug.var_display_max_children', -1);         //
          ini_set('xdebug.var_display_max_data', 4096);           //
          ini_set('xdebug.var_display_max_depth', 20);            //
                                                                  //
        ////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////
    debug('とっぷだよ');

    }
    public function upload(){

    }
}
