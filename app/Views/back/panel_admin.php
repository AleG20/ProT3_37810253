<h1>ESTAS EN PANEL DE CONTROL DE ADMIN</h1>


<h1>Panel de Administración</h1>
<h2>Usuarios Logueados</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($usuarios)): ?>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?= esc($usuario['perfil_id']); ?></td>
                    <td><?= esc($usuario['usuario']); ?></td>
                    <td><?= esc($usuario['email']); ?></td>
                    <td><?= esc($usuario['nombre']); ?></td>
                    <td><?= esc($usuario['apellido']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No hay usuarios logueados.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>