<?php
/**
 * 
 * You should put your database credentials in config/autoload/local.php 
 * so that they are not in the git repository (as local.php is ignored):
 */

// SQL: 2nyAf8CT3hujzGLM


/**
 * 
 */
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => 'NMTerfolgkflg#7986',
                    'dbname' => 'mla'
                ),

                // To automatically convert enum to string
                'doctrine_type_mappings' => array(
                    'enum' => 'string'
                )
            ),

            // Message DB connection
            'orm_messages' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => 'NMTerfolgkflg#7986',
                    'dbname' => 'messages'
                ),

                // To automatically convert enum to string
                'doctrine_type_mappings' => array(
                    'enum' => 'string'
                )
            ),
        ),

        // Entity Manager instantiation settings
        'entitymanager' => array(
            'orm_default' => array(
                'connection' => 'orm_default',
                'configuration' => 'orm_default'
            ),
            'orm_messages' => array(
                'connection' => 'orm_messages',
                'configuration' => 'orm_messages'
            ),
           
        ),

        // Use array cache locally, also auto generate proxies on development environment.
        'configuration' => array(
            'orm_default' => array(
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'hydration_cache' => 'array',
                'generate_proxies' => true
            ),
            'orm_messages' => array(
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'hydration_cache' => 'array',
                'generate_proxies' => true
            ),
            
        )
    ),

    'db' => array(
        'username' => 'root',
        'password' => 'NMTerfolgkflg#7986'
    ),

    'smtp_WEB_DE' => array(
        'name' => 'Web.de',
        'host' => 'smtp.web.de',
        'port' => '587',
        'connection_class' => 'login',
        'connection_config' => array(
            'username' => 'mib-team@web.de',
            'password' => 'mib2009',
            'ssl' => 'tls'
        )
    ),

    'smtp_OUTLOOK' => array(
        'name' => 'Outlook.com',
        'host' => 'smtp-mail.outlook.com',
        'port' => '587',
        'connection_class' => 'login',
        'connection_config' => array(
            'username' => 'mla-web@outlook.com',
            'password' => 'MLAerfolgkflg#792018',
            'ssl' => 'tls'
        )
    )
);