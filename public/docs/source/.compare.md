---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_985d87fa04a157f2d8b59ef306bf6f06 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/orders" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/orders",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "error",
    "errors": [
        "Call to a member function orders() on null"
    ]
}
```

### HTTP Request
`GET api/v1/orders`

`HEAD api/v1/orders`


<!-- END_985d87fa04a157f2d8b59ef306bf6f06 -->

<!-- START_c79cb2035f69ac8078c2cec9fc2fab4a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/orders" \
-H "Accept: application/json" \
    -d "pickup_address_1"="et" \
    -d "pickup_address_2"="et" \
    -d "pickup_suburb"="et" \
    -d "pickup_postcode"="3" \
    -d "delivery_address_1"="et" \
    -d "delivery_address_2"="et" \
    -d "delivery_suburb"="et" \
    -d "delivery_postcode"="339884" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/orders",
    "method": "POST",
    "data": {
        "pickup_address_1": "et",
        "pickup_address_2": "et",
        "pickup_suburb": "et",
        "pickup_postcode": 3,
        "delivery_address_1": "et",
        "delivery_address_2": "et",
        "delivery_suburb": "et",
        "delivery_postcode": 339884
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/orders`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    pickup_address_1 | string |  required  | Maximum: `190`
    pickup_address_2 | string |  optional  | Maximum: `190`
    pickup_suburb | string |  required  | Maximum: `190`
    pickup_postcode | numeric |  required  | Maximum: `4`
    delivery_address_1 | string |  required  | Maximum: `190`
    delivery_address_2 | string |  optional  | Maximum: `:attribute`
    delivery_suburb | string |  required  | Maximum: `190`
    delivery_postcode | numeric |  required  | Maximum: `4`

<!-- END_c79cb2035f69ac8078c2cec9fc2fab4a -->

<!-- START_13f4a2ba5be2993e266a0acf8d3bd280 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/orders/{order}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/orders/{order}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "status": "error",
    "errors": [
        "Unauthenticated."
    ]
}
```

### HTTP Request
`GET api/v1/orders/{order}`

`HEAD api/v1/orders/{order}`


<!-- END_13f4a2ba5be2993e266a0acf8d3bd280 -->

