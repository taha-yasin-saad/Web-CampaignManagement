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
[Get Postman Collection](http://localhost/closor/public/docs/collection.json)

<!-- END_INFO -->

#Admin Leads management


Routes To manage Leads data For The Admin Control Panal
<!-- START_d73e5ecdb21a6038d8c7d5ab1b3bff01 -->
## Display a listing of Leads.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/lead" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/lead"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "kareem222",
    "product_id": 6,
    "user_id": null,
    "source_id": 9,
    "phone": "1234567654",
    "email": "kareemkima@gmail.com\r\n",
    "scheduled_on": null,
    "last_contact": null,
    "status": 2,
    "lead": [
        {
            "key": "name",
            "value": "kareem222"
        },
        {
            "key": "phone",
            "value": "1234567654"
        },
        {
            "key": "mobile",
            "value": "22345678987654"
        },
        {
            "key": "source",
            "value": "Bottels Website Form"
        },
        {
            "key": "product",
            "value": "Product test"
        }
    ],
    "created_at": "2020-02-23 04:10:22",
    "updated_at": "2020-10-01 07:07:08",
    "workplaces": {
        "id": 6,
        "admin_id": 2,
        "title": "My work",
        "created_at": "2020-02-20 04:39:36",
        "updated_at": "2020-02-20 04:39:36",
        "timezone": "Africa\/Cairo",
        "website": null,
        "startday": "Monday",
        "laravel_through_key": 6,
        "times": null,
        "admin": {
            "id": 2,
            "name": "ahmed kamal",
            "phone": "123456789",
            "country_code": null,
            "email": "kamal@gmail.com",
            "email_verified_at": null,
            "created_at": "2020-01-27 13:18:17",
            "updated_at": "2020-12-28 15:23:53",
            "device_token": null,
            "os": null,
            "is_available": 1
        }
    },
    "product": {
        "id": 6,
        "workplace_id": 6,
        "title": "Product test",
        "created_at": "2020-02-20 04:40:06",
        "updated_at": "2020-02-20 04:40:06"
    },
    "source": {
        "id": 9,
        "workplace_id": 8,
        "user_id": 7,
        "name": "Bottels Website Form",
        "country_id": null,
        "website": "https:\/\/popcorn.com",
        "product_id": 11,
        "widget_type": "text",
        "alignment": "left",
        "primary": "#34a853",
        "secondary": "#ffffff",
        "icon_type": "mdi mdi-phone fa-fw",
        "bubble": "on",
        "bubble_line_1": "Want to talk to an expert?",
        "bubble_line_2": "Our Team is 60 Second Away From You!",
        "bubble_bg_color": "#959a9e",
        "bubble_text_color": "#ffffff",
        "text_text": "Talk to sales expert now!",
        "text_round": 10,
        "fields": [
            "name",
            "email",
            "custom1",
            "custom2"
        ],
        "custom_lable_1": "Country",
        "custom_lable_2": "Job Title",
        "submitt_text": "Call\r\n Me Now",
        "created_at": "2020-10-01 16:42:32",
        "updated_at": "2020-10-01 16:42:32"
    },
    "user": null
}
```
> Example response (404):

```json
null
```
> Example response (401):

```json
null
```

### HTTP Request
`GET admin/lead`


<!-- END_d73e5ecdb21a6038d8c7d5ab1b3bff01 -->

<!-- START_f0d5be4b6535bdf6c5893c2d36c4b7a3 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/lead/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/lead/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/lead/create`


<!-- END_f0d5be4b6535bdf6c5893c2d36c4b7a3 -->

<!-- START_8c41b839307216344317ddb09df54c66 -->
## Display a listing of Leads.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/admin/lead" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/lead"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "kareem222",
    "product_id": 6,
    "user_id": null,
    "source_id": 9,
    "phone": "1234567654",
    "email": "kareemkima@gmail.com\r\n",
    "scheduled_on": null,
    "last_contact": null,
    "status": 2,
    "lead": [
        {
            "key": "name",
            "value": "kareem222"
        },
        {
            "key": "phone",
            "value": "1234567654"
        },
        {
            "key": "mobile",
            "value": "22345678987654"
        },
        {
            "key": "source",
            "value": "Bottels Website Form"
        },
        {
            "key": "product",
            "value": "Product test"
        }
    ],
    "created_at": "2020-02-23 04:10:22",
    "updated_at": "2020-10-01 07:07:08",
    "workplaces": {
        "id": 6,
        "admin_id": 2,
        "title": "My work",
        "created_at": "2020-02-20 04:39:36",
        "updated_at": "2020-02-20 04:39:36",
        "timezone": "Africa\/Cairo",
        "website": null,
        "startday": "Monday",
        "laravel_through_key": 6,
        "times": null,
        "admin": {
            "id": 2,
            "name": "ahmed kamal",
            "phone": "123456789",
            "country_code": null,
            "email": "kamal@gmail.com",
            "email_verified_at": null,
            "created_at": "2020-01-27 13:18:17",
            "updated_at": "2020-12-28 15:23:53",
            "device_token": null,
            "os": null,
            "is_available": 1
        }
    },
    "product": {
        "id": 6,
        "workplace_id": 6,
        "title": "Product test",
        "created_at": "2020-02-20 04:40:06",
        "updated_at": "2020-02-20 04:40:06"
    },
    "source": {
        "id": 9,
        "workplace_id": 8,
        "user_id": 7,
        "name": "Bottels Website Form",
        "country_id": null,
        "website": "https:\/\/popcorn.com",
        "product_id": 11,
        "widget_type": "text",
        "alignment": "left",
        "primary": "#34a853",
        "secondary": "#ffffff",
        "icon_type": "mdi mdi-phone fa-fw",
        "bubble": "on",
        "bubble_line_1": "Want to talk to an expert?",
        "bubble_line_2": "Our Team is 60 Second Away From You!",
        "bubble_bg_color": "#959a9e",
        "bubble_text_color": "#ffffff",
        "text_text": "Talk to sales expert now!",
        "text_round": 10,
        "fields": [
            "name",
            "email",
            "custom1",
            "custom2"
        ],
        "custom_lable_1": "Country",
        "custom_lable_2": "Job Title",
        "submitt_text": "Call\r\n Me Now",
        "created_at": "2020-10-01 16:42:32",
        "updated_at": "2020-10-01 16:42:32"
    },
    "user": null
}
```
> Example response (404):

```json
null
```
> Example response (401):

```json
null
```

### HTTP Request
`POST admin/lead`


<!-- END_8c41b839307216344317ddb09df54c66 -->

<!-- START_20c4b3ef2d56086bd3394de6b0a721b8 -->
## admin/lead/{lead}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/lead/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/lead/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/lead/{lead}`


<!-- END_20c4b3ef2d56086bd3394de6b0a721b8 -->

<!-- START_e30b1cdf6cb7c6b478375e473d00b6c3 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/lead/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/lead/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/lead/{lead}/edit`


<!-- END_e30b1cdf6cb7c6b478375e473d00b6c3 -->

<!-- START_115a84479c20fc8f8e57d331e12f62ec -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/admin/lead/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/lead/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/lead/{lead}`

`PATCH admin/lead/{lead}`


<!-- END_115a84479c20fc8f8e57d331e12f62ec -->

<!-- START_f19725379c56d42c4801533c7e0d62d4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/admin/lead/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/lead/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/lead/{lead}`


<!-- END_f19725379c56d42c4801533c7e0d62d4 -->

#Admin Login management


Route for Login Admin & Moderator
<!-- START_18f69092e65df23bcc6d9f57e4ca2662 -->
## admin-login
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin-login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin-login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET admin-login`


<!-- END_18f69092e65df23bcc6d9f57e4ca2662 -->

<!-- START_82dae795cbae227a0f1a48ab41923d78 -->
## admin.login
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/admin.login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin.login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin.login`


<!-- END_82dae795cbae227a0f1a48ab41923d78 -->

#Admin Moderator management


Routes To manage Moderator data For The Admin Control Panal
<!-- START_42f1c137c1a4a3c3a7d1a98f743d76f7 -->
## admin/moderator
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/moderator" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/moderator"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/moderator`


<!-- END_42f1c137c1a4a3c3a7d1a98f743d76f7 -->

<!-- START_01b7e01eae0845434c2002e47bc1f035 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/moderator/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/moderator/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/moderator/create`


<!-- END_01b7e01eae0845434c2002e47bc1f035 -->

<!-- START_9ace67bf5a097be959593ac93ecddcc2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/admin/moderator" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/moderator"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/moderator`


<!-- END_9ace67bf5a097be959593ac93ecddcc2 -->

<!-- START_e756d12646498175ea50d61ab76d59b1 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/moderator/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/moderator/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/moderator/{moderator}`


<!-- END_e756d12646498175ea50d61ab76d59b1 -->

<!-- START_2a667f53fed4f739b41ed0003a388271 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/moderator/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/moderator/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/moderator/{moderator}/edit`


<!-- END_2a667f53fed4f739b41ed0003a388271 -->

<!-- START_9b6c2330037b0e5193fe78948e5e945c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/admin/moderator/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/moderator/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/moderator/{moderator}`

`PATCH admin/moderator/{moderator}`


<!-- END_9b6c2330037b0e5193fe78948e5e945c -->

<!-- START_588e95fb6821fb070bbe71063ea23f26 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/admin/moderator/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/moderator/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/moderator/{moderator}`


<!-- END_588e95fb6821fb070bbe71063ea23f26 -->

#Admin Users management



Routes To manage Users data For The Admin Control Panal
<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## admin/user
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user`


<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->

<!-- START_85482a73dd59bd3ef1adaab154cc5407 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/user/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/create`


<!-- END_85482a73dd59bd3ef1adaab154cc5407 -->

<!-- START_71dba47ec1215d1147a3f8e59c55751a -->
## admin/user
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/user`


<!-- END_71dba47ec1215d1147a3f8e59c55751a -->

<!-- START_3b3de25d21f37e1748b345027c37ce73 -->
## admin/user/{user}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/{user}`


<!-- END_3b3de25d21f37e1748b345027c37ce73 -->

<!-- START_8dbd3c8dace74c8cc20dbdadc3a61eed -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/user/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user/{user}/edit`


<!-- END_8dbd3c8dace74c8cc20dbdadc3a61eed -->

<!-- START_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/user/{user}`

`PATCH admin/user/{user}`


<!-- END_7bc8a51548d7c6e9ac5bc7dda1263ba7 -->

<!-- START_b8a25da15b804e04ecaa4bf05806041e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/user/{user}`


<!-- END_b8a25da15b804e04ecaa4bf05806041e -->

<!-- START_9fa8fc1e020e7d36ccc1f3b8d7072309 -->
## admin/user_available/{user}/{is_available}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/user_available/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/user_available/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/user_available/{user}/{is_available}`


<!-- END_9fa8fc1e020e7d36ccc1f3b8d7072309 -->

#Admin Workplaces management


Routes To manage Workplaces data For The Admin Control Panal
<!-- START_699bfa8985dd4a8445e6cd2dba6bd1ff -->
## admin/workplace
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/workplace`


<!-- END_699bfa8985dd4a8445e6cd2dba6bd1ff -->

<!-- START_331b7b1d3313e84efe71645916a04f2c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/workplace/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/workplace/create`


<!-- END_331b7b1d3313e84efe71645916a04f2c -->

