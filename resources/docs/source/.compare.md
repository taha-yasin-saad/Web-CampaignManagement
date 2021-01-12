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

#1.1  Admin management



Page Group To manage Admin data & Lists Stats Of The Site In General .

<p><img src="images/admin/admin-login-page.png" width="100%"></p>

<p><img src="images/admin/admin-management.png" width="100%"></p>
<!-- START_8a59594ff635c00027a130968fc47527 -->
## Dashboard

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is A Dashboard Page That Shows Lists Of Stats & General Data Of The Site In General That admin can view stats and make decisions from the stats brief in front of him to manage the site more efficient .

<p><img src="images/admin/dashboard.png" width="100%"></p>

- Statistics For All The Site .
- Diagrams For Data Of Workplaces.
- Diagrams For Data Of Products.
- Diagrams For Data Of Users.
- Diagrams For Data Of Leads.
- Counter For Workplaces All Over the Site .
- Counter For Products All Over the Site .
- Counter For Users All Over the Site .
- Counter For Leads All Over the Site .

> Example request:

```bash
curl -X GET \
    -G "/admin/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/dashboard"
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
    "workplaces_count": 19,
    "products_count": 28,
    "users_count": 32,
    "leads_count": 86
}
```

### HTTP Request
`GET admin/dashboard`


<!-- END_8a59594ff635c00027a130968fc47527 -->

#1.2  Admin Moderator management


Page Group To manage Moderator data For The Admin Control Panel .

- View the moderator Data Ex. Name, Email & Phone .
- Create New Moderators for the Site .
- Edit an existing Moderators from the Edit Button .
- Delete Moderators From the delete Button .

<p><img src="images/admin/moderators/admin-moderator-management.png" width="100%"></p>
<!-- START_42f1c137c1a4a3c3a7d1a98f743d76f7 -->
## Moderators View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Moderator Page That Views Moderators Data Info .

<p><img src="images/admin/moderators/admin-moderator-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/moderator" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/moderator"
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
    "id": 2,
    "name": "Demo Mato",
    "phone": 123456789,
    "email": "test@demo.com",
    "created_at": "2020-12-29 14:13:08",
    "updated_at": "2020-12-29 14:13:08",
    "role": 1
}
```

### HTTP Request
`GET admin/moderator`


<!-- END_42f1c137c1a4a3c3a7d1a98f743d76f7 -->

<!-- START_01b7e01eae0845434c2002e47bc1f035 -->
## Moderator Create Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Moderator Page That Creates Moderators To Manage The Web Site Generally .

<p><img src="images/admin/moderators/admin-moderator-create.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/moderator/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"demo","email":"test@demo.com","phone":123456789,"zones":"Alex"}'

```

```javascript
const url = new URL(
    "/admin/moderator/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "demo",
    "email": "test@demo.com",
    "phone": 123456789,
    "zones": "Alex"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 2,
    "name": "Demo Mato",
    "phone": 123456789,
    "email": "test@demo.com",
    "created_at": "2020-12-29 14:13:08",
    "updated_at": "2020-12-29 14:13:08",
    "role": 1
}
```

### HTTP Request
`GET admin/moderator/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the user.
        `email` | string |  required  | The email of the user.
        `phone` | integer |  required  | The phone of the user.
        `zones` | string |  optional  | The Zone selected of the user.
    
<!-- END_01b7e01eae0845434c2002e47bc1f035 -->

<!-- START_9ace67bf5a097be959593ac93ecddcc2 -->
## Moderator Store Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Moderator Data Request That Stores Moderators Data To Database .

<p><img src="images/admin/added-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/admin/moderator" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/moderator"
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
    "success": "Added Successfully"
}
```

### HTTP Request
`POST admin/moderator`


<!-- END_9ace67bf5a097be959593ac93ecddcc2 -->

<!-- START_2a667f53fed4f739b41ed0003a388271 -->
## Moderator Edit Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Moderator Page That Edits Moderators To Manage The Web Site Generally .

> Example request:

```bash
curl -X GET \
    -G "/admin/moderator/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"demo .","email":"test@demo.com .","phone":123456789,"zones":"Alex ."}'

```

```javascript
const url = new URL(
    "/admin/moderator/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "demo .",
    "email": "test@demo.com .",
    "phone": 123456789,
    "zones": "Alex ."
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 2,
    "name": "Demo Mato",
    "phone": 123456789,
    "email": "test@demo.com",
    "created_at": "2020-12-29 14:13:08",
    "updated_at": "2020-12-29 14:13:08",
    "role": 1
}
```

### HTTP Request
`GET admin/moderator/{moderator}/edit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the user.
        `email` | string |  required  | The email of the user.
        `phone` | integer |  required  | The phone of the user.
        `zones` | string |  optional  | The Zone selected of the user.
    
<!-- END_2a667f53fed4f739b41ed0003a388271 -->

<!-- START_9b6c2330037b0e5193fe78948e5e945c -->
## Moderator Update Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Moderator Data Request That Updates Moderators Data To Database .

<p><img src="images/admin/moderators/admin-moderator-update.png" width="100%"></p>
<p><img src="images/admin/updated-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X PUT \
    "/admin/moderator/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/moderator/1"
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


> Example response (200):

```json
{
    "success": "Updated Successfully"
}
```

### HTTP Request
`PUT admin/moderator/{moderator}`

`PATCH admin/moderator/{moderator}`


<!-- END_9b6c2330037b0e5193fe78948e5e945c -->

<!-- START_588e95fb6821fb070bbe71063ea23f26 -->
## Moderator Delete Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Moderator Data Request That Delete Moderators Data From Database .

<p><img src="images/admin/moderators/admin-moderator-delete.png" width="100%"></p>
<p><img src="images/admin/deleted-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X DELETE \
    "/admin/moderator/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/moderator/1"
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


> Example response (200):

```json
{
    "success": "Deleted Successfully"
}
```

### HTTP Request
`DELETE admin/moderator/{moderator}`


<!-- END_588e95fb6821fb070bbe71063ea23f26 -->

#1.3  Admin Users management


Page Group To manage Users data For The Admin Control Panel .

- View the User Data Ex. Name, Email & Phone etc.
- Filter an existing Users from the Filter Form .
- Manage Users From the Enable & Disable Button .

<p><img src="images/admin/users/admin-user-view.png" width="100%"></p>
<!-- START_bd487ab94d8034c2d13644bb1772fdfa -->
## Users View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel User Page That Views users Data Info .

Form Filter is used to filtering existing Users To get better results .

<p><img src="images/admin/users/admin-user-filter.png" width="100%"></p>

View users Data Info

- View the User Data Ex. Name, Email & Phone etc.

- Manage Users From the Enable & Disable Button .

<p><img src="images/admin/users/admin-user-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/user"
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
    "name": "demo",
    "phone": "01234567890",
    "country_code": null,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-01-26 16:26:56",
    "updated_at": "2021-01-07 13:35:48",
    "device_token": null,
    "os": null,
    "is_available": 1,
    "products_count": 2,
    "workplaces_count": 1,
    "leads_count": 7
}
```

### HTTP Request
`GET admin/user`


<!-- END_bd487ab94d8034c2d13644bb1772fdfa -->

<!-- START_71dba47ec1215d1147a3f8e59c55751a -->
## Users View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel User Page That Views users Data Info .

Form Filter is used to filtering existing Users To get better results .

<p><img src="images/admin/users/admin-user-filter.png" width="100%"></p>

