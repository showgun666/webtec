
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<table>
    <tr>
        <th>Id</th>
        <th>Namn</th>
        <th>Datum</th>
        <th>Namnlängd</th>
    </tr>

<?php foreach ($res as $row) : ?>
    
    <tr>
        <td><?= htmlentities($row['rowid'] ?? "")  ?></td>
        <td><?= htmlentities($row['namn'] ?? "")  ?></td>
        <td><?= htmlentities($row['datum'] ?? "") ?></td>
        <td><?= htmlentities($row['namnlangd'] ?? "") ?></td>
    </tr>
<?php endforeach ?>