<!-- START_eb470148c94798707e89a20561b7c924 -->
## admin/workplace
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/admin/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/workplace`


<!-- END_eb470148c94798707e89a20561b7c924 -->

<!-- START_1f9db6ae6410b211303e81d922532776 -->
## admin/workplace/{workplace}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/workplace/{workplace}`


<!-- END_1f9db6ae6410b211303e81d922532776 -->

<!-- START_64df5128489927f75d76c6f8d85bb0d0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/workplace/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/workplace/{workplace}/edit`


<!-- END_64df5128489927f75d76c6f8d85bb0d0 -->

<!-- START_af0201434253e3126a740a2c61ed16e3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/admin/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/workplace/{workplace}`

`PATCH admin/workplace/{workplace}`


<!-- END_af0201434253e3126a740a2c61ed16e3 -->

<!-- START_bd99cfdb0ae89be5b2f0810dd040ab12 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/admin/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/workplace/{workplace}`


<!-- END_bd99cfdb0ae89be5b2f0810dd040ab12 -->

<!-- START_7f5c3cb4f0190a68ad56c43df0411e0e -->
## admin/workplace-info/{workplace_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/workplace-info/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/workplace-info/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/workplace-info/{workplace_id}`


<!-- END_7f5c3cb4f0190a68ad56c43df0411e0e -->

<!-- START_ad220b974b859e1602a3412dad2df202 -->
## admin/{workplace_id}/team/{product_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/1/team/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/1/team/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/{workplace_id}/team/{product_id}`


<!-- END_ad220b974b859e1602a3412dad2df202 -->

#Admin Zone management


Routes To manage Zone data For The Admin Control Panal
<!-- START_64ec3c6c19150d0203cd3a9140836e11 -->
## admin/zone
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/zone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/zone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/zone`


<!-- END_64ec3c6c19150d0203cd3a9140836e11 -->

<!-- START_8aa920ff953d3d7b612986df862f0688 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/zone/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/zone/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/zone/create`


<!-- END_8aa920ff953d3d7b612986df862f0688 -->

<!-- START_2a549bed4d631a624001ebb1533e1ccd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/admin/zone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/zone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST admin/zone`


<!-- END_2a549bed4d631a624001ebb1533e1ccd -->

<!-- START_7fab55a1c29fa96e311cd6da3038e8bd -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/zone/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/zone/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/zone/{zone}`


<!-- END_7fab55a1c29fa96e311cd6da3038e8bd -->

<!-- START_5b2e7e6bea511d686076f055d3098619 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/zone/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/zone/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/zone/{zone}/edit`


<!-- END_5b2e7e6bea511d686076f055d3098619 -->

<!-- START_33fdf5c386ce71185ab081d19c5eec4b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/admin/zone/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/zone/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT admin/zone/{zone}`

`PATCH admin/zone/{zone}`


<!-- END_33fdf5c386ce71185ab081d19c5eec4b -->

<!-- START_d9e5a24825aa831706830db3050287c3 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/admin/zone/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/zone/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE admin/zone/{zone}`


<!-- END_d9e5a24825aa831706830db3050287c3 -->

#Admin management



Routes To manage Admin data For The Admin Control Panal
<!-- START_8a59594ff635c00027a130968fc47527 -->
## admin/dashboard
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/admin/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/admin/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET admin/dashboard`


<!-- END_8a59594ff635c00027a130968fc47527 -->

#Ajax Request management


Routes for managing Ajax Request for site
<!-- START_01e8e27813cb0bbdbd50865bdad2d538 -->
## phoneCode/{code}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/phoneCode/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/phoneCode/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET phoneCode/{code}`


<!-- END_01e8e27813cb0bbdbd50865bdad2d538 -->

<!-- START_1142f13834868f73270109636ff92df5 -->
## isoCode/{code}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/isoCode/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/isoCode/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET isoCode/{code}`


<!-- END_1142f13834868f73270109636ff92df5 -->

#Home management


Routes for managing general data for site
<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->
<!-- START_b3e829637707a0c3ff670162febb23b9 -->
## check
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/check" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/check"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET check`


<!-- END_b3e829637707a0c3ff670162febb23b9 -->

<!-- START_1662f672202588d8cba0b0bdcbe4de6e -->
## design
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/design" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/design"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET design`


<!-- END_1662f672202588d8cba0b0bdcbe4de6e -->

<!-- START_62e8dd9f1911aba4a2520fd5a6010e6d -->
## widgetView/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/widgetView/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/widgetView/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET widgetView/{id}`


<!-- END_62e8dd9f1911aba4a2520fd5a6010e6d -->

#Lead Sources management


Routes To manage Lead Sources data For The Manager Control Panal
<!-- START_afe861116942da8827f905c42d93c7cd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/sources" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/sources"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET sources`


<!-- END_afe861116942da8827f905c42d93c7cd -->

<!-- START_6525a24380d6f0fc3d9199bdb70d8ead -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/sources/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/sources/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET sources/create`


<!-- END_6525a24380d6f0fc3d9199bdb70d8ead -->

<!-- START_1d134c058a66ac2dd612ccd654972569 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/sources" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/sources"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST sources`


<!-- END_1d134c058a66ac2dd612ccd654972569 -->

<!-- START_35fe2adef26023dfdca2618eb9aa11cc -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/sources/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/sources/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET sources/{source}`


<!-- END_35fe2adef26023dfdca2618eb9aa11cc -->

<!-- START_8982bffebd0eaf02ce61568a0017882e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/sources/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/sources/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET sources/{source}/edit`


<!-- END_8982bffebd0eaf02ce61568a0017882e -->

<!-- START_cc29ce8491095a2f9a53e0b9749b6273 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/sources/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/sources/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT sources/{source}`

`PATCH sources/{source}`


<!-- END_cc29ce8491095a2f9a53e0b9749b6273 -->

<!-- START_9c88b622b1245a5da5089e7994e6eccd -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/sources/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/sources/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE sources/{source}`


<!-- END_9c88b622b1245a5da5089e7994e6eccd -->

#Login management


Route for Login Users
<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_dc44652b722af6abcc3925ae84bdee69 -->
## Create a new controller instance.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/first" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/first"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET first`

`POST first`

`PUT first`

`PATCH first`

`DELETE first`

`OPTIONS first`


<!-- END_dc44652b722af6abcc3925ae84bdee69 -->

#Manager Leads management


Routes To manage Leads data For The Manager Control Panal
<!-- START_374cfeb27ba1670c869a004f31d8f828 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/leads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/leads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET leads`


<!-- END_374cfeb27ba1670c869a004f31d8f828 -->

<!-- START_afa4466f98b9aabba06588f178216996 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/leads/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/leads/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET leads/create`


<!-- END_afa4466f98b9aabba06588f178216996 -->

<!-- START_e27d419ecd767880269a31b5b88f149d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/leads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/leads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`POST leads`


<!-- END_e27d419ecd767880269a31b5b88f149d -->

<!-- START_8bfb6ab02f276fc606969dfede92597f -->
## leads/{lead}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/leads/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET leads/{lead}`


<!-- END_8bfb6ab02f276fc606969dfede92597f -->

<!-- START_768db20e2d420f5da80b1ab65bc75cd0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/leads/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/leads/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET leads/{lead}/edit`


<!-- END_768db20e2d420f5da80b1ab65bc75cd0 -->

<!-- START_f16c73a0fc51e0ee0c91be9031fba0f9 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/leads/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT leads/{lead}`

`PATCH leads/{lead}`


<!-- END_f16c73a0fc51e0ee0c91be9031fba0f9 -->

<!-- START_591151aff4db46db789a3f5554bd497e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/leads/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE leads/{lead}`


<!-- END_591151aff4db46db789a3f5554bd497e -->

#Product Widget management


Routes To manage Product Widget View data For Leads
<!-- START_6d0c9b8cc536e9a9ff2cd34e09735f19 -->
## widget/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/widget/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/widget/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET widget/{id}`


<!-- END_6d0c9b8cc536e9a9ff2cd34e09735f19 -->

<!-- START_a4fca1cb337722b58ae6367668979b88 -->
## widgetView/widget
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/widgetView/widget" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/widgetView/widget"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST widgetView/widget`


<!-- END_a4fca1cb337722b58ae6367668979b88 -->

#Register management


Route for Register Users
<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Create a new user instance after a valid registration.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_1dbcdf4354aee512432e2c97f2f678e8 -->
## login2
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/login2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/login2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET login2`

`POST login2`

`PUT login2`

`PATCH login2`

`DELETE login2`

`OPTIONS login2`


<!-- END_1dbcdf4354aee512432e2c97f2f678e8 -->

#User management


APIs for managing users
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_ea980f00fb009965aa3dd5f562337404 -->
## api/login1
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/login1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/login1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login1`


<!-- END_ea980f00fb009965aa3dd5f562337404 -->

<!-- START_bdd2d0f4f2c3e0f3a53ecef15732db78 -->
## api/login2
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/login2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/login2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login2`


<!-- END_bdd2d0f4f2c3e0f3a53ecef15732db78 -->

<!-- START_8f90011138117fdccfc791cf91d0a65b -->
## api/update_profile
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/update_profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/update_profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/update_profile`


<!-- END_8f90011138117fdccfc791cf91d0a65b -->

<!-- START_c6ffcc473f819c15d8ee9f636eed9343 -->
## api/change_is_available
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/change_is_available" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/change_is_available"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/change_is_available`


<!-- END_c6ffcc473f819c15d8ee9f636eed9343 -->

#Users management



Routes To manage Users data For The Manager Control Panal
<!-- START_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile`


<!-- END_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->

<!-- START_8dbd9c439d37134e163821da14b44dc1 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/profile/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/profile/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile/create`


<!-- END_8dbd9c439d37134e163821da14b44dc1 -->

<!-- START_0949c77c3fab5fce98ab0d939145324b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST profile`


<!-- END_0949c77c3fab5fce98ab0d939145324b -->

<!-- START_d07591e63b7cab8a683d1930b638b8ae -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/profile/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/profile/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile/{profile}`


<!-- END_d07591e63b7cab8a683d1930b638b8ae -->

<!-- START_b7e2b92fc653cd75bc4f15e8e264e384 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/profile/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/profile/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile/{profile}/edit`


<!-- END_b7e2b92fc653cd75bc4f15e8e264e384 -->

<!-- START_7e6cecb55fb193c3c475a0c055545685 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/profile/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/profile/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT profile/{profile}`

`PATCH profile/{profile}`


<!-- END_7e6cecb55fb193c3c475a0c055545685 -->

<!-- START_ceb1fde9c75a6dcb9815eed1f450e3b8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/profile/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/profile/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE profile/{profile}`


<!-- END_ceb1fde9c75a6dcb9815eed1f450e3b8 -->

<!-- START_30059a09ef3f0284c40e4d06962ce08d -->
## dashboard
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET dashboard`


<!-- END_30059a09ef3f0284c40e4d06962ce08d -->

#WorkPlace Products management


Routes To manage WorkPlace Products data For The Manager Control Panal
<!-- START_b63c55c4bd1dca269829c5efb74328c8 -->
## product
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET product`


<!-- END_b63c55c4bd1dca269829c5efb74328c8 -->

<!-- START_22a05e6d736a231cc1f66b3f4fa112c1 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/product/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET product/create`


<!-- END_22a05e6d736a231cc1f66b3f4fa112c1 -->