View users Data Info

- View the User Data Ex. Name, Email & Phone etc.

- Manage Users From the Enable & Disable Button .

<p><img src="images/admin/users/admin-user-view.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/user"
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
    "name": "demo",
    "phone": "01234567890",
    "country_code": null,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-01-26 16:26:56",
    "updated_at": "2021-01-07 13:35:48",
    "device_token": null,
    "os": null,
    "is_available": 1,
    "products_count": 2,
    "workplaces_count": 1,
    "leads_count": 7
}
```

### HTTP Request
`POST admin/user`


<!-- END_71dba47ec1215d1147a3f8e59c55751a -->

<!-- START_9fa8fc1e020e7d36ccc1f3b8d7072309 -->
## Manage Users From the Enable &amp; Disable Button

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
<p><img src="images/admin/users/admin-user-enable.png" width="100%"></p>

<p><img src="images/admin/updated-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/user_available/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/user_available/1/1"
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
    "success": "Updated Successfully"
}
```

### HTTP Request
`GET admin/user_available/{user}/{is_available}`


<!-- END_9fa8fc1e020e7d36ccc1f3b8d7072309 -->

#1.4  Admin Zone management


Page Group To manage Zone data For The Admin Control Panel .

- View the Zone Data Ex. Name, Countries & MANAGE .
- Create New Zones .
- Edit an existing Zones from the Edit Button .
- Delete Zones From the delete Button .

<p><img src="images/admin/zones/admin-zones-view.png" width="100%"></p>
<!-- START_64ec3c6c19150d0203cd3a9140836e11 -->
## Zones View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Zone Page That Views Zones Data Info .

<p><img src="images/admin/zones/admin-zones-view.png" width="100%"></p>

View Zones Data Info

- View the Zone Data Ex. Name, Countries & MANAGE .
- Create New Zones for the Site .
- Edit an existing Zones from the Edit Button .
- Delete Zones From the delete Button .

> Example request:

```bash
curl -X GET \
    -G "/admin/zone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/zone"
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
    "id": 2,
    "name": "Test",
    "created_at": "2020-12-29 14:07:43",
    "updated_at": "2020-12-29 14:07:43",
    "countries": [
        {
            "id": 2,
            "iso": "AL",
            "name": "ALBANIA",
            "nicename": "Albania",
            "iso3": "ALB",
            "numcode": 8,
            "phonecode": 355,
            "pivot": {
                "zone_id": 2,
                "country_id": 2
            }
        }
    ]
}
```

### HTTP Request
`GET admin/zone`


<!-- END_64ec3c6c19150d0203cd3a9140836e11 -->

<!-- START_8aa920ff953d3d7b612986df862f0688 -->
## Zone Create Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Zone Page That Creates Zones To Manage The Web Site Generally .

<p><img src="images/admin/zones/admin-zones-create.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/zone/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"demo","Countries":"Alex"}'

```

```javascript
const url = new URL(
    "/admin/zone/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "demo",
    "Countries": "Alex"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 2,
    "name": "Demo Mato",
    "countries": "ALBANIA"
}
```

### HTTP Request
`GET admin/zone/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the zone.
        `Countries` | string |  required  | The Countries selected of the zone.
    
<!-- END_8aa920ff953d3d7b612986df862f0688 -->

<!-- START_2a549bed4d631a624001ebb1533e1ccd -->
## Zone Store Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Zone Data Request That Stores Zones Data To Database .

<p><img src="images/admin/added-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/admin/zone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/zone"
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
    "success": "Added Successfully"
}
```

### HTTP Request
`POST admin/zone`


<!-- END_2a549bed4d631a624001ebb1533e1ccd -->

<!-- START_5b2e7e6bea511d686076f055d3098619 -->
## Zone Edit Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Zone Page That Edits Zones To Manage The Web Site Generally .

<p><img src="images/admin/zones/admin-zones-edit.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/zone/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"demo","Countries":"Alex"}'

```

```javascript
const url = new URL(
    "/admin/zone/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "demo",
    "Countries": "Alex"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 2,
    "name": "Demo",
    "countries": "ALBANIA"
}
```

### HTTP Request
`GET admin/zone/{zone}/edit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | The name of the zone.
        `Countries` | string |  required  | The Countries selected of the zone.
    
<!-- END_5b2e7e6bea511d686076f055d3098619 -->

<!-- START_33fdf5c386ce71185ab081d19c5eec4b -->
## Zone Update Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Zone Data Request That Updates Zones Data To Database .

<p><img src="images/admin/zones/admin-zones-update.png" width="100%"></p>
<p><img src="images/admin/updated-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X PUT \
    "/admin/zone/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/zone/1"
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


> Example response (200):

```json
{
    "success": "Updated Successfully"
}
```

### HTTP Request
`PUT admin/zone/{zone}`

`PATCH admin/zone/{zone}`


<!-- END_33fdf5c386ce71185ab081d19c5eec4b -->

<!-- START_d9e5a24825aa831706830db3050287c3 -->
## Zone Delete Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Zone Data Request That Delete Zones Data From Database .

<p><img src="images/admin/zones/admin-zones-delete.png" width="100%"></p>

<p><img src="images/admin/deleted-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X DELETE \
    "/admin/zone/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/zone/1"
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


> Example response (200):

```json
{
    "success": "Deleted Successfully"
}
```

### HTTP Request
`DELETE admin/zone/{zone}`


<!-- END_d9e5a24825aa831706830db3050287c3 -->

#1.5  Admin Workplaces management


Page Group To manage Workplaces data For The Admin Control Panel .

- View the Workplaces Data Ex. Title, Count of Products & Created By etc .

<p><img src="images/admin/workplaces/admin-workplaces-view.png" width="100%"></p>
<!-- START_699bfa8985dd4a8445e6cd2dba6bd1ff -->
## Workplaces View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Workplace Page That Views Workplaces Data Info .

Form Filter is used to filtering existing workplaces To get better results .

<p><img src="images/admin/workplaces/admin-workplaces-filter.png" width="100%"></p>

View Workplace Data Info

- View the Workplace Data Ex. Title, Count of Products & Created By etc.

<p><img src="images/admin/workplaces/admin-workplaces-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/workplace"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`GET admin/workplace`


<!-- END_699bfa8985dd4a8445e6cd2dba6bd1ff -->

<!-- START_eb470148c94798707e89a20561b7c924 -->
## Workplaces View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Workplace Page That Views Workplaces Data Info .

Form Filter is used to filtering existing workplaces To get better results .

<p><img src="images/admin/workplaces/admin-workplaces-filter.png" width="100%"></p>

View Workplace Data Info

- View the Workplace Data Ex. Title, Count of Products & Created By etc.

<p><img src="images/admin/workplaces/admin-workplaces-view.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/admin/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/workplace"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`POST admin/workplace`


<!-- END_eb470148c94798707e89a20561b7c924 -->

<!-- START_7f5c3cb4f0190a68ad56c43df0411e0e -->
## Single Workplace Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Page For Single Workplace That Views Workplace Data Info .

- View Products For the Workplace .
- View Products Count For the Single Workplace .
- Every Product In the WorkPlace With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product .
- Filter Search to go through every table data .

<p><img src="images/admin/workplaces/admin-workplace-products.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/workplace-info/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/workplace-info/1"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`GET admin/workplace-info/{workplace_id}`


<!-- END_7f5c3cb4f0190a68ad56c43df0411e0e -->

<!-- START_ad220b974b859e1602a3412dad2df202 -->
## Single Workplace Team Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Page Workplace Team That Views Workplaces Team Data Info That is assigned to the product to manage into the workplaces .

- invite users with the invite button to manage the product that belongs to the workplace .
<p><img src="images/admin/workplaces/admin-workplaces-invite.png" width="100%"></p>
- counter users that invited to a certain product .
<p><img src="images/admin/workplaces/admin-workplaces-counter.png" width="100%"></p>


View Workplace Single Product Team Info & Roles

- View the Workplace Single Product Team Info & Roles Ex. User Name, Products Names That Assigned to the user & User role, etc.

<p><img src="images/admin/workplaces/admin-workplace-team.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/1/team/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/1/team/1"
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
    "id": 7,
    "name": "demo",
    "phone": "0123456789",
    "country_code": 20,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-02-03 21:36:19",
    "updated_at": "2020-12-09 01:46:55"
}
```

