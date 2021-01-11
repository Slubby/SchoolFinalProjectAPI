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
    "https://school.wedevelop4you.nl/api/school/molestiae/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "ex"
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
    "https://school.wedevelop4you.nl/api/company/voluptatem/verify"
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


APIs for Companies
<!-- START_f8f4c48a1cc0f75cb15d9ff0cb6f84f1 -->
## Advertisements

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
    "email": "possimus",
    "password": "voluptas"
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
    "https://school.wedevelop4you.nl/api/auth/register/suscipit"
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
`POST api/auth/register/{type}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `type` |  required  | The type of user Example teacher or company.

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
    "email": "esse"
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
    "password": "quia",
    "password_confirm": "iste"
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

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/auth/update`


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
    "previous_password": "et",
    "new_password": "sequi",
    "password_confirm": "rem"
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


<!-- START_45c3325e560a74462a05162f44a4ea87 -->
## Supervisors

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/alias/supervisor"
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
`GET api/company/{company}/supervisor`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.

<!-- END_45c3325e560a74462a05162f44a4ea87 -->

<!-- START_00cdfb37adc68f61ce20eb2e3ba5d41b -->
## Supervisor create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/praesentium/supervisor/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "maiores",
    "middle_name": "a",
    "last_name": "porro"
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
`POST api/company/{company}/supervisor/create`

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
    
<!-- END_00cdfb37adc68f61ce20eb2e3ba5d41b -->

<!-- START_f0fd000d41d1fa73e9401671658fe01c -->
## Supervisor update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/dolores/supervisor/repellat/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "mollitia",
    "middle_name": "sint",
    "last_name": "earum"
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
`PATCH api/company/{company}/supervisor/{supervisor}/update`

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
    
<!-- END_f0fd000d41d1fa73e9401671658fe01c -->

<!-- START_7acd45786dfc3b55b7dcdb0ce3ed9971 -->
## Supervisor delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/voluptatum/supervisor/rerum/delete"
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
`DELETE api/company/{company}/supervisor/{supervisor}/delete`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `supervisor` |  required  | The id of the supervisor.

<!-- END_7acd45786dfc3b55b7dcdb0ce3ed9971 -->

<!-- START_6add4ed3cbcda9c00ad8fa4423767d51 -->
## Vacancies

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/sed/vacancy"
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
`GET api/company/{company}/vacancy`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.

<!-- END_6add4ed3cbcda9c00ad8fa4423767d51 -->

<!-- START_c97fba5080129c56e4e169e71e27937d -->
## Vacancy create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/accusamus/vacancy/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": 20,
    "title": "tempora",
    "description": "quis",
    "about_us": "accusantium",
    "requirements": [],
    "total": 19
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
`POST api/company/{company}/vacancy/create`

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
    
<!-- END_c97fba5080129c56e4e169e71e27937d -->

<!-- START_4e4e2e23a251ba2dd76825407c784448 -->
## Vacancy edit status

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/dolores/vacancy/nobis/edit"
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
`PUT api/company/{company}/vacancy/{vacancy}/edit`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `vacancy` |  required  | The id of the vacancy.

<!-- END_4e4e2e23a251ba2dd76825407c784448 -->

<!-- START_fad902eb7bbc3bb00af90ed8e5b458ab -->
## Vacancy update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/iste/vacancy/qui/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "type": 15,
    "title": "nam",
    "description": "facilis",
    "about_us": "et",
    "requirements": [],
    "total": 17
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
`PATCH api/company/{company}/vacancy/{vacancy}/update`

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
    
<!-- END_fad902eb7bbc3bb00af90ed8e5b458ab -->

<!-- START_3e08d2f8e96993583f817c2b5dc5a738 -->
## vacancy delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/company/rerum/vacancy/et/delete"
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
`DELETE api/company/{company}/vacancy/{vacancy}/delete`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.
    `vacancy` |  required  | The id of the vacancy.

<!-- END_3e08d2f8e96993583f817c2b5dc5a738 -->

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


<!-- START_b046d6dbd447e86d353dcad92f9d59de -->
## Teacher verify

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/teacher/repudiandae/verify"
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
`PUT api/teacher/{teacher}/verify`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `teacher` |  required  | The id of the teacher.

<!-- END_b046d6dbd447e86d353dcad92f9d59de -->


