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
-H "Accept: application/json" \
    -d "from"="08-04-2018" \
    -d "to"="08-04-2018" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/orders",
    "method": "GET",
    "data": {
        "from": "08-04-2018",
        "to": "08-04-2018"
},
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
        "Call to a member function hasActiveAccount() on null"
    ]
}
```

### HTTP Request
`GET api/v1/orders`

`HEAD api/v1/orders`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    from | date |  optional  | Date format: `d-m-Y`
    to | date |  optional  | Date format: `d-m-Y`

<!-- END_985d87fa04a157f2d8b59ef306bf6f06 -->

<!-- START_c79cb2035f69ac8078c2cec9fc2fab4a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/orders" \
-H "Accept: application/json" \
    -d "vendor_id"="213" \
    -d "pickup_address_1"="et" \
    -d "pickup_address_2"="et" \
    -d "pickup_suburb"="et" \
    -d "pickup_postcode"="6669" \
    -d "delivery_address_1"="et" \
    -d "delivery_address_2"="et" \
    -d "delivery_suburb"="et" \
    -d "delivery_postcode"="6669" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/orders",
    "method": "POST",
    "data": {
        "vendor_id": "213",
        "pickup_address_1": "et",
        "pickup_address_2": "et",
        "pickup_suburb": "et",
        "pickup_postcode": 6669,
        "delivery_address_1": "et",
        "delivery_address_2": "et",
        "delivery_suburb": "et",
        "delivery_postcode": 6669
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
    vendor_id | string |  required  | `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`, `71`, `72`, `73`, `74`, `75`, `76`, `77`, `78`, `79`, `80`, `81`, `82`, `83`, `84`, `85`, `86`, `87`, `88`, `89`, `90`, `91`, `92`, `93`, `94`, `95`, `96`, `97`, `98`, `99`, `100`, `101`, `102`, `103`, `104`, `105`, `106`, `107`, `108`, `109`, `110`, `111`, `112`, `113`, `114`, `115`, `116`, `117`, `118`, `119`, `120`, `121`, `122`, `123`, `124`, `125`, `126`, `127`, `128`, `129`, `130`, `131`, `132`, `133`, `134`, `135`, `136`, `137`, `138`, `139`, `140`, `141`, `142`, `143`, `144`, `145`, `146`, `147`, `148`, `149`, `150`, `151`, `152`, `153`, `154`, `155`, `156`, `157`, `158`, `159`, `160`, `161`, `162`, `163`, `164`, `165`, `166`, `167`, `168`, `169`, `170`, `171`, `172`, `173`, `174`, `175`, `176`, `177`, `178`, `179`, `180`, `181`, `182`, `183`, `184`, `185`, `186`, `187`, `188`, `189`, `190`, `191`, `192`, `193`, `194`, `195`, `196`, `197`, `198`, `199`, `200`, `201`, `202`, `203`, `204`, `205`, `206`, `207`, `208`, `209`, `210`, `211`, `212`, `213`, `214`, `215`, `216`, `217`, `218`, `219`, `220`, `221`, `222`, `223`, `224`, `225`, `226`, `227`, `228`, `229`, `230`, `231`, `232`, `233`, `234`, `235`, `236`, `237`, `238`, `239`, `240`, `241`, `242`, `243`, `244`, `245`, `246`, `247`, `248`, `249`, `250`, `251`, `252`, `253`, `254`, `255`, `256`, `257`, `258`, `259`, `260`, `261`, `262`, `263`, `264`, `265`, `266`, `267`, `268`, `269`, `270`, `271`, `272`, `273`, `274`, `275`, `276`, `277`, `278`, `279`, `280`, `281`, `282`, `283`, `284`, `285`, `286`, `287`, `288`, `289`, `290`, `291`, `292`, `293`, `294`, `295`, `296`, `297`, `298`, `299`, `300`, `301`, `302`, `303`, `304`, `305`, `306`, `307`, `308`, `309`, `310`, `311`, `312`, `313`, `314`, `315`, `316`, `317`, `318`, `319`, `320`, `321`, `322`, `323`, `324`, `325`, `326`, `327`, `329`, `330`, `331`, `332`, `334`, `335`, `336`, `337`, `339` or `340`
    pickup_address_1 | string |  required  | Maximum: `190`
    pickup_address_2 | string |  optional  | Maximum: `190`
    pickup_suburb | string |  required  | Maximum: `190`
    pickup_postcode | numeric |  required  | Must have an exact length of `4`
    delivery_address_1 | string |  required  | Maximum: `190`
    delivery_address_2 | string |  optional  | Maximum: `:attribute`
    delivery_suburb | string |  required  | Maximum: `190`
    delivery_postcode | numeric |  required  | Must have an exact length of `4`

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
        "Call to a member function orders() on null"
    ]
}
```

### HTTP Request
`GET api/v1/orders/{order}`

`HEAD api/v1/orders/{order}`


<!-- END_13f4a2ba5be2993e266a0acf8d3bd280 -->

