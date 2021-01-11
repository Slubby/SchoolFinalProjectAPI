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
<p>APIs for Companies</p>
<!-- START_f8f4c48a1cc0f75cb15d9ff0cb6f84f1 -->
<h2>Advertisements</h2>
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
    "email": "possimus",
    "password": "voluptas"
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
    "email": "esse"
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
    "password": "quia",
    "password_confirm": "iste"
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

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/auth/update</code></p>
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
    "previous_password": "et",
    "new_password": "sequi",
    "password_confirm": "rem"
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
<!-- START_45c3325e560a74462a05162f44a4ea87 -->
<h2>Supervisors</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/company/{company}/supervisor</code></p>
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
<!-- END_45c3325e560a74462a05162f44a4ea87 -->
<!-- START_00cdfb37adc68f61ce20eb2e3ba5d41b -->
<h2>Supervisor create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/company/{company}/supervisor/create</code></p>
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
<!-- END_00cdfb37adc68f61ce20eb2e3ba5d41b -->
<!-- START_f0fd000d41d1fa73e9401671658fe01c -->
<h2>Supervisor update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/company/{company}/supervisor/{supervisor}/update</code></p>
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
<!-- END_f0fd000d41d1fa73e9401671658fe01c -->
<!-- START_7acd45786dfc3b55b7dcdb0ce3ed9971 -->
<h2>Supervisor delete</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/company/{company}/supervisor/{supervisor}/delete</code></p>
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
<!-- END_7acd45786dfc3b55b7dcdb0ce3ed9971 -->
<!-- START_6add4ed3cbcda9c00ad8fa4423767d51 -->
<h2>Vacancies</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/company/{company}/vacancy</code></p>
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
<!-- END_6add4ed3cbcda9c00ad8fa4423767d51 -->
<!-- START_c97fba5080129c56e4e169e71e27937d -->
<h2>Vacancy create</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/company/{company}/vacancy/create</code></p>
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
<!-- END_c97fba5080129c56e4e169e71e27937d -->
<!-- START_4e4e2e23a251ba2dd76825407c784448 -->
<h2>Vacancy edit status</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/company/{company}/vacancy/{vacancy}/edit</code></p>
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
<!-- END_4e4e2e23a251ba2dd76825407c784448 -->
<!-- START_fad902eb7bbc3bb00af90ed8e5b458ab -->
<h2>Vacancy update</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PATCH api/company/{company}/vacancy/{vacancy}/update</code></p>
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
<!-- END_fad902eb7bbc3bb00af90ed8e5b458ab -->
<!-- START_3e08d2f8e96993583f817c2b5dc5a738 -->
<h2>vacancy delete</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/company/{company}/vacancy/{vacancy}/delete</code></p>
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
<!-- END_3e08d2f8e96993583f817c2b5dc5a738 -->
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
<!-- START_b046d6dbd447e86d353dcad92f9d59de -->
<h2>Teacher verify</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/teacher/{teacher}/verify</code></p>
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
<!-- END_b046d6dbd447e86d353dcad92f9d59de -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>