<!-- START_dfe6fdb3ab2b4c4c229bf21ba5b32643 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST product`


<!-- END_dfe6fdb3ab2b4c4c229bf21ba5b32643 -->

<!-- START_21f3764688b42137635ec43b3339bda5 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET product/{product}`


<!-- END_21f3764688b42137635ec43b3339bda5 -->

<!-- START_a43ca982c814398a9232bb7e42ea2a2a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/product/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET product/{product}/edit`


<!-- END_a43ca982c814398a9232bb7e42ea2a2a -->

<!-- START_476695cb4ed1e5a2d79d11db4b0b2080 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT product/{product}`

`PATCH product/{product}`


<!-- END_476695cb4ed1e5a2d79d11db4b0b2080 -->

<!-- START_2aeea7ca8dc8189a66bbdb881a5a9bb4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE product/{product}`


<!-- END_2aeea7ca8dc8189a66bbdb881a5a9bb4 -->

<!-- START_7f1bd779a417892338bb9436ac4a781a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/product/create/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/product/create/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET product/create/{workplace_id}`


<!-- END_7f1bd779a417892338bb9436ac4a781a -->

<!-- START_f93f2c9646cf80d334a3abcd9d5c5762 -->
## invite_member
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/invite_member" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/invite_member"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST invite_member`


<!-- END_f93f2c9646cf80d334a3abcd9d5c5762 -->

<!-- START_c88311d39455b3dc64c67878e4aa7924 -->
## {workplace_id}/products
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/1/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/1/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET {workplace_id}/products`


<!-- END_c88311d39455b3dc64c67878e4aa7924 -->

<!-- START_27f83ba20a35cf3aa377aaa4585b4e26 -->
## invite_member_workplace
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/invite_member_workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/invite_member_workplace"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST invite_member_workplace`


<!-- END_27f83ba20a35cf3aa377aaa4585b4e26 -->

<!-- START_c64165b035a2961a0ad8945091145a1c -->
## choose_members
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/choose_members" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/choose_members"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST choose_members`


<!-- END_c64165b035a2961a0ad8945091145a1c -->

<!-- START_7a139cf107f19ae9163446ce5ae22ee0 -->
## add_product_to_user
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/add_product_to_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/add_product_to_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST add_product_to_user`


<!-- END_7a139cf107f19ae9163446ce5ae22ee0 -->

#Workplaces management


APIs for managing Workplaces
<!-- START_405eabb53d4d41d71d98563f0695ad41 -->
## api/widgetView/widget
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/widgetView/widget" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/widgetView/widget"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/widgetView/widget`


<!-- END_405eabb53d4d41d71d98563f0695ad41 -->

<!-- START_bd30e8830ad43b3edb2d56c804d914de -->
## api/lead
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/lead" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/lead"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/lead`


<!-- END_bd30e8830ad43b3edb2d56c804d914de -->