<!-- START_2e6d997181b1c50b2b94eaa14b66f016 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/orders/{order}" \
-H "Accept: application/json" \
    -d "vendor_id"="180" \
    -d "pickup_address_1"="provident" \
    -d "pickup_address_2"="provident" \
    -d "pickup_suburb"="provident" \
    -d "pickup_postcode"="5786" \
    -d "delivery_address_1"="provident" \
    -d "delivery_address_2"="provident" \
    -d "delivery_suburb"="provident" \
    -d "delivery_postcode"="5786" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/orders/{order}",
    "method": "PUT",
    "data": {
        "vendor_id": "180",
        "pickup_address_1": "provident",
        "pickup_address_2": "provident",
        "pickup_suburb": "provident",
        "pickup_postcode": 5786,
        "delivery_address_1": "provident",
        "delivery_address_2": "provident",
        "delivery_suburb": "provident",
        "delivery_postcode": 5786
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
`PUT api/v1/orders/{order}`

`PATCH api/v1/orders/{order}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    vendor_id | integer |  optional  | `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`, `71`, `72`, `73`, `74`, `75`, `76`, `77`, `78`, `79`, `80`, `81`, `82`, `83`, `84`, `85`, `86`, `87`, `88`, `89`, `90`, `91`, `92`, `93`, `94`, `95`, `96`, `97`, `98`, `99`, `100`, `101`, `102`, `103`, `104`, `105`, `106`, `107`, `108`, `109`, `110`, `111`, `112`, `113`, `114`, `115`, `116`, `117`, `118`, `119`, `120`, `121`, `122`, `123`, `124`, `125`, `126`, `127`, `128`, `129`, `130`, `131`, `132`, `133`, `134`, `135`, `136`, `137`, `138`, `139`, `140`, `141`, `142`, `143`, `144`, `145`, `146`, `147`, `148`, `149`, `150`, `151`, `152`, `153`, `154`, `155`, `156`, `157`, `158`, `159`, `160`, `161`, `162`, `163`, `164`, `165`, `166`, `167`, `168`, `169`, `170`, `171`, `172`, `173`, `174`, `175`, `176`, `177`, `178`, `179`, `180`, `181`, `182`, `183`, `184`, `185`, `186`, `187`, `188`, `189`, `190`, `191`, `192`, `193`, `194`, `195`, `196`, `197`, `198`, `199`, `200`, `201`, `202`, `203`, `204`, `205`, `206`, `207`, `208`, `209`, `210`, `211`, `212`, `213`, `214`, `215`, `216`, `217`, `218`, `219`, `220`, `221`, `222`, `223`, `224`, `225`, `226`, `227`, `228`, `229`, `230`, `231`, `232`, `233`, `234`, `235`, `236`, `237`, `238`, `239`, `240`, `241`, `242`, `243`, `244`, `245`, `246`, `247`, `248`, `249`, `250`, `251`, `252`, `253`, `254`, `255`, `256`, `257`, `258`, `259`, `260`, `261`, `262`, `263`, `264`, `265`, `266`, `267`, `268`, `269`, `270`, `271`, `272`, `273`, `274`, `275`, `276`, `277`, `278`, `279`, `280`, `281`, `282`, `283`, `284`, `285`, `286`, `287`, `288`, `289`, `290`, `291`, `292`, `293`, `294`, `295`, `296`, `297`, `298`, `299`, `300`, `301`, `302`, `303`, `304`, `305`, `306`, `307`, `308`, `309`, `310`, `311`, `312`, `313`, `314`, `315`, `316`, `317`, `318`, `319`, `320`, `321`, `322`, `323`, `324`, `325`, `326`, `327`, `329`, `330`, `331`, `332`, `334`, `335`, `336`, `337`, `339` or `340`
    pickup_address_1 | string |  optional  | Minimum: `4` Maximum: `190`
    pickup_address_2 | string |  optional  | Maximum: `190`
    pickup_suburb | string |  optional  | Minimum: `4` Maximum: `190`
    pickup_postcode | numeric |  optional  | Must have an exact length of `4`
    delivery_address_1 | string |  optional  | Minimum: `4` Maximum: `190`
    delivery_address_2 | string |  optional  | Maximum: `190`
    delivery_suburb | string |  optional  | Minimum: `4` Maximum: `190`
    delivery_postcode | numeric |  optional  | Minimum: `4` Must have an exact length of `4`

<!-- END_2e6d997181b1c50b2b94eaa14b66f016 -->

<!-- START_f34ad9d71f18dd67576cc6db60268192 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/orders/{order}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/orders/{order}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/orders/{order}`


<!-- END_f34ad9d71f18dd67576cc6db60268192 -->

<!-- START_5639b80290981553bf79f0a8cdf6ed0c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vendors" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendors",
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
    "status": "ok",
    "result": [
        {
            "id": 1,
            "company_name": "ABC Resturant 444",
            "average_processing_time": 444,
            "created_at": "2018-04-08 13:07:19",
            "updated_at": "2018-04-08 14:00:02"
        },
        {
            "id": 2,
            "company_name": "Wilderman-Welch",
            "average_processing_time": 1242,
            "created_at": "2018-04-08 18:31:06",
            "updated_at": "2018-04-08 18:31:06"
        },
        {
            "id": 3,
            "company_name": "Flatley Inc",
            "average_processing_time": 713,
            "created_at": "2018-04-08 18:33:42",
            "updated_at": "2018-04-08 18:33:42"
        },
        {
            "id": 4,
            "company_name": "Schiller-Prosacco",
            "average_processing_time": 1827,
            "created_at": "2018-04-08 18:34:21",
            "updated_at": "2018-04-08 18:34:21"
        },
        {
            "id": 5,
            "company_name": "Kemmer, Corkery and Towne",
            "average_processing_time": 1257,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 6,
            "company_name": "Predovic-Barton",
            "average_processing_time": 1564,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 7,
            "company_name": "Schaefer-Dickens",
            "average_processing_time": 655,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 8,
            "company_name": "Cremin Ltd",
            "average_processing_time": 768,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 9,
            "company_name": "Lesch, Grady and Prosacco",
            "average_processing_time": 1177,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 10,
            "company_name": "Keebler-Schaden",
            "average_processing_time": 622,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 11,
            "company_name": "Frami Ltd",
            "average_processing_time": 1341,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 12,
            "company_name": "Haag-Green",
            "average_processing_time": 925,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 13,
            "company_name": "Paucek, Schimmel and Tremblay",
            "average_processing_time": 828,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 14,
            "company_name": "Mosciski, McDermott and Marquardt",
            "average_processing_time": 932,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 15,
            "company_name": "Nicolas-Rice",
            "average_processing_time": 1326,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 16,
            "company_name": "Ullrich LLC",
            "average_processing_time": 1675,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 17,
            "company_name": "Schaden, Zboncak and Trantow",
            "average_processing_time": 1449,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 18,
            "company_name": "Kassulke-O'Kon",
            "average_processing_time": 1889,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 19,
            "company_name": "Klocko-Gerhold",
            "average_processing_time": 1982,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 20,
            "company_name": "Cummerata-Mante",
            "average_processing_time": 924,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 21,
            "company_name": "Hagenes Group",
            "average_processing_time": 1188,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 22,
            "company_name": "Rodriguez, Bechtelar and Mills",
            "average_processing_time": 679,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 23,
            "company_name": "Russel, Fay and Mertz",
            "average_processing_time": 1847,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 24,
            "company_name": "Howe, O'Reilly and Wintheiser",
            "average_processing_time": 1224,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 25,
            "company_name": "Dietrich, Purdy and Walker",
            "average_processing_time": 1469,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 26,
            "company_name": "Zieme, Sporer and McKenzie",
            "average_processing_time": 697,
            "created_at": "2018-04-08 18:35:51",
            "updated_at": "2018-04-08 18:35:51"
        },
        {
            "id": 27,
            "company_name": "Hettinger, Hills and Lemke",
            "average_processing_time": 1529,
            "created_at": "2018-04-08 18:35:52",
            "updated_at": "2018-04-08 18:35:52"
        },
        {
            "id": 28,
            "company_name": "Schowalter and Sons",
            "average_processing_time": 1989,
            "created_at": "2018-04-08 18:35:52",
            "updated_at": "2018-04-08 18:35:52"
        },
        {
            "id": 29,
            "company_name": "Rippin-Hansen",
            "average_processing_time": 970,
            "created_at": "2018-04-08 18:35:52",
            "updated_at": "2018-04-08 18:35:52"
        },
        {
            "id": 30,
            "company_name": "Gottlieb, Schowalter and Kling",
            "average_processing_time": 996,
            "created_at": "2018-04-08 18:35:52",
            "updated_at": "2018-04-08 18:35:52"
        },
        {
            "id": 31,
            "company_name": "Miller Ltd",
            "average_processing_time": 1345,
            "created_at": "2018-04-08 18:35:52",
            "updated_at": "2018-04-08 18:35:52"
        },
        {
            "id": 32,
            "company_name": "Baumbach PLC",
            "average_processing_time": 773,
            "created_at": "2018-04-08 18:35:52",
            "updated_at": "2018-04-08 18:35:52"
        },
        {
            "id": 33,
            "company_name": "Champlin-Hamill",
            "average_processing_time": 640,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 34,
            "company_name": "Deckow, Cruickshank and Block",
            "average_processing_time": 1403,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 35,
            "company_name": "Simonis, Waters and Pollich",
            "average_processing_time": 1182,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 36,
            "company_name": "Brown and Sons",
            "average_processing_time": 1860,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 37,
            "company_name": "Friesen LLC",
            "average_processing_time": 1571,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 38,
            "company_name": "Kris-Lowe",
            "average_processing_time": 1241,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 39,
            "company_name": "Wunsch, Bergnaum and Ryan",
            "average_processing_time": 1159,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 40,
            "company_name": "Boehm-Bosco",
            "average_processing_time": 676,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 41,
            "company_name": "Balistreri LLC",
            "average_processing_time": 1282,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 42,
            "company_name": "Altenwerth Group",
            "average_processing_time": 1596,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 43,
            "company_name": "Krajcik, Schmidt and Weber",
            "average_processing_time": 1899,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 44,
            "company_name": "Schmidt, Herman and Jacobson",
            "average_processing_time": 997,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 45,
            "company_name": "Lind Ltd",
            "average_processing_time": 1532,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 46,
            "company_name": "Bashirian, Fisher and Senger",
            "average_processing_time": 985,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 47,
            "company_name": "Blanda, Effertz and Konopelski",
            "average_processing_time": 972,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 48,
            "company_name": "Walsh PLC",
            "average_processing_time": 1230,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 49,
            "company_name": "Bechtelar Group",
            "average_processing_time": 1041,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 50,
            "company_name": "Luettgen, Price and Ratke",
            "average_processing_time": 823,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 51,
            "company_name": "Paucek, Mayer and Kuhic",
            "average_processing_time": 699,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 52,
            "company_name": "Kassulke Inc",
            "average_processing_time": 919,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 53,
            "company_name": "Bergstrom, Walker and Toy",
            "average_processing_time": 1789,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 54,
            "company_name": "Gorczany Inc",
            "average_processing_time": 1412,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 55,
            "company_name": "Wolff Group",
            "average_processing_time": 931,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 56,
            "company_name": "Brakus, Jones and Predovic",
            "average_processing_time": 1778,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 57,
            "company_name": "Becker-Bradtke",
            "average_processing_time": 1597,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 58,
            "company_name": "Fisher-Spencer",
            "average_processing_time": 861,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 59,
            "company_name": "Oberbrunner-Weimann",
            "average_processing_time": 867,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 60,
            "company_name": "Volkman, O'Connell and West",
            "average_processing_time": 1461,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 61,
            "company_name": "Dibbert, Donnelly and Altenwerth",
            "average_processing_time": 1532,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 62,
            "company_name": "Hintz PLC",
            "average_processing_time": 1696,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 63,
            "company_name": "Schumm, Robel and Wintheiser",
            "average_processing_time": 1017,
            "created_at": "2018-04-08 18:37:54",
            "updated_at": "2018-04-08 18:37:54"
        },
        {
            "id": 64,
            "company_name": "Rogahn-Luettgen",
            "average_processing_time": 1793,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 65,
            "company_name": "Lockman, Nitzsche and Stehr",
            "average_processing_time": 1694,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 66,
            "company_name": "Waelchi PLC",
            "average_processing_time": 1120,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 67,
            "company_name": "Sanford-Paucek",
            "average_processing_time": 1016,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 68,
            "company_name": "Dach LLC",
            "average_processing_time": 1820,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 69,
            "company_name": "Kuhn-Bosco",
            "average_processing_time": 1966,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 70,
            "company_name": "Johns Group",
            "average_processing_time": 731,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 71,
            "company_name": "White PLC",
            "average_processing_time": 1695,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 72,
            "company_name": "Gleason, Hane and Hilll",
            "average_processing_time": 1000,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 73,
            "company_name": "Smitham, Torp and Waters",
            "average_processing_time": 1347,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 74,
            "company_name": "McDermott-Renner",
            "average_processing_time": 1166,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 75,
            "company_name": "Greenholt, Will and Gusikowski",
            "average_processing_time": 682,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 76,
            "company_name": "Windler PLC",
            "average_processing_time": 1485,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 77,
            "company_name": "Greenfelder Group",
            "average_processing_time": 1165,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 78,
            "company_name": "Feil, Kohler and Volkman",
            "average_processing_time": 1480,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 79,
            "company_name": "Hahn Group",
            "average_processing_time": 1086,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 80,
            "company_name": "Hettinger-Stracke",
            "average_processing_time": 1403,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 81,
            "company_name": "Larkin-Greenfelder",
            "average_processing_time": 1768,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 82,
            "company_name": "Walsh Inc",
            "average_processing_time": 603,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 83,
            "company_name": "Stanton-Tromp",
            "average_processing_time": 634,
            "created_at": "2018-04-08 18:38:31",
            "updated_at": "2018-04-08 18:38:31"
        },
        {
            "id": 84,
            "company_name": "Dibbert-Nienow",
            "average_processing_time": 1677,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 85,
            "company_name": "Beahan, Bruen and Cruickshank",
            "average_processing_time": 1777,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 86,
            "company_name": "Blick, Gerlach and Herman",
            "average_processing_time": 1444,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 87,
            "company_name": "Weissnat, Steuber and Tremblay",
            "average_processing_time": 1844,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 88,
            "company_name": "Hayes LLC",
            "average_processing_time": 1204,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 89,
            "company_name": "Rogahn, Rolfson and Hayes",
            "average_processing_time": 698,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 90,
            "company_name": "Lebsack-Bins",
            "average_processing_time": 1459,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 91,
            "company_name": "West, Jacobi and Oberbrunner",
            "average_processing_time": 1439,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 92,
            "company_name": "Hyatt, Farrell and Watsica",
            "average_processing_time": 1889,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 93,
            "company_name": "Hoppe-Reichel",
            "average_processing_time": 1611,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 94,
            "company_name": "Wiegand-Waters",
            "average_processing_time": 1463,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 95,
            "company_name": "Considine, Kuhn and Lesch",
            "average_processing_time": 1617,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 96,
            "company_name": "Langworth Inc",
            "average_processing_time": 1585,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 97,
            "company_name": "Ebert, O'Kon and Cormier",
            "average_processing_time": 743,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 98,
            "company_name": "Lebsack-Ankunding",
            "average_processing_time": 788,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 99,
            "company_name": "Schaefer Group",
            "average_processing_time": 1701,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 100,
            "company_name": "Feest LLC",
            "average_processing_time": 1848,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 101,
            "company_name": "Stehr LLC",
            "average_processing_time": 1843,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 102,
            "company_name": "Dicki, Stamm and Heller",
            "average_processing_time": 723,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 103,
            "company_name": "Ryan-Runte",
            "average_processing_time": 1606,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 104,
            "company_name": "Kuhic-Zemlak",
            "average_processing_time": 911,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 105,
            "company_name": "D'Amore LLC",
            "average_processing_time": 1491,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 106,
            "company_name": "Runolfsdottir-Wintheiser",
            "average_processing_time": 1275,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 107,
            "company_name": "Schulist LLC",
            "average_processing_time": 1481,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 108,
            "company_name": "Morissette, Conroy and Pollich",
            "average_processing_time": 1673,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 109,
            "company_name": "Morissette-Baumbach",
            "average_processing_time": 1409,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 110,
            "company_name": "Mueller Ltd",
            "average_processing_time": 1146,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 111,
            "company_name": "Heller, Pollich and Wisozk",
            "average_processing_time": 1247,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 112,
            "company_name": "Schmidt-Toy",
            "average_processing_time": 1674,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 113,
            "company_name": "Hoeger PLC",
            "average_processing_time": 881,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 114,
            "company_name": "Quigley, Johnston and Parker",
            "average_processing_time": 619,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 115,
            "company_name": "Ebert-Koelpin",
            "average_processing_time": 1600,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 116,
            "company_name": "Schneider-Miller",
            "average_processing_time": 1164,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 117,
            "company_name": "Bahringer-Luettgen",
            "average_processing_time": 960,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 118,
            "company_name": "Fay, Stamm and Abbott",
            "average_processing_time": 1719,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 119,
            "company_name": "Schimmel, Swift and Pollich",
            "average_processing_time": 1301,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 120,
            "company_name": "Runolfsdottir, Ondricka and Lesch",
            "average_processing_time": 1144,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 121,
            "company_name": "Hamill-Thompson",
            "average_processing_time": 1789,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 122,
            "company_name": "Koepp, Prohaska and Borer",
            "average_processing_time": 1107,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 123,
            "company_name": "Howell-Erdman",
            "average_processing_time": 1659,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 124,
            "company_name": "Haag-Corwin",
            "average_processing_time": 636,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 125,
            "company_name": "Bashirian Inc",
            "average_processing_time": 1942,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 126,
            "company_name": "Rodriguez LLC",
            "average_processing_time": 1133,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 127,
            "company_name": "Walker, Simonis and Reichert",
            "average_processing_time": 1760,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 128,
            "company_name": "Rutherford Group",
            "average_processing_time": 1256,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 129,
            "company_name": "Orn-Ledner",
            "average_processing_time": 971,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 130,
            "company_name": "McClure-Hayes",
            "average_processing_time": 1531,
            "created_at": "2018-04-08 18:38:32",
            "updated_at": "2018-04-08 18:38:32"
        },
        {
            "id": 131,
            "company_name": "Hartmann and Sons",
            "average_processing_time": 1356,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 132,
            "company_name": "Klocko PLC",
            "average_processing_time": 1931,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 133,
            "company_name": "Harvey Inc",
            "average_processing_time": 1627,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 134,
            "company_name": "Wehner-Stracke",
            "average_processing_time": 689,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 135,
            "company_name": "Bahringer Ltd",
            "average_processing_time": 1503,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 136,
            "company_name": "Nienow, Keebler and Greenholt",
            "average_processing_time": 856,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 137,
            "company_name": "Skiles-Huel",
            "average_processing_time": 679,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 138,
            "company_name": "Gislason Inc",
            "average_processing_time": 1974,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 139,
            "company_name": "Crooks Inc",
            "average_processing_time": 1155,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 140,
            "company_name": "Watsica, Murray and Funk",
            "average_processing_time": 1235,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 141,
            "company_name": "Turcotte LLC",
            "average_processing_time": 1193,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 142,
            "company_name": "Jast, Haag and Carroll",
            "average_processing_time": 1752,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 143,
            "company_name": "Stanton Ltd",
            "average_processing_time": 1912,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 144,
            "company_name": "Baumbach-VonRueden",
            "average_processing_time": 1448,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 145,
            "company_name": "Stoltenberg-Crooks",
            "average_processing_time": 1263,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 146,
            "company_name": "Labadie Ltd",
            "average_processing_time": 1737,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 147,
            "company_name": "Bashirian-Jenkins",
            "average_processing_time": 1719,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 148,
            "company_name": "Leannon, Olson and Klocko",
            "average_processing_time": 913,
            "created_at": "2018-04-08 18:38:54",
            "updated_at": "2018-04-08 18:38:54"
        },
        {
            "id": 149,
            "company_name": "Beatty Inc",
            "average_processing_time": 2000,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 150,
            "company_name": "Bartoletti, Aufderhar and Mosciski",
            "average_processing_time": 1376,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 151,
            "company_name": "Brown, Flatley and Cummings",
            "average_processing_time": 819,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 152,
            "company_name": "Schuppe Ltd",
            "average_processing_time": 1066,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 153,
            "company_name": "Okuneva-Yundt",
            "average_processing_time": 1349,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 154,
            "company_name": "Heller Group",
            "average_processing_time": 930,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 155,
            "company_name": "Cremin-Luettgen",
            "average_processing_time": 743,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 156,
            "company_name": "Schoen LLC",
            "average_processing_time": 715,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 157,
            "company_name": "Bahringer-Von",
            "average_processing_time": 1940,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 158,
            "company_name": "Towne and Sons",
            "average_processing_time": 1587,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 159,
            "company_name": "Boyle, Hermiston and Ruecker",
            "average_processing_time": 1331,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 160,
            "company_name": "Davis Ltd",
            "average_processing_time": 871,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 161,
            "company_name": "Weimann, O'Keefe and Walker",
            "average_processing_time": 1219,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 162,
            "company_name": "Pagac, Hoeger and Hartmann",
            "average_processing_time": 1744,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 163,
            "company_name": "Davis, Rath and Quigley",
            "average_processing_time": 1158,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 164,
            "company_name": "Vandervort Group",
            "average_processing_time": 1586,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 165,
            "company_name": "Larson LLC",
            "average_processing_time": 736,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 166,
            "company_name": "Satterfield-Schneider",
            "average_processing_time": 1119,
            "created_at": "2018-04-08 18:38:55",
            "updated_at": "2018-04-08 18:38:55"
        },
        {
            "id": 167,
            "company_name": "Lemke-Dare",
            "average_processing_time": 758,
            "created_at": "2018-04-08 18:39:18",
            "updated_at": "2018-04-08 18:39:18"
        },
        {
            "id": 168,
            "company_name": "Berge and Sons",
            "average_processing_time": 1025,
            "created_at": "2018-04-08 18:39:18",
            "updated_at": "2018-04-08 18:39:18"
        },
        {
            "id": 169,
            "company_name": "Grant Inc",
            "average_processing_time": 1866,
            "created_at": "2018-04-08 18:39:18",
            "updated_at": "2018-04-08 18:39:18"
        },
        {
            "id": 170,
            "company_name": "Spinka Group",
            "average_processing_time": 1755,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 171,
            "company_name": "Swaniawski PLC",
            "average_processing_time": 980,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 172,
            "company_name": "Hickle-Medhurst",
            "average_processing_time": 1354,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 173,
            "company_name": "Wilderman Inc",
            "average_processing_time": 1596,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 174,
            "company_name": "Ebert-O'Connell",
            "average_processing_time": 697,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 175,
            "company_name": "Becker LLC",
            "average_processing_time": 1347,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 176,
            "company_name": "Robel Ltd",
            "average_processing_time": 1167,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 177,
            "company_name": "Lubowitz Inc",
            "average_processing_time": 1613,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 178,
            "company_name": "Ferry PLC",
            "average_processing_time": 747,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 179,
            "company_name": "Schaden-Nienow",
            "average_processing_time": 929,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 180,
            "company_name": "Rath-Kovacek",
            "average_processing_time": 1610,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 181,
            "company_name": "Torp, Rodriguez and Fahey",
            "average_processing_time": 956,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 182,
            "company_name": "Crist-Volkman",
            "average_processing_time": 923,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 183,
            "company_name": "Trantow Group",
            "average_processing_time": 771,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 184,
            "company_name": "Mitchell and Sons",
            "average_processing_time": 1279,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 185,
            "company_name": "Bosco, Klocko and Wilderman",
            "average_processing_time": 1067,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 186,
            "company_name": "Schneider-King",
            "average_processing_time": 1565,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 187,
            "company_name": "White Group",
            "average_processing_time": 1997,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 188,
            "company_name": "Huels and Sons",
            "average_processing_time": 1392,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 189,
            "company_name": "Gorczany, Blick and Beahan",
            "average_processing_time": 849,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 190,
            "company_name": "Prosacco, Hilpert and Reinger",
            "average_processing_time": 1223,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 191,
            "company_name": "Stamm, Corwin and Pfannerstill",
            "average_processing_time": 1300,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 192,
            "company_name": "Bartoletti PLC",
            "average_processing_time": 1006,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 193,
            "company_name": "Williamson, Crooks and Bednar",
            "average_processing_time": 1442,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 194,
            "company_name": "Kuhlman PLC",
            "average_processing_time": 1836,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 195,
            "company_name": "Klocko Inc",
            "average_processing_time": 981,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 196,
            "company_name": "Eichmann PLC",
            "average_processing_time": 1065,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 197,
            "company_name": "Graham, Kling and Jaskolski",
            "average_processing_time": 691,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 198,
            "company_name": "Jenkins and Sons",
            "average_processing_time": 605,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 199,
            "company_name": "Runte Inc",
            "average_processing_time": 1691,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 200,
            "company_name": "Sporer Group",
            "average_processing_time": 760,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 201,
            "company_name": "Jacobson, Bogisich and Metz",
            "average_processing_time": 1604,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 202,
            "company_name": "Schroeder, Koepp and Orn",
            "average_processing_time": 1543,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 203,
            "company_name": "Kuphal, Kovacek and Bartoletti",
            "average_processing_time": 1506,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 204,
            "company_name": "Gorczany, Erdman and Dare",
            "average_processing_time": 1868,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 205,
            "company_name": "Koch, Purdy and Macejkovic",
            "average_processing_time": 1794,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 206,
            "company_name": "Weber LLC",
            "average_processing_time": 1906,
            "created_at": "2018-04-08 18:39:19",
            "updated_at": "2018-04-08 18:39:19"
        },
        {
            "id": 207,
            "company_name": "Wisozk, Streich and Harber",
            "average_processing_time": 1587,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 208,
            "company_name": "Hoeger Group",
            "average_processing_time": 680,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 209,
            "company_name": "Morissette-Effertz",
            "average_processing_time": 938,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 210,
            "company_name": "O'Conner-Kerluke",
            "average_processing_time": 1118,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 211,
            "company_name": "Hodkiewicz-Heidenreich",
            "average_processing_time": 794,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 212,
            "company_name": "Smith, Jacobi and Gleason",
            "average_processing_time": 1019,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 213,
            "company_name": "Schinner LLC",
            "average_processing_time": 686,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 214,
            "company_name": "Ebert Inc",
            "average_processing_time": 870,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 215,
            "company_name": "Raynor Group",
            "average_processing_time": 1553,
            "created_at": "2018-04-08 18:39:33",
            "updated_at": "2018-04-08 18:39:33"
        },
        {
            "id": 216,
            "company_name": "Kunze and Sons",
            "average_processing_time": 1563,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 217,
            "company_name": "Batz-Jacobson",
            "average_processing_time": 1510,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 218,
            "company_name": "Grant Group",
            "average_processing_time": 1707,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 219,
            "company_name": "Daniel, Kunde and Will",
            "average_processing_time": 1975,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 220,
            "company_name": "O'Keefe-Kulas",
            "average_processing_time": 1487,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 221,
            "company_name": "Price Group",
            "average_processing_time": 1833,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 222,
            "company_name": "Konopelski-Wisoky",
            "average_processing_time": 867,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 223,
            "company_name": "Cormier, Graham and Hegmann",
            "average_processing_time": 1501,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 224,
            "company_name": "Dooley-Spencer",
            "average_processing_time": 1519,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 225,
            "company_name": "Buckridge and Sons",
            "average_processing_time": 882,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 226,
            "company_name": "Balistreri-Hoppe",
            "average_processing_time": 1140,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 227,
            "company_name": "Halvorson-Wiza",
            "average_processing_time": 1137,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 228,
            "company_name": "Wiegand Group",
            "average_processing_time": 1573,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 229,
            "company_name": "Lowe, Jones and Gerhold",
            "average_processing_time": 1631,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 230,
            "company_name": "Spinka-Langworth",
            "average_processing_time": 1227,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 231,
            "company_name": "Erdman, Blanda and Bogan",
            "average_processing_time": 692,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 232,
            "company_name": "Fay, Weissnat and Quitzon",
            "average_processing_time": 954,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 233,
            "company_name": "Rosenbaum and Sons",
            "average_processing_time": 1956,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 234,
            "company_name": "Ryan-White",
            "average_processing_time": 835,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 235,
            "company_name": "Jacobs-Cruickshank",
            "average_processing_time": 1732,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 236,
            "company_name": "Weimann-Ullrich",
            "average_processing_time": 1557,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 237,
            "company_name": "Shanahan-Schuster",
            "average_processing_time": 1479,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 238,
            "company_name": "Nikolaus Ltd",
            "average_processing_time": 1127,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 239,
            "company_name": "Jacobson-Wilderman",
            "average_processing_time": 1251,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 240,
            "company_name": "Murazik, Ziemann and Smitham",
            "average_processing_time": 1043,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 241,
            "company_name": "Block, Bogisich and Murray",
            "average_processing_time": 619,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 242,
            "company_name": "Abbott-Grimes",
            "average_processing_time": 668,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 243,
            "company_name": "Hodkiewicz-Heaney",
            "average_processing_time": 1965,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 244,
            "company_name": "Christiansen, Monahan and Walker",
            "average_processing_time": 743,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 245,
            "company_name": "Boehm, Herman and Herzog",
            "average_processing_time": 1087,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 246,
            "company_name": "O'Connell, Brakus and Gibson",
            "average_processing_time": 1177,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 247,
            "company_name": "Legros, Hauck and Maggio",
            "average_processing_time": 1855,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 248,
            "company_name": "Toy PLC",
            "average_processing_time": 1045,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 249,
            "company_name": "O'Hara PLC",
            "average_processing_time": 653,
            "created_at": "2018-04-08 18:39:34",
            "updated_at": "2018-04-08 18:39:34"
        },
        {
            "id": 256,
            "company_name": "DuBuque LLC",
            "average_processing_time": 663,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 257,
            "company_name": "Pollich-Boehm",
            "average_processing_time": 869,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 258,
            "company_name": "Mosciski, Cronin and Nolan",
            "average_processing_time": 1210,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 259,
            "company_name": "Feeney Ltd",
            "average_processing_time": 1146,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 260,
            "company_name": "Ferry Group",
            "average_processing_time": 1222,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 261,
            "company_name": "Cassin-Rau",
            "average_processing_time": 1881,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 262,
            "company_name": "Koepp, Jast and Lehner",
            "average_processing_time": 1874,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 263,
            "company_name": "Treutel PLC",
            "average_processing_time": 1631,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 264,
            "company_name": "Kutch-Fahey",
            "average_processing_time": 1284,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 265,
            "company_name": "Goldner-Donnelly",
            "average_processing_time": 602,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 266,
            "company_name": "Schaden LLC",
            "average_processing_time": 1687,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 267,
            "company_name": "Muller-Connelly",
            "average_processing_time": 1578,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 268,
            "company_name": "Cartwright Group",
            "average_processing_time": 985,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 269,
            "company_name": "Predovic-Homenick",
            "average_processing_time": 889,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 270,
            "company_name": "Will, Schowalter and Wisozk",
            "average_processing_time": 881,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 271,
            "company_name": "Muller-Daugherty",
            "average_processing_time": 1115,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 272,
            "company_name": "Kerluke, Eichmann and White",
            "average_processing_time": 1184,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 273,
            "company_name": "Skiles, Cassin and Hammes",
            "average_processing_time": 1339,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 274,
            "company_name": "Stoltenberg, VonRueden and Towne",
            "average_processing_time": 788,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 275,
            "company_name": "Funk Ltd",
            "average_processing_time": 1161,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 276,
            "company_name": "Hintz-Bradtke",
            "average_processing_time": 979,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 250,
            "company_name": "Corkery-Pollich",
            "average_processing_time": 864,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 251,
            "company_name": "Torphy PLC",
            "average_processing_time": 698,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 252,
            "company_name": "Murphy PLC",
            "average_processing_time": 1591,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 253,
            "company_name": "Satterfield and Sons",
            "average_processing_time": 905,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 254,
            "company_name": "Vandervort-Mraz",
            "average_processing_time": 1147,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 255,
            "company_name": "Wiza-Runolfsson",
            "average_processing_time": 883,
            "created_at": "2018-04-08 18:41:27",
            "updated_at": "2018-04-08 18:41:27"
        },
        {
            "id": 277,
            "company_name": "Bosco, O'Kon and Hodkiewicz",
            "average_processing_time": 1087,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 278,
            "company_name": "Bauch, Bashirian and Yost",
            "average_processing_time": 1053,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 279,
            "company_name": "Waelchi, Walker and Simonis",
            "average_processing_time": 1547,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 280,
            "company_name": "Bechtelar Inc",
            "average_processing_time": 1904,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 281,
            "company_name": "Wyman-Schaefer",
            "average_processing_time": 911,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 282,
            "company_name": "Parker, Herman and Feeney",
            "average_processing_time": 1108,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 283,
            "company_name": "Wilkinson Group",
            "average_processing_time": 1546,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 284,
            "company_name": "Russel-Green",
            "average_processing_time": 1880,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 285,
            "company_name": "Douglas-Heaney",
            "average_processing_time": 1048,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 286,
            "company_name": "Jakubowski-Cole",
            "average_processing_time": 770,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 287,
            "company_name": "Strosin-Kerluke",
            "average_processing_time": 1805,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 288,
            "company_name": "Weimann, Schoen and Dicki",
            "average_processing_time": 1380,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 289,
            "company_name": "Haley, D'Amore and Grimes",
            "average_processing_time": 1802,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 290,
            "company_name": "Johns LLC",
            "average_processing_time": 798,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 291,
            "company_name": "Hoeger LLC",
            "average_processing_time": 1469,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 292,
            "company_name": "Heathcote-Becker",
            "average_processing_time": 1532,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 293,
            "company_name": "Collier-Braun",
            "average_processing_time": 1586,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 294,
            "company_name": "Hegmann-Daugherty",
            "average_processing_time": 665,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 295,
            "company_name": "Pouros Ltd",
            "average_processing_time": 1372,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 296,
            "company_name": "Bartoletti-Runolfsson",
            "average_processing_time": 1827,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 297,
            "company_name": "Durgan Group",
            "average_processing_time": 955,
            "created_at": "2018-04-08 18:41:28",
            "updated_at": "2018-04-08 18:41:28"
        },
        {
            "id": 298,
            "company_name": "Hagenes-Bosco",
            "average_processing_time": 1182,
            "created_at": "2018-04-08 18:42:18",
            "updated_at": "2018-04-08 18:42:18"
        },
        {
            "id": 299,
            "company_name": "Dickinson Inc",
            "average_processing_time": 836,
            "created_at": "2018-04-08 18:42:18",
            "updated_at": "2018-04-08 18:42:18"
        },
        {
            "id": 300,
            "company_name": "Lueilwitz-Legros",
            "average_processing_time": 1682,
            "created_at": "2018-04-08 18:43:50",
            "updated_at": "2018-04-08 18:43:50"
        },
        {
            "id": 301,
            "company_name": "Friesen, Frami and Beatty",
            "average_processing_time": 783,
            "created_at": "2018-04-08 18:43:50",
            "updated_at": "2018-04-08 18:43:50"
        },
        {
            "id": 302,
            "company_name": "Wyman Inc",
            "average_processing_time": 966,
            "created_at": "2018-04-08 18:44:33",
            "updated_at": "2018-04-08 18:44:33"
        },
        {
            "id": 303,
            "company_name": "Kautzer, Jones and Wunsch",
            "average_processing_time": 1076,
            "created_at": "2018-04-08 18:45:34",
            "updated_at": "2018-04-08 18:45:34"
        },
        {
            "id": 304,
            "company_name": "Conroy-Smith",
            "average_processing_time": 1808,
            "created_at": "2018-04-08 18:45:34",
            "updated_at": "2018-04-08 18:45:34"
        },
        {
            "id": 305,
            "company_name": "Pacocha Group",
            "average_processing_time": 906,
            "created_at": "2018-04-08 18:46:52",
            "updated_at": "2018-04-08 18:46:52"
        },
        {
            "id": 306,
            "company_name": "Roob and Sons",
            "average_processing_time": 1632,
            "created_at": "2018-04-08 18:47:38",
            "updated_at": "2018-04-08 18:47:38"
        },
        {
            "id": 307,
            "company_name": "Cole and Sons",
            "average_processing_time": 1845,
            "created_at": "2018-04-08 18:47:38",
            "updated_at": "2018-04-08 18:47:38"
        },
        {
            "id": 308,
            "company_name": "Sawayn Group",
            "average_processing_time": 727,
            "created_at": "2018-04-08 18:51:11",
            "updated_at": "2018-04-08 18:51:11"
        },
        {
            "id": 309,
            "company_name": "Keeling, Wiza and Dooley",
            "average_processing_time": 1531,
            "created_at": "2018-04-08 18:51:11",
            "updated_at": "2018-04-08 18:51:11"
        },
        {
            "id": 310,
            "company_name": "Predovic-Smith",
            "average_processing_time": 612,
            "created_at": "2018-04-08 18:51:22",
            "updated_at": "2018-04-08 18:51:22"
        },
        {
            "id": 311,
            "company_name": "Armstrong-McGlynn",
            "average_processing_time": 1631,
            "created_at": "2018-04-08 18:51:22",
            "updated_at": "2018-04-08 18:51:22"
        },
        {
            "id": 312,
            "company_name": "Wiegand, Becker and Marquardt",
            "average_processing_time": 1310,
            "created_at": "2018-04-08 18:53:22",
            "updated_at": "2018-04-08 18:53:22"
        },
        {
            "id": 313,
            "company_name": "Grady-Skiles",
            "average_processing_time": 1992,
            "created_at": "2018-04-08 18:53:22",
            "updated_at": "2018-04-08 18:53:22"
        },
        {
            "id": 314,
            "company_name": "Pfeffer-Herman",
            "average_processing_time": 1130,
            "created_at": "2018-04-08 19:01:00",
            "updated_at": "2018-04-08 19:01:00"
        },
        {
            "id": 315,
            "company_name": "Sanford Inc",
            "average_processing_time": 1868,
            "created_at": "2018-04-08 19:01:01",
            "updated_at": "2018-04-08 19:01:01"
        },
        {
            "id": 316,
            "company_name": "Cremin LLC",
            "average_processing_time": 1290,
            "created_at": "2018-04-08 19:01:47",
            "updated_at": "2018-04-08 19:01:47"
        },
        {
            "id": 317,
            "company_name": "Larson PLC",
            "average_processing_time": 1762,
            "created_at": "2018-04-08 19:01:47",
            "updated_at": "2018-04-08 19:01:47"
        },
        {
            "id": 318,
            "company_name": "Hintz-Mohr",
            "average_processing_time": 1004,
            "created_at": "2018-04-08 19:02:39",
            "updated_at": "2018-04-08 19:02:39"
        },
        {
            "id": 319,
            "company_name": "Hilpert Group",
            "average_processing_time": 848,
            "created_at": "2018-04-08 19:02:39",
            "updated_at": "2018-04-08 19:02:39"
        },
        {
            "id": 320,
            "company_name": "Quitzon-Jacobi",
            "average_processing_time": 1112,
            "created_at": "2018-04-08 19:02:39",
            "updated_at": "2018-04-08 19:02:39"
        },
        {
            "id": 321,
            "company_name": "New Company Name",
            "average_processing_time": 786,
            "created_at": "2018-04-08 19:02:40",
            "updated_at": "2018-04-08 19:02:41"
        },
        {
            "id": 322,
            "company_name": "Fay, Ullrich and Champlin",
            "average_processing_time": 1768,
            "created_at": "2018-04-08 19:05:37",
            "updated_at": "2018-04-08 19:05:37"
        },
        {
            "id": 323,
            "company_name": "Keeling Ltd",
            "average_processing_time": 1610,
            "created_at": "2018-04-08 19:05:37",
            "updated_at": "2018-04-08 19:05:37"
        },
        {
            "id": 324,
            "company_name": "Franecki-Dickens",
            "average_processing_time": 1614,
            "created_at": "2018-04-08 19:05:37",
            "updated_at": "2018-04-08 19:05:37"
        },
        {
            "id": 325,
            "company_name": "New Company Name",
            "average_processing_time": 1337,
            "created_at": "2018-04-08 19:05:38",
            "updated_at": "2018-04-08 19:05:38"
        },
        {
            "id": 326,
            "company_name": "ABC COMPANY",
            "average_processing_time": 3000,
            "created_at": "2018-04-08 19:07:07",
            "updated_at": "2018-04-08 19:07:07"
        },
        {
            "id": 327,
            "company_name": "Ullrich-Hahn",
            "average_processing_time": 1039,
            "created_at": "2018-04-08 19:07:07",
            "updated_at": "2018-04-08 19:07:07"
        },
        {
            "id": 329,
            "company_name": "Tremblay-O'Hara",
            "average_processing_time": 639,
            "created_at": "2018-04-08 19:07:07",
            "updated_at": "2018-04-08 19:07:07"
        },
        {
            "id": 330,
            "company_name": "New Company Name",
            "average_processing_time": 743,
            "created_at": "2018-04-08 19:07:09",
            "updated_at": "2018-04-08 19:07:09"
        },
        {
            "id": 331,
            "company_name": "ABC COMPANY",
            "average_processing_time": 3000,
            "created_at": "2018-04-08 19:07:20",
            "updated_at": "2018-04-08 19:07:20"
        },
        {
            "id": 332,
            "company_name": "Rempel, Collins and Price",
            "average_processing_time": 1773,
            "created_at": "2018-04-08 19:07:20",
            "updated_at": "2018-04-08 19:07:20"
        },
        {
            "id": 334,
            "company_name": "Breitenberg-Thiel",
            "average_processing_time": 925,
            "created_at": "2018-04-08 19:07:21",
            "updated_at": "2018-04-08 19:07:21"
        },
        {
            "id": 335,
            "company_name": "New Company Name",
            "average_processing_time": 757,
            "created_at": "2018-04-08 19:07:22",
            "updated_at": "2018-04-08 19:07:22"
        },
        {
            "id": 336,
            "company_name": "ABC COMPANY",
            "average_processing_time": 3000,
            "created_at": "2018-04-08 19:08:14",
            "updated_at": "2018-04-08 19:08:14"
        },
        {
            "id": 337,
            "company_name": "Reichert, Hammes and Wunsch",
            "average_processing_time": 1802,
            "created_at": "2018-04-08 19:08:14",
            "updated_at": "2018-04-08 19:08:14"
        },
        {
            "id": 339,
            "company_name": "Douglas PLC",
            "average_processing_time": 914,
            "created_at": "2018-04-08 19:08:14",
            "updated_at": "2018-04-08 19:08:14"
        },
        {
            "id": 340,
            "company_name": "New Company Name",
            "average_processing_time": 1281,
            "created_at": "2018-04-08 19:08:15",
            "updated_at": "2018-04-08 19:08:16"
        }
    ]
}
```

### HTTP Request
`GET api/v1/vendors`

`HEAD api/v1/vendors`


<!-- END_5639b80290981553bf79f0a8cdf6ed0c -->

<!-- START_836e97574f113bb24b1697ba5f274160 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/vendors" \
-H "Accept: application/json" \
    -d "company_name"="deserunt" \
    -d "average_processing_time"="553718" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendors",
    "method": "POST",
    "data": {
        "company_name": "deserunt",
        "average_processing_time": 553718
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
`POST api/v1/vendors`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    company_name | string |  required  | Maximum: `190`
    average_processing_time | integer |  required  | 

<!-- END_836e97574f113bb24b1697ba5f274160 -->

<!-- START_f2b8917dc6fbb79e4a1129564b9ab2f6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/vendors/{vendor}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendors/{vendor}",
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
    "status": "ok",
    "result": {
        "id": 1,
        "company_name": "ABC Resturant 444",
        "average_processing_time": 444,
        "created_at": "2018-04-08 13:07:19",
        "updated_at": "2018-04-08 14:00:02"
    }
}
```

### HTTP Request
`GET api/v1/vendors/{vendor}`

`HEAD api/v1/vendors/{vendor}`


<!-- END_f2b8917dc6fbb79e4a1129564b9ab2f6 -->

<!-- START_614102150cddc756f1c4983cf1687099 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/vendors/{vendor}" \
-H "Accept: application/json" \
    -d "company_name"="et" \
    -d "average_processing_time"="5" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendors/{vendor}",
    "method": "PUT",
    "data": {
        "company_name": "et",
        "average_processing_time": 5
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
`PUT api/v1/vendors/{vendor}`

`PATCH api/v1/vendors/{vendor}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    company_name | string |  optional  | Maximum: `190`
    average_processing_time | integer |  optional  | 

<!-- END_614102150cddc756f1c4983cf1687099 -->

<!-- START_61f0a166da53cf73a18e93beb0b3258c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/vendors/{vendor}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/vendors/{vendor}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/vendors/{vendor}`


<!-- END_61f0a166da53cf73a18e93beb0b3258c -->