### HTTP Request
`GET admin/{workplace_id}/team/{product_id}`


<!-- END_ad220b974b859e1602a3412dad2df202 -->

#1.6  Admin Leads management


Page Group To manage Leads data For The Admin Control Panel .

- View the Leads Data Ex. Lead Name, Workplace Product belongs to & Product etc.
- Filter an existing Leads from the Filter Form .
- View Leads Stats the Qualified & Un Qualified Buttons .

<p><img src="images/admin/leads/admin-leads-view.png" width="100%"></p>
<!-- START_d73e5ecdb21a6038d8c7d5ab1b3bff01 -->
## Leads View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Lead Page That Views leads Data Info .

Form Filter is used to filtering existing leads To get better results .

<p><img src="images/admin/leads/admin-leads-filter.png" width="100%"></p>

View leads Data Info

- View the Leads Data Ex. Lead Name, Workplace Product belongs to & Product etc.

-View Leads Stats the Qualified & Un Qualified Buttons .

<p><img src="images/admin/leads/admin-leads-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/lead" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/lead"
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
    "name": "demo",
    "phone": "01234567890",
    "country_code": null,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-01-26 16:26:56",
    "updated_at": "2021-01-07 13:35:48",
    "device_token": null,
    "os": null,
    "is_available": 1,
    "products_count": 2,
    "workplaces_count": 1,
    "leads_count": 7
}
```

### HTTP Request
`GET admin/lead`


<!-- END_d73e5ecdb21a6038d8c7d5ab1b3bff01 -->

<!-- START_8c41b839307216344317ddb09df54c66 -->
## Leads View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Lead Page That Views leads Data Info .

Form Filter is used to filtering existing leads To get better results .

<p><img src="images/admin/leads/admin-leads-filter.png" width="100%"></p>

View leads Data Info

- View the Leads Data Ex. Lead Name, Workplace Product belongs to & Product etc.

-View Leads Stats the Qualified & Un Qualified Buttons .

<p><img src="images/admin/leads/admin-leads-view.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/admin/lead" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/lead"
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
    "name": "demo",
    "phone": "01234567890",
    "country_code": null,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-01-26 16:26:56",
    "updated_at": "2021-01-07 13:35:48",
    "device_token": null,
    "os": null,
    "is_available": 1,
    "products_count": 2,
    "workplaces_count": 1,
    "leads_count": 7
}
```

### HTTP Request
`POST admin/lead`


<!-- END_8c41b839307216344317ddb09df54c66 -->

<!-- START_20c4b3ef2d56086bd3394de6b0a721b8 -->
## Single Lead Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Admin-Panel Page For Single Lead That Views Lead Data Info .

- View Products For the Lead .
- View Products Count For the Single Lead .
- Every Product In the Lead With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product .
- Filter Search to go through every table data .

<p><img src="images/admin/leads/admin-singlelead-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/admin/lead/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin/lead/1"
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
    "text_round": 10
}
```

### HTTP Request
`GET admin/lead/{lead}`


<!-- END_20c4b3ef2d56086bd3394de6b0a721b8 -->

#2.1 Users Get Data Behind the scene.


Routes for Getting Data Request for site :

- Personalize the country phone code.

- Personalize the country data info.
<!-- START_01e8e27813cb0bbdbd50865bdad2d538 -->
## Personalize User Phone Code

- Personalize the Country Phone Code for later user at the site EX. +2.

> Example request:

```bash
curl -X GET \
    -G "/phoneCode/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/phoneCode/1"
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
    "phonecode": 355
}
```

### HTTP Request
`GET phoneCode/{code}`


<!-- END_01e8e27813cb0bbdbd50865bdad2d538 -->

<!-- START_1142f13834868f73270109636ff92df5 -->
## Personalize User Country Data info

- Personalize User Country Data info for later user at the site EX. ALBANIA.

> Example request:

```bash
curl -X GET \
    -G "/isoCode/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/isoCode/1"
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
    "iso": "AL",
    "name": "ALBANIA"
}
```

### HTTP Request
`GET isoCode/{code}`


<!-- END_1142f13834868f73270109636ff92df5 -->

#2.1 Users Home management


Page Group To manage General Data for site.

- View the General Data & Routes After Being Authenticated.

<p><img src="images/users/home/users-login-page.png" width="100%"></p>
<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## A Users Login View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
User Login Page That Authenticates User license to use the site properly With his personalized data and getting his data from our database for him to serve him.


<p><img src="images/users/home/users-login-page.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/"
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
<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "/check" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/check"
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

<!-- START_62e8dd9f1911aba4a2520fd5a6010e6d -->
## Widget View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Widget View Page That Views Product Widget at any site the did put in and it's so much customizable by the user customize options :

- The widget colors

- The widget form date Ex. Name, Phone, Email, And Extra 2 Customizable Fields.

<p><img src="images/users/home/users-widget-form.png" width="100%"></p>

- The User can change the widget icon easily with the customized Edit widget at the control panel.

- The User can change the widget Text Message bubble easily with the customized Edit widget at the control panel.

<p><img src="images/users/home/users-widget-icon.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/widgetView/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/widgetView/1"
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

#2.2 Users Users management


Page Group To manage Users data For The Manager Control Panel .

- View the User Data Ex. Name, Email & Phone etc.
- Filter an existing Users from the Filter Form .
- Manage Users From the Enable & Disable Button .

<p><img src="images/users/home/users-profile-page.png" width="100%"></p>
<!-- START_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->
## User Profile Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An User Page That Views User Personal Data Info To The User That user can update it for later use.


View user Data Info

- View the User Data Ex. Name, Email & Phone etc.

- Manage User Data Change Ex. Name, Email, Phone & Password.

<p><img src="images/users/home/users-profile-page.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/profile"
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
    "name": "demo",
    "phone": "01234567890",
    "country_code": null,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-01-26 16:26:56",
    "updated_at": "2021-01-07 13:35:48",
    "device_token": null,
    "os": null,
    "is_available": 1,
    "products_count": 2,
    "workplaces_count": 1,
    "leads_count": 7
}
```

### HTTP Request
`GET profile`


<!-- END_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->

<!-- START_7e6cecb55fb193c3c475a0c055545685 -->
## User Update Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
User Data Request That Updates User Data To Database.

<p><img src="images/users/home/users-profile-page.png" width="100%"></p>
<p><img src="images/admin/updated-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X PUT \
    "/profile/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/profile/1"
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


> Example response (200):

