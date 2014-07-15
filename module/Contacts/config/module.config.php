<?php
return array(
    'router' => array(
        'routes' => array(
            'contacts.rest.contact' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/contacts[/:contact_id]',
                    'defaults' => array(
                        'controller' => 'Contacts\\V1\\Rest\\Contact\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'contacts.rest.contact',
        ),
    ),
    'zf-rest' => array(
        'Contacts\\V1\\Rest\\Contact\\Controller' => array(
            'listener' => 'Contacts\\V1\\Rest\\Contact\\ContactResource',
            'route_name' => 'contacts.rest.contact',
            'route_identifier_name' => 'contact_id',
            'collection_name' => 'contact',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
                3 => 'PATCH',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Contacts\\V1\\Rest\\Contact\\ContactEntity',
            'collection_class' => 'Contacts\\V1\\Rest\\Contact\\ContactCollection',
            'service_name' => 'contact',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Contacts\\V1\\Rest\\Contact\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Contacts\\V1\\Rest\\Contact\\Controller' => array(
                0 => 'application/vnd.contacts.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Contacts\\V1\\Rest\\Contact\\Controller' => array(
                0 => 'application/vnd.contacts.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Contacts\\V1\\Rest\\Contact\\ContactEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'contacts.rest.contact',
                'route_identifier_name' => 'contact_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Contacts\\V1\\Rest\\Contact\\ContactCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'contacts.rest.contact',
                'route_identifier_name' => 'contact_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'Contacts\\V1\\Rest\\Contact\\ContactResource' => array(
                'adapter_name' => 'contact',
                'table_name' => 'contact',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Contacts\\V1\\Rest\\Contact\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'Contacts\\V1\\Rest\\Contact\\ContactResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Contacts\\V1\\Rest\\Contact\\Controller' => array(
            'input_filter' => 'Contacts\\V1\\Rest\\Contact\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Contacts\\V1\\Rest\\Contact\\Validator' => array(
            0 => array(
                'name' => 'first',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Filter\\Alnum',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Alnum',
                        'options' => array(),
                    ),
                ),
                'allow_empty' => false,
                'continue_if_empty' => false,
                'description' => 'First Name',
            ),
            1 => array(
                'name' => 'last',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Filter\\Alnum',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Alnum',
                        'options' => array(),
                    ),
                ),
                'allow_empty' => false,
                'continue_if_empty' => false,
                'description' => 'Last Name',
            ),
            2 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                ),
                'allow_empty' => false,
                'continue_if_empty' => false,
                'description' => 'Email address',
            ),
            3 => array(
                'name' => 'avatar_url',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'URL of avatar image',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
        ),
    ),
);
