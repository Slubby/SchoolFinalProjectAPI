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
<p>Welcome to the generated API reference.</p>
<!-- END_INFO -->
<h1>Admin</h1>
<!-- START_417ec5a8ef7d5a955ea245a155508260 -->
<h2>School create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/a/school/create</code></p>
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
<!-- END_417ec5a8ef7d5a955ea245a155508260 -->
<!-- START_d4cc6a6b93f360c3c413e2d302e43485 -->
<h2>School update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/a/school/{school}/update</code></p>
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
<!-- END_d4cc6a6b93f360c3c413e2d302e43485 -->
<!-- START_af0e8bd557a4af8234ef5e5af9e4f2d2 -->
<h2>School delete</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/a/school/{school}/delete</code></p>
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
<!-- END_af0e8bd557a4af8234ef5e5af9e4f2d2 -->
<!-- START_a9de2f023baf2fa0b71c00f1606c523f -->
<h2>Company verify</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/a/company/{company}/verify</code></p>
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
<!-- END_a9de2f023baf2fa0b71c00f1606c523f -->
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
<!-- START_9ff9195e31ffea85a070101eb43fb674 -->
<h2>Advertisement show</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/advertisement/{vacancy}/show</code></p>
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
<!-- END_9ff9195e31ffea85a070101eb43fb674 -->
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
    "email": "ut",
    "password": "commodi"
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
<td><code>email</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>mobile</code></td>
<td>integer</td>
<td>optional</td>
</tr>
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
<td><code>verification_code</code></td>
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
    "email": "suscipit"
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
<td><code>verification_code</code></td>
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
    "previous_password": "culpa",
    "new_password": "saepe",
    "password_confirm": "architecto"
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
<!-- START_31594210f2eec9cea0d985f073f9b8c2 -->
<h2>Supervisors</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/c/supervisor</code></p>
<!-- END_31594210f2eec9cea0d985f073f9b8c2 -->
<!-- START_12d328eb5f8f1455a1142a554592cddf -->
<h2>Supervisor create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/c/supervisor/create</code></p>
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
<!-- END_12d328eb5f8f1455a1142a554592cddf -->
<!-- START_396a94c4303ccb9594ac386e2db10921 -->
<h2>Supervisor update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/c/supervisor/{supervisor}/update</code></p>
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
<!-- END_396a94c4303ccb9594ac386e2db10921 -->
<!-- START_5ae1800ead386128a079c3a859d7cfaa -->
<h2>Supervisor delete</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/c/supervisor/{supervisor}/delete</code></p>
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
<td><code>supervisor</code></td>
<td>required</td>
<td>The id of the supervisor.</td>
</tr>
</tbody>
</table>
<!-- END_5ae1800ead386128a079c3a859d7cfaa -->
<!-- START_4fc19656e42183051d2248563eaef1dd -->
<h2>Vacancies</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/c/vacancy</code></p>
<!-- END_4fc19656e42183051d2248563eaef1dd -->
<!-- START_e4dd9a1ee20b394761174e12643b9a27 -->
<h2>Vacancy create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/c/vacancy/create</code></p>
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
<!-- END_e4dd9a1ee20b394761174e12643b9a27 -->
<!-- START_2d7e8e23dedee23f37ab1b164061c639 -->
<h2>Vacancy show</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/c/vacancy/{vacancy}/show</code></p>
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
<!-- END_2d7e8e23dedee23f37ab1b164061c639 -->
<!-- START_8ee9f45b7485afeaa3cb3617a310fc02 -->
<h2>Vacancy edit status</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/c/vacancy/{vacancy}/edit</code></p>
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
<!-- END_8ee9f45b7485afeaa3cb3617a310fc02 -->
<!-- START_17d3e760c1e9341b4ee35551c5889c01 -->
<h2>Vacancy update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/c/vacancy/{vacancy}/update</code></p>
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
<!-- END_17d3e760c1e9341b4ee35551c5889c01 -->
<!-- START_f73b85f04f82168217dc83816e6afb31 -->
<h2>Vacancy delete</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/c/vacancy/{vacancy}/delete</code></p>
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
<!-- END_f73b85f04f82168217dc83816e6afb31 -->
<!-- START_b0537d9673aaa0078a6477d624f89486 -->
<h2>Applied change status</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/c/vacancy/{vacancy}/applied/{jobApplication}/status/{type}</code></p>
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
<tr>
<td><code>job</code></td>
<td>optional</td>
<td>application required the id of the job application.</td>
</tr>
<tr>
<td><code>type</code></td>
<td>required</td>
<td>The type of the status.</td>
</tr>
</tbody>
</table>
<!-- END_b0537d9673aaa0078a6477d624f89486 -->
<h1>Job Application</h1>
<!-- START_249c21e8f8bb8b93787292469a91e774 -->
<h2>Job Applications</h2>
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
<!-- START_559eeb36e1af51001727f1a56062848d -->
<h2>School students</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/t/students</code></p>
<!-- END_559eeb36e1af51001727f1a56062848d -->
<!-- START_68d0c3cba4c6fe1df0607510cb740263 -->
<h2>Teacher class students</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/t/mentor/class</code></p>
<!-- END_68d0c3cba4c6fe1df0607510cb740263 -->
<!-- START_3553be81ad449af5b0d1dcc44ae5c75e -->
<h2>Teacher create student</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/t/mentor/class/create</code></p>
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
<td><code>mobile</code></td>
<td>integer</td>
<td>optional</td>
</tr>
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
<tr>
<td><code>gender</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>birthday</code></td>
<td>date</td>
<td>required</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>region</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>street</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>house_number</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>postal_code</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>mentor</code></td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td><code>education</code></td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td><code>started_at</code></td>
<td>date</td>
<td>required</td>
</tr>
<tr>
<td><code>grade</code></td>
<td>integer</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_3553be81ad449af5b0d1dcc44ae5c75e -->
<!-- START_a83773d1a688fa37be0a6144b3712a57 -->
<h2>Import students</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/t/mentor/class/import/students</code></p>
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
<td><code>students</code></td>
<td>file</td>
<td>required</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>default password for students</td>
</tr>
</tbody>
</table>
<!-- END_a83773d1a688fa37be0a6144b3712a57 -->
<!-- START_88c87506ca7cfb26d887ba337531258e -->
<h2>Teacher get student</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/t/mentor/class/{user}/show</code></p>
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
<td><code>user</code></td>
<td>required</td>
<td>The id of the student.</td>
</tr>
</tbody>
</table>
<!-- END_88c87506ca7cfb26d887ba337531258e -->
<!-- START_d0a34420aef8eb68957240402344e2b5 -->
<h2>Teacher update student</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/t/mentor/class/{user}/update</code></p>
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
<td><code>user</code></td>
<td>required</td>
<td>The id of the student.</td>
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
<tr>
<td><code>gender</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>birthday</code></td>
<td>date</td>
<td>required</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>region</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>street</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>house_number</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>postal_code</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>mentor</code></td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td><code>education</code></td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td><code>started_at</code></td>
<td>date</td>
<td>required</td>
</tr>
<tr>
<td><code>grade</code></td>
<td>integer</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_d0a34420aef8eb68957240402344e2b5 -->
<!-- START_d91f6a7f173010989ecbae74f335b0d0 -->
<h2>Teacher completed job application</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/t/mentor/class/{user}/{jobApplication}/completed</code></p>
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
<td><code>user</code></td>
<td>required</td>
<td>The id of the student.</td>
</tr>
<tr>
<td><code>jobApplication</code></td>
<td>required</td>
<td>The id of the job application.</td>
</tr>
</tbody>
</table>
<!-- END_d91f6a7f173010989ecbae74f335b0d0 -->
<!-- START_0722e37e780f1be2628fc8f075cdf5a0 -->
<h2>Teacher verify</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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