<?php
return array(
    'router' => array(
        'routes' => array(
            'sports-store.rest.products' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/products[/:products_id]',
                    'defaults' => array(
                        'controller' => 'SportsStore\\V1\\Rest\\Products\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'sports-store.rest.products',
        ),
    ),
    'zf-rest' => array(
        'SportsStore\\V1\\Rest\\Products\\Controller' => array(
            'listener' => 'SportsStore\\V1\\Rest\\Products\\ProductsResource',
            'route_name' => 'sports-store.rest.products',
            'route_identifier_name' => 'products_id',
            'collection_name' => 'products',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'SportsStore\\V1\\Rest\\Products\\ProductsEntity',
            'collection_class' => 'SportsStore\\V1\\Rest\\Products\\ProductsCollection',
            'service_name' => 'products',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'SportsStore\\V1\\Rest\\Products\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'SportsStore\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.sports-store.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'SportsStore\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.sports-store.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'SportsStore\\V1\\Rest\\Products\\ProductsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'sports-store.rest.products',
                'route_identifier_name' => 'products_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'SportsStore\\V1\\Rest\\Products\\ProductsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'sports-store.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'SportsStore\\V1\\Rest\\Products\\ProductsResource' => array(
                'adapter_name' => 'MySQL',
                'table_name' => 'products',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'SportsStore\\V1\\Rest\\Products\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'SportsStore\\V1\\Rest\\Products\\ProductsResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'SportsStore\\V1\\Rest\\Products\\Controller' => array(
            'input_filter' => 'SportsStore\\V1\\Rest\\Products\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'SportsStore\\V1\\Rest\\Products\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Name of the product',
            ),
            1 => array(
                'name' => 'description',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'A description of the product',
            ),
            2 => array(
                'name' => 'category',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Category the product belongs to',
            ),
            3 => array(
                'name' => 'price',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'How much it costs',
            ),
        ),
    ),
);
