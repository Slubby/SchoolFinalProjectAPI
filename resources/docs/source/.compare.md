---
title: API Reference

language_tabs:
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](https://school.wedevelop4you.nl/docs/collection.json)

<!-- END_INFO -->

#Admin


<!-- START_dade44276640c00634e9d20ae7b5e6fb -->
## School create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/school/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "qui"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/school/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
    
<!-- END_dade44276640c00634e9d20ae7b5e6fb -->

<!-- START_e9ab6f496611bba074db47a7f856b764 -->
## School update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/school/natus/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "placeat"
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/school/{school}/update`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `school` |  required  | The id of the school.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
    
<!-- END_e9ab6f496611bba074db47a7f856b764 -->

<!-- START_6e6ddc6ddb95f1bc82644901a12e340a -->
## Company verify

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/ut/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/company/{company}/verify`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.

<!-- END_6e6ddc6ddb95f1bc82644901a12e340a -->

#Advertisement


<!-- START_f8f4c48a1cc0f75cb15d9ff0cb6f84f1 -->
## Advertisements

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/advertisement"
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
`GET api/advertisement`


<!-- END_f8f4c48a1cc0f75cb15d9ff0cb6f84f1 -->

<!-- START_2bd5d3071393c925e38d872ab110c546 -->
## Advertisement show

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/advertisement/voluptatum"
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
`GET api/advertisement/{vacancy}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `vacancy` |  required  | The id of the vacancy.

<!-- END_2bd5d3071393c925e38d872ab110c546 -->

#Auth


APIs for Accounts
<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Account login

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "iste",
    "password": "vitae"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | 
        `password` | string |  required  | 
    
<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_b6998757ef91f32104e3b21b54ffa2ad -->
## Account create

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/register/teacher"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "number": 15,
    "name": "dolores",
    "country": "NL",
    "region": "GR",
    "city": "earum",
    "street": "cum",
    "house_number": "81",
    "postal_code": "9603HL",
    "school": 18,
    "first_name": "sunt",
    "middle_name": "praesentium",
    "last_name": "ab",
    "short_name": "mollitia"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/register/{type}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `type` |  required  | The type of user Example teacher or company.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `number` | integer |  required  | Company
        `name` | string |  required  | Company
        `country` | string |  required  | Company
        `region` | string |  required  | Company
        `city` | string |  required  | Company
        `street` | string |  required  | Company
        `house_number` | string |  required  | Company
        `postal_code` | string |  required  | Company
        `school` | integer |  required  | Teacher
        `first_name` | string |  required  | Teacher
        `middle_name` | string |  optional  | Teacher
        `last_name` | string |  required  | Teacher
        `short_name` | string |  required  | Teacher
    
<!-- END_b6998757ef91f32104e3b21b54ffa2ad -->

<!-- START_46c2a6d1497a2724f8515eff6024367e -->
## Account refresh token

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/refresh"
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
`GET api/auth/refresh`


<!-- END_46c2a6d1497a2724f8515eff6024367e -->

<!-- START_a0c7b9b57fc85028cb0bf6e1b98b9e51 -->
## Account verify

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/verify/account/1"
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
`POST api/auth/verify/account/{verification_code}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `Code` |  required  | The code in the email.

<!-- END_a0c7b9b57fc85028cb0bf6e1b98b9e51 -->

<!-- START_ebdcc19fc01a15c66b1c09f0aa397839 -->
## Account recovery

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/recovery/account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "sapiente"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/auth/recovery/account`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | 
    
<!-- END_ebdcc19fc01a15c66b1c09f0aa397839 -->

<!-- START_6ad5e7b3d672357ba27238f45adfacc5 -->
## Account reset password

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/password/reset/account/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "corporis",
    "password_confirm": "itaque"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/password/reset/account/{verification_code}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `code` |  required  | The reset code in the email.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `password` | string |  required  | 
        `password_confirm` | string |  required  | 
    
<!-- END_6ad5e7b3d672357ba27238f45adfacc5 -->

<!-- START_ff6d656b6d81a61adda963b8702034d2 -->
## Account

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/auth/user`


<!-- END_ff6d656b6d81a61adda963b8702034d2 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## Account logout

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_1a8668c7c70c3102cfc031ff397c4814 -->
## Account update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "provident",
    "middle_name": "dolores",
    "last_name": "et",
    "country": "NL",
    "region": "GR",
    "city": "nostrum",
    "street": "adipisci",
    "house_number": "81",
    "postal_code": "9603HL",
    "short_name": "vel",
    "gender": "quas",
    "birthday": "2001-09-29"
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/auth/update`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | Teacher/Student/Admin
        `middle_name` | string |  optional  | Teacher/Student/Admin
        `last_name` | string |  required  | Teacher/Student/Admin
        `country` | string |  required  | Company/Student
        `region` | string |  required  | Company/Student
        `city` | string |  required  | Company/Student
        `street` | string |  required  | Company/Student
        `house_number` | string |  required  | Company/Student
        `postal_code` | string |  required  | Company/Student
        `short_name` | string |  required  | Teacher
        `gender` | string |  required  | Student
        `birthday` | date |  required  | Student
    
<!-- END_1a8668c7c70c3102cfc031ff397c4814 -->

<!-- START_275f3a21a40a3c943e11c3042e080a07 -->
## Account change Password

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/auth/change/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "previous_password": "ut",
    "new_password": "consequatur",
    "password_confirm": "autem"
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/auth/change/password`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `previous_password` | string |  required  | 
        `new_password` | string |  required  | 
        `password_confirm` | string |  required  | 
    
<!-- END_275f3a21a40a3c943e11c3042e080a07 -->

#Company


<!-- START_7401be7be8155c6986377a13f3994979 -->
## Supervisors

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/veniam/supervisor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/c/{company}/supervisor`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.

<!-- END_7401be7be8155c6986377a13f3994979 -->

<!-- START_3feaedccfb9b487da2991d96f67a1c0a -->
## Supervisor create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/exercitationem/supervisor/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "aspernatur",
    "middle_name": "autem",
    "last_name": "culpa"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/c/{company}/supervisor/create`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | 
        `middle_name` | string |  optional  | 
        `last_name` | string |  required  | 
    
<!-- END_3feaedccfb9b487da2991d96f67a1c0a -->

<!-- START_81ce8348ad6e5add7d556d8ead81ffbd -->
## Supervisor update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/accusamus/supervisor/et/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "occaecati",
    "middle_name": "architecto",
    "last_name": "totam"
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/c/{company}/supervisor/{supervisor}/update`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `supervisor` |  required  | The id of the supervisor.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | 
        `middle_name` | string |  optional  | 
        `last_name` | string |  required  | 
    
<!-- END_81ce8348ad6e5add7d556d8ead81ffbd -->

<!-- START_7194fee105731338b6eee6961b60522d -->
## Supervisor delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/amet/supervisor/sit/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/c/{company}/supervisor/{supervisor}/delete`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `supervisor` |  required  | The id of the supervisor.

<!-- END_7194fee105731338b6eee6961b60522d -->

<!-- START_2a11e7f3f2c6d32018f0696a9bd8477b -->
## Vacancies

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/tempora/vacancy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/c/{company}/vacancy`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.

<!-- END_2a11e7f3f2c6d32018f0696a9bd8477b -->

<!-- START_2259c035b025eea4377f398d4f8cc528 -->
## Vacancy create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/repellendus/vacancy/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": 8,
    "title": "id",
    "description": "vel",
    "about_us": "dolorem",
    "requirements": [],
    "total": 12
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/c/{company}/vacancy/create`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `type` | integer |  required  | 
        `title` | string |  required  | 
        `description` | string |  required  | 
        `about_us` | string |  optional  | 
        `requirements` | array |  optional  | 
        `total` | integer |  optional  | 
    
<!-- END_2259c035b025eea4377f398d4f8cc528 -->

<!-- START_225547dbd788d2d38c387e6abd7e3b44 -->
## Vacancy edit status

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/earum/vacancy/et/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/c/{company}/vacancy/{vacancy}/edit`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `vacancy` |  required  | The id of the vacancy.

<!-- END_225547dbd788d2d38c387e6abd7e3b44 -->

<!-- START_cd225c9848cc9d84101b369a6f769756 -->
## Vacancy update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/non/vacancy/repellat/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": 19,
    "title": "odit",
    "description": "velit",
    "about_us": "omnis",
    "requirements": [],
    "total": 6
}

fetch(url, {
    method: "PATCH",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/c/{company}/vacancy/{vacancy}/update`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `vacancy` |  required  | The id of the vacancy.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `type` | integer |  required  | 
        `title` | string |  required  | 
        `description` | string |  required  | 
        `about_us` | string |  optional  | 
        `requirements` | array |  optional  | 
        `total` | integer |  optional  | 
    
<!-- END_cd225c9848cc9d84101b369a6f769756 -->

<!-- START_ecc31f7517441b1fdd98be2d28e14a0a -->
## vacancy delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/dicta/vacancy/aut/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/c/{company}/vacancy/{vacancy}/delete`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `vacancy` |  required  | The id of the vacancy.

<!-- END_ecc31f7517441b1fdd98be2d28e14a0a -->

#Job Application


<!-- START_249c21e8f8bb8b93787292469a91e774 -->
## job Applications

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/s/job/application"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/s/job/application`


<!-- END_249c21e8f8bb8b93787292469a91e774 -->

<!-- START_668efa6ddac00565507a5ea7460441b2 -->
## Job Application apply

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/s/job/application/sed/apply"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/s/job/application/{vacancy}/apply`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `vacancy` |  required  | The id of the vacancy.

<!-- END_668efa6ddac00565507a5ea7460441b2 -->

<!-- START_6bebedf796bd8893c1d18337fbdd56a9 -->
## Job Application show

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/s/job/application/quas/show"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/s/job/application/{jobApplication}/show`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `jobApplication` |  required  | The id of the job application.

<!-- END_6bebedf796bd8893c1d18337fbdd56a9 -->

<!-- START_bde744845010e916d694399ffd06eeb4 -->
## Job Application cancel

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/s/job/application/quibusdam/cancel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/s/job/application/{jobApplication}/cancel`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `jobApplication` |  required  | The id of the job application.

<!-- END_bde744845010e916d694399ffd06eeb4 -->

#School


APIs for School
<!-- START_c91fe29eb8917e9b7e23162e514eb7c1 -->
## Schools

> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/school"
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
`GET api/school`


<!-- END_c91fe29eb8917e9b7e23162e514eb7c1 -->

#Teacher


<!-- START_0722e37e780f1be2628fc8f075cdf5a0 -->
## Teacher verify

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/autem/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/t/{teacher}/verify`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `teacher` |  required  | The id of the teacher.

<!-- END_0722e37e780f1be2628fc8f075cdf5a0 -->


