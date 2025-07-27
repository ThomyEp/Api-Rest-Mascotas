# Mascotas

Endpoints para gestionar mascotas.

## Listar todas las mascotas

<small class="badge badge-darkred">requires authentication</small>

Devuelve una lista de todas las mascotas registradas.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/mascotas" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/mascotas"
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
   "data": [
     {
         "id": 1,
         "nombre": "Firulais",
         "especie": "Perro",
         ...
     }
   ]
}
```
> Example response (404):

```json
{
    "message": "No hay mascotas registradas"
}
```
<div id="execution-results-GETapi-mascotas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mascotas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mascotas"></code></pre>
</div>
<div id="execution-error-GETapi-mascotas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mascotas"></code></pre>
</div>
<form id="form-GETapi-mascotas" data-method="GET" data-path="api/mascotas" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mascotas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mascotas" onclick="tryItOut('GETapi-mascotas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mascotas" onclick="cancelTryOut('GETapi-mascotas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mascotas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mascotas</code></b>
</p>
<p>
<label id="auth-GETapi-mascotas" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mascotas" data-component="header"></label>
</p>
</form>


## Crear una nueva mascota

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/mascotas" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nombre":"omnis","especie":"officiis","raza":"est","edad":20,"persona_id":11}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/mascotas"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre": "omnis",
    "especie": "officiis",
    "raza": "est",
    "edad": 20,
    "persona_id": 11
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
   "data": {
       "id": 1,
       "nombre": "Max",
       ...
   }
}
```
<div id="execution-results-POSTapi-mascotas" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-mascotas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-mascotas"></code></pre>
</div>
<div id="execution-error-POSTapi-mascotas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-mascotas"></code></pre>
</div>
<form id="form-POSTapi-mascotas" data-method="POST" data-path="api/mascotas" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-mascotas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-mascotas" onclick="tryItOut('POSTapi-mascotas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-mascotas" onclick="cancelTryOut('POSTapi-mascotas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-mascotas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/mascotas</code></b>
</p>
<p>
<label id="auth-POSTapi-mascotas" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-mascotas" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nombre</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nombre" data-endpoint="POSTapi-mascotas" data-component="body" required  hidden>
<br>
Nombre de la mascota. Ejemplo: Firulais
</p>
<p>
<b><code>especie</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="especie" data-endpoint="POSTapi-mascotas" data-component="body" required  hidden>
<br>
Especie de la mascota. Ejemplo: Perro
</p>
<p>
<b><code>raza</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="raza" data-endpoint="POSTapi-mascotas" data-component="body" required  hidden>
<br>
Raza de la mascota. Ejemplo: Labrador
</p>
<p>
<b><code>edad</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="edad" data-endpoint="POSTapi-mascotas" data-component="body" required  hidden>
<br>
Edad en años (entero, mínimo 0). Ejemplo: 5
</p>
<p>
<b><code>persona_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="persona_id" data-endpoint="POSTapi-mascotas" data-component="body" required  hidden>
<br>
ID de la persona dueña, debe existir en la tabla personas. Ejemplo: 1
</p>

</form>


## Mostrar una mascota por ID

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/mascotas/1" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/mascotas/1"
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
   "data": {
       "id": 1,
       "nombre": "Max",
       ...
   }
}
```
> Example response (404):

```json
{
    "message": "Mascota no encontrada"
}
```
<div id="execution-results-GETapi-mascotas--mascota-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mascotas--mascota-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mascotas--mascota-"></code></pre>
</div>
<div id="execution-error-GETapi-mascotas--mascota-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mascotas--mascota-"></code></pre>
</div>
<form id="form-GETapi-mascotas--mascota-" data-method="GET" data-path="api/mascotas/{mascota}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mascotas--mascota-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mascotas--mascota-" onclick="tryItOut('GETapi-mascotas--mascota-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mascotas--mascota-" onclick="cancelTryOut('GETapi-mascotas--mascota-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mascotas--mascota-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mascotas/{mascota}</code></b>
</p>
<p>
<label id="auth-GETapi-mascotas--mascota-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mascotas--mascota-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>mascota</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="mascota" data-endpoint="GETapi-mascotas--mascota-" data-component="url" required  hidden>
<br>
ID de la mascota.
</p>
</form>


## Actualizar una mascota

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/mascotas/1" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nombre":"Max","especie":"Gato","edad":3}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/mascotas/1"
);

let headers = {
    "Authorization": "Bearer Bearer {your_token_here}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nombre": "Max",
    "especie": "Gato",
    "edad": 3
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
   "data": {
       "id": 1,
       "nombre": "Max",
       ...
   }
}
```
<div id="execution-results-PUTapi-mascotas--mascota-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-mascotas--mascota-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-mascotas--mascota-"></code></pre>
</div>
<div id="execution-error-PUTapi-mascotas--mascota-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-mascotas--mascota-"></code></pre>
</div>
<form id="form-PUTapi-mascotas--mascota-" data-method="PUT" data-path="api/mascotas/{mascota}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-mascotas--mascota-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-mascotas--mascota-" onclick="tryItOut('PUTapi-mascotas--mascota-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-mascotas--mascota-" onclick="cancelTryOut('PUTapi-mascotas--mascota-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-mascotas--mascota-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/mascotas/{mascota}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/mascotas/{mascota}</code></b>
</p>
<p>
<label id="auth-PUTapi-mascotas--mascota-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-mascotas--mascota-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>mascota</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="mascota" data-endpoint="PUTapi-mascotas--mascota-" data-component="url" required  hidden>
<br>
ID de la mascota.
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nombre</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nombre" data-endpoint="PUTapi-mascotas--mascota-" data-component="body"  hidden>
<br>
Nombre de la mascota.
</p>
<p>
<b><code>especie</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="especie" data-endpoint="PUTapi-mascotas--mascota-" data-component="body"  hidden>
<br>
Especie de la mascota.
</p>
<p>
<b><code>edad</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="edad" data-endpoint="PUTapi-mascotas--mascota-" data-component="body"  hidden>
<br>
Edad en años.
</p>

</form>


## Eliminar una mascota

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/mascotas/1" \
    -H "Authorization: Bearer Bearer {your_token_here}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/mascotas/1"
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
    "message": "Mascota eliminada con éxito"
}
```
<div id="execution-results-DELETEapi-mascotas--mascota-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-mascotas--mascota-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-mascotas--mascota-"></code></pre>
</div>
<div id="execution-error-DELETEapi-mascotas--mascota-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-mascotas--mascota-"></code></pre>
</div>
<form id="form-DELETEapi-mascotas--mascota-" data-method="DELETE" data-path="api/mascotas/{mascota}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer Bearer {your_token_here}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-mascotas--mascota-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-mascotas--mascota-" onclick="tryItOut('DELETEapi-mascotas--mascota-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-mascotas--mascota-" onclick="cancelTryOut('DELETEapi-mascotas--mascota-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-mascotas--mascota-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/mascotas/{mascota}</code></b>
</p>
<p>
<label id="auth-DELETEapi-mascotas--mascota-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-mascotas--mascota-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>mascota</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="mascota" data-endpoint="DELETEapi-mascotas--mascota-" data-component="url" required  hidden>
<br>
ID de la mascota.
</p>
</form>