<!-- START_385b87ffa25ae621a0a8c77665d65ecb -->
## api/all_workplaces
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/api/all_workplaces" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/all_workplaces"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": "0",
    "data": [
        {
            "id": 1,
            "admin_id": 7,
            "title": "Sherkat",
            "created_at": "2020-02-14 23:08:32",
            "updated_at": "2020-06-21 07:21:07",
            "timezone": "Africa\/Cairo",
            "website": null,
            "startday": "Monday",
            "times": {
                "id": 3,
                "workplace_id": 1,
                "sun_start": null,
                "sun_end": null,
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-06-21 07:21:07",
                "updated_at": "2020-06-21 07:21:07"
            },
            "admin": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 2,
            "admin_id": 1,
            "title": "American center",
            "created_at": "2020-02-16 11:30:38",
            "updated_at": "2020-02-16 11:30:38",
            "timezone": "Africa\/Cairo",
            "website": null,
            "startday": "Monday",
            "times": null,
            "admin": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 3,
            "admin_id": 5,
            "title": "malex",
            "created_at": "2020-02-16 17:04:11",
            "updated_at": "2020-02-16 17:04:11",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/malexs.net\/",
            "startday": "Monday",
            "times": null,
            "admin": {
                "id": 5,
                "name": "m7moodali88",
                "phone": "01234567890",
                "country_code": null,
                "email": "m7moodali88@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 20:45:19",
                "updated_at": "2020-10-03 00:22:13",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 4,
            "admin_id": 5,
            "title": "Vola",
            "created_at": "2020-02-16 17:06:38",
            "updated_at": "2020-02-16 17:06:38",
            "timezone": "US\/Arizona",
            "website": "https:\/\/vola.net\/",
            "startday": "Monday",
            "times": null,
            "admin": {
                "id": 5,
                "name": "m7moodali88",
                "phone": "01234567890",
                "country_code": null,
                "email": "m7moodali88@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 20:45:19",
                "updated_at": "2020-10-03 00:22:13",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 5,
            "admin_id": 13,
            "title": "kamal",
            "created_at": "2020-02-17 22:25:08",
            "updated_at": "2020-02-17 22:25:08",
            "timezone": "Africa\/Cairo",
            "website": "kamal.com",
            "startday": "Monday",
            "times": null,
            "admin": {
                "id": 13,
                "name": "mohamed fathy",
                "phone": "1987654321",
                "country_code": null,
                "email": "fathy@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-17 22:23:39",
                "updated_at": "2020-02-17 22:23:39",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 6,
            "admin_id": 2,
            "title": "My work",
            "created_at": "2020-02-20 04:39:36",
            "updated_at": "2020-02-20 04:39:36",
            "timezone": "Africa\/Cairo",
            "website": null,
            "startday": "Monday",
            "times": null,
            "admin": {
                "id": 2,
                "name": "ahmed kamal",
                "phone": "123456789",
                "country_code": null,
                "email": "kamal@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-27 13:18:17",
                "updated_at": "2020-12-28 15:23:53",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 7,
            "admin_id": 10,
            "title": "My Clinic",
            "created_at": "2020-05-12 18:37:37",
            "updated_at": "2020-05-12 18:37:37",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/clinic.com",
            "startday": "Monday",
            "times": {
                "id": 1,
                "workplace_id": 7,
                "sun_start": "08:00",
                "sun_end": "14:00",
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-05-12 18:37:37",
                "updated_at": "2020-05-12 18:37:37"
            },
            "admin": {
                "id": 10,
                "name": "Mohsenous",
                "phone": "01016789919",
                "country_code": 20,
                "email": "egyman1973@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-11 02:43:25",
                "updated_at": "2020-11-22 01:42:19",
                "device_token": "doYFKchDQ86kNKRqRoeW4a:APA91bEThH-qW8kXZYLkQ3pZLAyaDytqc7QnOBIvqBhZDi_oxjxUWiInlLam4Xt6kWbWf53Um-eXL9Eb8ozjSMRO-UPggfka7ehr7L7f4Z200GeIpy707pXknMc39G1ot04n6MTOQOGM",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 8,
            "admin_id": 7,
            "title": "Popcorn",
            "created_at": "2020-06-21 04:15:55",
            "updated_at": "2020-06-21 04:20:16",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/popcorn.com",
            "startday": "Monday",
            "times": {
                "id": 2,
                "workplace_id": 8,
                "sun_start": "08:00",
                "sun_end": "18:00",
                "mon_start": "08:00",
                "mon_end": "18:00",
                "tue_start": "08:00",
                "tue_end": "18:00",
                "wed_start": "08:00",
                "wed_end": "18:00",
                "thu_start": "08:00",
                "thu_end": "18:00",
                "fri_start": "08:00",
                "fri_end": "18:00",
                "sat_start": "08:00",
                "sat_end": "18:00",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:20:16"
            },
            "admin": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 9,
            "admin_id": 18,
            "title": "menuhat",
            "created_at": "2020-07-22 22:43:14",
            "updated_at": "2020-07-22 22:43:14",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/menuhat.online\/",
            "startday": "Sunday",
            "times": {
                "id": 4,
                "workplace_id": 9,
                "sun_start": "18:42",
                "sun_end": "20:42",
                "mon_start": "21:43",
                "mon_end": "12:43",
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-07-22 22:43:14",
                "updated_at": "2020-07-22 22:43:14"
            },
            "admin": {
                "id": 18,
                "name": "ahmed kamal",
                "phone": "0123145687",
                "country_code": 20,
                "email": "ahmed@menuhat.com",
                "email_verified_at": null,
                "created_at": "2020-07-22 22:41:47",
                "updated_at": "2020-07-22 22:41:47",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 10,
            "admin_id": 19,
            "title": "Trix Studio",
            "created_at": "2020-07-26 21:20:52",
            "updated_at": "2020-07-26 21:20:52",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/Trix.com",
            "startday": "Monday",
            "times": {
                "id": 5,
                "workplace_id": 10,
                "sun_start": "09:00",
                "sun_end": "18:00",
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-07-26 21:20:52",
                "updated_at": "2020-07-26 21:20:52"
            },
            "admin": {
                "id": 19,
                "name": "Sherif Adel",
                "phone": "123456",
                "country_code": 1,
                "email": "sherif@atumstudio.com",
                "email_verified_at": null,
                "created_at": "2020-07-26 21:19:24",
                "updated_at": "2020-07-26 21:47:34",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 11,
            "admin_id": 21,
            "title": "Kalma",
            "created_at": "2020-08-18 19:01:29",
            "updated_at": "2020-08-18 19:01:29",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/menuhat.online\/",
            "startday": "Sunday",
            "times": {
                "id": 6,
                "workplace_id": 11,
                "sun_start": "12:00",
                "sun_end": "23:59",
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-08-18 19:01:29",
                "updated_at": "2020-08-18 19:01:29"
            },
            "admin": {
                "id": 21,
                "name": "Kamal",
                "phone": "010050512244",
                "country_code": 20,
                "email": "ahmed.kamal@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-08-18 18:59:40",
                "updated_at": "2020-12-28 16:22:23",
                "device_token": null,
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 12,
            "admin_id": 3,
            "title": "new",
            "created_at": "2020-08-31 02:54:12",
            "updated_at": "2020-08-31 02:54:12",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/example.com",
            "startday": "Monday",
            "times": {
                "id": 7,
                "workplace_id": 12,
                "sun_start": null,
                "sun_end": null,
                "mon_start": "07:54",
                "mon_end": "19:54",
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-08-31 02:54:12",
                "updated_at": "2020-08-31 02:54:12"
            },
            "admin": {
                "id": 3,
                "name": "ahmed",
                "phone": "1020304050",
                "country_code": null,
                "email": "ahmed.kamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-29 04:03:13",
                "updated_at": "2020-01-29 06:33:25",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 13,
            "admin_id": 23,
            "title": "max",
            "created_at": "2020-09-02 03:04:49",
            "updated_at": "2020-09-02 03:04:49",
            "timezone": "Africa\/Cairo",
            "website": "http:\/\/www.max.com",
            "startday": "Monday",
            "times": {
                "id": 8,
                "workplace_id": 13,
                "sun_start": null,
                "sun_end": null,
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-09-02 03:04:49",
                "updated_at": "2020-09-02 03:04:49"
            },
            "admin": {
                "id": 23,
                "name": "tasho",
                "phone": "12345677",
                "country_code": 20,
                "email": "tashosx@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-09-02 03:04:25",
                "updated_at": "2020-09-04 01:08:01",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 14,
            "admin_id": 26,
            "title": "Ahmed WOrkSpace",
            "created_at": "2020-09-25 04:01:12",
            "updated_at": "2020-09-25 04:01:12",
            "timezone": "Africa\/Cairo",
            "website": null,
            "startday": "Monday",
            "times": {
                "id": 9,
                "workplace_id": 14,
                "sun_start": null,
                "sun_end": null,
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-09-25 04:01:12",
                "updated_at": "2020-09-25 04:01:12"
            },
            "admin": {
                "id": 26,
                "name": "AHMED",
                "phone": "01211463283",
                "country_code": 20,
                "email": "ahmed.elsayed@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-09-25 04:00:20",
                "updated_at": "2020-09-25 04:00:20",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 15,
            "admin_id": 26,
            "title": "Ahmed WOrkSpace",
            "created_at": "2020-09-25 04:01:13",
            "updated_at": "2020-09-25 04:01:13",
            "timezone": "Africa\/Cairo",
            "website": null,
            "startday": "Monday",
            "times": {
                "id": 10,
                "workplace_id": 15,
                "sun_start": null,
                "sun_end": null,
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-09-25 04:01:13",
                "updated_at": "2020-09-25 04:01:13"
            },
            "admin": {
                "id": 26,
                "name": "AHMED",
                "phone": "01211463283",
                "country_code": 20,
                "email": "ahmed.elsayed@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-09-25 04:00:20",
                "updated_at": "2020-09-25 04:00:20",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 16,
            "admin_id": 29,
            "title": "n",
            "created_at": "2020-10-04 06:07:20",
            "updated_at": "2020-10-04 06:07:20",
            "timezone": "Europe\/Amsterdam",
            "website": null,
            "startday": "Monday",
            "times": {
                "id": 11,
                "workplace_id": 16,
                "sun_start": null,
                "sun_end": null,
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-10-04 06:07:20",
                "updated_at": "2020-10-04 06:07:20"
            },
            "admin": {
                "id": 29,
                "name": "n",
                "phone": "01016789911",
                "country_code": 20,
                "email": "egyman1973@gmddail.com",
                "email_verified_at": null,
                "created_at": "2020-10-04 06:03:55",
                "updated_at": "2020-10-04 06:03:55",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 17,
            "admin_id": 30,
            "title": "Mo Fathy Work Space",
            "created_at": "2020-10-07 01:45:42",
            "updated_at": "2020-10-07 01:45:42",
            "timezone": "Africa\/Cairo",
            "website": "http:\\\\w3schools.com",
            "startday": "Saturday",
            "times": {
                "id": 12,
                "workplace_id": 17,
                "sun_start": "00:00",
                "sun_end": "01:00",
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-10-07 01:45:42",
                "updated_at": "2020-10-07 01:45:42"
            },
            "admin": {
                "id": 30,
                "name": "mohamed",
                "phone": "01012312409",
                "country_code": 93,
                "email": "mohammed.fathy.abdelrhman@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-10-07 01:44:11",
                "updated_at": "2020-12-09 02:52:10",
                "device_token": "fAYFhP2DSNiEip9S_trEsM:APA91bHKr9hVbPI_SnMrB2xsehBPXy_mVY0ziPvDzXVAaE9Kt_nAZuzcOyYEkcyq44gCPfY1cIXLPNqIPbeX0J1mNM-uV9RwJPsjo8cNVl5tkIG3YTE-anVACUofiDWC6UT0snh90sH-",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 18,
            "admin_id": 32,
            "title": "Kotob",
            "created_at": "2020-11-28 19:07:04",
            "updated_at": "2020-11-28 19:07:04",
            "timezone": "Africa\/Cairo",
            "website": "https:\/\/books4fund.com\/",
            "startday": "Sunday",
            "times": {
                "id": 13,
                "workplace_id": 18,
                "sun_start": null,
                "sun_end": null,
                "mon_start": null,
                "mon_end": null,
                "tue_start": null,
                "tue_end": null,
                "wed_start": null,
                "wed_end": null,
                "thu_start": null,
                "thu_end": null,
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-11-28 19:07:04",
                "updated_at": "2020-11-28 19:07:04"
            },
            "admin": {
                "id": 32,
                "name": "Bohsen",
                "phone": "01016789918",
                "country_code": 20,
                "email": "ahmed@books4fund.com",
                "email_verified_at": null,
                "created_at": "2020-11-28 19:06:29",
                "updated_at": "2020-11-28 19:08:27",
                "device_token": "doYFKchDQ86kNKRqRoeW4a:APA91bEThH-qW8kXZYLkQ3pZLAyaDytqc7QnOBIvqBhZDi_oxjxUWiInlLam4Xt6kWbWf53Um-eXL9Eb8ozjSMRO-UPggfka7ehr7L7f4Z200GeIpy707pXknMc39G1ot04n6MTOQOGM",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 19,
            "admin_id": 2,
            "title": "SpaceX",
            "created_at": "2020-12-21 14:49:23",
            "updated_at": "2020-12-21 14:49:23",
            "timezone": "Africa\/Cairo",
            "website": "http:\/\/www.spacex.com",
            "startday": "Sunday",
            "times": {
                "id": 14,
                "workplace_id": 19,
                "sun_start": "08:00",
                "sun_end": "16:00",
                "mon_start": "08:00",
                "mon_end": "16:00",
                "tue_start": "08:00",
                "tue_end": "16:00",
                "wed_start": "08:00",
                "wed_end": "16:00",
                "thu_start": "08:00",
                "thu_end": "16:00",
                "fri_start": null,
                "fri_end": null,
                "sat_start": null,
                "sat_end": null,
                "created_at": "2020-12-21 14:49:23",
                "updated_at": "2020-12-21 14:49:23"
            },
            "admin": {
                "id": 2,
                "name": "ahmed kamal",
                "phone": "123456789",
                "country_code": null,
                "email": "kamal@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-27 13:18:17",
                "updated_at": "2020-12-28 15:23:53",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        }
    ]
}
```

### HTTP Request
`GET api/all_workplaces`


<!-- END_385b87ffa25ae621a0a8c77665d65ecb -->

<!-- START_127212f1a2c5e9475c73d8968f6c920e -->
## api/all_products
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/all_products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/all_products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/all_products`


<!-- END_127212f1a2c5e9475c73d8968f6c920e -->

<!-- START_59f5311afa947174c231488ff72a71ab -->
## api/all_leads
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/api/all_leads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/all_leads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": "0",
    "data": [
        {
            "id": 86,
            "name": "mahmoud",
            "product_id": 26,
            "user_id": 30,
            "source_id": 12,
            "phone": "2001234567891",
            "email": "mahmoud@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "01234567891"
                },
                {
                    "key": "name",
                    "value": "mahmoud"
                },
                {
                    "key": "email",
                    "value": "mahmoud@gmail.com"
                },
                {
                    "key": "source",
                    "value": "facebook"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-18 21:17:28",
            "updated_at": "2020-12-12 00:31:33",
            "source": {
                "id": 12,
                "workplace_id": 17,
                "user_id": 30,
                "name": "facebook",
                "country_id": null,
                "website": "http:\\\\w3schools.com",
                "product_id": 26,
                "widget_type": "icon",
                "alignment": "right",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to an expert!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email"
                ],
                "custom_lable_1": null,
                "custom_lable_2": null,
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-07 01:46:37",
                "updated_at": "2020-10-07 01:46:37"
            },
            "product": {
                "id": 26,
                "workplace_id": 17,
                "title": "General",
                "created_at": "2020-10-07 01:45:42",
                "updated_at": "2020-10-07 01:45:42"
            },
            "user": {
                "id": 30,
                "name": "mohamed",
                "phone": "01012312409",
                "country_code": 93,
                "email": "mohammed.fathy.abdelrhman@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-10-07 01:44:11",
                "updated_at": "2020-12-09 02:52:10",
                "device_token": "fAYFhP2DSNiEip9S_trEsM:APA91bHKr9hVbPI_SnMrB2xsehBPXy_mVY0ziPvDzXVAaE9Kt_nAZuzcOyYEkcyq44gCPfY1cIXLPNqIPbeX0J1mNM-uV9RwJPsjo8cNVl5tkIG3YTE-anVACUofiDWC6UT0snh90sH-",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 85,
            "name": "mohamed",
            "product_id": 26,
            "user_id": 30,
            "source_id": 12,
            "phone": "20 01112312312",
            "email": "mohamed@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "01112312312"
                },
                {
                    "key": "name",
                    "value": "mohamed"
                },
                {
                    "key": "email",
                    "value": "mohamed@gmail.com"
                },
                {
                    "key": "source",
                    "value": "facebook"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-18 21:14:23",
            "updated_at": "2020-12-09 01:40:50",
            "source": {
                "id": 12,
                "workplace_id": 17,
                "user_id": 30,
                "name": "facebook",
                "country_id": null,
                "website": "http:\\\\w3schools.com",
                "product_id": 26,
                "widget_type": "icon",
                "alignment": "right",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to an expert!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email"
                ],
                "custom_lable_1": null,
                "custom_lable_2": null,
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-07 01:46:37",
                "updated_at": "2020-10-07 01:46:37"
            },
            "product": {
                "id": 26,
                "workplace_id": 17,
                "title": "General",
                "created_at": "2020-10-07 01:45:42",
                "updated_at": "2020-10-07 01:45:42"
            },
            "user": {
                "id": 30,
                "name": "mohamed",
                "phone": "01012312409",
                "country_code": 93,
                "email": "mohammed.fathy.abdelrhman@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-10-07 01:44:11",
                "updated_at": "2020-12-09 02:52:10",
                "device_token": "fAYFhP2DSNiEip9S_trEsM:APA91bHKr9hVbPI_SnMrB2xsehBPXy_mVY0ziPvDzXVAaE9Kt_nAZuzcOyYEkcyq44gCPfY1cIXLPNqIPbeX0J1mNM-uV9RwJPsjo8cNVl5tkIG3YTE-anVACUofiDWC6UT0snh90sH-",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 84,
            "name": "mahmoud4",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "mahmoud4"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-03 00:52:45",
            "updated_at": "2020-12-09 01:40:59",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 83,
            "name": "mahmoud3",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "mahmoud3"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-03 00:52:22",
            "updated_at": "2020-10-13 22:59:30",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 82,
            "name": "mahmoud2",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 0123",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "0123"
                },
                {
                    "key": "name",
                    "value": "mahmoud2"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-03 00:16:10",
            "updated_at": "2020-10-03 00:16:10",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 81,
            "name": "mahmoud",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 0123",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "0123"
                },
                {
                    "key": "name",
                    "value": "mahmoud"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-03 00:15:40",
            "updated_at": "2020-10-03 00:15:40",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 80,
            "name": "Ali",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 0123",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "0123"
                },
                {
                    "key": "name",
                    "value": "Ali"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-03 00:15:14",
            "updated_at": "2020-10-03 00:15:14",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 79,
            "name": "Ali",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "Ali"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-03 00:14:35",
            "updated_at": "2020-10-03 00:14:35",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 78,
            "name": "t14",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t14"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:23:43",
            "updated_at": "2020-10-02 22:23:43",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 77,
            "name": "t13",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t13"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:23:26",
            "updated_at": "2020-10-02 22:23:26",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 76,
            "name": "t12",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t12"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:22:41",
            "updated_at": "2020-10-02 22:22:41",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 75,
            "name": "t11",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t11"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:21:07",
            "updated_at": "2020-10-02 22:21:07",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 74,
            "name": "t10",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t10"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:20:54",
            "updated_at": "2020-10-02 22:20:54",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 73,
            "name": "t9",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t9"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:20:19",
            "updated_at": "2020-10-02 22:20:19",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 72,
            "name": "t8",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t8"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:19:57",
            "updated_at": "2020-10-02 22:19:57",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 71,
            "name": "t7",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t7"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:19:23",
            "updated_at": "2020-10-02 22:19:23",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 70,
            "name": "t6",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 123456",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "name",
                    "value": "t6"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:19:09",
            "updated_at": "2020-10-02 22:19:09",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 69,
            "name": "t5",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 t5",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "t5"
                },
                {
                    "key": "name",
                    "value": "t5"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:18:37",
            "updated_at": "2020-10-02 22:18:37",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 68,
            "name": "t4",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 t4",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "t4"
                },
                {
                    "key": "name",
                    "value": "t4"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:17:55",
            "updated_at": "2020-10-02 22:17:55",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 67,
            "name": "t2",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 t31",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "t31"
                },
                {
                    "key": "name",
                    "value": "t2"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:17:26",
            "updated_at": "2020-10-02 22:17:26",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 66,
            "name": "t2",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 1",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "1"
                },
                {
                    "key": "name",
                    "value": "t2"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:13:10",
            "updated_at": "2020-10-02 22:13:10",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 65,
            "name": "t1",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 01016789919",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "01016789919"
                },
                {
                    "key": "name",
                    "value": "t1"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "tt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:12:31",
            "updated_at": "2020-10-02 22:12:31",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 64,
            "name": "ddd",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 01016789919",
            "email": "info@ahmedmohsen.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "01016789919"
                },
                {
                    "key": "name",
                    "value": "ddd"
                },
                {
                    "key": "email",
                    "value": "info@ahmedmohsen.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-02 22:02:42",
            "updated_at": "2020-12-09 01:42:10",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 63,
            "name": "dodo",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 0123456",
            "email": "dodo@g",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "0123456"
                },
                {
                    "key": "name",
                    "value": "dodo"
                },
                {
                    "key": "email",
                    "value": "dodo@g"
                },
                {
                    "key": "custom1",
                    "value": "KSAA"
                },
                {
                    "key": "custom2",
                    "value": "TKK"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-01 16:50:16",
            "updated_at": "2020-12-09 01:42:12",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 62,
            "name": "Mido",
            "product_id": 9,
            "user_id": 16,
            "source_id": 9,
            "phone": "20 01111111111",
            "email": "mido@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "01111111111"
                },
                {
                    "key": "name",
                    "value": "Mido"
                },
                {
                    "key": "email",
                    "value": "mido@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "zimbabwi"
                },
                {
                    "key": "custom2",
                    "value": "Manager"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-01 16:46:30",
            "updated_at": "2020-10-02 21:59:07",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 16,
                "name": "Tamer Ashoor",
                "phone": "01016789919",
                "country_code": null,
                "email": "tadreb.inbox@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-06-21 04:21:41",
                "updated_at": "2020-10-02 22:22:34",
                "device_token": "duDRCpVhQweXCVT07O_TYX:APA91bEz7pM5PNLinhK2SmDxgYoE4UESX86cVXFP-jTRJhxiFKUkAfl8vQAk90cOv2ceCXZNoANzFxbsNsuhv1WSUcDs5g2uOPreSJifE2M4asUqtwXmS-vKWPwEu5Iu9UVZmzFSo1zw",
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 61,
            "name": "Ahmed Abdallah",
            "product_id": 9,
            "user_id": 7,
            "source_id": 9,
            "phone": "20 01016789919",
            "email": "egyman1973@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "01016789919"
                },
                {
                    "key": "name",
                    "value": "Ahmed Abdallah"
                },
                {
                    "key": "email",
                    "value": "egyman1973@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "Egypt"
                },
                {
                    "key": "custom2",
                    "value": "CEO"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "General"
                }
            ],
            "created_at": "2020-10-01 16:43:01",
            "updated_at": "2020-10-01 16:43:01",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 9,
                "workplace_id": 8,
                "title": "General",
                "created_at": "2020-06-21 04:15:55",
                "updated_at": "2020-06-21 04:15:55"
            },
            "user": {
                "id": 7,
                "name": "Ahmed El Sayed",
                "phone": "01016789919",
                "country_code": 20,
                "email": "info@ahmedmohsen.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 21:36:19",
                "updated_at": "2020-12-09 01:46:55",
                "device_token": "dmmeB3QTTu2W2a0SWtocAs:APA91bH939MH0oUNORQ7obg7NlMtoreOSQUn39p6LqlzLaGXJ_ZAATtEg9vNAHV27H9Btc4YknrX7NFXLTCKmVq44USjJq3Y34Wi4D9gsjUda6Fdwkymw9YNA2AOYaQXfsNeg-Ma7xqs",
                "os": null,
                "is_available": 0
            }
        },
        {
            "id": 60,
            "name": "Ahmed Abdallah",
            "product_id": 13,
            "user_id": 24,
            "source_id": 5,
            "phone": " 0123456",
            "email": "g@e.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "0123456"
                },
                {
                    "key": "name",
                    "value": "Ahmed Abdallah"
                },
                {
                    "key": "email",
                    "value": "g@e.com"
                },
                {
                    "key": "custom1",
                    "value": "j"
                },
                {
                    "key": "custom2",
                    "value": "a"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-10-01 06:47:58",
            "updated_at": "2020-10-01 06:47:58",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 59,
            "name": "Mohamed Ismaiel",
            "product_id": 13,
            "user_id": 25,
            "source_id": 5,
            "phone": " 1010101",
            "email": "mohamedismaiel12224@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "1010101"
                },
                {
                    "key": "name",
                    "value": "Mohamed Ismaiel"
                },
                {
                    "key": "email",
                    "value": "mohamedismaiel12224@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "wwwwww"
                },
                {
                    "key": "custom2",
                    "value": "22"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-22 21:25:57",
            "updated_at": "2020-09-22 21:25:57",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 25,
                "name": "ezzat",
                "phone": "01234567890",
                "country_code": null,
                "email": "ezzat@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:48:23",
                "updated_at": "2020-09-22 20:45:25",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 58,
            "name": "wrr",
            "product_id": 13,
            "user_id": 24,
            "source_id": 6,
            "phone": " 0808040",
            "email": "fe@ef.ss",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "0808040"
                },
                {
                    "key": "name",
                    "value": "wrr"
                },
                {
                    "key": "email",
                    "value": "fe@ef.ss"
                },
                {
                    "key": "custom1",
                    "value": "454040545"
                },
                {
                    "key": "source",
                    "value": "test 2"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-22 21:21:13",
            "updated_at": "2020-09-22 21:21:13",
            "source": {
                "id": 6,
                "workplace_id": 2,
                "user_id": 1,
                "name": "test 2",
                "country_id": 1,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "icon",
                "alignment": "left",
                "primary": "#3475a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to an expert!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1"
                ],
                "custom_lable_1": "phone",
                "custom_lable_2": null,
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:56:13",
                "updated_at": "2020-08-18 21:56:13"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 57,
            "name": "eeeewww",
            "product_id": 13,
            "user_id": 8,
            "source_id": 5,
            "phone": " 343252t4",
            "email": "eer@err.er",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "343252t4"
                },
                {
                    "key": "name",
                    "value": "eeeewww"
                },
                {
                    "key": "email",
                    "value": "eer@err.er"
                },
                {
                    "key": "custom1",
                    "value": "sdfkfs"
                },
                {
                    "key": "custom2",
                    "value": "48"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-22 20:57:06",
            "updated_at": "2020-09-22 20:57:06",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 8,
                "name": "mohamedfathybasha",
                "phone": "01234567890",
                "country_code": null,
                "email": "mohamedfathybasha@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 14:28:08",
                "updated_at": "2020-09-22 20:48:11",
                "device_token": "wwddfefejng6dwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 56,
            "name": "ee",
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " djfewk",
            "email": "efew@fdew.fwe",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "djfewk"
                },
                {
                    "key": "name",
                    "value": "ee"
                },
                {
                    "key": "email",
                    "value": "efew@fdew.fwe"
                },
                {
                    "key": "custom1",
                    "value": "12345"
                },
                {
                    "key": "custom2",
                    "value": "40"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-22 20:51:30",
            "updated_at": "2020-09-22 20:51:30",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 55,
            "name": "jfjfjfj",
            "product_id": 13,
            "user_id": 25,
            "source_id": 5,
            "phone": " 444949",
            "email": "fjfj@jff.ff",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "444949"
                },
                {
                    "key": "name",
                    "value": "jfjfjfj"
                },
                {
                    "key": "email",
                    "value": "fjfj@jff.ff"
                },
                {
                    "key": "custom1",
                    "value": "4555"
                },
                {
                    "key": "custom2",
                    "value": "23"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-22 20:49:01",
            "updated_at": "2020-09-22 20:49:01",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 25,
                "name": "ezzat",
                "phone": "01234567890",
                "country_code": null,
                "email": "ezzat@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:48:23",
                "updated_at": "2020-09-22 20:45:25",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 54,
            "name": "Mohamed Ismaiel",
            "product_id": 13,
            "user_id": 24,
            "source_id": 5,
            "phone": " 1010101",
            "email": "mohamedismaiel12224@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "1010101"
                },
                {
                    "key": "name",
                    "value": "Mohamed Ismaiel"
                },
                {
                    "key": "email",
                    "value": "mohamedismaiel12224@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "dfstg"
                },
                {
                    "key": "custom2",
                    "value": "55"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-22 20:40:33",
            "updated_at": "2020-09-22 20:40:33",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 53,
            "name": null,
            "product_id": 13,
            "user_id": 8,
            "source_id": 5,
            "phone": " 3333333",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "3333333"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:37:11",
            "updated_at": "2020-09-21 21:37:11",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 8,
                "name": "mohamedfathybasha",
                "phone": "01234567890",
                "country_code": null,
                "email": "mohamedfathybasha@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 14:28:08",
                "updated_at": "2020-09-22 20:48:11",
                "device_token": "wwddfefejng6dwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 52,
            "name": null,
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " 345465",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "345465"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:33:29",
            "updated_at": "2020-09-21 21:33:29",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 51,
            "name": null,
            "product_id": 13,
            "user_id": 25,
            "source_id": 5,
            "phone": " 8888888888",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "8888888888"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:30:08",
            "updated_at": "2020-09-21 21:30:08",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 25,
                "name": "ezzat",
                "phone": "01234567890",
                "country_code": null,
                "email": "ezzat@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:48:23",
                "updated_at": "2020-09-22 20:45:25",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 50,
            "name": null,
            "product_id": 13,
            "user_id": 24,
            "source_id": 5,
            "phone": " 0101010",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "0101010"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:28:11",
            "updated_at": "2020-09-21 21:28:11",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 49,
            "name": "momo",
            "product_id": 13,
            "user_id": 8,
            "source_id": 5,
            "phone": " 04804840",
            "email": "mo@mo.momo",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "phone",
                    "value": "04804840"
                },
                {
                    "key": "name",
                    "value": "momo"
                },
                {
                    "key": "email",
                    "value": "mo@mo.momo"
                },
                {
                    "key": "custom1",
                    "value": "sdfsbr"
                },
                {
                    "key": "custom2",
                    "value": "55"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:18:43",
            "updated_at": "2020-12-09 01:46:24",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 8,
                "name": "mohamedfathybasha",
                "phone": "01234567890",
                "country_code": null,
                "email": "mohamedfathybasha@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 14:28:08",
                "updated_at": "2020-09-22 20:48:11",
                "device_token": "wwddfefejng6dwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 48,
            "name": "moomo",
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01011",
            "email": "mo@mom.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01011"
                },
                {
                    "key": "name",
                    "value": "moomo"
                },
                {
                    "key": "email",
                    "value": "mo@mom.com"
                },
                {
                    "key": "custom1",
                    "value": "sdgfngfn"
                },
                {
                    "key": "custom2",
                    "value": "25"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:16:51",
            "updated_at": "2020-09-21 21:16:51",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 47,
            "name": "kikikiki",
            "product_id": 13,
            "user_id": 25,
            "source_id": 5,
            "phone": " 0404044",
            "email": "iki@dfg.jhgv",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "0404044"
                },
                {
                    "key": "name",
                    "value": "kikikiki"
                },
                {
                    "key": "email",
                    "value": "iki@dfg.jhgv"
                },
                {
                    "key": "custom1",
                    "value": "web developer"
                },
                {
                    "key": "custom2",
                    "value": "23"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 20:22:24",
            "updated_at": "2020-09-21 20:22:24",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 25,
                "name": "ezzat",
                "phone": "01234567890",
                "country_code": null,
                "email": "ezzat@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:48:23",
                "updated_at": "2020-09-22 20:45:25",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 46,
            "name": "ali",
            "product_id": 13,
            "user_id": 24,
            "source_id": 5,
            "phone": " 01128266333",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01128266333"
                },
                {
                    "key": "name",
                    "value": "ali"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "xxxxx"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:28:15",
            "updated_at": "2020-09-21 03:28:15",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 45,
            "name": "ali",
            "product_id": 13,
            "user_id": 8,
            "source_id": 5,
            "phone": " 01128266333",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01128266333"
                },
                {
                    "key": "name",
                    "value": "ali"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "xxxxx"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:27:57",
            "updated_at": "2020-09-21 03:27:57",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 8,
                "name": "mohamedfathybasha",
                "phone": "01234567890",
                "country_code": null,
                "email": "mohamedfathybasha@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 14:28:08",
                "updated_at": "2020-09-22 20:48:11",
                "device_token": "wwddfefejng6dwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 44,
            "name": "ali",
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01128266333",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01128266333"
                },
                {
                    "key": "name",
                    "value": "ali"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "xxxxx"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:23:29",
            "updated_at": "2020-09-21 03:23:29",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 43,
            "name": "ali",
            "product_id": 13,
            "user_id": 25,
            "source_id": 5,
            "phone": " 0112832999",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "0112832999"
                },
                {
                    "key": "name",
                    "value": "ali"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "cccc"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:22:56",
            "updated_at": "2020-09-21 03:22:56",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 25,
                "name": "ezzat",
                "phone": "01234567890",
                "country_code": null,
                "email": "ezzat@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:48:23",
                "updated_at": "2020-09-22 20:45:25",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 42,
            "name": "ali",
            "product_id": 13,
            "user_id": 24,
            "source_id": 5,
            "phone": " 0112832999",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "0112832999"
                },
                {
                    "key": "name",
                    "value": "ali"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "go"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:22:03",
            "updated_at": "2020-09-21 03:22:03",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 41,
            "name": "costa",
            "product_id": 13,
            "user_id": 25,
            "source_id": 5,
            "phone": " 033330000",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "033330000"
                },
                {
                    "key": "name",
                    "value": "costa"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "go"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:20:10",
            "updated_at": "2020-09-21 03:20:10",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 25,
                "name": "ezzat",
                "phone": "01234567890",
                "country_code": null,
                "email": "ezzat@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:48:23",
                "updated_at": "2020-09-22 20:45:25",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 40,
            "name": "mahmoud ali mohamed",
            "product_id": 13,
            "user_id": 24,
            "source_id": 5,
            "phone": " 033331777",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "033331777"
                },
                {
                    "key": "name",
                    "value": "mahmoud ali mohamed"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "go"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:14:53",
            "updated_at": "2020-09-21 03:14:53",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 39,
            "name": "mahmoud ali mohamed",
            "product_id": 13,
            "user_id": 25,
            "source_id": 5,
            "phone": " 033331998",
            "email": "m7moodali88@yahoo.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "033331998"
                },
                {
                    "key": "name",
                    "value": "mahmoud ali mohamed"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@yahoo.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-20 23:57:25",
            "updated_at": "2020-09-20 23:57:25",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 25,
                "name": "ezzat",
                "phone": "01234567890",
                "country_code": null,
                "email": "ezzat@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:48:23",
                "updated_at": "2020-09-22 20:45:25",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 38,
            "name": "Momomo",
            "product_id": 13,
            "user_id": 24,
            "source_id": 5,
            "phone": " 0128070505",
            "email": "mm@mm.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "0128070505"
                },
                {
                    "key": "name",
                    "value": "Momomo"
                },
                {
                    "key": "email",
                    "value": "mm@mm.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-20 23:54:24",
            "updated_at": "2020-09-20 23:54:24",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 24,
                "name": "Taha",
                "phone": "01234567890",
                "country_code": null,
                "email": "taha@malexs.com",
                "email_verified_at": null,
                "created_at": "2020-09-20 23:47:59",
                "updated_at": "2020-09-22 20:45:00",
                "device_token": "wwddwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 37,
            "name": "mahmoud ali mohamed",
            "product_id": 0,
            "user_id": 8,
            "source_id": 5,
            "phone": " 033331998",
            "email": "m7moodali88@yahoo.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "033331998"
                },
                {
                    "key": "name",
                    "value": "mahmoud ali mohamed"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@yahoo.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 23:39:43",
            "updated_at": "2020-09-20 23:39:43",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 8,
                "name": "mohamedfathybasha",
                "phone": "01234567890",
                "country_code": null,
                "email": "mohamedfathybasha@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 14:28:08",
                "updated_at": "2020-09-22 20:48:11",
                "device_token": "wwddfefejng6dwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 36,
            "name": "mahmoud ali mohamed",
            "product_id": 0,
            "user_id": 1,
            "source_id": 5,
            "phone": " 033331998",
            "email": "m7moodali88@yahoo.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "033331998"
                },
                {
                    "key": "name",
                    "value": "mahmoud ali mohamed"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@yahoo.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 23:39:31",
            "updated_at": "2020-09-20 23:39:31",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 35,
            "name": "mohamed yehia",
            "product_id": 0,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01010110",
            "email": "m.ali@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01010110"
                },
                {
                    "key": "name",
                    "value": "mohamed yehia"
                },
                {
                    "key": "email",
                    "value": "m.ali@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 22:28:12",
            "updated_at": "2020-09-20 22:28:12",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 34,
            "name": "mohamed yassien",
            "product_id": 0,
            "user_id": 8,
            "source_id": 5,
            "phone": " 01010110",
            "email": "m.ali@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01010110"
                },
                {
                    "key": "name",
                    "value": "mohamed yassien"
                },
                {
                    "key": "email",
                    "value": "m.ali@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 22:27:46",
            "updated_at": "2020-09-20 22:27:46",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 8,
                "name": "mohamedfathybasha",
                "phone": "01234567890",
                "country_code": null,
                "email": "mohamedfathybasha@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 14:28:08",
                "updated_at": "2020-09-22 20:48:11",
                "device_token": "wwddfefejng6dwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 33,
            "name": "mohamed fathy",
            "product_id": 0,
            "user_id": 8,
            "source_id": 5,
            "phone": " 01010110",
            "email": "m.ali@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "phone",
                    "value": "01010110"
                },
                {
                    "key": "name",
                    "value": "mohamed fathy"
                },
                {
                    "key": "email",
                    "value": "m.ali@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 22:27:21",
            "updated_at": "2020-10-13 23:02:10",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 8,
                "name": "mohamedfathybasha",
                "phone": "01234567890",
                "country_code": null,
                "email": "mohamedfathybasha@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-02-03 14:28:08",
                "updated_at": "2020-09-22 20:48:11",
                "device_token": "wwddfefejng6dwfwff45f44",
                "os": "android",
                "is_available": 1
            }
        },
        {
            "id": 32,
            "name": "mohamed ali",
            "product_id": 0,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01010110",
            "email": "m.ali@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01010110"
                },
                {
                    "key": "name",
                    "value": "mohamed ali"
                },
                {
                    "key": "email",
                    "value": "m.ali@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 22:26:40",
            "updated_at": "2020-09-20 22:26:40",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 31,
            "name": "Mohamed ismaiel",
            "product_id": 0,
            "user_id": null,
            "source_id": 5,
            "phone": " +201128077568",
            "email": "mohamedismaiel12224@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "+201128077568"
                },
                {
                    "key": "name",
                    "value": "Mohamed ismaiel"
                },
                {
                    "key": "email",
                    "value": "mohamedismaiel12224@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 21:35:32",
            "updated_at": "2020-09-20 21:35:32",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": null
        },
        {
            "id": 30,
            "name": "mahmoud ali mohamed",
            "product_id": 0,
            "user_id": null,
            "source_id": 5,
            "phone": " 033331997",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "phone",
                    "value": "033331997"
                },
                {
                    "key": "name",
                    "value": "mahmoud ali mohamed"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 21:33:39",
            "updated_at": "2020-09-28 21:26:31",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": null
        },
        {
            "id": 29,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": 1234567654
                },
                {
                    "key": "mobile",
                    "value": 22345678987654
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-09-20 07:07:11",
            "updated_at": "2020-09-20 07:07:11",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 28,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": 1234567654
                },
                {
                    "key": "mobile",
                    "value": 22345678987654
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-09-19 07:07:47",
            "updated_at": "2020-09-19 07:07:47",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 27,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": 1234567654
                },
                {
                    "key": "mobile",
                    "value": 22345678987654
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-09-18 07:07:46",
            "updated_at": "2020-09-18 07:07:46",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 26,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": 1234567654
                },
                {
                    "key": "mobile",
                    "value": 22345678987654
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-09-17 21:57:00",
            "updated_at": "2020-09-28 07:51:10",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 25,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": 1234567654
                },
                {
                    "key": "mobile",
                    "value": 22345678987654
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-09-17 21:53:31",
            "updated_at": "2020-09-17 21:53:31",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 24,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": 1234567654
                },
                {
                    "key": "mobile",
                    "value": 22345678987654
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-09-17 00:07:52",
            "updated_at": "2020-09-26 02:05:40",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 23,
            "name": "kareem",
            "product_id": 5,
            "user_id": null,
            "source_id": 9,
            "phone": " 1033677562",
            "email": "kareem@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "phone",
                    "value": "1033677562"
                },
                {
                    "key": "name",
                    "value": "kareem"
                },
                {
                    "key": "email",
                    "value": "kareem@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "test k"
                }
            ],
            "created_at": "2020-09-15 02:12:57",
            "updated_at": "2020-09-28 07:56:11",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 5,
                "workplace_id": 5,
                "title": "test k",
                "created_at": "2020-02-17 22:26:20",
                "updated_at": "2020-02-17 22:26:20"
            },
            "user": null
        },
        {
            "id": 22,
            "name": "kareem",
            "product_id": 5,
            "user_id": null,
            "source_id": 9,
            "phone": " 1033677562",
            "email": "kareem@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "1033677562"
                },
                {
                    "key": "name",
                    "value": "kareem"
                },
                {
                    "key": "email",
                    "value": "kareem@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "test k"
                }
            ],
            "created_at": "2020-09-15 02:12:57",
            "updated_at": "2020-09-15 02:12:57",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 5,
                "workplace_id": 5,
                "title": "test k",
                "created_at": "2020-02-17 22:26:20",
                "updated_at": "2020-02-17 22:26:20"
            },
            "user": null
        },
        {
            "id": 21,
            "name": "kareem",
            "product_id": 5,
            "user_id": null,
            "source_id": 9,
            "phone": " 1033677562",
            "email": "kareem@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "1033677562"
                },
                {
                    "key": "name",
                    "value": "kareem"
                },
                {
                    "key": "email",
                    "value": "kareem@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "test k"
                }
            ],
            "created_at": "2020-09-15 02:12:57",
            "updated_at": "2020-09-15 02:12:57",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 5,
                "workplace_id": 5,
                "title": "test k",
                "created_at": "2020-02-17 22:26:20",
                "updated_at": "2020-02-17 22:26:20"
            },
            "user": null
        },
        {
            "id": 20,
            "name": "kareem",
            "product_id": 5,
            "user_id": null,
            "source_id": 9,
            "phone": " 1033677562",
            "email": "kareem@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "1033677562"
                },
                {
                    "key": "name",
                    "value": "kareem"
                },
                {
                    "key": "email",
                    "value": "kareem@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "test k"
                }
            ],
            "created_at": "2020-09-15 02:12:50",
            "updated_at": "2020-09-15 02:12:50",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 5,
                "workplace_id": 5,
                "title": "test k",
                "created_at": "2020-02-17 22:26:20",
                "updated_at": "2020-02-17 22:26:20"
            },
            "user": null
        },
        {
            "id": 19,
            "name": "mahmoud ali mohamed",
            "product_id": 5,
            "user_id": null,
            "source_id": 9,
            "phone": " 01128321285",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "phone",
                    "value": "01128321285"
                },
                {
                    "key": "name",
                    "value": "mahmoud ali mohamed"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "test k"
                }
            ],
            "created_at": "2020-09-14 19:59:57",
            "updated_at": "2020-09-26 02:29:15",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 5,
                "workplace_id": 5,
                "title": "test k",
                "created_at": "2020-02-17 22:26:20",
                "updated_at": "2020-02-17 22:26:20"
            },
            "user": null
        },
        {
            "id": 18,
            "name": "asd",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "20 1324564",
            "email": "ajksbdkljasbd@slnkd.aksbd",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "1324564"
                },
                {
                    "key": "name",
                    "value": "asd"
                },
                {
                    "key": "email",
                    "value": "ajksbdkljasbd@slnkd.aksbd"
                },
                {
                    "key": "custom1",
                    "value": "Leave your Message"
                },
                {
                    "key": "custom2",
                    "value": "we will back to you"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-09-14 03:44:33",
            "updated_at": "2020-09-14 03:44:33",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 17,
            "name": "asd",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "1324564",
            "email": "ajksbdkljasbd@slnkd.aksbd",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "csrftoken",
                    "value": "aw9cr5EdZoYyFPi9RJitOSIEdJOxrZ9tSLY6w6ko"
                },
                {
                    "key": "country_code",
                    "value": "20"
                },
                {
                    "key": "phone",
                    "value": "1324564"
                },
                {
                    "key": "name",
                    "value": "asd"
                },
                {
                    "key": "email",
                    "value": "ajksbdkljasbd@slnkd.aksbd"
                },
                {
                    "key": "custom1",
                    "value": "asdas"
                },
                {
                    "key": "custom2",
                    "value": "asdd"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-09-14 03:39:13",
            "updated_at": "2020-09-14 03:39:13",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 16,
            "name": "Abu Yazeed",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "01016789919",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "Abu Yazeed"
                },
                {
                    "key": "email",
                    "value": "info@ahmedmohsen.com"
                },
                {
                    "key": "phone",
                    "value": "01016789919"
                },
                {
                    "key": "address",
                    "value": "5 Hefny Nasif, From Kornish, Sidi Gaber"
                },
                {
                    "key": "city",
                    "value": "Alexandria"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-26 00:07:35",
            "updated_at": "2020-02-26 00:07:35",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 15,
            "name": "Abu Yazeed",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "01016789919",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "Abu Yazeed"
                },
                {
                    "key": "email",
                    "value": "info@ahmedmohsen.com"
                },
                {
                    "key": "phone",
                    "value": "01016789919"
                },
                {
                    "key": "address",
                    "value": "5 Hefny Nasif, From Kornish, Sidi Gaber"
                },
                {
                    "key": "city",
                    "value": "Alexandria"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-26 00:07:33",
            "updated_at": "2020-02-26 00:07:33",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 14,
            "name": "fofo",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "fofo"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": "1"
                },
                {
                    "key": "city",
                    "value": "1"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:11:25",
            "updated_at": "2020-02-25 00:11:25",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 13,
            "name": "dada",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "dada"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": "1"
                },
                {
                    "key": "city",
                    "value": "1"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:11:20",
            "updated_at": "2020-02-25 00:11:20",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 12,
            "name": "dada",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "dada"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": "1"
                },
                {
                    "key": "city",
                    "value": "1"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:10:48",
            "updated_at": "2020-02-25 00:10:48",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 11,
            "name": "dada",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "dada"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": "1"
                },
                {
                    "key": "city",
                    "value": "1"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:10:47",
            "updated_at": "2020-02-25 00:10:47",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 10,
            "name": "dada",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "name",
                    "value": "dada"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": "1"
                },
                {
                    "key": "city",
                    "value": "1"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:10:21",
            "updated_at": "2020-09-26 02:27:19",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 9,
            "name": "midooo",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "name",
                    "value": "midooo"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": "1"
                },
                {
                    "key": "city",
                    "value": "1"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:07:44",
            "updated_at": "2020-02-25 00:07:44",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 8,
            "name": "midooo",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "name",
                    "value": "midooo"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": "1"
                },
                {
                    "key": "city",
                    "value": "1"
                },
                {
                    "key": "social",
                    "value": "1"
                },
                {
                    "key": "occupation",
                    "value": "1"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:07:39",
            "updated_at": "2020-09-25 06:18:02",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 7,
            "name": "midooo",
            "product_id": 7,
            "user_id": null,
            "source_id": 9,
            "phone": "123456",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "name",
                    "value": "midooo"
                },
                {
                    "key": "email",
                    "value": "hanafy@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "123456"
                },
                {
                    "key": "address",
                    "value": null
                },
                {
                    "key": "city",
                    "value": null
                },
                {
                    "key": "social",
                    "value": null
                },
                {
                    "key": "occupation",
                    "value": null
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Corporate Registration Services"
                }
            ],
            "created_at": "2020-02-25 00:07:29",
            "updated_at": "2020-09-28 07:56:03",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 7,
                "workplace_id": 1,
                "title": "Corporate Registration Services",
                "created_at": "2020-02-23 05:45:42",
                "updated_at": "2020-02-23 05:45:42"
            },
            "user": null
        },
        {
            "id": 6,
            "name": "kareemTest2",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "0123987662",
            "email": "kareemkima@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "name",
                    "value": "kareemTest2"
                },
                {
                    "key": "email",
                    "value": "kareemkima@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "0123987662"
                },
                {
                    "key": "address",
                    "value": "miami"
                },
                {
                    "key": "city",
                    "value": "alexandria"
                },
                {
                    "key": "social",
                    "value": "http:\/\/facebook.com"
                },
                {
                    "key": "occupation",
                    "value": "Manager"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-02-23 04:38:11",
            "updated_at": "2020-09-24 20:12:40",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 5,
            "name": "kareemTest2",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "0123987662",
            "email": "kareemkima@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "name",
                    "value": "kareemTest2"
                },
                {
                    "key": "email",
                    "value": "kareemkima@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "0123987662"
                },
                {
                    "key": "address",
                    "value": "miami"
                },
                {
                    "key": "city",
                    "value": "alexandria"
                },
                {
                    "key": "social",
                    "value": "http:\/\/facebook.com"
                },
                {
                    "key": "occupation",
                    "value": "Manager"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-02-23 04:38:02",
            "updated_at": "2020-09-24 20:12:28",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 4,
            "name": "kareemTest2",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "0123987662",
            "email": "kareemkima@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "name",
                    "value": "kareemTest2"
                },
                {
                    "key": "email",
                    "value": "kareemkima@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "0123987662"
                },
                {
                    "key": "address",
                    "value": "miami"
                },
                {
                    "key": "city",
                    "value": "alexandria"
                },
                {
                    "key": "social",
                    "value": "http:\/\/facebook.com"
                },
                {
                    "key": "occupation",
                    "value": "Manager"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-02-23 04:37:58",
            "updated_at": "2020-09-28 17:15:20",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 3,
            "name": "kareemTest",
            "product_id": 2,
            "user_id": null,
            "source_id": 9,
            "phone": "0123987662",
            "email": "kareemkima@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "name",
                    "value": "kareemTest"
                },
                {
                    "key": "email",
                    "value": "kareemkima@gmail.com"
                },
                {
                    "key": "phone",
                    "value": "0123987662"
                },
                {
                    "key": "address",
                    "value": "miami"
                },
                {
                    "key": "city",
                    "value": "alexandria"
                },
                {
                    "key": "social",
                    "value": "http:\/\/facebook.com"
                },
                {
                    "key": "occupation",
                    "value": "Manager"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "vola p2"
                }
            ],
            "created_at": "2020-02-23 04:36:55",
            "updated_at": "2020-09-26 02:27:14",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 2,
                "workplace_id": 4,
                "title": "vola p2",
                "created_at": "2020-02-16 17:17:53",
                "updated_at": "2020-02-16 17:17:53"
            },
            "user": null
        },
        {
            "id": 2,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": "kareemkima@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 1,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": "1234567654"
                },
                {
                    "key": "mobile",
                    "value": "22345678987654"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-02-23 04:10:47",
            "updated_at": "2020-09-28 07:51:38",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        },
        {
            "id": 1,
            "name": "kareem222",
            "product_id": 6,
            "user_id": null,
            "source_id": 9,
            "phone": "1234567654",
            "email": "kareemkima@gmail.com\r\n",
            "scheduled_on": null,
            "last_contact": null,
            "status": 2,
            "lead": [
                {
                    "key": "name",
                    "value": "kareem222"
                },
                {
                    "key": "phone",
                    "value": "1234567654"
                },
                {
                    "key": "mobile",
                    "value": "22345678987654"
                },
                {
                    "key": "source",
                    "value": "Bottels Website Form"
                },
                {
                    "key": "product",
                    "value": "Product test"
                }
            ],
            "created_at": "2020-02-23 04:10:22",
            "updated_at": "2020-10-01 07:07:08",
            "source": {
                "id": 9,
                "workplace_id": 8,
                "user_id": 7,
                "name": "Bottels Website Form",
                "country_id": null,
                "website": "https:\/\/popcorn.com",
                "product_id": 11,
                "widget_type": "text",
                "alignment": "left",
                "primary": "#34a853",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-phone fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "Talk to sales expert now!",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "Country",
                "custom_lable_2": "Job Title",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-10-01 16:42:32",
                "updated_at": "2020-10-01 16:42:32"
            },
            "product": {
                "id": 6,
                "workplace_id": 6,
                "title": "Product test",
                "created_at": "2020-02-20 04:40:06",
                "updated_at": "2020-02-20 04:40:06"
            },
            "user": null
        }
    ]
}
```

### HTTP Request
`GET api/all_leads`


<!-- END_59f5311afa947174c231488ff72a71ab -->

<!-- START_61a85c4495a8871ceaf432c85b5827e7 -->
## api/user_leads/{user}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/api/user_leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/user_leads/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "code": "0",
    "data": [
        {
            "id": 56,
            "name": "ee",
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " djfewk",
            "email": "efew@fdew.fwe",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "baseUrl",
                    "value": "https:\/\/malexs.net\/closor\/public"
                },
                {
                    "key": "phone",
                    "value": "djfewk"
                },
                {
                    "key": "name",
                    "value": "ee"
                },
                {
                    "key": "email",
                    "value": "efew@fdew.fwe"
                },
                {
                    "key": "custom1",
                    "value": "12345"
                },
                {
                    "key": "custom2",
                    "value": "40"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-22 20:51:30",
            "updated_at": "2020-09-22 20:51:30",
            "created_at_time_zone": "2020-09-22T18:51:30.000000Z",
            "created_at_human": "3 months ago",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 52,
            "name": null,
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " 345465",
            "email": null,
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "345465"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:33:29",
            "updated_at": "2020-09-21 21:33:29",
            "created_at_time_zone": "2020-09-21T19:33:29.000000Z",
            "created_at_human": "3 months ago",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 48,
            "name": "moomo",
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01011",
            "email": "mo@mom.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01011"
                },
                {
                    "key": "name",
                    "value": "moomo"
                },
                {
                    "key": "email",
                    "value": "mo@mom.com"
                },
                {
                    "key": "custom1",
                    "value": "sdgfngfn"
                },
                {
                    "key": "custom2",
                    "value": "25"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 21:16:51",
            "updated_at": "2020-09-21 21:16:51",
            "created_at_time_zone": "2020-09-21T19:16:51.000000Z",
            "created_at_human": "3 months ago",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 44,
            "name": "ali",
            "product_id": 13,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01128266333",
            "email": "m7moodali88@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01128266333"
                },
                {
                    "key": "name",
                    "value": "ali"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@gmail.com"
                },
                {
                    "key": "custom1",
                    "value": "xxxxx"
                },
                {
                    "key": "custom2",
                    "value": "222"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                },
                {
                    "key": "product",
                    "value": "English course"
                }
            ],
            "created_at": "2020-09-21 03:23:29",
            "updated_at": "2020-09-21 03:23:29",
            "created_at_time_zone": "2020-09-21T01:23:29.000000Z",
            "created_at_human": "3 months ago",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": {
                "id": 13,
                "workplace_id": 2,
                "title": "English course",
                "created_at": "2020-06-26 01:19:53",
                "updated_at": "2020-06-26 01:19:53"
            },
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 36,
            "name": "mahmoud ali mohamed",
            "product_id": 0,
            "user_id": 1,
            "source_id": 5,
            "phone": " 033331998",
            "email": "m7moodali88@yahoo.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "033331998"
                },
                {
                    "key": "name",
                    "value": "mahmoud ali mohamed"
                },
                {
                    "key": "email",
                    "value": "m7moodali88@yahoo.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 23:39:31",
            "updated_at": "2020-09-20 23:39:31",
            "created_at_time_zone": "2020-09-20T21:39:31.000000Z",
            "created_at_human": "3 months ago",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 35,
            "name": "mohamed yehia",
            "product_id": 0,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01010110",
            "email": "m.ali@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01010110"
                },
                {
                    "key": "name",
                    "value": "mohamed yehia"
                },
                {
                    "key": "email",
                    "value": "m.ali@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 22:28:12",
            "updated_at": "2020-09-20 22:28:12",
            "created_at_time_zone": "2020-09-20T20:28:12.000000Z",
            "created_at_human": "3 months ago",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        },
        {
            "id": 32,
            "name": "mohamed ali",
            "product_id": 0,
            "user_id": 1,
            "source_id": 5,
            "phone": " 01010110",
            "email": "m.ali@gmail.com",
            "scheduled_on": null,
            "last_contact": null,
            "status": 0,
            "lead": [
                {
                    "key": "phone",
                    "value": "01010110"
                },
                {
                    "key": "name",
                    "value": "mohamed ali"
                },
                {
                    "key": "email",
                    "value": "m.ali@gmail.com"
                },
                {
                    "key": "source",
                    "value": "Test widget"
                }
            ],
            "created_at": "2020-09-20 22:26:40",
            "updated_at": "2020-09-20 22:26:40",
            "created_at_time_zone": "2020-09-20T20:26:40.000000Z",
            "created_at_human": "3 months ago",
            "source": {
                "id": 5,
                "workplace_id": 2,
                "user_id": 1,
                "name": "Test widget",
                "country_id": 3,
                "website": "http:\\\\w3schools.com",
                "product_id": 13,
                "widget_type": "text",
                "alignment": "right",
                "primary": "#8934a8",
                "secondary": "#ffffff",
                "icon_type": "mdi mdi-headset fa-fw",
                "bubble": "on",
                "bubble_line_1": "Want to talk to an expert?",
                "bubble_line_2": "Our Team is 60 Second Away From You!",
                "bubble_bg_color": "#959a9e",
                "bubble_text_color": "#ffffff",
                "text_text": "ssdsdsd",
                "text_round": 10,
                "fields": [
                    "name",
                    "email",
                    "custom1",
                    "custom2"
                ],
                "custom_lable_1": "fdfffdf",
                "custom_lable_2": "weeweewe",
                "submitt_text": "Call\r\n            Me Now",
                "created_at": "2020-08-18 21:37:25",
                "updated_at": "2020-10-06 22:49:52"
            },
            "product": null,
            "user": {
                "id": 1,
                "name": "kareem",
                "phone": "01234567890",
                "country_code": null,
                "email": "a7medkamal775@gmail.com",
                "email_verified_at": null,
                "created_at": "2020-01-26 16:26:56",
                "updated_at": "2020-12-28 18:27:48",
                "device_token": null,
                "os": null,
                "is_available": 1
            }
        }
    ]
}
```

