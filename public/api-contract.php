<style>
 body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #3880c7ff;
        color: #333;
        margin: 40px;
    }
    h1 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 25px;
    }
    table {
        border-collapse: collapse;
        width: 90%;
        margin: auto;
        background: #ffffffff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    th {
        background-color: #6634dbff;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 12px;
    }

    td {
        padding: 10px 14px;
        border-bottom: 2px solid #ddd;
        text-align: center;
    }

    tr:hover {
        background-color: #f2f8fc;
    }

    tr:last-child td {
        border-bottom: none;
    }

    @media (max-width: 600px) {
        table, tr, td, th {
            display: block;
            width: 100%;
        }
        th {
            position: sticky;
            top: 0;
        }
    }
</style>

<h1>API Contract</h1>

<table border="0" cellpadding="6">
    <tr>
        <th>Endpoint</th>
        <th>Method</th>
        <th>Autentikasi</th>
        <th>Params / Body</th>
        <th>Respon</th>
    </tr>

    <!-- HEALTH -->
    <tr>
        <td>/api/v1/health</td>
        <td>GET</td>
        <td>-</td>
        <td>-</td>
        <td>{ status: "ok", time: "..." }</td>
    </tr>

    <!-- CONTRACT -->
    <tr>
        <td>/api/v1/contract</td>
        <td>GET</td>
        <td>-</td>
        <td>-</td>
        <td>Halaman dokumentasi API</td>
    </tr>


    <tr>
        <td>/api/v1/auth/login</td>
        <td>POST</td>
        <td>-</td>
        <td>{ email, password }</td>
        <td>{ token }</td>
    </tr>

    <tr>
        <td>/api/v1/users</td>
        <td>GET</td>
        <td>Bearer</td>
        <td>page, per_page</td>
        <td>Meta{...}, Data{...}</td>
    </tr>

    <tr>
        <td>/api/v1/users/{id}</td>
        <td>GET</td>
        <td>Bearer</td>
        <td>{id}</td>
        <td>{ id, name, email, role, ... }</td>
    </tr>

    <tr>
        <td>/api/v1/users</td>
        <td>POST</td>
        <td>Bearer (admin)</td>
        <td>{ name, email, password, role }</td>
        <td>201 Created</td>
    </tr>

    <tr>
        <td>/api/v1/users/{id}</td>
        <td>PUT</td>
        <td>Bearer (admin)</td>
        <td>{ name?, email?, password?, role? }</td>
        <td>{ updated user }</td>
    </tr>

    <tr>
        <td>/api/v1/users/{id}</td>
        <td>DELETE</td>
        <td>Bearer (admin)</td>
        <td>{ id }</td>
        <td>204 No Content</td>
    </tr>


    <tr>
        <td>/api/v1/upload</td>
        <td>POST</td>
        <td>Bearer</td>
        <td>file (multipart/form-data)</td>
        <td>{ url, filename }</td>
    </tr>

    <tr>
        <td>/api/v1/version</td>
        <td>GET</td>
        <td>-</td>
        <td>-</td>
        <td>{ version: "1.0.0", build: "..." }</td>
    </tr>

</table>
