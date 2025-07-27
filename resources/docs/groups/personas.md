# Personas

Endpoints para gestionar personas.

## Listar personas

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/personas" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/personas"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "nombre": "Juan Pérez",
        "ci": "12345678",
        "email": "juan@example.com",
        "fecha_nacimiento": "1990-01-01"
    }
]
```
> Example response (404):

```json
{
    "message": "No hay personas registradas"
}
```
<div id="execution-results-GETapi-personas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-personas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-personas"></code></pre>
</div>
<div id="execution-error-GETapi-personas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-personas"></code></pre>
</div>
<form id="form-GETapi-personas" data-method="GET" data-path="api/personas" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-personas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-personas" onclick="tryItOut('GETapi-personas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-personas" onclick="cancelTryOut('GETapi-personas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-personas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/personas</code></b>
</p>
<p>
<label id="auth-GETapi-personas" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-personas" data-component="header"></label>
</p>
</form>


## Registrar una nueva persona

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/personas" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ci":"quidem","nombre":"nisi","email":"iusto","fecha_nacimiento":"consectetur"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/personas"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ci": "quidem",
    "nombre": "nisi",
    "email": "iusto",
    "fecha_nacimiento": "consectetur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (201):

```json
{
    "id": 2,
    "nombre": "María López",
    "ci": "7894561",
    "email": "maria@example.com",
    "fecha_nacimiento": "1995-06-23"
}
```
<div id="execution-results-POSTapi-personas" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-personas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-personas"></code></pre>
</div>
<div id="execution-error-POSTapi-personas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-personas"></code></pre>
</div>
<form id="form-POSTapi-personas" data-method="POST" data-path="api/personas" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-personas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-personas" onclick="tryItOut('POSTapi-personas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-personas" onclick="cancelTryOut('POSTapi-personas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-personas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/personas</code></b>
</p>
<p>
<label id="auth-POSTapi-personas" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-personas" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>ci</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ci" data-endpoint="POSTapi-personas" data-component="body" required  hidden>
<br>
Cédula de identidad única. Ejemplo: 123456789
</p>
<p>
<b><code>nombre</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nombre" data-endpoint="POSTapi-personas" data-component="body" required  hidden>
<br>
Nombre completo de la persona. Ejemplo: Juan Pérez
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-personas" data-component="body" required  hidden>
<br>
Correo electrónico válido y único. Ejemplo: juan@example.com
</p>
<p>
<b><code>fecha_nacimiento</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="fecha_nacimiento" data-endpoint="POSTapi-personas" data-component="body"  hidden>
<br>
Fecha de nacimiento en formato YYYY-MM-DD. Ejemplo: 1990-05-20
</p>

</form>


## Ver persona por ID

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/personas/1" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/personas/1"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "nombre": "Juan Pérez",
    "ci": "12345678",
    "email": "juan@example.com",
    "fecha_nacimiento": "1990-01-01"
}
```
> Example response (404):

```json
{
    "message": "Persona no encontrada"
}
```
<div id="execution-results-GETapi-personas--persona-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-personas--persona-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-personas--persona-"></code></pre>
</div>
<div id="execution-error-GETapi-personas--persona-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-personas--persona-"></code></pre>
</div>
<form id="form-GETapi-personas--persona-" data-method="GET" data-path="api/personas/{persona}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-personas--persona-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-personas--persona-" onclick="tryItOut('GETapi-personas--persona-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-personas--persona-" onclick="cancelTryOut('GETapi-personas--persona-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-personas--persona-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/personas/{persona}</code></b>
</p>
<p>
<label id="auth-GETapi-personas--persona-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-personas--persona-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>persona</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="persona" data-endpoint="GETapi-personas--persona-" data-component="url" required  hidden>
<br>
ID de la persona.
</p>
</form>