```json
{
    "success": "Updated Successfully"
}
```

### HTTP Request
`PUT profile/{profile}`

`PATCH profile/{profile}`


<!-- END_7e6cecb55fb193c3c475a0c055545685 -->

<!-- START_30059a09ef3f0284c40e4d06962ce08d -->
## Dashboard Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is A Dashboard Page That Shows Lists Of Stats & General Data Of The Site In General That User can view stats and make decisions from the stats brief in front of him to manage the Workplace more efficient.

<p><img src="images/users/dashboard.png" width="100%"></p>

- Statistics For All The Workplaces.
- Diagrams For Data Of Products.
- Diagrams For Data Of Teams.
- Diagrams For Data Of Leads.
- Counter For Products of All Workplaces.
- Counter For Team of All Workplaces.
- Counter For Leads of All Workplaces.

> Example request:

```bash
curl -X GET \
    -G "/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/dashboard"
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
    "user_workplaces_count": 19,
    "invited_workplaces_count": 28
}
```

### HTTP Request
`GET dashboard`


<!-- END_30059a09ef3f0284c40e4d06962ce08d -->

#2.3 Users Workplaces management


Page Group To manage Workplaces data For The Manager Control Panel.

- View the Workplaces Data Ex. Title, Count of Products & Created By etc.

<p><img src="images/users/workplaces/users-workplaces-view.png" width="100%"></p>
<!-- START_498136219ce762889e3ffd73765b9003 -->
## Workplaces View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Workplace Page That Views Workplaces Data Info.

View Workplaces Data Info :

- View the Workplace Data Ex. Title, Count of Products & Created By etc.

<p><img src="images/users/workplaces/users-workplaces-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/workplace"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`GET workplace`


<!-- END_498136219ce762889e3ffd73765b9003 -->

<!-- START_9e2e44622c4b535a411370f0e12f3e1b -->
## Workplace Create Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Page That Creates Workplaces To Manage It later on the site by the manager and his team.

<p><img src="images/users/workplaces/users-workplaces-create.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/workplace/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"demo","timezone":"(GMT+02:00) Cairo","website":"www.demo.com","startday":"Monday"}'

```

```javascript
const url = new URL(
    "/workplace/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "demo",
    "timezone": "(GMT+02:00) Cairo",
    "website": "www.demo.com",
    "startday": "Monday"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Added Successfully"
}
```

### HTTP Request
`GET workplace/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The title of the workplace.
        `timezone` | string |  required  | The timezone selected of the workplace.
        `website` | string |  optional  | The website of the workplace.
        `startday` | string |  required  | The startday selected of Week Start ON for the workplace.
    
<!-- END_9e2e44622c4b535a411370f0e12f3e1b -->

<!-- START_3fc9a606a4188179a352baefb2070a4f -->
## Workplace Store Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Data Request That Stores Workplaces Data To Database.

<p><img src="images/users/added-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/workplace"
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
    "success": "Added Successfully"
}
```

### HTTP Request
`POST workplace`


<!-- END_3fc9a606a4188179a352baefb2070a4f -->

<!-- START_55b4223b6d5c3dae76077fa642c07a2d -->
## Display the specified resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/workplace/1"
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
## Workplaces Edit Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Page That Edits Workplaces To Manage It later on the site by the manager and his team.

> Example request:

```bash
curl -X GET \
    -G "/workplace/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"demo","timezone":"(GMT+02:00) Cairo","website":"www.demo.com","startday":"Monday"}'

```

```javascript
const url = new URL(
    "/workplace/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "demo",
    "timezone": "(GMT+02:00) Cairo",
    "website": "www.demo.com",
    "startday": "Monday"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Updated Successfully"
}
```

### HTTP Request
`GET workplace/{workplace}/edit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The title of the workplace.
        `timezone` | string |  required  | The timezone selected of the workplace.
        `website` | string |  optional  | The website of the workplace.
        `startday` | string |  required  | The startday selected of Week Start ON for the workplace.
    
<!-- END_5f73cc8376a24ab4ac6b7536a76479ee -->

<!-- START_75c66c346528f43f48c1da31f07d0f2b -->
## Workplace Update Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Data Request That Updates Workplaces Data To Database.

<p><img src="images/users/workplaces/users-workplaces-edit.png" width="100%"></p>
<p><img src="images/users/updated-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X PUT \
    "/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/workplace/1"
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


> Example response (200):

```json
{
    "success": "Updated Successfully"
}
```

### HTTP Request
`PUT workplace/{workplace}`

`PATCH workplace/{workplace}`


<!-- END_75c66c346528f43f48c1da31f07d0f2b -->

<!-- START_8017da6c5d0ba10a95b74891659b71d7 -->
## Workplace Delete Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Workplace Data Request That Delete Workplaces Data From Database .

<p><img src="images/admin/moderators/admin-moderator-delete.png" width="100%"></p>
<p><img src="images/users/deleted-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X DELETE \
    "/workplace/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/workplace/1"
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


> Example response (200):

```json
{
    "success": "Deleted Successfully"
}
```

### HTTP Request
`DELETE workplace/{workplace}`


<!-- END_8017da6c5d0ba10a95b74891659b71d7 -->

<!-- START_4707187567e347e9f9b62fa54857eb58 -->
## Invited Workplaces Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel User Page That shows the user The Workplaces That User Invited to.

<p><img src="images/users/workplaces/users-workplaces-invited_workplaces.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/invited_workplaces" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/invited_workplaces"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`GET invited_workplaces`


<!-- END_4707187567e347e9f9b62fa54857eb58 -->

<!-- START_2d7929f290ae72d939e89b7e232cdffb -->
## User Workplaces Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel User Page That shows the user The Workplaces That User Is The Owner.

<p><img src="images/users/workplaces/users-workplaces-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/user_workplaces" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/user_workplaces"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`GET user_workplaces`


<!-- END_2d7929f290ae72d939e89b7e232cdffb -->

<!-- START_46c3c689207155a26adf42e4d5418a3f -->
## Single Workplace Team Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Page Workplace Team That Views Certain Workplace Team Data Info That is assigned to the product to manage into the workplace.

- invite users with the invite button to manage the product that belongs to the workplace.

<p><img src="images/admin/workplaces/admin-workplaces-invite.png" width="100%"></p>

- counter users that invited to a certain product.

<p><img src="images/admin/workplaces/admin-workplaces-counter.png" width="100%"></p>


View Workplace Single Product Team Info & Roles

- View the Workplace Single Product Team Info & Roles Ex. User Name, Products Names That Assigned to the user & User role, etc.

<p><img src="images/admin/workplaces/admin-workplace-team.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/1/team" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/1/team"
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
    "id": 7,
    "name": "demo",
    "phone": "0123456789",
    "country_code": 20,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-02-03 21:36:19",
    "updated_at": "2020-12-09 01:46:55"
}
```

### HTTP Request
`GET {workplace_id}/team`


<!-- END_46c3c689207155a26adf42e4d5418a3f -->

<!-- START_c88f787d4d34968e9bf2bfe32466e5f2 -->
## Single Workplace Team Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Page Workplace Team That Views Certain Workplace Team Data Info That is assigned to the product to manage into the workplace.

- invite users with the invite button to manage the product that belongs to the workplace.

<p><img src="images/admin/workplaces/admin-workplaces-invite.png" width="100%"></p>

- counter users that invited to a certain product.

<p><img src="images/admin/workplaces/admin-workplaces-counter.png" width="100%"></p>


View Workplace Single Product Team Info & Roles

- View the Workplace Single Product Team Info & Roles Ex. User Name, Products Names That Assigned to the user & User role, etc.

<p><img src="images/admin/workplaces/admin-workplace-team.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/1/team/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/1/team/1"
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
    "id": 7,
    "name": "demo",
    "phone": "0123456789",
    "country_code": 20,
    "email": "test@demo.com",
    "email_verified_at": null,
    "created_at": "2020-02-03 21:36:19",
    "updated_at": "2020-12-09 01:46:55"
}
```

