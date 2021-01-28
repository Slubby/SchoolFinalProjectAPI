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

<!-- END_INFO -->

#Admin


<!-- START_417ec5a8ef7d5a955ea245a155508260 -->
## School create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/a/school/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "earum"
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
`POST api/a/school/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
    
<!-- END_417ec5a8ef7d5a955ea245a155508260 -->

<!-- START_d4cc6a6b93f360c3c413e2d302e43485 -->
## School update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/a/school/1/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "sed"
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
`PATCH api/a/school/{school}/update`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `school` |  required  | The id of the school.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
    
<!-- END_d4cc6a6b93f360c3c413e2d302e43485 -->

<!-- START_af0e8bd557a4af8234ef5e5af9e4f2d2 -->
## School delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/a/school/1/delete"
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
`DELETE api/a/school/{school}/delete`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `school` |  required  | The id of the school.

<!-- END_af0e8bd557a4af8234ef5e5af9e4f2d2 -->

<!-- START_a9de2f023baf2fa0b71c00f1606c523f -->
## Company verify

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/a/company/1/verify"
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
`PUT api/a/company/{company}/verify`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `company` |  required  | The id of the company.

<!-- END_a9de2f023baf2fa0b71c00f1606c523f -->

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
    "email": "ut",
    "password": "commodi"
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
    "email": "similique",
    "mobile": 612345678,
    "password": "eum",
    "password_confirm": "neque",
    "number": 10,
    "name": "error",
    "country": "NL",
    "region": "GR",
    "city": "enim",
    "street": "ea",
    "house_number": "81",
    "postal_code": "9603HL",
    "school": 18,
    "first_name": "molestiae",
    "middle_name": "aut",
    "last_name": "officia",
    "short_name": "repellendus"
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
    `email` | string |  required  | 
        `mobile` | integer |  optional  | 
        `password` | string |  required  | 
        `password_confirm` | string |  required  | 
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
    "https://school.wedevelop4you.nl/api/auth/verify/account/WrCegVUunSCJPFETrBsp6nCmR398X9"
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
    `verification_code` |  required  | The code in the email.

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
    "email": "suscipit"
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
    "https://school.wedevelop4you.nl/api/auth/password/reset/account/WrCegVUunSCJPFETrBsp6nCmR398X9"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "corporis",
    "password_confirm": "mollitia"
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
    `verification_code` |  required  | The reset code in the email.
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
    "first_name": "doloremque",
    "middle_name": "non",
    "last_name": "necessitatibus",
    "country": "NL",
    "region": "GR",
    "city": "exercitationem",
    "street": "illo",
    "house_number": "81",
    "postal_code": "9603HL",
    "short_name": "rerum",
    "gender": "minima",
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
    "previous_password": "culpa",
    "new_password": "saepe",
    "password_confirm": "architecto"
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
    "first_name": "corrupti",
    "middle_name": "animi",
    "last_name": "quia"
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
    "first_name": "esse",
    "middle_name": "et",
    "last_name": "iste"
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
    "type": 20,
    "title": "inventore",
    "description": "accusantium",
    "about_us": "omnis",
    "requirements": [],
    "total": 5
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
    "type": 9,
    "title": "alias",
    "description": "reprehenderit",
    "about_us": "adipisci",
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

<!-- START_3553be81ad449af5b0d1dcc44ae5c75e -->
## Teacher create student

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/mentor/class/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "email": "error",
    "mobile": 612345678,
    "password": "eos",
    "password_confirm": "temporibus",
    "first_name": "eos",
    "middle_name": "repellat",
    "last_name": "error",
    "gender": "mollitia",
    "birthday": "2001-09-29",
    "country": "NL",
    "region": "GR",
    "city": "consequatur",
    "street": "quia",
    "house_number": "81",
    "postal_code": "9603HL",
    "mentor": 1,
    "education": 1,
    "started_at": "2001-09-29",
    "grade": 1
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
`POST api/t/mentor/class/create`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | 
        `mobile` | integer |  optional  | 
        `password` | string |  required  | 
        `password_confirm` | string |  required  | 
        `first_name` | string |  required  | 
        `middle_name` | string |  optional  | 
        `last_name` | string |  required  | 
        `gender` | string |  required  | 
        `birthday` | date |  required  | 
        `country` | string |  required  | 
        `region` | string |  required  | 
        `city` | string |  required  | 
        `street` | string |  required  | 
        `house_number` | string |  required  | 
        `postal_code` | string |  required  | 
        `mentor` | integer |  required  | 
        `education` | integer |  required  | 
        `started_at` | date |  required  | 
        `grade` | integer |  required  | 
    
<!-- END_3553be81ad449af5b0d1dcc44ae5c75e -->

<!-- START_a83773d1a688fa37be0a6144b3712a57 -->
## Import students

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/mentor/class/import/students"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "students": "illo",
    "password": "magnam"
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
`POST api/t/mentor/class/import/students`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `students` | file |  required  | 
        `password` | string |  required  | default password for students
    
<!-- END_a83773d1a688fa37be0a6144b3712a57 -->

<!-- START_88c87506ca7cfb26d887ba337531258e -->
## Teacher get student

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/mentor/class/1/show"
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
`GET api/t/mentor/class/{user}/show`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `user` |  required  | The id of the student.

<!-- END_88c87506ca7cfb26d887ba337531258e -->

<!-- START_d0a34420aef8eb68957240402344e2b5 -->
## Teacher update student

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/mentor/class/1/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "first_name": "ea",
    "middle_name": "quia",
    "last_name": "omnis",
    "gender": "voluptatem",
    "birthday": "2001-09-29",
    "country": "NL",
    "region": "GR",
    "city": "blanditiis",
    "street": "aut",
    "house_number": "81",
    "postal_code": "9603HL",
    "mentor": 1,
    "education": 1,
    "started_at": "2001-09-29",
    "grade": 1
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
`PATCH api/t/mentor/class/{user}/update`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `user` |  required  | The id of the student.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | 
        `middle_name` | string |  optional  | 
        `last_name` | string |  required  | 
        `gender` | string |  required  | 
        `birthday` | date |  required  | 
        `country` | string |  required  | 
        `region` | string |  required  | 
        `city` | string |  required  | 
        `street` | string |  required  | 
        `house_number` | string |  required  | 
        `postal_code` | string |  required  | 
        `mentor` | integer |  required  | 
        `education` | integer |  required  | 
        `started_at` | date |  required  | 
        `grade` | integer |  required  | 
    
<!-- END_d0a34420aef8eb68957240402344e2b5 -->

<!-- START_d91f6a7f173010989ecbae74f335b0d0 -->
## Teacher completed job application

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```javascript
const url = new URL(
    "https://school.wedevelop4you.nl/api/t/mentor/class/1/1/completed"
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
`PUT api/t/mentor/class/{user}/{jobApplication}/completed`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `user` |  required  | The id of the student.
    `jobApplication` |  required  | The id of the job application.

<!-- END_d91f6a7f173010989ecbae74f335b0d0 -->

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


