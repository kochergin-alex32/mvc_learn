<?php
// создаем пути
    return [
        '' => [
            // в конотроллере при пустоте он будет вести на гавную страницу которая у нас будет назывыать мэйн, ав адресной строке будет отобрааться индех
            'controller' => 'main',
            'action' => 'index'
        ],
        'catalogue' => [
            'controller' => 'main',
            'action' => 'index'
        ],
        'catalogue/phones' => [
            'controller' => 'catalogue',
            'action' => 'phones'
        ],
        'catalogue/laptopes' => [
            'controller' => 'catalogue',
            'action' => 'laptopes'
        ],
        'contacts' => [
            'controller' => 'main',
            'action' => 'index'
        ]



        ];
 ?>