### HTTP Request
`GET {workplace_id}/team/{product_id}`


<!-- END_c88f787d4d34968e9bf2bfe32466e5f2 -->

<!-- START_9df3cc4d44958b41b6e119ee5744a74f -->
## User Invite To Product Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel User Page That Invites user To Product And assign a role To work in the product with it.

<p><img src="images/users/workplaces/users-workplaces-invite_user.png" width="100%"></p>
<p><img src="images/users/workplaces/users-workplaces-invite_user_product.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/invite/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/invite/1"
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
    "success": "User invited To Product Successfully"
}
```

### HTTP Request
`GET invite/{workplace}`


<!-- END_9df3cc4d44958b41b6e119ee5744a74f -->

<!-- START_27f83ba20a35cf3aa377aaa4585b4e26 -->
## User Invite To Product Request

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel User Request That Invites users To Product And assign a role To work in the product with it.

<p><img src="images/users/workplaces/users-workplaces-invite_user.png" width="100%"></p>
<p><img src="images/users/workplaces/users-workplaces-invite_user_product.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/invite_member_workplace" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"test@demo.com","products":"Product","role":0}'

```

```javascript
const url = new URL(
    "/invite_member_workplace"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "test@demo.com",
    "products": "Product",
    "role": 0
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "User invited To Product Successfully"
}
```

### HTTP Request
`POST invite_member_workplace`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  optional  | The email of the workplace.
        `products` | string |  required  | The products selected That Assigned To User.
        `role` | integer |  required  | The role selected of User permission on certin product.
    
<!-- END_27f83ba20a35cf3aa377aaa4585b4e26 -->

<!-- START_b770a79f5f0514009c815eaca6b27451 -->
## Edit User Role

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel User Request That Updates User Role To Database.

<p><img src="images/users/workplaces/users-workplaces-edit_user_role.png" width="100%"></p>
<p><img src="images/users/updated-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/edit_user_role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/edit_user_role"
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
    "success": "Role Updated Successfully"
}
```

### HTTP Request
`POST edit_user_role`


<!-- END_b770a79f5f0514009c815eaca6b27451 -->

<!-- START_81b98dce40509745c38b0ea8d41364a4 -->
## User Workplaces Remove Request

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel User Request That Removes user From Workplaces.

<p><img src="images/users/workplaces/users-workplaces-remove_user_from_workspace0.png" width="100%"></p>
<p><img src="images/users/workplaces/users-workplaces-remove_user_from_workspace1.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/remove_user_from_workspace/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/remove_user_from_workspace/1/1"
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
    "success": "User Removed From The workspace Successfully"
}
```

### HTTP Request
`GET remove_user_from_workspace/{user_id}/{workplace_id}`


<!-- END_81b98dce40509745c38b0ea8d41364a4 -->

<!-- START_7cdf1186f200d47090bfdffb41f52e72 -->
## User Workplaces active Request

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel User Request That actives user From Workplaces.

<p><img src="images/users/workplaces/users-workplaces-active_user_from_workspace.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/active_user_in_workspace/1/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/active_user_in_workspace/1/1/1"
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
    "success": "User actived At workspace Successfully"
}
```

### HTTP Request
`GET active_user_in_workspace/{status}/{user_id}/{workplace_id}`


<!-- END_7cdf1186f200d47090bfdffb41f52e72 -->

#2.4 Users WorkPlace Products Management


Page Group To manage Single WorkPlaces Individually For The Manager Control Panel And Give him full access for its all features.

- add product for workplace.

- Add Team members to the team that is working in the product.

- manage team behavior From changing the role for every person on the team in the product Ex. owner , Sales Agent.

- add lead sources for every product in the workplace.

- Every Product In the WorkPlace With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product.

- Filter Search to go through every table data.

- manage every lead source from the Edit page.

<p><img src="images/users/products/users-Products-view.png" width="100%"></p>
<!-- START_b63c55c4bd1dca269829c5efb74328c8 -->
## Single Workplace Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Workplace Page That Views Workplace Products Info.


- View Products For the Workplace.

- View The Team That Works For the Workplace At every Product Individually.

- Manage The Team That Works For the Workplace At every Product Individually.

- View Products Count For the Single Workplace.

- Manage Single every Product Individually At The Workplace.

- Every Product In the WorkPlace With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product.

- Filter Search to go through every table data.

<p><img src="images/users/products/users-Products-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`GET product`


<!-- END_b63c55c4bd1dca269829c5efb74328c8 -->

<!-- START_22a05e6d736a231cc1f66b3f4fa112c1 -->
## Product Create Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Page That Creates Products To Manage It later on the site by the manager and his team.

<p><img src="images/users/products/users-Products-create.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/product/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"demo","users":"demo,test"}'

```

```javascript
const url = new URL(
    "/product/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "demo",
    "users": "demo,test"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Added Successfully"
}
```

### HTTP Request
`GET product/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The title of the Product.
        `users` | string |  required  | The users selected to The Team Managing the product.
    
<!-- END_22a05e6d736a231cc1f66b3f4fa112c1 -->

<!-- START_dfe6fdb3ab2b4c4c229bf21ba5b32643 -->
## Product Store Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Data Request That Stores Products Data To Database.

<p><img src="images/users/added-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"demo","users":"demo,test"}'

```

```javascript
const url = new URL(
    "/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "demo",
    "users": "demo,test"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Added Successfully"
}
```

### HTTP Request
`POST product`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The title of the Product.
        `users` | string |  required  | The users selected to The Team Managing the product.
    
<!-- END_dfe6fdb3ab2b4c4c229bf21ba5b32643 -->

<!-- START_21f3764688b42137635ec43b3339bda5 -->
## Single Product Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Page For Single Product That Views Product Data Info.

- View Members For The Team that is working in the product with info data of them Ex. Name,Email & Phone.


<p><img src="images/users/products/users-Products-single_product.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product/1"
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
    "id": 9,
    "name": "test",
    "email": "test@demo.com",
    "phone": "0123456789",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07"
}
```

### HTTP Request
`GET product/{product}`


<!-- END_21f3764688b42137635ec43b3339bda5 -->

<!-- START_a43ca982c814398a9232bb7e42ea2a2a -->
## Product Edit Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Page That Edits Products To Manage It later on the site by the manager and his team.

<p><img src="images/users/products/users-Products-edit.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/product/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Demo"}'

```

```javascript
const url = new URL(
    "/product/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Demo"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Updated Successfully"
}
```

### HTTP Request
`GET product/{product}/edit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The title of the Product.
    
<!-- END_a43ca982c814398a9232bb7e42ea2a2a -->

<!-- START_476695cb4ed1e5a2d79d11db4b0b2080 -->
## Product Update Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Data Request That Updates Products Data To Database.

<p><img src="images/users/products/users-Products-edit.png" width="100%"></p>
<p><img src="images/users/updated-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X PUT \
    "/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Demo"}'

```

