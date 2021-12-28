<?php

namespace ChatTawkto;

use MapasCulturais\App;
use MapasCulturais\i;


class Plugin extends \MapasCulturais\Plugin
{
    function __construct(array $config = [])
    {
        parent::__construct($config);
    }
    //Teste		
    public function _init()
    {
        $app = App::i();
        $plugin = $this;
         
        $app->hook('template(<<*>>.<<*>>.main-footer):end', function () use ($app,$plugin) {
            $this->part('chattawkto/chat',[ 'plugin'=> $plugin ]);    
        });    
    }
    /**
     * Registra os controladores e metadados das entidades
     *
     * @return void
     */
    public function register()
    {
        $app = App::i();
    }
}
?>
