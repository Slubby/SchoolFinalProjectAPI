<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Admin</h1>
<!-- START_dade44276640c00634e9d20ae7b5e6fb -->
<h2>School create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/school/create</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_dade44276640c00634e9d20ae7b5e6fb -->
<!-- START_e9ab6f496611bba074db47a7f856b764 -->
<h2>School update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/school/{school}/update</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>school</code></td>
<td>required</td>
<td>The id of the school.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_e9ab6f496611bba074db47a7f856b764 -->
<!-- START_6e6ddc6ddb95f1bc82644901a12e340a -->
<h2>Company verify</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/company/{company}/verify</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
</tbody>
</table>
<!-- END_6e6ddc6ddb95f1bc82644901a12e340a -->
<h1>Advertisement</h1>
<!-- START_f8f4c48a1cc0f75cb15d9ff0cb6f84f1 -->
<h2>Advertisements</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/advertisement</code></p>
<!-- END_f8f4c48a1cc0f75cb15d9ff0cb6f84f1 -->
<!-- START_2bd5d3071393c925e38d872ab110c546 -->
<h2>Advertisement show</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/advertisement/{vacancy}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>vacancy</code></td>
<td>required</td>
<td>The id of the vacancy.</td>
</tr>
</tbody>
</table>
<!-- END_2bd5d3071393c925e38d872ab110c546 -->
<h1>Auth</h1>
<p>APIs for Accounts</p>
<!-- START_a925a8d22b3615f12fca79456d286859 -->
<h2>Account login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/login</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_a925a8d22b3615f12fca79456d286859 -->
<!-- START_b6998757ef91f32104e3b21b54ffa2ad -->
<h2>Account create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/register/{type}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>required</td>
<td>The type of user Example teacher or company.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>number</code></td>
<td>integer</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>region</code></td>
<td>string</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>street</code></td>
<td>string</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>house_number</code></td>
<td>string</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>postal_code</code></td>
<td>string</td>
<td>required</td>
<td>Company</td>
</tr>
<tr>
<td><code>school</code></td>
<td>integer</td>
<td>required</td>
<td>Teacher</td>
</tr>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
<td>Teacher</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
<td>Teacher</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>required</td>
<td>Teacher</td>
</tr>
<tr>
<td><code>short_name</code></td>
<td>string</td>
<td>required</td>
<td>Teacher</td>
</tr>
</tbody>
</table>
<!-- END_b6998757ef91f32104e3b21b54ffa2ad -->
<!-- START_46c2a6d1497a2724f8515eff6024367e -->
<h2>Account refresh token</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/auth/refresh</code></p>
<!-- END_46c2a6d1497a2724f8515eff6024367e -->
<!-- START_a0c7b9b57fc85028cb0bf6e1b98b9e51 -->
<h2>Account verify</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/verify/account/{verification_code}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>Code</code></td>
<td>required</td>
<td>The code in the email.</td>
</tr>
</tbody>
</table>
<!-- END_a0c7b9b57fc85028cb0bf6e1b98b9e51 -->
<!-- START_ebdcc19fc01a15c66b1c09f0aa397839 -->
<h2>Account recovery</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/auth/recovery/account</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_ebdcc19fc01a15c66b1c09f0aa397839 -->
<!-- START_6ad5e7b3d672357ba27238f45adfacc5 -->
<h2>Account reset password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/password/reset/account/{verification_code}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>code</code></td>
<td>required</td>
<td>The reset code in the email.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>password_confirm</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_6ad5e7b3d672357ba27238f45adfacc5 -->
<!-- START_ff6d656b6d81a61adda963b8702034d2 -->
<h2>Account</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/auth/user</code></p>
<!-- END_ff6d656b6d81a61adda963b8702034d2 -->
<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
<h2>Account logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/auth/logout</code></p>
<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->
<!-- START_1a8668c7c70c3102cfc031ff397c4814 -->
<h2>Account update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/auth/update</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
<td>Teacher/Student/Admin</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
<td>Teacher/Student/Admin</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>required</td>
<td>Teacher/Student/Admin</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>required</td>
<td>Company/Student</td>
</tr>
<tr>
<td><code>region</code></td>
<td>string</td>
<td>required</td>
<td>Company/Student</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>required</td>
<td>Company/Student</td>
</tr>
<tr>
<td><code>street</code></td>
<td>string</td>
<td>required</td>
<td>Company/Student</td>
</tr>
<tr>
<td><code>house_number</code></td>
<td>string</td>
<td>required</td>
<td>Company/Student</td>
</tr>
<tr>
<td><code>postal_code</code></td>
<td>string</td>
<td>required</td>
<td>Company/Student</td>
</tr>
<tr>
<td><code>short_name</code></td>
<td>string</td>
<td>required</td>
<td>Teacher</td>
</tr>
<tr>
<td><code>gender</code></td>
<td>string</td>
<td>required</td>
<td>Student</td>
</tr>
<tr>
<td><code>birthday</code></td>
<td>date</td>
<td>required</td>
<td>Student</td>
</tr>
</tbody>
</table>
<!-- END_1a8668c7c70c3102cfc031ff397c4814 -->
<!-- START_275f3a21a40a3c943e11c3042e080a07 -->
<h2>Account change Password</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/auth/change/password</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>previous_password</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>new_password</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>password_confirm</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_275f3a21a40a3c943e11c3042e080a07 -->
<h1>Company</h1>
<!-- START_7401be7be8155c6986377a13f3994979 -->
<h2>Supervisors</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/c/{company}/supervisor</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
</tbody>
</table>
<!-- END_7401be7be8155c6986377a13f3994979 -->
<!-- START_3feaedccfb9b487da2991d96f67a1c0a -->
<h2>Supervisor create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/c/{company}/supervisor/create</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_3feaedccfb9b487da2991d96f67a1c0a -->
<!-- START_81ce8348ad6e5add7d556d8ead81ffbd -->
<h2>Supervisor update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/c/{company}/supervisor/{supervisor}/update</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
<tr>
<td><code>supervisor</code></td>
<td>required</td>
<td>The id of the supervisor.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_81ce8348ad6e5add7d556d8ead81ffbd -->
<!-- START_7194fee105731338b6eee6961b60522d -->
<h2>Supervisor delete</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/c/{company}/supervisor/{supervisor}/delete</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
<tr>
<td><code>supervisor</code></td>
<td>required</td>
<td>The id of the supervisor.</td>
</tr>
</tbody>
</table>
<!-- END_7194fee105731338b6eee6961b60522d -->
<!-- START_2a11e7f3f2c6d32018f0696a9bd8477b -->
<h2>Vacancies</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/c/{company}/vacancy</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
</tbody>
</table>
<!-- END_2a11e7f3f2c6d32018f0696a9bd8477b -->
<!-- START_2259c035b025eea4377f398d4f8cc528 -->
<h2>Vacancy create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/c/{company}/vacancy/create</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>about_us</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>requirements</code></td>
<td>array</td>
<td>optional</td>
</tr>
<tr>
<td><code>total</code></td>
<td>integer</td>
<td>optional</td>
</tr>
</tbody>
</table>
<!-- END_2259c035b025eea4377f398d4f8cc528 -->
<!-- START_225547dbd788d2d38c387e6abd7e3b44 -->
<h2>Vacancy edit status</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/c/{company}/vacancy/{vacancy}/edit</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
<tr>
<td><code>vacancy</code></td>
<td>required</td>
<td>The id of the vacancy.</td>
</tr>
</tbody>
</table>
<!-- END_225547dbd788d2d38c387e6abd7e3b44 -->
<!-- START_cd225c9848cc9d84101b369a6f769756 -->
<h2>Vacancy update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/c/{company}/vacancy/{vacancy}/update</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
<tr>
<td><code>vacancy</code></td>
<td>required</td>
<td>The id of the vacancy.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>description</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>about_us</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>requirements</code></td>
<td>array</td>
<td>optional</td>
</tr>
<tr>
<td><code>total</code></td>
<td>integer</td>
<td>optional</td>
</tr>
</tbody>
</table>
<!-- END_cd225c9848cc9d84101b369a6f769756 -->
<!-- START_ecc31f7517441b1fdd98be2d28e14a0a -->
<h2>vacancy delete</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/c/{company}/vacancy/{vacancy}/delete</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>company</code></td>
<td>required</td>
<td>The id of the company.</td>
</tr>
<tr>
<td><code>vacancy</code></td>
<td>required</td>
<td>The id of the vacancy.</td>
</tr>
</tbody>
</table>
<!-- END_ecc31f7517441b1fdd98be2d28e14a0a -->
<h1>Job Application</h1>
<!-- START_249c21e8f8bb8b93787292469a91e774 -->
<h2>job Applications</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/s/job/application</code></p>
<!-- END_249c21e8f8bb8b93787292469a91e774 -->
<!-- START_668efa6ddac00565507a5ea7460441b2 -->
<h2>Job Application apply</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/s/job/application/{vacancy}/apply</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>vacancy</code></td>
<td>required</td>
<td>The id of the vacancy.</td>
</tr>
</tbody>
</table>
<!-- END_668efa6ddac00565507a5ea7460441b2 -->
<!-- START_6bebedf796bd8893c1d18337fbdd56a9 -->
<h2>Job Application show</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/s/job/application/{jobApplication}/show</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>jobApplication</code></td>
<td>required</td>
<td>The id of the job application.</td>
</tr>
</tbody>
</table>
<!-- END_6bebedf796bd8893c1d18337fbdd56a9 -->
<!-- START_bde744845010e916d694399ffd06eeb4 -->
<h2>Job Application cancel</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/s/job/application/{jobApplication}/cancel</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>jobApplication</code></td>
<td>required</td>
<td>The id of the job application.</td>
</tr>
</tbody>
</table>
<!-- END_bde744845010e916d694399ffd06eeb4 -->
<h1>School</h1>
<p>APIs for School</p>
<!-- START_c91fe29eb8917e9b7e23162e514eb7c1 -->
<h2>Schools</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/school</code></p>
<!-- END_c91fe29eb8917e9b7e23162e514eb7c1 -->
<h1>Teacher</h1>
<!-- START_0722e37e780f1be2628fc8f075cdf5a0 -->
<h2>Teacher verify</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/t/{teacher}/verify</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>teacher</code></td>
<td>required</td>
<td>The id of the teacher.</td>
</tr>
</tbody>
</table>
<!-- END_0722e37e780f1be2628fc8f075cdf5a0 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>