```javascript
const url = new URL(
    "/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Demo"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Updated Successfully"
}
```

### HTTP Request
`PUT product/{product}`

`PATCH product/{product}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The title of the Product.
    
<!-- END_476695cb4ed1e5a2d79d11db4b0b2080 -->

<!-- START_2aeea7ca8dc8189a66bbdb881a5a9bb4 -->
## Product Delete Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Product Data Request That Delete Products Data From Database .

<p><img src="images/users/deleted-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X DELETE \
    "/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/product/1"
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


> Example response (200):

```json
{
    "success": "Deleted Successfully"
}
```

### HTTP Request
`DELETE product/{product}`


<!-- END_2aeea7ca8dc8189a66bbdb881a5a9bb4 -->

<!-- START_c88311d39455b3dc64c67878e4aa7924 -->
## Single Workplace Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Workplace Page That Views Workplace Products Info.


- View Products For the Workplace.

- View The Team That Works For the Workplace At every Product Individually.

- Manage The Team That Works For the Workplace At every Product Individually.

- View Products Count For the Single Workplace.

- Manage Single every Product Individually At The Workplace.

- Every Product In the WorkPlace With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product.

- Filter Search to go through every table data.

<p><img src="images/users/products/users-Products-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/1/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/1/products"
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
    "admin_id": 7,
    "title": "Sherkat",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07",
    "timezone": "Africa\/Cairo",
    "website": null,
    "startday": "Monday",
    "products_count": 5,
    "users_count": 5,
    "leads_count": 12
}
```

### HTTP Request
`GET {workplace_id}/products`


<!-- END_c88311d39455b3dc64c67878e4aa7924 -->

<!-- START_7f1bd779a417892338bb9436ac4a781a -->
## Product Create Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Page That Creates Products To Manage It later on the site by the manager and his team.

<p><img src="images/users/products/users-Products-create.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/product/create/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"demo","users":"demo,test"}'

```

```javascript
const url = new URL(
    "/product/create/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "demo",
    "users": "demo,test"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Added Successfully"
}
```

### HTTP Request
`GET product/create/{workplace_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The title of the Product.
        `users` | string |  required  | The users selected to The Team Managing the product.
    
<!-- END_7f1bd779a417892338bb9436ac4a781a -->

<!-- START_f93f2c9646cf80d334a3abcd9d5c5762 -->
## Product Invite Member Request

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Product Data Request That Invites Members To the team of the product To manage it later on .

<p><img src="images/users/products/users-Products-invite_member.png" width="100%"></p>
<p><img src="images/users/products/users-Products-invite_member1.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/invite_member" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/invite_member"
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
    "success": "Member added Successfully"
}
```

### HTTP Request
`POST invite_member`


<!-- END_f93f2c9646cf80d334a3abcd9d5c5762 -->

<!-- START_c64165b035a2961a0ad8945091145a1c -->
## Product Invite Member Widget

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Product Data Widget That Invites Members To the team of the product To manage it later on .

<p><img src="images/users/products/users-Products-invite_member.png" width="100%"></p>
<p><img src="images/users/products/users-Products-invite_member1.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/choose_members" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/choose_members"
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
    "success": "Member added Successfully"
}
```

### HTTP Request
`POST choose_members`


<!-- END_c64165b035a2961a0ad8945091145a1c -->

<!-- START_7a139cf107f19ae9163446ce5ae22ee0 -->
## Invite Member To certain product

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Product Data Request That Invites Members To the team of the product To manage it later on .

<p><img src="images/users/products/users-Products-add_product_to_user1.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/add_product_to_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/add_product_to_user"
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
    "success": "Product has been Added successfully"
}
```

### HTTP Request
`POST add_product_to_user`


<!-- END_7a139cf107f19ae9163446ce5ae22ee0 -->

#2.5 Users Lead Sources management


Page Group To manage Single Lead Sources For The Manager Control Panel And Give him full access for its all features.

- Add lead sources for every product in the workplace.

- Every lead sources With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Management pages forevery lead source Ex. View , Add & Edit.

- Filter Search to go through every table data.

- manage every lead source from the Edit Wedget page.

- View Wedget lead source from the view Wedget page.

- Add Wedget lead source from the Add Wedget page.

<p><img src="images/users/lead_sources/users-lead_sources-view.png" width="100%"></p>
<!-- START_afe861116942da8827f905c42d93c7cd -->
## Single Lead Source Info View Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Page Group To manage Single Lead Sources For The Manager Control Panel And Give him full access for its all features.

- Add lead sources for every product in the workplace.
- Every lead sources With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Management pages forevery lead source Ex. View , Add & Edit.
- Filter Search to go through every table data.
- Add Wedget lead source from the Add Wedget page.
- View Wedget lead source from the view Wedget page.
- manage every lead source from the Edit Wedget page.
<p><img src="images/users/lead_sources/users-lead_sources-view.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/sources" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/sources"
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
    "workplace_id": 7,
    "user_id": 2,
    "name": "demo",
    "country_id": 1,
    "website": "https:\/\/demo.com",
    "widget_type": "icon",
    "alignment": "right",
    "primary": "#a83434",
    "secondary": "#ffffff",
    "icon_type": "mdi mdi-headset fa-fw",
    "bubble": "on",
    "bubble_line_1": "Want to talk to an expert?",
    "bubble_line_2": "Our Team is 60 Second Away From You!",
    "bubble_bg_color": "#000000",
    "bubble_text_color": "#ffffff",
    "text_text": "Talk to an expert!",
    "text_round": 10,
    "custom_lable_1": "phone",
    "custom_lable_2": "age",
    "created_at": "2020-02-14 23:08:32",
    "updated_at": "2020-06-21 07:21:07"
}
```

### HTTP Request
`GET sources`


<!-- END_afe861116942da8827f905c42d93c7cd -->

<!-- START_6525a24380d6f0fc3d9199bdb70d8ead -->
## Lead Source Create Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Page That Creates Lead Source To Manage It later on the site by the manager and his team.

<p><img src="images/users/lead_sources/users-lead_sources-create.png" width="100%"></p>
<p><img src="images/users/lead_sources/users-lead_sources-create1.png" width="100%"></p>
<p><img src="images/users/lead_sources/users-lead_sources-create2.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/sources/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"workplace_id":"7","name":"demo","website":"https:\/\/demo.com","widget_type":"icon","alignment":"right","primary":"#a83434","secondary":"#ffffff","icon_type":"mdi mdi-headset fa-fw","bubble":"on","bubble_line_1":"Want to talk to an expert?","bubble_line_2":"Our Team is 60 Second Away From You!","bubble_bg_color":"#000000","bubble_text_color":"#ffffff","text_text":"Talk to an expert!","text_round":"10","custom_lable_1":"phone","custom_lable_2":"age"}'