### HTTP Request
`GET api/user_leads/{user}`


<!-- END_61a85c4495a8871ceaf432c85b5827e7 -->

<!-- START_a8de7d263b49f310c02e9c4c130524c9 -->
## api/qualified
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/qualified" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/qualified"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/qualified`


<!-- END_a8de7d263b49f310c02e9c4c130524c9 -->

<!-- START_926fc61aa770cdea7831fb5d8b848858 -->
## api/test_notification_user
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/test_notification_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/test_notification_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/test_notification_user`


<!-- END_926fc61aa770cdea7831fb5d8b848858 -->

<!-- START_df70b272cf915016a1ca96cbc14c2b09 -->
## api/test_notification_device
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/test_notification_device" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/test_notification_device"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/test_notification_device`


<!-- END_df70b272cf915016a1ca96cbc14c2b09 -->

<!-- START_498136219ce762889e3ffd73765b9003 -->
## workplace
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/workplace"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET workplace`


<!-- END_498136219ce762889e3ffd73765b9003 -->

<!-- START_9e2e44622c4b535a411370f0e12f3e1b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/workplace/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/workplace/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET workplace/create`


<!-- END_9e2e44622c4b535a411370f0e12f3e1b -->

<!-- START_3fc9a606a4188179a352baefb2070a4f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/workplace"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST workplace`


