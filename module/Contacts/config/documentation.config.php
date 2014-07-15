<?php
return array(
    'Contacts\\V1\\Rest\\Contact\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'description' => null,
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts"
       },
       "first": {
           "href": "/contacts?page={page}"
       },
       "prev": {
           "href": "/contacts?page={page}"
       },
       "next": {
           "href": "/contacts?page={page}"
       },
       "last": {
           "href": "/contacts?page={page}"
       }
   }
   "_embedded": {
       "contact": [
           {
               "_links": {
                   "self": {
                       "href": "/contacts[/:contact_id]"
                   }
               }
              "first": "",
              "last": "",
              "email": "",
              "avatar": ""
           }
       ]
   }
}
{
   "_links": {
       "self": {
           "href": "/contacts"
       },
       "first": {
           "href": "/contacts?page={page}"
       },
       "prev": {
           "href": "/contacts?page={page}"
       },
       "next": {
           "href": "/contacts?page={page}"
       },
       "last": {
           "href": "/contacts?page={page}"
       }
   }
   "_embedded": {
       "contact": [
           {
               "_links": {
                   "self": {
                       "href": "/contacts[/:contact_id]"
                   }
               }
              "first": "First Name",
              "last": "Last Name",
              "email": "Email address",
              "avatar_url": "URL of avatar image"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => null,
                'request' => '{
   "first": "",
   "last": "",
   "email": "",
   "avatar": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contact_id]"
       }
   }
   "first": "",
   "last": "",
   "email": "",
   "avatar": ""
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'description' => null,
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contact_id]"
       }
   }
   "first": "First Name",
   "last": "Last Name",
   "email": "Email address",
   "avatar_url": "URL of avatar image"
}',
            ),
            'PATCH' => array(
                'description' => null,
                'request' => '{
   "first": "First Name",
   "last": "Last Name",
   "email": "Email address",
   "avatar_url": "URL of avatar image"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contact_id]"
       }
   }
   "first": "First Name",
   "last": "Last Name",
   "email": "Email address",
   "avatar_url": "URL of avatar image"
}',
            ),
            'PUT' => array(
                'description' => null,
                'request' => '{
   "first": "",
   "last": "",
   "email": "",
   "avatar": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contact_id]"
       }
   }
   "first": "",
   "last": "",
   "email": "",
   "avatar": ""
}',
            ),
            'DELETE' => array(
                'description' => null,
                'request' => '{
   "first": "",
   "last": "",
   "email": "",
   "avatar": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contact_id]"
       }
   }
   "first": "",
   "last": "",
   "email": "",
   "avatar": ""
}',
            ),
            'POST' => array(
                'description' => null,
                'request' => '{
   "first": "First Name",
   "last": "Last Name",
   "email": "Email address",
   "avatar_url": "URL of avatar image"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contacts[/:contact_id]"
       }
   }
   "first": "First Name",
   "last": "Last Name",
   "email": "Email address",
   "avatar_url": "URL of avatar image"
}',
            ),
        ),
        'description' => 'Lists Contacts',
    ),
);