```

```javascript
const url = new URL(
    "/sources/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "workplace_id": "7",
    "name": "demo",
    "website": "https:\/\/demo.com",
    "widget_type": "icon",
    "alignment": "right",
    "primary": "#a83434",
    "secondary": "#ffffff",
    "icon_type": "mdi mdi-headset fa-fw",
    "bubble": "on",
    "bubble_line_1": "Want to talk to an expert?",
    "bubble_line_2": "Our Team is 60 Second Away From You!",
    "bubble_bg_color": "#000000",
    "bubble_text_color": "#ffffff",
    "text_text": "Talk to an expert!",
    "text_round": "10",
    "custom_lable_1": "phone",
    "custom_lable_2": "age"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Added Successfully"
}
```

### HTTP Request
`GET sources/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `workplace_id` | string |  required  | The workplace_id selected to add lead source to workplace.
        `name` | string |  required  | The name of the lead source.
        `website` | string |  required  | The website of the lead source.
        `widget_type` | string |  optional  | The widget_type selected to icon Wedget.
        `alignment` | string |  optional  | The alignment selected to right Wedget.
        `primary` | string |  optional  | The primary Pick to color to Wedget.
        `secondary` | string |  optional  | The secondary Pick to color to Wedget.
        `icon_type` | string |  optional  | The icon_type style to Wedget.
        `bubble` | string |  optional  | The bubble selected to on Wedget.
        `bubble_line_1` | string |  optional  | The bubble_line_1 typed to on Wedget.
        `bubble_line_2` | string |  optional  | The bubble_line_2 typed to on Wedget.
        `bubble_bg_color` | string |  optional  | The bubble_bg_color Pick to color to Wedget.
        `bubble_text_color` | string |  optional  | The bubble_text_color Pick to color to Wedget.
        `text_text` | string |  optional  | The text_text typed to on Wedget.
        `text_round` | string |  optional  | The text_round selected to on Wedget.
        `custom_lable_1` | string |  optional  | The custom_lable_1 typed to on Wedget.
        `custom_lable_2` | string |  optional  | The custom_lable_2 typed to on Wedget.
    
<!-- END_6525a24380d6f0fc3d9199bdb70d8ead -->

<!-- START_1d134c058a66ac2dd612ccd654972569 -->
## Lead Source Store Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Data Request That Stores Lead Sources Data To Database.

<p><img src="images/users/added-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X POST \
    "/sources" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"workplace_id":"7","name":"demo","website":"https:\/\/demo.com","widget_type":"icon","alignment":"right","primary":"#a83434","secondary":"#ffffff","icon_type":"mdi mdi-headset fa-fw","bubble":"on","bubble_line_1":"Want to talk to an expert?","bubble_line_2":"Our Team is 60 Second Away From You!","bubble_bg_color":"#000000","bubble_text_color":"#ffffff","text_text":"Talk to an expert!","text_round":"10","custom_lable_1":"phone","custom_lable_2":"age"}'

```

```javascript
const url = new URL(
    "/sources"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "workplace_id": "7",
    "name": "demo",
    "website": "https:\/\/demo.com",
    "widget_type": "icon",
    "alignment": "right",
    "primary": "#a83434",
    "secondary": "#ffffff",
    "icon_type": "mdi mdi-headset fa-fw",
    "bubble": "on",
    "bubble_line_1": "Want to talk to an expert?",
    "bubble_line_2": "Our Team is 60 Second Away From You!",
    "bubble_bg_color": "#000000",
    "bubble_text_color": "#ffffff",
    "text_text": "Talk to an expert!",
    "text_round": "10",
    "custom_lable_1": "phone",
    "custom_lable_2": "age"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Added Successfully"
}
```

### HTTP Request
`POST sources`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `workplace_id` | string |  required  | The workplace_id selected to add lead source to workplace.
        `name` | string |  required  | The name of the lead source.
        `website` | string |  required  | The website of the lead source.
        `widget_type` | string |  optional  | The widget_type selected to icon Wedget.
        `alignment` | string |  optional  | The alignment selected to right Wedget.
        `primary` | string |  optional  | The primary Pick to color to Wedget.
        `secondary` | string |  optional  | The secondary Pick to color to Wedget.
        `icon_type` | string |  optional  | The icon_type style to Wedget.
        `bubble` | string |  optional  | The bubble selected to on Wedget.
        `bubble_line_1` | string |  optional  | The bubble_line_1 typed to on Wedget.
        `bubble_line_2` | string |  optional  | The bubble_line_2 typed to on Wedget.
        `bubble_bg_color` | string |  optional  | The bubble_bg_color Pick to color to Wedget.
        `bubble_text_color` | string |  optional  | The bubble_text_color Pick to color to Wedget.
        `text_text` | string |  optional  | The text_text typed to on Wedget.
        `text_round` | string |  optional  | The text_round selected to on Wedget.
        `custom_lable_1` | string |  optional  | The custom_lable_1 typed to on Wedget.
        `custom_lable_2` | string |  optional  | The custom_lable_2 typed to on Wedget.
    
<!-- END_1d134c058a66ac2dd612ccd654972569 -->

<!-- START_8982bffebd0eaf02ce61568a0017882e -->
## Lead Source Edit Page

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Page That Edits Lead Source To Manage It later on the site by the manager and his team.

<p><img src="images/users/lead_sources/users-lead_sources-create.png" width="100%"></p>
<p><img src="images/users/lead_sources/users-lead_sources-create1.png" width="100%"></p>
<p><img src="images/users/lead_sources/users-lead_sources-create2.png" width="100%"></p>

> Example request:

```bash
curl -X GET \
    -G "/sources/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"workplace_id":"7","name":"demo","website":"https:\/\/demo.com","widget_type":"icon","alignment":"right","primary":"#a83434","secondary":"#ffffff","icon_type":"mdi mdi-headset fa-fw","bubble":"on","bubble_line_1":"Want to talk to an expert?","bubble_line_2":"Our Team is 60 Second Away From You!","bubble_bg_color":"#000000","bubble_text_color":"#ffffff","text_text":"Talk to an expert!","text_round":"10","custom_lable_1":"phone","custom_lable_2":"age"}'

```

```javascript
const url = new URL(
    "/sources/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "workplace_id": "7",
    "name": "demo",
    "website": "https:\/\/demo.com",
    "widget_type": "icon",
    "alignment": "right",
    "primary": "#a83434",
    "secondary": "#ffffff",
    "icon_type": "mdi mdi-headset fa-fw",
    "bubble": "on",
    "bubble_line_1": "Want to talk to an expert?",
    "bubble_line_2": "Our Team is 60 Second Away From You!",
    "bubble_bg_color": "#000000",
    "bubble_text_color": "#ffffff",
    "text_text": "Talk to an expert!",
    "text_round": "10",
    "custom_lable_1": "phone",
    "custom_lable_2": "age"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Edited Successfully"
}
```

### HTTP Request
`GET sources/{source}/edit`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `workplace_id` | string |  required  | The workplace_id selected to add lead source to workplace.
        `name` | string |  required  | The name of the lead source.
        `website` | string |  required  | The website of the lead source.
        `widget_type` | string |  optional  | The widget_type selected to icon Wedget.
        `alignment` | string |  optional  | The alignment selected to right Wedget.
        `primary` | string |  optional  | The primary Pick to color to Wedget.
        `secondary` | string |  optional  | The secondary Pick to color to Wedget.
        `icon_type` | string |  optional  | The icon_type style to Wedget.
        `bubble` | string |  optional  | The bubble selected to on Wedget.
        `bubble_line_1` | string |  optional  | The bubble_line_1 typed to on Wedget.
        `bubble_line_2` | string |  optional  | The bubble_line_2 typed to on Wedget.
        `bubble_bg_color` | string |  optional  | The bubble_bg_color Pick to color to Wedget.
        `bubble_text_color` | string |  optional  | The bubble_text_color Pick to color to Wedget.
        `text_text` | string |  optional  | The text_text typed to on Wedget.
        `text_round` | string |  optional  | The text_round selected to on Wedget.
        `custom_lable_1` | string |  optional  | The custom_lable_1 typed to on Wedget.
        `custom_lable_2` | string |  optional  | The custom_lable_2 typed to on Wedget.
    
<!-- END_8982bffebd0eaf02ce61568a0017882e -->

<!-- START_cc29ce8491095a2f9a53e0b9749b6273 -->
## Lead Source Update Data

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Is An Control Panel Manager Data Request That Updates Lead Sources Data To Database.

<p><img src="images/users/added-successfully.png" width="100%"></p>

> Example request:

```bash
curl -X PUT \
    "/sources/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"workplace_id":"7","name":"demo","website":"https:\/\/demo.com","widget_type":"icon","alignment":"right","primary":"#a83434","secondary":"#ffffff","icon_type":"mdi mdi-headset fa-fw","bubble":"on","bubble_line_1":"Want to talk to an expert?","bubble_line_2":"Our Team is 60 Second Away From You!","bubble_bg_color":"#000000","bubble_text_color":"#ffffff","text_text":"Talk to an expert!","text_round":"10","custom_lable_1":"phone","custom_lable_2":"age"}'