<!-- END_3fc9a606a4188179a352baefb2070a4f -->

<!-- START_55b4223b6d5c3dae76077fa642c07a2d -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/workplace/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET workplace/{workplace}`


<!-- END_55b4223b6d5c3dae76077fa642c07a2d -->

<!-- START_5f73cc8376a24ab4ac6b7536a76479ee -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/workplace/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/workplace/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET workplace/{workplace}/edit`


<!-- END_5f73cc8376a24ab4ac6b7536a76479ee -->

<!-- START_75c66c346528f43f48c1da31f07d0f2b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/closor/public/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/workplace/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT workplace/{workplace}`

`PATCH workplace/{workplace}`


<!-- END_75c66c346528f43f48c1da31f07d0f2b -->

<!-- START_8017da6c5d0ba10a95b74891659b71d7 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/closor/public/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/workplace/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE workplace/{workplace}`


<!-- END_8017da6c5d0ba10a95b74891659b71d7 -->

<!-- START_4707187567e347e9f9b62fa54857eb58 -->
## invited_workplaces
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/invited_workplaces" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/invited_workplaces"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET invited_workplaces`


<!-- END_4707187567e347e9f9b62fa54857eb58 -->

<!-- START_2d7929f290ae72d939e89b7e232cdffb -->
## user_workplaces
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/user_workplaces" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/user_workplaces"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET user_workplaces`


