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
    "name": "et"
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
    "https://school.wedevelop4you.nl/api/school/1/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "sunt"
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
    "https://school.wedevelop4you.nl/api/company/1/verify"
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

<!-- START_9ff9195e31ffea85a070101eb43fb674 -->
## Advertisement show

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/advertisement/1/show"
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
`GET api/advertisement/{vacancy}/show`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `vacancy` |  required  | The id of the vacancy.

<!-- END_9ff9195e31ffea85a070101eb43fb674 -->

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
    "email": "nemo",
    "password": "porro"
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
    "number": 5,
    "name": "quas",
    "country": "NL",
    "region": "GR",
    "city": "voluptatum",
    "street": "et",
    "house_number": "81",
    "postal_code": "9603HL",
    "school": 6,
    "first_name": "at",
    "middle_name": "quam",
    "last_name": "numquam",
    "short_name": "ea"
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
    `code` |  required  | The code in the email.

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
    "email": "omnis"
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
    "password": "porro",
    "password_confirm": "laborum"
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
    "first_name": "libero",
    "middle_name": "libero",
    "last_name": "cumque",
    "country": "NL",
    "region": "GR",
    "city": "consequuntur",
    "street": "ex",
    "house_number": "81",
    "postal_code": "9603HL",
    "short_name": "natus",
    "gender": "non",
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
    "previous_password": "numquam",
    "new_password": "officiis",
    "password_confirm": "voluptas"
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


<!-- START_31594210f2eec9cea0d985f073f9b8c2 -->
## Supervisors

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/supervisor"
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
`GET api/c/supervisor`


<!-- END_31594210f2eec9cea0d985f073f9b8c2 -->

<!-- START_12d328eb5f8f1455a1142a554592cddf -->
## Supervisor create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/supervisor/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "molestiae",
    "middle_name": "voluptatum",
    "last_name": "delectus"
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
`POST api/c/supervisor/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | 
        `middle_name` | string |  optional  | 
        `last_name` | string |  required  | 
    
<!-- END_12d328eb5f8f1455a1142a554592cddf -->

<!-- START_396a94c4303ccb9594ac386e2db10921 -->
## Supervisor update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/supervisor/1/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "corrupti",
    "middle_name": "consectetur",
    "last_name": "quidem"
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
`PATCH api/c/supervisor/{supervisor}/update`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `supervisor` |  required  | The id of the supervisor.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | 
        `middle_name` | string |  optional  | 
        `last_name` | string |  required  | 
    
<!-- END_396a94c4303ccb9594ac386e2db10921 -->

<!-- START_5ae1800ead386128a079c3a859d7cfaa -->
## Supervisor delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/supervisor/1/delete"
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
`DELETE api/c/supervisor/{supervisor}/delete`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `supervisor` |  required  | The id of the supervisor.

<!-- END_5ae1800ead386128a079c3a859d7cfaa -->

<!-- START_4fc19656e42183051d2248563eaef1dd -->
## Vacancies

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/vacancy"
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
`GET api/c/vacancy`


<!-- END_4fc19656e42183051d2248563eaef1dd -->

<!-- START_e4dd9a1ee20b394761174e12643b9a27 -->
## Vacancy create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/vacancy/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": 2,
    "title": "et",
    "description": "ut",
    "about_us": "fuga",
    "requirements": [],
    "total": 17
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
`POST api/c/vacancy/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `type` | integer |  required  | 
        `title` | string |  required  | 
        `description` | string |  required  | 
        `about_us` | string |  optional  | 
        `requirements` | array |  optional  | 
        `total` | integer |  optional  | 
    
<!-- END_e4dd9a1ee20b394761174e12643b9a27 -->

<!-- START_2d7e8e23dedee23f37ab1b164061c639 -->
## Vacancy show

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/vacancy/1/show"
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
`GET api/c/vacancy/{vacancy}/show`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `vacancy` |  required  | The id of the vacancy.

<!-- END_2d7e8e23dedee23f37ab1b164061c639 -->

<!-- START_8ee9f45b7485afeaa3cb3617a310fc02 -->
## Vacancy edit status

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/vacancy/1/edit"
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
`PUT api/c/vacancy/{vacancy}/edit`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `vacancy` |  required  | The id of the vacancy.

<!-- END_8ee9f45b7485afeaa3cb3617a310fc02 -->

<!-- START_17d3e760c1e9341b4ee35551c5889c01 -->
## Vacancy update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/vacancy/1/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": 14,
    "title": "mollitia",
    "description": "rerum",
    "about_us": "tempore",
    "requirements": [],
    "total": 12
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
`PATCH api/c/vacancy/{vacancy}/update`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
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
    
<!-- END_17d3e760c1e9341b4ee35551c5889c01 -->

<!-- START_f73b85f04f82168217dc83816e6afb31 -->
## Vacancy delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/vacancy/1/delete"
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
`DELETE api/c/vacancy/{vacancy}/delete`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `vacancy` |  required  | The id of the vacancy.

<!-- END_f73b85f04f82168217dc83816e6afb31 -->

<!-- START_b0537d9673aaa0078a6477d624f89486 -->
## Applied change status

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/c/vacancy/1/applied/1/status/approved"
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
`PUT api/c/vacancy/{vacancy}/applied/{jobApplication}/status/{type}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `vacancy` |  required  | The id of the vacancy.
    `job` |  optional  | application required the id of the job application.
    `type` |  required  | The type of the status.

<!-- END_b0537d9673aaa0078a6477d624f89486 -->

#Job Application


<!-- START_249c21e8f8bb8b93787292469a91e774 -->
## Job Applications

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
    "https://school.wedevelop4you.nl/api/s/job/application/1/apply"
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
    "https://school.wedevelop4you.nl/api/s/job/application/1/show"
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
    "https://school.wedevelop4you.nl/api/s/job/application/1/cancel"
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


<!-- START_559eeb36e1af51001727f1a56062848d -->
## School students

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/students"
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
`GET api/t/students`


<!-- END_559eeb36e1af51001727f1a56062848d -->

<!-- START_68d0c3cba4c6fe1df0607510cb740263 -->
## Teacher class students

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/mentor/class"
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
`GET api/t/mentor/class`


<!-- END_68d0c3cba4c6fe1df0607510cb740263 -->

<!-- START_0722e37e780f1be2628fc8f075cdf5a0 -->
## Teacher verify

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/1/verify"
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