```

```javascript
const url = new URL(
    "/sources/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "workplace_id": "7",
    "name": "demo",
    "website": "https:\/\/demo.com",
    "widget_type": "icon",
    "alignment": "right",
    "primary": "#a83434",
    "secondary": "#ffffff",
    "icon_type": "mdi mdi-headset fa-fw",
    "bubble": "on",
    "bubble_line_1": "Want to talk to an expert?",
    "bubble_line_2": "Our Team is 60 Second Away From You!",
    "bubble_bg_color": "#000000",
    "bubble_text_color": "#ffffff",
    "text_text": "Talk to an expert!",
    "text_round": "10",
    "custom_lable_1": "phone",
    "custom_lable_2": "age"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": "Edited Successfully"
}
```

### HTTP Request
`PUT sources/{source}`

`PATCH sources/{source}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `workplace_id` | string |  required  | The workplace_id selected to add lead source to workplace.
        `name` | string |  required  | The name of the lead source.
        `website` | string |  required  | The website of the lead source.
        `widget_type` | string |  optional  | The widget_type selected to icon Wedget.
        `alignment` | string |  optional  | The alignment selected to right Wedget.
        `primary` | string |  optional  | The primary Pick to color to Wedget.
        `secondary` | string |  optional  | The secondary Pick to color to Wedget.
        `icon_type` | string |  optional  | The icon_type style to Wedget.
        `bubble` | string |  optional  | The bubble selected to on Wedget.
        `bubble_line_1` | string |  optional  | The bubble_line_1 typed to on Wedget.
        `bubble_line_2` | string |  optional  | The bubble_line_2 typed to on Wedget.
        `bubble_bg_color` | string |  optional  | The bubble_bg_color Pick to color to Wedget.
        `bubble_text_color` | string |  optional  | The bubble_text_color Pick to color to Wedget.
        `text_text` | string |  optional  | The text_text typed to on Wedget.
        `text_round` | string |  optional  | The text_round selected to on Wedget.
        `custom_lable_1` | string |  optional  | The custom_lable_1 typed to on Wedget.
        `custom_lable_2` | string |  optional  | The custom_lable_2 typed to on Wedget.
    
<!-- END_cc29ce8491095a2f9a53e0b9749b6273 -->

#2.6 Users Manager Leads management


Routes To manage Leads data For The Manager Control Panel
<!-- START_374cfeb27ba1670c869a004f31d8f828 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "/leads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/leads"
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
    -G "/leads/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/leads/create"
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
    "/leads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/leads"
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
    -G "/leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/leads/1"
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
    -G "/leads/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/leads/1/edit"
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
    "/leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/leads/1"
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
    "/leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/leads/1"
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

#2.7 Users Product Widget management


Routes To manage Product Widget View data For Leads
<!-- START_6d0c9b8cc536e9a9ff2cd34e09735f19 -->
## widget/{id}
> Example request:

```bash
curl -X GET \
    -G "/widget/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/widget/1"
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
`GET widget/{id}`


<!-- END_6d0c9b8cc536e9a9ff2cd34e09735f19 -->

<!-- START_a4fca1cb337722b58ae6367668979b88 -->
## widgetView/widget
> Example request:

```bash
curl -X POST \
    "/widgetView/widget" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/widgetView/widget"
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

#3.1  APIs User management


APIs for managing users
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/login"
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
    "/api/login1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/login1"
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
    "/api/login2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/login2"
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
    "/api/update_profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/update_profile"
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
    "/api/change_is_available" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/change_is_available"
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

#3.2  APIs Workplaces management


APIs for managing Workplaces
<!-- START_405eabb53d4d41d71d98563f0695ad41 -->
## api/widgetView/widget
> Example request:

```bash
curl -X POST \
    "/api/widgetView/widget" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/widgetView/widget"
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
    "/api/lead" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/lead"
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
    -G "/api/all_workplaces" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/all_workplaces"
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
`GET api/all_workplaces`


<!-- END_385b87ffa25ae621a0a8c77665d65ecb -->

<!-- START_127212f1a2c5e9475c73d8968f6c920e -->
## api/all_products
> Example request:

```bash
curl -X POST \
    "/api/all_products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/all_products"
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
    -G "/api/all_leads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/all_leads"
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
`GET api/all_leads`


<!-- END_59f5311afa947174c231488ff72a71ab -->

<!-- START_61a85c4495a8871ceaf432c85b5827e7 -->
## api/user_leads/{user}
> Example request:

```bash
curl -X GET \
    -G "/api/user_leads/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/user_leads/1"
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
`GET api/user_leads/{user}`


<!-- END_61a85c4495a8871ceaf432c85b5827e7 -->

<!-- START_a8de7d263b49f310c02e9c4c130524c9 -->
## api/qualified
> Example request:

```bash
curl -X POST \
    "/api/qualified" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/qualified"
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
    "/api/test_notification_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/test_notification_user"
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
    "/api/test_notification_device" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/test_notification_device"
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

#Admin Login management


Route for Login Admin & Moderator
<!-- START_18f69092e65df23bcc6d9f57e4ca2662 -->
## admin-login
> Example request:

```bash
curl -X GET \
    -G "/admin-login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin-login"
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
    "/admin.login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/admin.login"
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

#Login management


Route for Login Users
<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/login"
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
    "/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/login"
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
    "/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/logout"
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
    -G "/first" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/first"
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
`GET first`

`POST first`

`PUT first`

`PATCH first`

`DELETE first`

`OPTIONS first`


<!-- END_dc44652b722af6abcc3925ae84bdee69 -->

#Register management


Route for Register Users
<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/register"
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
    "/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/register"
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
    -G "/login2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/login2"
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
`GET login2`

`POST login2`

`PUT login2`

`PATCH login2`

`DELETE login2`

`OPTIONS login2`


<!-- END_1dbcdf4354aee512432e2c97f2f678e8 -->

#general


<!-- START_b7802a3a2092f162a21dc668479801f4 -->
## api/password/email
> Example request:

```bash
curl -X POST \
    "/api/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/password/email"
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
    "/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/api/password/reset"
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
    -G "/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/password/reset"
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
    "/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/password/email"
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
    -G "/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/password/reset/1"
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
    "/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "/password/reset"
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