<!-- END_2d7929f290ae72d939e89b7e232cdffb -->

<!-- START_46c3c689207155a26adf42e4d5418a3f -->
## {workplace_id}/team
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/1/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/1/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET {workplace_id}/team`


<!-- END_46c3c689207155a26adf42e4d5418a3f -->

<!-- START_c88f787d4d34968e9bf2bfe32466e5f2 -->
## {workplace_id}/team/{product_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/1/team/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/1/team/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET {workplace_id}/team/{product_id}`


<!-- END_c88f787d4d34968e9bf2bfe32466e5f2 -->

<!-- START_b770a79f5f0514009c815eaca6b27451 -->
## edit_user_role
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/edit_user_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/edit_user_role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST edit_user_role`


<!-- END_b770a79f5f0514009c815eaca6b27451 -->

<!-- START_81b98dce40509745c38b0ea8d41364a4 -->
## remove_user_from_workspace/{user_id}/{workplace_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/remove_user_from_workspace/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/remove_user_from_workspace/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET remove_user_from_workspace/{user_id}/{workplace_id}`


<!-- END_81b98dce40509745c38b0ea8d41364a4 -->

<!-- START_7cdf1186f200d47090bfdffb41f52e72 -->
## active_user_in_workspace/{status}/{user_id}/{workplace_id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/active_user_in_workspace/1/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/active_user_in_workspace/1/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET active_user_in_workspace/{status}/{user_id}/{workplace_id}`


<!-- END_7cdf1186f200d47090bfdffb41f52e72 -->

<!-- START_9df3cc4d44958b41b6e119ee5744a74f -->
## invite/{workplace}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/invite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/invite/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET invite/{workplace}`


<!-- END_9df3cc4d44958b41b6e119ee5744a74f -->

#general


<!-- START_b7802a3a2092f162a21dc668479801f4 -->
## api/password/email
> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/email`


<!-- END_b7802a3a2092f162a21dc668479801f4 -->

<!-- START_8ad860d24dc1cc6dac772d99135ad13e -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/api/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/reset`


<!-- END_8ad860d24dc1cc6dac772d99135ad13e -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/closor/public/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_69ff7bfc681bd26488c719c28ce26659 -->
## Invoke the controller method.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/closor/public/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/closor/public/team"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET team`


<!-- END_69ff7bfc681bd26488c719c28ce26659 -->


