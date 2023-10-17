<table>
    <thead>
        <th>User</th>
        <th>Pass</th>
    </thead>
    <tbody>
        <?php foreach ($llista as $value) {
            echo '<tr>';
            echo '<td>' . $value['user'] . '</td>';
            echo '<td>' . $value['pass'] . '</td>';
            echo '</tr>';

        }
      ?>
    </tbody>
</table>