## Actualizar persona

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/personas/1" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"ci":"et","nombre":"libero","email":"repudiandae","fecha_nacimiento":"sunt"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/personas/1"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ci": "et",
    "nombre": "libero",
    "email": "repudiandae",
    "fecha_nacimiento": "sunt"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "nombre": "Carlos Gómez",
    "ci": "6543210",
    "email": "carlos@example.com",
    "fecha_nacimiento": "1985-10-10"
}
```
> Example response (404):

```json
{
    "message": "Persona no encontrada"
}
```
<div id="execution-results-PUTapi-personas--persona-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-personas--persona-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-personas--persona-"></code></pre>
</div>
<div id="execution-error-PUTapi-personas--persona-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-personas--persona-"></code></pre>
</div>
<form id="form-PUTapi-personas--persona-" data-method="PUT" data-path="api/personas/{persona}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-personas--persona-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-personas--persona-" onclick="tryItOut('PUTapi-personas--persona-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-personas--persona-" onclick="cancelTryOut('PUTapi-personas--persona-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-personas--persona-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/personas/{persona}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/personas/{persona}</code></b>
</p>
<p>
<label id="auth-PUTapi-personas--persona-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-personas--persona-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>persona</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="persona" data-endpoint="PUTapi-personas--persona-" data-component="url" required  hidden>
<br>
ID de la persona.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>ci</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ci" data-endpoint="PUTapi-personas--persona-" data-component="body" required  hidden>
<br>
Cédula de identidad única. Ejemplo: 123456789
</p>
<p>
<b><code>nombre</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nombre" data-endpoint="PUTapi-personas--persona-" data-component="body" required  hidden>
<br>
Nombre completo de la persona. Ejemplo: Juan Pérez
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-personas--persona-" data-component="body" required  hidden>
<br>
Correo electrónico válido y único. Ejemplo: juan@example.com
</p>
<p>
<b><code>fecha_nacimiento</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="fecha_nacimiento" data-endpoint="PUTapi-personas--persona-" data-component="body"  hidden>
<br>
Fecha de nacimiento en formato YYYY-MM-DD. Ejemplo: 1990-05-20
</p>

</form>


## Eliminar persona

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/personas/3" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/personas/3"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "message": "Persona eliminada con éxito"
}
```
> Example response (404):

```json
{
    "message": "Persona no encontrada"
}
```
<div id="execution-results-DELETEapi-personas--persona-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-personas--persona-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-personas--persona-"></code></pre>
</div>
<div id="execution-error-DELETEapi-personas--persona-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-personas--persona-"></code></pre>
</div>
<form id="form-DELETEapi-personas--persona-" data-method="DELETE" data-path="api/personas/{persona}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-personas--persona-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-personas--persona-" onclick="tryItOut('DELETEapi-personas--persona-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-personas--persona-" onclick="cancelTryOut('DELETEapi-personas--persona-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-personas--persona-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/personas/{persona}</code></b>
</p>
<p>
<label id="auth-DELETEapi-personas--persona-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-personas--persona-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>persona</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="persona" data-endpoint="DELETEapi-personas--persona-" data-component="url" required  hidden>
<br>
ID de la persona.
</p>
</form>


## Ver persona con sus mascotas

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/personas/4/mascotas" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/personas/4/mascotas"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 4,
    "nombre": "Lucía Méndez",
    "mascotas": [
        {
            "id": 1,
            "nombre": "Kira",
            "especie": "Gato"
        }
    ]
}
```
> Example response (404):

```json
{
    "message": "Persona no encontrada"
}
```
<div id="execution-results-GETapi-personas--id--mascotas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-personas--id--mascotas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-personas--id--mascotas"></code></pre>
</div>
<div id="execution-error-GETapi-personas--id--mascotas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-personas--id--mascotas"></code></pre>
</div>
<form id="form-GETapi-personas--id--mascotas" data-method="GET" data-path="api/personas/{id}/mascotas" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-personas--id--mascotas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-personas--id--mascotas" onclick="tryItOut('GETapi-personas--id--mascotas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-personas--id--mascotas" onclick="cancelTryOut('GETapi-personas--id--mascotas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-personas--id--mascotas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/personas/{id}/mascotas</code></b>
</p>
<p>
<label id="auth-GETapi-personas--id--mascotas" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-personas--id--mascotas" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-personas--id--mascotas" data-component="url" required  hidden>
<br>
ID de la persona.
</p>
</form>



